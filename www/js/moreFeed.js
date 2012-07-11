alreadyloading = false;
nextpage = 2;
whichtab=1;

function switchToNewGame() {
	whichtab=2;
}
function switchToWithMe() {
	whichtab=1;
}

$(window).scroll(function() {
    if ($('body').height() <= ($(window).height() + $(window).scrollTop())) {
        if (alreadyloading == false) {
            var url = "page"+nextpage+".php";
		
            alreadyloading = true;
            $.post(url, function(data) {
		    if (whichtab==1) {
			$('#withMe').children().last().after(data);
		    } else {
			$('#newGame').children().last().after(data);
		    }
                alreadyloading = false;
                nextpage++;
            });
        }
    }
}); 

