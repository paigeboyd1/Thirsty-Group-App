<!DOCTYPE html>
<?php
  session_start();
    if (!isset($_SESSION['username'])){ //redirects to main page
    header("location: login.html");
    }
?>
<html lang="en-US">
	<head>
    <title>Thirsty?</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Thirsty? Pre-order hot drinks from your favourite coffee shops and skip those queues!">

        
        <!-- Google Fonts  -->
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
		<link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->
        <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'> <!-- Main Title Font -->

		<!-- CSS Plugins -->
		<link rel="stylesheet" href="inc/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="inc/animations/css/animate.min.css"> 
		<link rel="stylesheet" href="inc/font-awesome/css/font-awesome.min.css"> <!-- Font Icons --> 
		<link rel="stylesheet" href="inc/owl-carousel/css/owl.carousel.css">
		<link rel="stylesheet" href="inc/owl-carousel/css/owl.theme.css"> 

		<!-- CSS -->
        <link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/mobile.css">
		<link rel="stylesheet" href="css/skin/cool-gray.css">
        
        <!-- JS for localstorage -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("search-costa").innerHTML="";
    document.getElementById("search-costa").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("search-costa").innerHTML=xmlhttp.responseText;
      document.getElementById("search-costa").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","search-costa.php?q="+str,true);
  xmlhttp.send();
}
</script>
	</head>

    <body data-spy="scroll" data-target="#main-navbar">
    	<div class="body">
        
            <header id="header" class="header-main">

                <!-- Navbar -->
                <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">

                  <div class="container">

                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <img href="index2.php" src="img/logo.png" class="navbar-brand page-scroll">
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index2.php">Home</a></li>
                            <li><a href="StarbucksDrinksmenu.php">Starbucks</a></li>
                            <li><a href="CostaDrinksmenu.php">Costa</a></li>
                            <li><a href="NeroDrinksmenu.php">Caffe Nero</a></li>
                            <li><a href="help.html">Help</a></li>    
                            <li><a href="php/logout.php">Logout</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container -->
                </nav>
                <!-- End Navbar -->

            </header>
            
                
        	<!-- Begin text carousel intro section -->
			<section id="text-carousel-intro-section" class="parallax"  style="background-image: url(img/hero.jpg)">
				
				<div class="container">
					<div class="caption text-center text-white" >

							<div class="item">
								<h1 class="maintitle">Costa Coffee <br />
                                    Menu</h1>
                                <div class="extra-space-l"></div>
								<a class="btn btn-blank" href="#services-section" role="button">Select a Beverage!</a>
							</div>
							
					</div> <!-- /.caption -->
				</div> <!-- /.container -->

			</section>
			<!-- End text carousel intro section -->
            
            <!-- Begin Services -->
            <section id="services-section" class="page text-center">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <br /> <!-- this just adds a bit of breathing space -->
                            <h2>Drinks Menu</h2>
                            <div class="divider"></div>
