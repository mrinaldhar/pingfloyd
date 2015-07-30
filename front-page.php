<!doctype html>
<html>
<head>
<title>Ping!</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

<style>
body, html {
	font-family: myriadl;
	margin: 0 auto;
	padding: 0px;
	height: 100%;
	background-color: rgba(0,0,0,1);
	overflow: hidden;
}
#container {
	width: 90%;
	height: 100%;
	border: 0px;
	margin: 0px;
	padding: 0px;
	border-collapse: collapse;
	background-color: rgba(0,0,0,1);
	color: white;
}
#leftcol {
	font-size: 6em;
/*background-color: rgba(0,0,0,0.9);*/
/*color: white;*/
letter-spacing: 10px;
text-align: center;
vertical-align: bottom;
height: 100%;
/*padding: 20px;*/
}
#rightcol {
	/*padding: 40px;*/
	text-align: center;
	/*line-height: 3em;*/
}
#title {
	font-size: 3em;
	letter-spacing: -1px;

}
#subtitle {
	font-size: 1.7em;
	line-height: 1em;
	/*padding-top: 0px;*/
}
#pagetext {
	font-size: 1.1em;
}
a {
	text-decoration: none;
}
#header {
	/*border-bottom: 0px;*/
	background-color: rgba(0,0,0,1);
	border-bottom: 3px solid rgba(255,255,255,0.9);

} 
#kalam-hero {
	max-width: 80%;
	vertical-align: bottom;
}
</style>

</head>

<body>
	<?php get_header(); ?>

<table id="container" width="80%">
	<tr>
		<td id="leftcol" width="60%">
			<img id="kalam-hero" src="<?php echo get_template_directory_uri(); ?>/kalam.png" />
		</td>
		<td id="rightcol" width="40%">
			<span id="title">Dr. APJ Abdul Kalam</span>
			<br />
			<span id="subtitle"><small>1931 - 2015</small></span>
			<br /><br /><br />
			<span id="pagetext">
				We are deeply saddened by the loss of such a great person. <br />We are deeply saddened by the loss of him.<br />We are deeply saddened. 
			</span>
		</td>
	</tr>
</table>
</body>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/smooth.min.js"></script>
<script>
$(document).keypress(function(e) {
	if (e.which == 13) {
		alert('hi');
		// window.location.href="home.php";
	}
})
var flag = 0;
window.setInterval(function() {
	if (flag ==0) {
$('#dis').animate({opacity: 0}, 300);

		flag = 1;
	}
	else {
$('#dis').animate({opacity: 1}, 300);

		flag = 0;
	}
}, 800);

</script>
</html>