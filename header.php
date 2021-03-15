<?php
/**
 * The header for the theme
 *
 */

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Bootstrap 4 Blog Template For Developers</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
<!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/default.css">
	<?php wp_head(); ?>
</head> 

<body>
    
    <header class="header text-center">	    
	    <h1 class="blog-name pt-lg-4 mb-0"><a href="index.html">Eljan Blog</a></h1>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
				    <img class="profile-image mb-3 rounded-circle mx-auto" src="http://localhost/wphooksguy/wp-content/uploads/2021/03/1x1ab.jpg" alt="image" >			
					
					<div class="bio mb-3">Hi, my name is Roel John just call me Eljan. I'm a Web Developer from the Philippines.<br><a href="about.html">Find out more about me</a></div><!--//bio-->
					<ul class="social-list list-inline py-3 mx-auto">
			            <li class="list-inline-item"><a href="https://www.facebook.com/roeljohn.bobis"><i class="fab fa-facebook fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="https://www.linkedin.com/in/roel-bobis-78b51059/"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="https://github.com/roeljohn"><i class="fab fa-github-alt fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="https://stackoverflow.com/users/9741315/roel-john"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
			        </ul><!--//social-list-->
			        <hr> 
				</div><!--//profile-section-->
				<?php
					wp_nav_menu( array(
						'container'            => 'ul',
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class' => 'navbar-nav flex-column text-left',
						'link_before' => '<i class="fas fa-home fa-fw mr-2"></i>'
					) );
				?>
				<div class="my-2 my-md-3">
				    <a class="btn btn-primary" href="http://localhost/wphooksguy/get-in-touch/" target="_blank">Get in Touch</a>
				</div>
			</div>
		</nav>
    </header>
	