<p class="subtitle">Select a drink from the menu below or search here:</p><form>
<input type="text" size="30" onkeyup="showResult(this.value)">
<div id="search-costa"></div>                        </div>
                            </form>
                    </div>
                </div>
                <!-- End page header-->
            
                <form method="post" action="CostaCustomisation.php" name="myemailform" id="myform">
                
                <!-- Begin rotate box-2 -->
                <div class="rotate-box-2-wrapper">
                    <div class="container">
                        
                        <h3>Specialty Teas</h3>
                        
                <!-- ROW 1 --><div id="traditional-tea"></div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <img src="img/costamenu/tea.png" alt="Traditional Tea" title="Traditional Tea" style=" height: 150px; ">   
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton1" value="Traditional Tea" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'" > Traditional Tea </button>
                                        
                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/costamenu/tea.png" alt="English Breakfast Decaffeinated Tea" title="English Breakfast Decaffeinated Tea" style=" height: 150px; ">
                                    <div class="rotate-box-info">
                                      <button class="orderbutton" id="mybutton2" value="English Breakfast Decaffeinated Tea" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'"> English Decaffeinated Tea</button> 

                                    </div>
                                </span>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                   <img src="img/costamenu/tea.png" alt="Green Tea" title="Green Tea" style=" height: 150px; ">
                                    <div class="rotate-box-info">
                                    <button class="orderbutton" id="mybutton3" value="Green Tea" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'"> Green Tea</button>  

                                    </div>
                                </span>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                    <img src="img/costamenu/tea.png" alt="Chamomile &amp; Ginger Tea" title="Chamomile &amp; Ginger Tea" style="height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton4" value="Chamomile &amp; Ginger Tea" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'"> Chamomile &amp; Ginger Tea </button>  
                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                        
                    <!-- ROW 2 -->   <div id="mint-tea"></div>   
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <img src="img/costamenu/tea.png" alt="Mint Tea" title="Mint Tea" style=" height: 150px; ">
                                    <div class="rotate-box-info">
                                       <button class="orderbutton" id="mybutton5" value="Mint Tea" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'"> Mint Tea </button>    
                                        
                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/costamenu/tea.png" alt="Earl Grey Tea" title="Earl Grey Brewed Tea" style=" height: 150px; ">
                                    <div class="rotate-box-info">
                                    <button class="orderbutton" id="mybutton8" value="Earl Grey Tea" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'"> Earl Grey Tea</button>  
                                    </div>
                                </span>
                            </div>
                        </div> <!-- closes /.row -->
                        
                        
                        <h3>Coffee</h3>
                        
                        <!-- ROW 1 --> <div id="flat-white"></div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <img src="img/costamenu/flatwhite.png" alt="Flat White" title="Flat White" style=" height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton11" value="Flat White" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'"> Flat White    </button>  
                                        
                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/costamenu/cappuccino.jpg" alt="Cappuccino" title="Cappuccino" style=" height: 150px; ">

                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton12" value="Cappuccino" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'"> Cappuccino</button>                   
                                    </div>
                                </span>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <img src="img/costamenu/latte.jpeg" alt="Cafe Latte" title="Cafe Latte" style=" height: 150px; ">
                                    <div class="rotate-box-info">
                                       <button class="orderbutton" id="mybutton13" value="Cafe Latte" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'"> Cafe Latte </button>  
                                        
                                    </div>
                                </span>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                    <img src="img/costamenu/americano.jpeg" alt="Americano" title="Americano" style=" height: 150px; ">

                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton14" value="Americano" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'"> Americano   </button>  

                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                        
                    <!-- ROW 2 -->     <div id="cortado"></div>  
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <img src="img/costamenu/cortado.jpg" alt="Cortado" title="Cortado" style=" height: 150px; ">
                                    <div class="rotate-box-info">
                                       <button class="orderbutton" id="mybutton15" value="Cortado" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'"> Cortado </button>  

                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/costamenu/espresso.png" alt="Espresso" title="Espresso" style=" height: 150px; ">

                                    <div class="rotate-box-info">
                                    <button class="orderbutton" id="mybutton16" value="Espresso" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'"> Espresso   </button>  

                                    </div>
                                </span>
                            </div>
            
                        </div> <!-- /.row -->
                       
                        
                         <h3>Chocolate Drinks</h3>
                        
                        <!-- ROW 1 --><div id="mocha-cortado"></div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <img src="img/costamenu/cortado.jpg" alt="Mocha Cortado" title="Mocha Cortado" style=" height: 150px; ">

                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton21" value="Mocha Cortado" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'">Mocha Cortado</button>  

                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/costamenu/latte.jpeg" alt="Mocha Latte" title="Mocha Latte" style=" height: 150px; ">

                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton22" value="Mocha Latte" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'">Mocha Latte   </button>    

                                    </div>
                                </span>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <img src="img/costamenu/mocha.png" alt="Mocha" title="Mocha" style=" height: 150px; ">

                                    <div class="rotate-box-info">
                                       <button class="orderbutton" id="mybutton23" value="Mocha" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'">Mocha</button>                    
                                    </div>
                                </span>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                   <img src="img/costamenu/hotchocolate.jpg" alt="Hot Chocolate" title="Hot Chocolate" style=" height: 150px; ">
                                    <div class="rotate-box-info">
                                    <button class="orderbutton" id="mybutton24" value="Hot Chocolate" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'"> Hot Chocolate   </button> 
                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                        
                    
                        
                    <h3>Speciality Beverages</h3>
                        
                         
                        <!-- ROW 1 --> <div id="iced-cappuccino"></div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <img src="img/costamenu/icedcapp.png" alt="Iced Cappuccino" title="Iced Cappuccino" style=" height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton26" value="Iced Cappuccino" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'"> Iced Cappuccino  </button>
                                        
                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/costamenu/icedlatte.png" alt="Iced Latte" title="Iced Latte" style=" height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton27" value="Iced Latte" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'">Iced Latte</button>  

                                    </div>
                                </span>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <img src="img/costamenu/icedcortado.png" alt="Iced Cortado" title="Iced Cortado" style="height: 150px; ">
                                    <div class="rotate-box-info">
                                       <button class="orderbutton" id="mybutton28" value="Iced Cortado" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'"> Iced Cortado</button>  

                                    </div>
                                </span>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                    <img src="img/costamenu/icedamericano.png" alt="Iced Americano" title="Iced Americano" style=" height: 150px; ">

                                    <div class="rotate-box-info">
                                    <button class="orderbutton" id="mybutton29" value="Iced Americano" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'"> Iced Americano</button>  
  

                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                        
                             <!-- ROW 2 --> <div id="iced-caramel-latte"></div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <img src="img/costamenu/icedcaramellatte.png" alt="Iced Caramel Latte" title="Iced Caramel Latte" style=" height: 150px; ">
                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton30" value="Iced Caramel Latte" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'"> Iced Caramel Latte</button>

                                    </div>
                                </span>
                            </div>
                            
            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/costamenu/icedchocolate.png" alt="Iced Chocolate" title="Iced Chocolate" style=" height: 150px; ">

                                    <div class="rotate-box-info">
                                        <button class="orderbutton" id="mybutton30" value="Iced Chocolate" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'"> Iced Chocolate</button>
                                    </div>
                                </span>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <span class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <img src="img/costamenu/icedristretto.png" alt="Iced Ristretto" title="Iced Ristretto" style="height: 150px; ">

                                    <div class="rotate-box-info">
                                       <button class="orderbutton" id="mybutton30" value="Iced Ristretto" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'"> Iced Ristretto</button> 
                                    </div>
                                </span>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                    <img src="img/costamenu/icedmacchiato.png" alt="Iced Macchiato" title="Iced Macchiato" style=" height: 150px; ">
                                    <div class="rotate-box-info">
                                    <button class="orderbutton" id="mybutton30" value="Iced Macchiato" name="drink" type="Submit" onclick="location.href='CostaCustomisation.php'"> Iced Macchiato</button> 

                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                        
                    
                    </div> <!-- /.container -->
                                          
                </div>
                <!-- End rotate-box-2 -->
                        
            </section>
            <!-- End Services -->
                
        </form>  
          
                

                
            <!-- Begin footer -->
            <footer class="text-off-white">
            
                
                
                <div class="footer">
                    <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
                        <p class="copyright">Copyright &copy; 2016 - Thirsty App</p>
                    </div>
                </div>

            </footer>
            <!-- End footer -->

            <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a> <!-- Scroll to top button -->
                                              
        </div><!-- body ends -->
        
        
      
 <!-- keep these at the bottom - plugins used for all animations/scrolling/interactions -->        
        <!-- Plugins JS -->
		<script src="inc/jquery/jquery-1.11.1.min.js"></script>
		<script src="inc/bootstrap/js/bootstrap.min.js"></script>
		<script src="inc/owl-carousel/js/owl.carousel.min.js"></script>
		<script src="inc/stellar/js/jquery.stellar.min.js"></script>
		<script src="inc/jquery.easing.min.js"></script>
		<script src="inc/jquery.counterup.min.js"></script>
		<script src="inc/smoothscroll.js"></script>
        <script src="inc/animations/js/wow.min.js"></script>
        <script src="inc/waypoints.min.js"></script> <!-- triggers function when scroll to it -->

		<!-- Theme JS -->
		<script src="js/theme.js"></script>

    </body> 
        
            
</html>