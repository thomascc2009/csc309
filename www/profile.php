<?php
	session_start();


	if (isset($_SESSION['uid'])){
		$uid_registered = $_SESSION['uid'];
		echo "loll";
	}else {
		header ("location: login.php");
	}

	if (isset($_GET['uid'])){
		$uid_profile = $_GET['uid'];
	}else {
		$uid_profile = $uid_registered;
	}

	$can_edit = false;

	if ($uid_profile == $uid_registered){
		$can_edit = true;
	}
	
?>
<html>
<body>
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
  
  <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Pick Up Game</a>
          <div class="btn-group pull-right">
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="icon-user"></i> <?php echo $uid_registered; ?>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="profile.php">Profile</a></li>
              <li class="divider"></li>
              <li><a href="logout">Logout</a></li>
            </ul>
          </div>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="login.php">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>           	
			</div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	<p>Hi, I'm <?php echo $uid_profile; ?></p>
	<?php
		if ($can_edit==true) {
			echo "<p>I can <a>edit</a> this shit!</p>";
		}else {
			echo "<p>I can only view this...</p>";
		}
	?>
	
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-dropdown.js"></script>
</body>
</html>	
	
