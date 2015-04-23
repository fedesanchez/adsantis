<!DOCTYPE HTML>
<!--[if gt IE 8]> <html class="ie9" lang="en"> <![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml" class="ihome">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    
    <title>OLIO -> By Anna De Sanctis</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:800' rel='stylesheet' type='text/css'>
    <link href="css/jquery-ui-1.10.3.custom.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/orange.css" />
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.min.css" media="screen" />
    <!--[if IE 9]>
    	<link rel="stylesheet" type="text/css" href="css/ie9.css" />
    <![endif]-->    
    <link rel="icon" type="image/png" href="images/fevicon.png">

    <link rel="stylesheet" type="text/css" href="css/slides.css" />
    <link rel="stylesheet" type="text/css" href="css/inline.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    

</head>
    <body>
    		<div id="loader-overlay"><img src="images/loader.gif" alt="Cargando" /></div>
			<!-- separo el header para tenerlo en un solo archivo entonces si se modifica algo cambia en todas las pag -->
            <?php include('tpl/header.tpl.php'); ?>
            
            <div class="complete-content">	
           
            <div class="container full-width-container ihome-banner">
            	<div class="banner col-sm-12 col-xs-12 col-md-12">
                	
                    <ul>
            <!-- THE BOXSLIDE EFFECT EXAMPLES  WITH LINK ON THE MAIN SLIDE EXAMPLE -->
             
					    <?php
					    while ($fila = mysql_fetch_array($slider, MYSQL_ASSOC)) {

					    ?>

					     <li data-transition="papercut" data-slotamount="7">
					       
					            <!-- MAIN IMAGE -->
					            <img src="<?php echo $fila["img_fondo"];?>"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
					            <!-- LAYERS -->

					            <!-- LAYER NR. 1 -->
					            <div class="tp-caption lfb stl imed-sl1"
					                data-x="left"
					                data-y="bottom"
					                data-hoffset="0"
					                data-speed="1000"
					                data-start="1000"
					                data-easing="Power4.easeOut"
					                data-endspeed="400"
					                data-endeasing="Power1.easeIn"
					                ><a href="<?php echo $fila["link"];?>"><img src="<?php echo $fila["img_producto"];?>" alt="" class="img-responsive"></a>
					            </div>
					            
					            <!-- LAYER NR. 5 -->
					            <div class="tp-caption bluebg-t1 sfr skewtoright imed-sl1"
					                data-x="right"
					                data-y="115"
					                data-hoffset="-60"
					                data-speed="1000"
					                data-start="2400"
					                data-easing="Back.easeOut"
					                data-endspeed="400"
					                data-endeasing="Power1.easeIn"
					                >
					                <div class="inner">
					                           <p class="slider_linea"><?php echo $fila["nombre_producto"];?></p>
					                           <p class="slider_sup"><?php echo $fila["desc_sup_prod"];?></p>
					                           <p class="slider_inf"><?php echo $fila["desc_inf_prod"];?></p>
					                            
					                </div>
					                <!--<img src="images/new-slider/arginina.png" alt="" class="img-responsive">-->
					            </div>
					     </li>
					    <?php } ?>
					    </ul>
                    
                </div>
            </div>
             
            
            
            
            
       <?php include('tpl/productos_relacionados.tpl.php'); ?>
    
       <?php include('tpl/triple_accion.tpl.php'); ?>     
    
       <?php include('tpl/testimonios.tpl.php'); ?>     
            
               <!--Footer Start-->
		</div><!--de complete-content -->
       <?php include('tpl/footer.tpl.php'); ?>          
		<script type='text/javascript'>
		$(window).load(function(){
			$('#loader-overlay').fadeOut(900);
			$("html").css("overflow","visible");
		});
	</script>

    </body>
</html>
