<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

</div><!-- / end page container, begun in the header -->

<footer class="site-footer" role="contentinfo">
	<div class="container-footer">		
	
	<p><img src="../footer-logo.png" style="padding-left: 20px;"><br>
		<span id="left-info" style="float:left; padding-left: 20px;">

		&copy; Copyright 2014 Rangoon ChemicalWork Pvt.Ltd.All Rights Reserved.</span>
			<!--on <a href="" rel="generator">Wordpress</a>--> 
			<span id="right" style="float:right; margin-right: 15px;">Crafted By <a href="http://www.togglehead.in/" rel="nofollow">Togglehead</a></span></p>
		
		
	</div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->

<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>

</body>
</html>
