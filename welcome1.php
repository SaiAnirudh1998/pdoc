<html>
<head>
<title>Welcome</title>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<script src="js/jquery.min.js"></script>
<style type="text/css">

	#nav > li:hover{
		background-color: red;
	}	

</style>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>

<body style="margin:0px;font-family: 'Open Sans', sans-serif; width:100%;overflow-x:hidden;>
<div id="backgroundImage" style="position:fixed;top:0px;z-index:-1;width:100%">

<img src="doctor.jpg" style="z-index:-10;position:fixed;width:100%;height:1000px;">



</div>
	 <div class="header-top">
		 
		  <div class="container">
			 <div class="top-nav"> 
						<div class="logo">
						<h1 style="margin-left:-70px;"><font color="light blue" face="Comic Sans MS">Online Medicine Recomendation System</font></h1>
						</div>
						<div class="menu">
						<br>
						<ul id="nav">
							 <li><a href="#section-1">Home</a></li>
							 <li><a href="#section-2">About</a></li>
							 <li><a href="#section-3">Our Doctors</a></li>
							 <li><a href="disser.php">Search Disease</a></li>
							 <li><a href="searchpage1.php">Search medicine</a></li>
							 <li><a href="welcome.php">Logout</a></li>
							 <div class="clearfix"></div>
						 </ul>
						 </div>
			 </div>
			  <div class="clearfix"> </div>
		 </div>
	 </div>
	 <script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			
			<div id="section-1" class="section">
			    
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="2.jpg" alt="" >
					
			        </li>
			        <li>
			          <img src="1.jpg" alt="">
			       
			        </li>
			        <li>
			          <img src="3.jpg" alt="">			       
			        </li>
					<li>
			          <img src="4.jpg" alt="">			
			        </li>
			      </ul>
			    </div>	         
			    <div class="clearfix"> </div>
				</div>
		  	<div class="about section" id="section-2">
	  <div class="about-head text-center">
	  <h3><font color="red">ABOUT US</font></h3>
	  <span></span><img src="guide.png" alt=""><span></span>
	  </div>
	   <div class="container">		  
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon1"></span>WHAT??</h4>
			 <p><font color=lime;>This is a website which helps common mass of the society to deal with their health problems just by entering the symptoms of their problem. It suggests you the name of the possible diseases and the name of the medicine which can cure that symptom.</font></p>
		 </div>
		 <div class="col-md-4 about-grids grid2">
			 <h4><span class="icon2"></span>WHY??</h4>
			 <p><font color=lime;>It is sometimes difficult to go to the doctor for the check-up or go to medical shops and ask for medicines. It is sometimes difficult for the patient to explain their symptoms so it is easier for them to just sit at home and search for the required precautions and diseases. Sometimes patients don’t want to share their feelings with the doctors as they are not comfortable doing so. It saves both time and money.</font></p>
		 </div>
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon3"></span>HOW??</h4>
			 <p><font color=lime;>We are using HTML, CSS, SQL, PHP and Javascript to make our website. We will save all the data in our database using SQL and import it in PHP using XAMPP.</font></p>
		 </div>
	 </div>

	<div class="about section" id="section-3">
	  <div class="about-head text-center">
	  <h3><font color="red">OUR DOCTORS</font></h3>
	  <span></span><img src="guide.png" alt=""><span></span>
	  </div>
	   <div class="container">
	   <div id="portfoliolist">
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: ;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="d2.jpg" class="img-responsive" alt=""/></a>
							<div class="tour-caption">
							<span> </span>
							<p>Dr. Anirudh, MD</p>
							</div>

						</div>
					</div>				
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="d4.jpg" class="img-responsive" alt=""/></a>
							 <div class="tour-caption">
							 <span> </span>
							 <p>Dr.Jefrish, MS</p>
						     </div>

						</div>
					</div>		
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="d3.jpg" class="img-responsive" alt=""/></a>
							 <div class="tour-caption">
							 <span> </span>
							 <p>Dr. Vignesh, RMP</p>
							 </div>
						</div>
					</div>				
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="d1.jpg" class="img-responsive" alt=""/></a>
							 <div class="tour-caption">
							 <span> </span>
							<p>Dr. Atharva, MBBS</p>
							</div>
						</div>
					</div>	
</div>
				<div class="clearfix"></div>	
				</div><br><br><br><br>
			


<head>

	<style type="text/css">

    .center{
        text-align:center;
    }

    </style>
</head>
   <body style="margin:0px;font-family: 'Open Sans',sans-serif;width:100%;overflow-x:hidden;">

<div id="backgroundImage" style="position:absolute;top:0px;z-index:-1;width:100%">

<img src="back2.jpg" style="z-index:-10;position:fixed;width:100%;height:1000px;">




</div>
   
    <div class="center">
    <div class="page-loader"></div>
    <div class="l-wrapper">
       
        <header> 
            <div class="clearfix"></div>
        </header>
        <div>
            
            
                

        <div class="l-logo">
          	<h1><b>DEVELOPERS</b></h1><br><br><br><br><br>
            <img src="team.png" style="width:100%;height:750px;"> 
            <p>
           
            </p>                
            </div>
        </div>
        <div class="l-content-wrap" id="standard-content" style="background-position:fixed;margin-top:35px;">
            
            <section>
                	
                   <div class="container"><br><br>
                        <h1 class="text-center">Our Team</h1>
                            	<img src="anirudh.jpg" class="team-member-image" alt="team-member" border="1" style="width:20%" />                                
                                <h5 style="font-size:40px;">SAI ANIRUDH</h5 style="font-size:40px;">
                                <div class="l-description-wrap">

                                    <div class="member-description">

                                        <div class="m-arrow-wrap">
                                            <div class="m-arrow"></div>
                                        </div>

                                        <p style="font-size:25px;">
                                            TEAM MEMBER<br>
                                            16BCE1087<br>
                                            +919087008869
                                        </p>

                      
                                        <div class="clearfix"></div>
                                    </div>
                                </div>  
                                <img src="jefrish.jpg" class="team-member-image" alt="team-member" border="1" style="width:20%" />                                
                                <h5 style="font-size:40px;">JEFRISH</h5 style="font-size:40px;">
                                <div class="l-description-wrap">

                                    <div class="member-description">

                                        <div class="m-arrow-wrap">
                                            <div class="m-arrow"></div>
                                        </div>

                                        <p style="font-size:25px;">
                                            TEAM MEMBER<br>
                                            16BCE1095<br>
                                            +918754518826
                                        </p>

                                        <div class="team-social-icons text-center">

                                            <a href="https://www.facebook.com/anirudh?fref=ts"><i class="fa fa-facebook fa-lg"></i></a>
                      						                      

                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>  
                                <img src="atharva.jpg" class="team-member-image" alt="team-member" border="1" style="width:20%" />                                
                                <h5 style="font-size:40px;">ATHARVA</h5 style="font-size:40px;">
                                <div class="l-description-wrap">

                                    <div class="member-description">

                                        <div class="m-arrow-wrap">
                                            <div class="m-arrow"></div>
                                        </div>

                                        <p style="font-size:25px;">
                                            TEAM MEMBER<br>
                                            16BCE1131<br>
                                            +917092845336
                                        </p>

                                        <div class="team-social-icons text-center">

                                            <a href="https://www.facebook.com/anirudh?fref=ts"><i class="fa fa-facebook fa-lg"></i></a>
                      						                      

                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>  
                        </div>
                    </div>
                </div>
            </section>


</body>
</html>

</body>
