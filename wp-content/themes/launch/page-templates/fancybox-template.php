<?php

/**

 * Template Name: Fancybox Template

 * Author Olivia Hoback

 * www.olivia.nu

 */



get_header(); ?>



	<div id="primary" class="site-content">

		<div id="content" role="main">



		<h1>This is some example code from the Fancybox custom template:</h1>

		<p>

		<a class="fancybox-iframe" href="http://www.lets-develop.com/">This link opens an external page using Iframe in a fancybox</a><br />

		<a class="fancybox-pdf" href="http://www.lets-develop.com/source-code/PDF.pdf">This link opens a pdf in the fancybox</a><br />

		<a class="fancybox-swf" href="http://www.lets-develop.com/source-code/movie.swf">This link opens a swf in the fancybox</a><br />

		<a class="fancybox-youtube" href="http://www.youtube.com/watch?v=hIXC5PH1ehw&fs=1">This link opens a Youtube video in the fancybox</a><br />

		<a class="fancybox-vimeo" href="http://vimeo.com/69700933">This link opens a Vimeo video in the fancybox</a><br />

		</p>

		<h1>You can also create some inline content displaying anything you want like this:</h1>

		<p>

		<div style="display:none" class="fancybox-hidden">

			<div id="myDiv" style="width:600px;height:500px;">

				<h1>You can show anything you want in a fancybox</h1>

				<iframe width="560" height="315" src="//www.youtube.com/embed/hIXC5PH1ehw" frameborder="0" allowfullscreen></iframe>

				<p>Some text...</p>

				<button type="button">A button</button>

			</div>

		</div>

		<a href="#myDiv" class="fancybox-inline">Open my inline content in a fancybox</a>

		</p>





		</div><!-- #content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
