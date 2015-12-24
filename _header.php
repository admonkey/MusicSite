<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Music</title>
	<link rel="icon" href="favicon.ico">

    <!-- HTML5 audio example -->
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <!-- <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> -->
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.21.custom.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<script src="js/bootstrap.min.js"></script>
	<style>
		body {
		  padding-top: 65px;
		}
	</style>
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button id='n' type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="text-shadow: gray 0.1em 0.1em 0.2em" href="/">Music</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

<!-- DROPDOWN FILTER NAV -->
<!--
<li id="filter" class="dropdown">
  <a aria-expanded="true" href="#" class="dropdown-toggle" data-toggle="dropdown">Filter</a>
    <ul class="dropdown-menu">
      <form action="/vids.php" role="form" id="formFilter">
						<li><label class='checkbox-inline'>
				  <input class='checkbox-filter' onclick='favview(); $("#unrestricted").prop("checked", false);' type='checkbox' name='restricted' id='restricted' checked='true' >GrownUp</input></label></li>
				<li><label class='checkbox-inline'>
				  <input class='checkbox-filter' onclick='favview(); $("#restricted").prop("checked", false);' type='checkbox' name='unrestricted' id='unrestricted'   >Family</input></label></li>
			        <li><label class='checkbox-inline'>
		  <input class='checkbox-filter' onclick='favview(); $("#old").prop("checked", false);' type='checkbox' name='new' id='new' checked='true'  >New</input></label></li>
		<li><label class='checkbox-inline'>
		  <input class='checkbox-filter' onclick='favview(); $("#new").prop("checked", false);' type='checkbox' name='old' id='old'   >Old</input></label></li>
		<li><label class='checkbox-inline'>
		  <input class='checkbox-filter' onclick='favview(); $("#unbanned").prop("checked", false);' type='checkbox' name='banned' id='banned'   >Banned</input></label></li>
		<li><label class='checkbox-inline'>
		  <input class='checkbox-filter' onclick='favview(); $("#banned").prop("checked", false);' type='checkbox' name='unbanned' id='unbanned' checked='true'  >UnBanned</input></label></li>
		<li><label class='checkbox-inline'>
		  <input class='checkbox-filter' onclick='favview(); $("#notfavorite").prop("checked", false);' type='checkbox' name='favorite' id='favorite'   >Favorite</input></label></li>
		<li><label class='checkbox-inline'>
		  <input class='checkbox-filter' onclick='favview(); $("#favorite").prop("checked", false);' type='checkbox' name='notfavorite' id='notfavorite'   >NotFavorite</input></label></li>
	<li><a class="btn btn-default" onclick='favview(); $(".checkbox-filter:checkbox").removeAttr("checked");'>UnCheck All</a></li>
        <li><button class="btn btn-primary">Filter</button></li>
		<li>
		 		  <a id='favview' href='favview.php?restricted=on&new=on&unbanned=on' class='btn btn-success'>Make Homepage</a>
		 		</li>

    </ul>
</li>
-->
<!-- END DROPDOWN FILTER NAV -->

<!-- DROPDOWN SORT NAV -->
<!--
<script>
function sortClick(chbx){
  $(".checkbox-sort:checkbox").removeAttr("checked");
  $(chbx).prop("checked", true);
  $("#formFilter").submit();
}
</script>
<li id="filter" class="dropdown">
  <a aria-expanded="true" href="#" class="dropdown-toggle" data-toggle="dropdown">Sort</a>
  <ul class="dropdown-menu">
	<li><label class='checkbox-inline'>
		  <input class='checkbox-sort' onclick='sortClick(this);' type='checkbox' name='sortyear' id='sortyear'   >Release Date</input></label></li>
	<li><label class='checkbox-inline'>
		  <input class='checkbox-sort' onclick='sortClick(this);' type='checkbox' name='sortruntime' id='sortruntime'   >Run Time</input></label></li>
	<li><label class='checkbox-inline'>
		  <input class='checkbox-sort' onclick='sortClick(this);' type='checkbox' name='sortarrival' id='sortarrival'   >Downloaded</input></label></li>
	<li><label class='checkbox-inline'>
		  <input class='checkbox-sort' onclick='sortClick(this);' type='checkbox' name='sortnone' id='sortnone'   >None</input></label></li>
  </ul>
</li>
      </form>
-->
<!-- END DROPDOWN SORT NAV -->

		    <li id="waffles"><a target="_blank" href="https://waffles.fm">Waffles</a></li>
            <!-- <li id="news"><a href="news.php">News</a></li> -->
            <li id="share"><a href="/share/">Share</a></li>
            <!-- <li id="watch"><a href="watch.php">Watch</a></li> -->
            <li id="deluge"><a href="http://music.77dogwood.us:8112" target="_blank">Deluge</a></li>
	    <li id="phpMyAdmin"><a href="/phpmyadmin/" target="_blank">phpMyAdmin</a></li>
	    <li id="id"><a href="id.php">ID3</a></li>
                   </ul>
		
		<!-- USERNAME LOGOUT
	   <div class="pull-right">
		<ul class="nav navbar-nav">
	      <li id="logout"><a href="/?logout">Logout  JEFF</a></li>
		</ul>
	   </div> -->
	   
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    </header>