<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> Rangoon Chemicals | Blog 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // We are loading our theme directory style.css by queuing scripts in our functions.php file, 
	// so if you want to load other stylesheets,
	// I would load them with an @import call in your style.css
?>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); 
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website. 
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions. 
// Move it if you like, but I would keep it around.
?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57525553-2', 'auto');
  ga('require', 'linkid', 'linkid.js');
  ga('send', 'pageview');

</script>
</head>

<body 
	<?php body_class(); 
	// This will display a class specific to whatever is being loaded by Wordpress
	// i.e. on a home page, it will return [class="home"]
	// on a single post, it will return [class="single postid-{ID}"]
	// and the list goes on. Look it up if you want more.
	?>
>


 <div id="header">
	<div id="menu_container">
	
	<nav role="navigation" class="site-navigation main-navigation" id="toggle">
	
        <div id="logo"><a href="http://www.rangoonchemicals.com/index.php"><img src="http://www.rangoonchemicals.com/blog/wp-content/uploads/2015/07/flying-tiger-cub-balm-logo.png" alt="Rangoon Chemicals - Manufacturer of Ayurvedic Medicines, Tonics & Drugs, Balm, Flying Balm, Flying Tiger Cub Balm & Oil Balm"></a></div>
        <div id="facebook-header"><a href="https://www.facebook.com/rangoonchemicals" target="_blank"><img src="../images/facebook-header.png" alt="facebook-header" class="pop"></a></div>
			
			<div class="container_12">
            <ul id="menu">		
              <li>
                <a href="http://www.rangoonchemicals.com/index.php" <?php if($activeMenu=="home") echo "class='active'"?>>HOME</a>			
              </li>
              <li>
                <a href="http://www.rangoonchemicals.com/about-us.php" <?php if($activeMenu=="about-us") echo "class='active'"?>>ABOUT US</a>		
              </li>
              <li>
                <a href="http://www.rangoonchemicals.com/products.php" <?php if($activeMenu=="products") echo "class='active'"?>>PRODUCTS</a>			
              </li>
              <li>
                <a href="http://www.rangoonchemicals.com/distributors.php" <?php if($activeMenu=="distributors") echo "class='active'"?>>DISTRIBUTORS</a>
              </li>
              <li>
                <a href="http://www.rangoonchemicals.com/where-to-buy.php" <?php if($activeMenu=="where-to-buy") echo "class='active'"?>>WHERE TO BUY</a>
              </li>
              <li>
                <a href="http://www.rangoonchemicals.com/blog/" class="active">BODY CARE</a>
              </li>
              <li>
                <a href="http://www.rangoonchemicals.com/press.php" <?php if($activeMenu=="press") echo "class='active'"?>>PRESS</a>
              </li>
              <li style="margin-right:0px;">
                <a href="http://www.rangoonchemicals.com/contact-us.php" <?php if($activeMenu=="contact-us") echo "class='active'"?>>CONTACT US</a>
              </li>
            </ul>
			</div></nav>
	</div>
    </div>


	<div class="center">

		<div id="brand">
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); // Link to the home page ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>" rel="home"><?php bloginfo( 'name' ); // Display the blog name ?></a>
			</h1>
			<h4 class="site-description">
				<?php bloginfo( 'description' ); // Display the blog description, found in General Settings ?>
			</h4>
		</div>
		
		<div class="clear"></div>
	</div>
	


</header>

<form method="get" id="blog-search" action="<?php bloginfo('home'); ?>/">
	     
		  <input type="text" class="header-search-field" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
		  <input type="submit" class="button" value=""/>
	      
	   </form>

<div class="main-fluid"><!-- start the page containter -->
