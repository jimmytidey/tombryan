<?php session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Thomas J Bryan</title>


	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"> </script>
	<script type="text/javascript" src="script/jquery-ui-1.8.17.custom.min.js"></script>
	
	
	<script>
		$(function() {
			$( "#right_column" ).tabs();
		});
	</script>


	
	<link rel="stylesheet" href="css/jquery-ui-1.8.17.custom.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" title="no title" charset="utf-8">
</head>


<body> 

<div id='container'>

	<img id='title' alt='Tom Bryan - Production, Location Recording and Composition' src='resources/title.png' />
	
	<img id='header_image' src='resources/tom.jpg'  />
	
	<div id='right_column'>

			<ul>
				<li><a href="#tabs-1">About</a></li>
				<li><a href="#tabs-2">Commercial &amp; Sync</a></li>
				<li><a href="#tabs-3">Location</a></li>
				<li><a href="#tabs-4">Production</a></li>
				<li><a href="#tabs-5">Composition</a></li>
				<li><a href="#tabs-6">Contact</a></li>				
			</ul>
		<div id="tabs-1">
			
			<h3>I'm a Bristol-based recording engineer, composer and session musician.</h3>
			
			<p>Available for location recording, studio engineering and production, session bass playing and commissioned compositions. I'm associated with the following organisations:
				<ul>
					<li>Technical Director at <a href='http://www.chantrysound.co.uk/'>Chantry Sound</a>, specialising in choral recording</li>
					<li>Freelance engineer at <a href='http://smokehousestudios.co.uk/'>Smokehouse Studios</a></li>
					<li>Freelance engineer at <a href='http://www.factorystudios.co.uk/'>Factory Studios</a> in Bristol</li>					
					<li>Installation engineer at the <a href='http://en.wikipedia.org/wiki/Ronnie_Lane%27s_Mobile_Studio'>Ronnie Lane Mobile Studio</a></li>
					<li>Composer for <a href='http://chimaerafirecrew.co.uk/'>Chimaera Fire Crew</a>, Bristol fire performers</li>					
				</ul>
			
				<center>
	
		</div>
		
		<div id="tabs-2">
			<h2>Commercial Recording Engineering</h2>
			<p>I've recorded numerous performances for commercial and sync at <a href='http://smokehousestudios.co.uk/'>Smokehouse Studios<a>.</p>
			<p>Smokehouse is a major London studio, clients included The Kooks, Level 42 and Jack Bruce. I've also worked on film soundtracks at Smokehouse, such as <em>Son of Rambow</em>.</p> 	
				
		
			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F32801&show_artwork=false"></iframe>
		
			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F32810&amp;auto_play=false&amp;show_artwork=false"></iframe>
		</div>
		
		<div id="tabs-3">
			<h2>Location Recording</h2>
			<p>I'm technical manager at <a href='http://www.chantrysound.co.uk/'>Chantry Sound</a>. Chantry Sound make on-site classical and organ recordings. I also record bands and soloists in their homes or in locations chosen for their acoustics.</p>
			<p>I have my own recording equipment which allows me to make excellent recordings in challenging locations:</p>
			<ul>
				<li>Macbook Pro/ Logic Pro/ Motu 896 MK3 / 8pre</p>
				<li>Mics from AKG, Shure, Nakamichi, SE</p>
				<li>Genelec and Sennheiser monitoring</p>
			</ul>
		
			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F19146464&show_artwork=false"></iframe>	
		</div>
		
		<div id="tabs-4">
			<h2>Engineering &amp; Production</h2>
			<p>I've worked as a producer and engineer in a number of studios. I'm currently working with <a href='http://www.factorystudios.co.uk/'>Factory Studios</a>, one of the largest recording locations in Bristol developing their recording facilities.</p> 
			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F21940008&show_artwork=false"></iframe>
		</div>
		
		<div id="tabs-5">
			<h2>Commissioned compositions</h2>
			<p>I compose and record pieces to brief in my home studio. My previous work has focussed on theatre and dance, and I regularly work with <a href='http://chimaerafirecrew.co.uk/'>Chimaera Fire Crew</a>.</p>
		
			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F15580800&show_artwork=false"></iframe>		
			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F21515006&show_artwork=false"></iframe>
		</div>
		
		<div id="tabs-6">
			<h2>Contact Me</h2>
			Email: tb1983 at googlemail dot com 
			
		<br/><br/>
			<? include('contact-form.php'); ?>
			
		</div>	
	</div>
	
	
</div>


 
<!-- 
 <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21102110-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->
</body> 
</html> 