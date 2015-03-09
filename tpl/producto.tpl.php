<!DOCTYPE HTML>
<!--[if gt IE 8]> <html class="ie9" lang="en"> <![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

   <title>OLIO -> By Anna De Sanctis</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic' rel='stylesheet' type='text/css'>

    <link href="css/jquery-ui-1.10.3.custom.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="images/fevicon.png">
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/orange.css" id="style-switch" />

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

    <!--[if IE 9]>
      <link rel="stylesheet" type="text/css" href="css/ie9.css" />
    <![endif]-->    
    <link rel="stylesheet" type="text/css" href="css/inline.min.css" /></head>

<body>

    <?php include('tpl/header.tpl.php'); ?>

    <section class="complete-content">

    <!--Mid Content Start-->
    
    
     <div class="about-intro-wrap pull-left">
     
             <div class="bread-crumb-wrap ibc-wrap-1">
                <div class="container">
            <!--Title / Beadcrumb-->
                    <div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
                        <div class="bread-heading"><h1><?php echo $linea['nombre']; ?></h1></div>
                        <div class="bread-crumb pull-right">
                        <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="productos.php?categoria=<?php echo $linea['id_categoria']; ?>"><?php echo $linea['categoria']; ?></a></li>
                        <li><a href="#"><?php echo $linea['nombre']; ?></a></li>
                        </ul>
                        </div>
                    </div>
                 </div>
             </div> 

     
         <div class="container">
            
            <div class="row">
            
            <!--About-us top-content-->
            <div class="intro-content-wrap col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left no-pad wow fadeInUp animated" data-wow-delay="0.5s" data-wow-offset="200">

              <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 no-pad">

                   <img class="img-responsive pull-left" alt="" src="<?php echo $linea['img']; ?>"/>

              </div>


                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 no-pad">
                <p><?php echo $linea['descripcion'];?></p>
                
                <ul>
                 <?php for($i;$i<count($atributos);$i++){ ?>
                 <li><i class="fa fa-angle-right about-list-arrows"></i><?php echo $atributos[$i]; ?></li>
                 <?php if($i>3)echo"</ul><ul>"; ?> 
                <?php } ?>
                </ul>
                
                <!--<section class="color-10 opposite">
                <nav class="cl-effect-10">
                <a href="#" data-hover="View All Features"><span>View All Features</span></a>
                </nav>
                </section>-->
                </div>

            </div>
            
          </div>
         
         </div>
     </div>
     
<?php include('tpl/productos_relacionados.tpl.php'); ?>
    
<?php include('tpl/footer.tpl.php');?>

</body>
</html>