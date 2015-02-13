<!DOCTYPE HTML>
<!--[if gt IE 8]> <html class="ie9" lang="en"> <![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    

    <title>OLIO -> By Anna De Sanctis</title>


    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
    <link href="css/jquery-ui-1.10.3.custom.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/orange.css" id="style-switch" />

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <!--[if IE 9]>
      <link rel="stylesheet" type="text/css" href="css/ie9.css" />
    <![endif]-->    

    <link rel="icon" type="image/png" href="images/fevicon.png">


    <link rel="stylesheet" type="text/css" href="css/inline.min.css" /></head>

<body>

    <?php include('tpl/header.tpl.php');?>
    
    <section class="complete-content content-footer-space">
    
    <!--Mid Content Start-->
    
    
     <div class="about-intro-wrap pull-left">
     
          <div class="bread-crumb-wrap ibc-wrap-2">
    	<div class="container">
    <!--Title / Beadcrumb-->
         	<div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
            	<div class="bread-heading"><h1>Productos</h1></div>
                <div class="bread-crumb pull-right">
                <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Productos</a></li>
                </ul>
                </div>
            </div>
         </div>
     </div>
     
         <div class="container">
         	
           <div class="row"> 
            
            <!--About-us top-content-->

  
     
            
            
            
             <div class="col-xs-12 col-sm-12 col-md-12 pull-left doctors-3col-tabs gallery-3col-tabs">
         
         		
                <div class="content-tabs col-xs-12 col-sm-12">
              
                      
                      <!-- Tab panes -->
                      <div class="tab-content">
                      
                        <div class="tab-pane fade fade-slow in active" id="all-doc">                                                                      
                      
                         <?php
                          while ($linea = mysql_fetch_array($lineas, MYSQL_ASSOC)) {

                          ?>
                         <!--Doc intro-->
                        <div class="doctor-box col-md-4 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-delay="0.5s" data-wow-offset="200">
                        
                          <a href="./producto.php?id=<?php echo $linea['id_linea']; ?>">
                          <div class="zoom-wrap">
                            <div class="zoom-icon"></div>
                            <img alt="" class="img-responsive producto" src="<?php echo $linea['img']; ?>"/>
                          </div>
                        <div class="doc-name">
                            <div class="doc-name-class"><?php echo $linea['nombre']; ?></div>                      
                            <hr />
                            <p><?php echo $linea['resumen']; ?></p>
                          </div>
                          </a>
                         </div>
                        <?php } ?>
                        </div>
                      </div>
           
               </div> <!--Mid Services End-->
         
         </div>
         </div>
         </div>

    <!--Mid Content End-->

  </div>
    
    
          <!--Footer Start-->
    
    </section>
    
    <?php include('tpl/footer.tpl.php');?>

</body>
</html>