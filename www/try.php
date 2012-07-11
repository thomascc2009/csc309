<!DOCTYPE html>
<html>
<head>
<title>Scroll Forever</title>
<style>
.bump{
display:block;
border: 1px solid black;
padding: 10px;
}
.loading{
display:block;
border: 1px solid black;
padding: 10px;
background-color: green;
marquee-style: slide;
}
</style>
<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript">

index = 0; //The current position of the index
perPage = 40 - 1; //The count per page, we minus one because arrays start at zero.
contentSelector = "#content"; //The CSS selector for the content block
postSelector = ".bump"; //The CSS selector for each post
loadingSelector = ".loading"; //The CSS selector for the loading block
handle = "handle.php"; //The php file to get the JSON data from

function loadData(i,p,clear){
$(loadingSelector).show(); //Show the loading screen
a = typeof(clear) != 'undefined' ? clear : false; //Set to clear the page as false as the default.
$.getJSON(handle, //jQuery function to get JSON data.
{
"index": i, //The index
"max": p, //The maximum posts per load
},
function(data){ //Take the JSON data
var html = "";
var postId = 0;
while(postId < data.length){
html += "<div class='bump'>" + data[postId] + "</div>"; //Do something with it
postId++;
}
if(clear == true){
html += "<div class='loading'>Loading...</div>";
$(contentSelector).html(html);
index = index + perPage; //Advance the index to match the new data.
} else {
$(loadingSelector).before(html);
index = index + perPage; //Advance the index to match the new data.
}
$(loadingSelector).hide();
});

}

$(window).ready(function(){
loadData(index,perPage); //Initially load the data

var w = $(window); //Saving the context to a shorthand variable.
w.scroll(function(){ //When we scroll
if(w.scrollTop() + w.height() == $(document).height()){ //Check if the position is the bottom of the page
loadData(index,perPage); // If so, then we will load more data.
}
});
});

</script>
</head>
<body>The idea of this demo is to be able to continuously scroll through data.

For the demo, the javascript will grab new JSON data from a php file that just gives a larger and larger number.

<div id="content">
<div>Loading...</div>
</div>
</body>
</html>
