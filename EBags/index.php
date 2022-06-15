<?php
include('inc/header.php');
?>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>E-Bag Design</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="script.js"></script>

</head>

<body>

		<header class="logo container">

				<img src="LOGO.png" alt="logo image" class="responsive">

		</header>

		<section class="container">

				<hr>

				<h2>Hi there!</h2>

				<article>
					<p>Let's talk about environment. More precisely, about it's pollution.</p>
    				<p>Every year around 5 trillion plastic bags are consumed. That's 160.000 pcs per second. Less than 1 percent are being recycled.<br>
    				The effects of plastic bags on the environment are really quite devastating. There is no way to strictly
    				limit the effects of plastic bags on the environment because there is no disposal method that will really
    				help eliminate the problem. In an effort to reduce unnecessary waste, some countries have placed bans on plastic bags. They have begun to charge retailers or customers who choose to use plastic bags in an
    				effort to curb their popularity.</p>
    			</article>

    

    	<section class="col container">

    				<h3>What can be done to help?</h3>
    				<h2>Reduce, reuse, recycle</h2>
   	 				<p>Please come closer and make your own unique e-Bag. You can choose between multiple colors and effects that will make you e-Bag one of a kind.<br>
    				Also you can add your favourite quote and make it more interesting.</p>	<br>

			<form>

            		<p>

                    	<label for="fontColor">Chose font color:</label>
                    	<input id="fontColor" type="color">
                     
            		</p>
            		<p>
                    	<label for="shape">Circles or squares?</label>
                    	<select id="shape">
                        	<option value="none">Neither</option>
	                        <option value="square">Squares</option>
	                        <option value="circle">Circles</option>
                    	</select>

            		</p>
            		<p>

                        <label for="shapeColor">Color of the shapes:</label>
                    	<input  id="shapeColor" type="color">
            		</p>
            		<p>
                		<label for="text">Your text:</label>
                 		<input type="text" id="text" size="33" maxlength="60">

            		</p>

        			<p>
            			<input type="button" id="previewButton" value="Preview">
        			</p>
    		</form>

   			<p><small>
   			<br>
   			<br>
						*** once when ecological conscience of people in Serbia is on
            			higher level, this would be a good Start-up idea and here
            			would be an <a href="register.php">ORDER</a>. Until then, you can bring your e-Bag
            			to every online shop as ever much as you want.</small></p>


		</section><!--
	--><section class="preview container">
			
				<img src="bag2.png" alt="preview bag">
				<canvas id="prev" width="345px" height="200px"></canvas>
			
		</section>

		</section>

		<footer class="container">
			<hr>
			<address>
			    ** this page was made in a learning process<br>
				made by: Teodora & Ilija.
			</address>
		
		</footer>

</body>

</html>
