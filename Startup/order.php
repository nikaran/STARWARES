<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FARMLAND</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="css/template-style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="js/validation.js"></script> 
  </head>  
  
  <body class="size-1140">    
      <!-- Top Navigation -->
      <nav class="background-white background-primary-hightlight">
          <div class="item">
            <img src="img/logo.png"  alt="">      
                  <div class="carousel-text">
                     <div class="line">
                     </div>
                  </div>
               </div>
        <div class="line">
          <div class="top-nav s-12 l-10">
            <p class="nav-text"></p>
            <ul class="right chevron">
              <li><a href="index.html">Home</a></li>
              
              <li><a href="about.html">About</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="login.html">Log-in</a></li>
              <li><a href="signup.html">Sign-up</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main role="main">
    
    
	  
	  
       
	  <style>
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
	  
	     <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-primary text-center">
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Order Summary</h1><br>         
        </header>
		<center>
		    <?php if (isset($_POST['form_submitted'])): ?> 
				<p>Onion: <?php echo $_POST["qo"]; ?><br></p>
				<p>Tomato: <?php echo $_POST["qT"]; ?><br></p>
				<p>Garlic:<?php echo $_POST["qG"]; ?><br></p>
				<p>Potato:<?php echo $_POST["qP"]; ?><br></p>
				<p>Brinjal: <?php echo $_POST["qB"]; ?><br></p>
				<p>Beetroot: <?php echo $_POST["qBe"]; ?><br></p>
				<p>Beans: <?php echo $_POST["qBn"]; ?><br></p>
				<p>Ladiesfinger <?php echo $_POST["qL"]; ?><br></p>
				<p>Carrot <?php echo $_POST["qC"]; ?><br></p>
				<p>Chilli <?php echo $_POST["qCh"]; ?><br></p>
				<p>Snowpeas <?php echo $_POST["qSn"]; ?><br></p>
				<p>Mushroom <?php echo $_POST["qM"]; ?><br></p>
				</center>
				
				
				<?php if (isset($_POST['form_submitted'])): ?> 

	
		<?php
			/* Attempt MySQL server connection. Assuming you are running MySQL
			server with default setting (user 'root' with no password) */
			$link = mysqli_connect("localhost", "root", "", "test");
			 if($link === false){
				die("ERROR: Could not connect. " . mysqli_connect_error());
				}
 
				// Escape user inputs for security
				$Onion = mysqli_real_escape_string($link, $_REQUEST['qo']);
				$Tomato = mysqli_real_escape_string($link, $_REQUEST['qT']);
				$Garlic = mysqli_real_escape_string($link, $_REQUEST['qG']);
				$Potato = mysqli_real_escape_string($link, $_REQUEST['qP']);
				$Brinjal = mysqli_real_escape_string($link, $_REQUEST['qB']);
				$Beetroot = mysqli_real_escape_string($link, $_REQUEST['qBe']);
				$Beans = mysqli_real_escape_string($link, $_REQUEST['qBn']);
				$Ladiesfinger = mysqli_real_escape_string($link, $_REQUEST['qL']);
				$Carrot = mysqli_real_escape_string($link, $_REQUEST['qC']);
				$Chilli = mysqli_real_escape_string($link, $_REQUEST['qCh']);
				$Snowpeas = mysqli_real_escape_string($link, $_REQUEST['qSn']);
				$Mushroom = mysqli_real_escape_string($link, $_REQUEST['qM']);
				
				$total= $Onion*20 +$Tomato*20 + $Garlic*20 + $Potato*20+$Brinjal*20+$Beetroot*20+$Beans*20+$Ladiesfinger*20+$Carrot*20+$Chilli*20+$Snowpeas*20+$Mushroom*20;
				
				echo "<p align='center'>Total=$total</p>";
				
				// Attempt insert query execution
				$sql = "INSERT INTO sub(qo, qT,qG,qP,qB,qBe, qBn,qL,qC,qCh,qSn,qM,total) VALUES ('$Onion', '$Tomato','$Garlic','$Potato','$Brinjal', '$Beetroot','$Beans','$Ladiesfinger','$Carrot','$Chilli', '$Snowpeas','$Mushroom','$total'
				)";
				if(mysqli_query($link, $sql)){
					echo "<p align='center'>Registration Successfully.</p>";
				} else{
					echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
				}
				 
				// Close connection
				mysqli_close($link);
?>
		
<?php endif; ?> 	

				


		
<?php endif; ?> 
<br><center><a href="orderestimation.html"><button class="submit-form button background-primary border-radius text-white" " type="submit">Submit Button</button></a></center>	<br>
	  </article>
    </main>
	
     <!-- Main Footer -->
      <section class="section background-dark">
	   <div class="line">
            <div class="margin text-center">
              <div class="s-12 m-12 l-4 margin-bottom">
                <div class="padding-2x block-bordered border-radius">
                  <h2 class="text-thin">Our Mission</h2>
                  <p class="margin-bottom-30">To maximum utilization of the available and  emerging technologies to lever the evolution of modern agriculture.</p>
               
                </div>
              </div>  
              <div class="s-12 m-12 l-4 margin-bottom">
                <div class="padding-2x block-bordered border-radius">
                  <h2 class="text-thin">Our Vision</h2>
                  <h2 class="text-thin"></h2>
                  <p class="margin-bottom-30">To maximum utilization of the available and  emerging technologies to lever the evolution of modern agriculture.</p>
				  
                  
                </div>
              </div> 
              <div class="s-12 m-12 l-4">
                <div class="padding-2x block-bordered border-radius">
                  <form action="form.php" method="post" method="post" class="customform text-white">
                <div class="line">
                  <div class="margin text-center">
					
                    <div class="s-12">
					<label for="email">E-mail:</label>	
                      <input name="email" class="required email border-radius" placeholder="Your e-mail" title="Your e-mail" type="text" />
                    </div>
					<div class="s-12">
						<label for="email">Message:</label>	
                      <textarea name="msg" rows="3"class="required email border-radius" placeholder="Your Message" title="Your Message" type="text" ></textarea>
                    </div>
                  </div>
                </div>	
				 <input type="hidden" name="form_submitted" value="0" />
				 
                <div class="s-12"><button class="submit-form button background-primary border-radius text-white" " type="submit">Submit Button</button></div> <br>
              </form>
            </div>
          </div>
        </div>
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      <!-- Bottom Footer -->

	<!-- FOOTER -->  
         <div class="line">
            <div class="s-12 l-6">
               <p>Copyright Reserved
               </p>
         </div>
		 <div class="s-12 l-6">
               <p>Code by Starwares
               </p>
         </div>
      </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>   
   </body>
</html>