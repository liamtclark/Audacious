<!DOCTYPE html>
<?php
date_default_timezone_set('UTC');

function displaydate()
{
return date( 'l jS F' );
}
?>
<html lang="en">
        <head>
                <title>Audacious Productions | Home</title>
                <link rel="stylesheet" type="text/css" href="global.css"/>
                <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700|Mouse+Memoirs' rel='stylesheet' type='text/css'>
                <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
        </head>
        <body>
            <div id="wrapper">
                <header>
                    <h1>Audacious Productions</h1>
                    <h2>@ Comberton Village College</h2>
                   <nav>
						<a href="#" class="current">Home</a>
						<a href="#">About</a>
						<a href="#">Latest</a>
						<a href="#">Shows</a>
                        <a href="#">Gallery</a>
                        <a href="#">Tickets</a>
                        <a href="#">Contact</a>
                    </nav>
					<br/>
					
						<div id="left">
						NOTICE: This website is under construction...
						</div>
						<div id="right-1">
						<center><?php echo displaydate(); ?></center>
						<div id="right-2">
						<input type="image" src="icons/close.png"style="width:12px;" />
						</div>
						</div>
						
					<br/><br/>
				</header>
				<section>
					<h2>Welcome</h2>
						<p>Welcome to the Audacious Productions website. Audacious Productions is a theatre group that runs at <a href="//www.combertonvc.org/">Comberton Village College</a></p>
						
            </div>
        </body>
</html>
