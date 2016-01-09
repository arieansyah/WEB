<?php
if(isset($_COOKIE['username']) && $_COOKIE['status'] == 'logged_in'){
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/log.png" type="image/x-icon">
    <title>Admin</title>
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" />
      <!-- VEGAS STYLE CSS -->
    <link href="../css/jquery.vegas.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="../css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<!-- NAVBAR -->
<nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="admin.php?page=dashboard">PAGE ADMIN</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
            	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Tours Packages<span class="caret"></span></a>
            		<ul class="dropdown-menu">
            			<li><a href="admin.php?page=input">INPUT</a></li>
		                <li><a href="admin.php?page=lihat_list">LIHAT</a></li>
            		</ul>
            </li>
            <li>
            	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Gallery<span class="caret"></span></a>
            		<ul class="dropdown-menu">
            			<li><a href="admin.php?page=input_gal">INPUT</a></li>
		                <li><a href="admin.php?page=list_gal">LIHAT</a></li>
            		</ul>
            </li>
    
            
            <li><a href="login_action.php?action=logout">Logout</a></li>
          </ul>
        </div>
      </div>
</nav>
<!-- NAVBAR END -->



<div class="container">

          <!--toggle sidebar button-->
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
          </p>

          <?php
            if(isset($_GET['page']) &&
               ($_GET['page'] == 'input' || $_GET['page'] == 'pack_edit'))
                include "input_pack.php";
            else if (isset($_GET['page']) && ($_GET['page'] == 'input_gal' || $_GET['page'] == 'edit_gal'))
                include "input_gal.php";
            else if (isset($_GET['page']) && ($_GET['page'] == 'list_gal'))
                include "lihat_gal.php";
            else if (isset($_GET['page']) && $_GET['page'] == 'lihat_list')
                include "lihat_pack.php";
            else if (isset($_GET['page']) && $_GET['page'] == 'kontak')
                include "kontak.php";
            else if (isset($_GET['page']) && $_GET['page'] == 'dashboard')
                include "dashboard.php";
            else
            	include "dashboard.php";

            ?>

</div><!-- container -->


<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
        <!-- CORE JQUERY  -->
        <script src="../plugins/jquery.js"></script>
        <!-- BOOTSTRAP CORE SCRIPT   -->
        <script src="../plugins/bootstrap.js"></script>  
        <!-- VEGAS SLIDESHOW SCRIPTS -->
        <script src="../plugins/vegas/jquery.vegas.min.js"></script>
         <!-- SCROLL SCRIPTS -->
        <script src="../plugins/jquery.easing.min.js"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="../plugins/scripts.js"></script>
        <script src="../js/custom.js"></script>
</body>
</html>

<?php } else {
    header('location:login.php');
}
