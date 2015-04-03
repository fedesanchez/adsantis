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

    <?php include('tpl/header.tpl.php'); ?>
    
    <section class="complete-content content-footer-space">
    
    <!--Mid Content Start-->
    
    
     <div class="about-intro-wrap pull-left">
     
     <div class="bread-crumb-wrap ibc-wrap-4">
    	<div class="container">
    <!--Title / Beadcrumb-->
         	<div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
            	<div class="bread-heading"><h1><?php echo $tit;?></h1></div>
                <div class="bread-crumb pull-right">
                <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="encontranos.php?tipo=<?php echo $_GET['tipo'];?>"><?php echo $tit;?></a></li>
                </ul>
                </div>
            </div>
         </div>
     </div>
     
     <!--map-->
            	<div class="pull-left map-full no-pad contact-v1-map">
                	<div id="map-canvas"></div>
                	<div class="map-shadow"></div>
                </div>
    
    </section>
    <?php include('tpl/footer.tpl.php');?>
    <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>
    <script type="text/javascript">

    var POSICION_EXACTA=false;
    var ba=[-34.6033, -58.3816];

    if(!!navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            POSICION_EXACTA=true;
            mapa(position.coords.latitude,position.coords.longitude);
        });
    }

    if(!POSICION_EXACTA){
        // si no esta habilitado busco en ipinfo
        $.get("http://ipinfo.io", function(response) {
        var loc=response.loc.split(",");
        if(response.country!=="AR"){
            //si no es argentina centro en baires
            loc=ba;
        }
        mapa(loc[0],loc[1]);
        }, "jsonp");        
    }

    function mapa(latitude,longitude){

        var puntos=<?php echo(json_encode($arrPuntos));?>;
        var icon={
                image: "images/map-marker.png",
                iconsize: [100,53],
                iconanchor: [50,53]
            };  
        var markers=[];
        for (var i = puntos.length - 1; i >= 0; i--) {
            var tmp={
                latitude:Number(puntos[i].longitud),
                longitude:Number(puntos[i].latitud),
                icon:icon,
                popup:false,
                html:"<b>"+puntos[i].nombre+"</b><p>"+puntos[i].direccion+"</p><p>"+puntos[i].telefono+"</p><p>"+puntos[i].email+"</p>"
            };
            markers.push(tmp);
            
        };
          
        $("#map-canvas").gMap({
            
            styles:[{stylers:[
        {
            featureType: 'water', // set the water color
            elementType: 'geometry.fill', // apply the color only to the fill
            stylers: [
                { color: '#adc9b8' }
            ]
        },{
            featureType: 'landscape.natural', // set the natural landscape
            elementType: 'all',
            stylers: [
                { hue: '#809f80' },
                { lightness: -35 }
            ]
        }
        ,{
            featureType: 'poi', // set the point of interest
            elementType: 'geometry',
            stylers: [
                { hue: '#f9e0b7' },
                { lightness: 30 }
            ]
        },{
            featureType: 'road', // set the road
            elementType: 'geometry',
            stylers: [
                { hue: '#d5c18c' },
                { lightness: 14 }
            ]
        },{
            featureType: 'road.local', // set the local road
            elementType: 'all',
            stylers: [
                { hue: '#ffd7a6' },
                { saturation: 100 },
                { lightness: -12 }
            ]
        }
    ]}],
            controls: true,
            scrollwheel: true,
            maptype: 'ROADMAP',
            markers: markers,
            latitude: latitude,
            longitude: longitude,
            zoom: 13,
            mapTypeId: 'Styled'
            
            
        });

            

}        
</script>

    
</body>
</html>