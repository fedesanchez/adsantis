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
    <link rel="stylesheet" type="text/css" href="css/inline.min.css" />
    <link rel="stylesheet" type="text/css" href="css/clean-blog.min.css" />
    </head>

<body>

    <?php include('tpl/header.tpl.php'); ?>
    
    <section class="complete-content content-footer-space">
    
    <!--Mid Content Start-->
    
    
     <div class="about-intro-wrap pull-left">
     
     <div class="bread-crumb-wrap ibc-wrap-4">
        <div class="container">
    <!--Title / Beadcrumb-->
            <div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
                <div class="bread-heading"><h1>Consejos</h1></div>
                <div class="bread-crumb pull-right">
                <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Consejos</a></li>
                </ul>
                </div>
            </div>
         </div>
     </div>
     
     <!--map-->
        
     
             <!-- Main Content -->

    <div class="container">
        
   	<?php foreach ($consejos as $consejo) { ?>

    	<div class="col-sm-12" id="featured">   
          <h3><?=$consejo['titulo'];?></h3>
           
        </div>
                        
        <!--/top story-->
        <div class="row">    
          <div class="col-sm-10">
            <div class="page-header text-muted">
          		<?=$consejo['html'];?>
          	</div>

          </div>
          <div class="col-sm-2">
            </div> 
        </div>
        <?php } ?>

        
    </div>
    
    </section>
    <?php include('tpl/footer.tpl.php');?>
    
    
</body>
</html>