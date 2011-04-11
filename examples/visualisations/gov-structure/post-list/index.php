<?php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link type="text/css" href="../css/interface.css" rel="stylesheet">
<link type="text/css" href="../css/post-list.css" rel="stylesheet">
<title>Organogram Data | Post Listing</title>

<!-- Scripts -->
<script language="javascript" type="text/javascript" src="../scripts/jquery-1.4.4.min.js"></script>
<!--script language="javascript" type="text/javascript" src="js/jquery-ui-1.8.8.custom.min.js"></script-->	
<script language="javascript" type="text/javascript" src="../scripts/jquery-ui-1.8.7.min.js"></script>		
<script language="javascript" type="text/javascript" src="../scripts/post-list.js"></script>
<script language="javascript" type="text/javascript" src="../scripts/jquery.quicksand.js"></script>		
<script language="javascript" type="text/javascript" src="../scripts/jquery.cookie.js"></script>

<!--[if IE]>
<script language="javascript" type="text/javascript" src="../scripts/jquery.corner.js"></script>		
<![endif]-->

</head>

<!--[if IE 7]> 
	<body class="IE7" onload="PostList.init('<?php print $_GET['dept'];?>','<?php print $_GET['pubbod'];?>','<?php print $_GET['unit'];?>','<?php print $_GET['type'];?>,'<?php print $_GET['grade'];?>'),'<?php print $_GET['preview'];?>');"> 
<![endif]--> 
<!--[if IE 8]> 
	<body class="IE8" onload="PostList.init('<?php print $_GET['dept'];?>','<?php print $_GET['pubbod'];?>','<?php print $_GET['unit'];?>','<?php print $_GET['type'];?>,'<?php print $_GET['grade'];?>'),'<?php print $_GET['preview'];?>');"> 
<![endif]--> 
<![if !IE]> 
<body onload="PostList.init('<?php print $_GET['dept'];?>','<?php print $_GET['pubbod'];?>','<?php print $_GET['unit'];?>','<?php print $_GET['type'];?>','<?php print $_GET['grade'];?>','<?php print $_GET['preview'];?>');">
<![endif]> 

<h1 class="title breadcrumbs">
	<button id="gov" rel="government">HM Government</button><button id="dept">Department</button><button id="unit">Unit</button>

	<select id="loadBy">
	<!--
		<optgroup label="Post type">
			<option value="Permanent Secretary">Permanent Secretary</option>
			<option value="Director General">Director General</option>
			<option value="Director">Director</option>
			<option value="Deputy Director">Deputy Director</option>
		</optgroup>
	-->
		<optgroup label="Grade">
			<option value="SCS1">SCS1</option>
			<option value="SCS1A">SCS1A</option>
			<option value="SCS2">SCS2</option>
			<option value="SCS3">SCS3</option>
			<option value="SCS4">SCS4</option>		
		</optgroup>
	</select>
	<label for="loadBy" class="loadBy">Load</label>
	
	<select id="sortBy">
		<option disabled value="--">--</option>
		<option value="name">Name</option>
		<option value="title">Title</option>
		<option value="unit">Unit</option>
		<option value="type">Type</option>
		<option value="grade">Grade</option>
	</select>
	<label for="sortBy" class="sortBy">Sort by</label>

	<span id="previewModeSign">
		Preview Mode
	</span>	
</h1>

<div id="infovis">
<div class="postHolder">
<!-- -->
</div>
</div>

<div id="log">
	<span>Loading posts</span>
	<img src="../images/loading.gif" />
</div>

<div id="right">

		<a class="aboutToggle" href="#">About</a>
		
		<div class="about-tip tip">
			
			<p>This is a list of posts of a specific type within a department. Clicking on a post will load it's organogram. </p>
			<p>Please note: this application is still in development.</p>
			
			<p><i>Powered by <a href="http://code.google.com/p/puelia-php/" target="_blank">Puelia v0.1</a>, an implementation of the <a href="http://code.google.com/p/linked-data-api" target="_blank">Linked Data API</a></i></p>
		</div> <!-- end tip -->
				
	<div id="apiCalls">
		<p class="label">Data sources</p>
		<!-- information about API calls goes here -->
	</div>

</div> <!-- end right -->

<div id="nodeTip" class="tooltip"></div>

<div class="noPosts">
<!-- -->
</div>

<noscript>
<div class="noscript">
<p>It looks like you have JavaScript disabled.</p>
<p>Please turn JavaScript <strong>ON</strong> and reload the page in order to use this application.</p>
</div>
</noscript>

</body>

</html>
