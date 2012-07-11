 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Pick Up Game, from Group-FUC3K</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="js/jQuery.js"></script>
    <script type="text/javascript" src="js/moreFeed.js"></script>

    <style>
      body {
        padding-top: 60px;
        padding-bottom: 40px;

      }
      .sidebar-bor {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Pick Up Game</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="login.php">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
            	<div class="nav-collapse pull-right">
					<ul class="nav">
					<li class="active"><a href="logout">Logout</a></li>
					</ul>
				</div>
			</div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

<div class="container-fluid">

      <div class="row-fluid">
        <div class="span3">
          <div class="well close sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header"></i>Favorite</li>
              <li><a href="#"> <i class = "icon-envelope"></i> Message</a></li>
              <li><a href="#"> <i class = "icon-flag"></i> Event</a></li>
              <hr>
	      <li class="nav-header">Manage</li>
              <li><a href="#"><i class = "icon-picture"></i>Profile</a></li>
              <li><a href="#"><i class = "icon-heart"></i>Friend</a></li>
              <hr>
	      <li class="nav-header"></i>Game            </li>
	      <li><a href="#">New</a></li>
              <li><a href="#">Check</a></lzi>
              <li><a href="#">Done</a></li>
              <hr>
	      <li class="nav-header">To be continue...</li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->

	<div class="span9 columns">
		<h2>Welcome: User   Updates</h2> <!--leo write code here-->
		<ul id="myTab" class="nav nav-tabs" data-tabs="tabs">
			<li class="active">
			<a href="#newGame" data-toggle = "tab" onClick="switchToNewGame();">New Games</a>
			</li>
			<li>
			<a href="#withMe" data-toggle = "tab" onClick="switchToWithMe();">With Me</a>
			</li>

		</ul>
		<div id="myTabContent" class="tab-content">
			<div class="tab-pane active" id="newGame">
			<p>dfsdfs sd.fm lsdkfl dfj gkldgkjsdlk jlsdkfj lksd flsdjfl ksdj fl  sdlf jsdlfj lsdk sldfj lskd ldkf lksd 
			</p>
			</div>
			<div class="tab-pane" id="withMe">
				<p>"Is this workiaskjlskdjflkdsjlfkjdslkfjlskdjflkjsdlkjlakjdl kjlsak djlakj lkajsdl kjalsd jlaksdjo iqeuw foiusdfo roi adhsf kjhsfkjsh dkfj hkjfh kajsh fjodsiu owfoqiw oihsdfoi hodsif loakjeowi adksfj lakdhsf ladh lfjhalskdj laksdj lkasjd ifh oaidsoasjf d foaishoaifhs ng?"</p>
			</div>
		</div>
		<script>
			$(function()){
				$('#myTab a:last').tab('show');
			})
		</script>
	</div>

        
        

	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
       
        
        


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>

