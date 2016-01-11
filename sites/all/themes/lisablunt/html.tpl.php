<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head profile="<?php print $grddl_profile; ?>">
	<?php print $head; ?>
	<title><?php print $head_title; ?></title>
	<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,500,500italic,700,700italic,400italic|Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<?php print $styles; ?>
	<?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
	<?php print $page_top; ?>
	<?php print $page; ?>
	<?php print $page_bottom; ?>
	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
	    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	    e.src='//www.google-analytics.com/analytics.js';
	    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
	</script>
</body>
</html>
