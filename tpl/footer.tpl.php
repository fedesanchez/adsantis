<?php 
    if(!isset($novedades))$novedades=get_novedades();
?>
<section class="complete-footer">
    <footer id="footer">
            
                <div class="container">
                    <div class="row">
                        <!--Foot widget-->
                        <div class="col-xs-12 col-sm-6 col-md-3 foot-widget">
                        <a href="#"><div class="foot-logo col-xs-12 no-pad"></div></a>
                        
                        <address class="foot-address">
                            <div class="col-xs-12 no-pad"><i class="icon-globe address-icons"></i>Anna de Sanctis <br />California 2082, Barracas <br /> Capital Federal</div>
                            <div class="col-xs-12 no-pad"><i class="icon-phone2 address-icons"></i>(011) 4301 8752</div>
                            <div class="col-xs-12 no-pad"><i class="icon-mail address-icons"></i>info@annadesanctis.com.ar</div>
                        </address>
                        </div>
                        
                        <!--Foot widget-->
                        <div class="col-xs-12 col-sm-6 col-md-3 recent-post-foot foot-widget">
                            <div class="foot-widget-title"><?=($_SESSION['lang']=='en')?'Latest releases':'Lanzamientos recientes';?></div>
                            <ul>
                                <?php
                                    foreach ($novedades as $novedad) {
                                ?>
                                <li>
                                    <a href="./producto.php?id=<?php echo $novedad['id_linea']; ?>">
                                    <?php echo $novedad['nombre']; ?><br />
                                    
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        
                         <!--Foot widget-->
                        <div class="col-xs-12 col-sm-6 col-md-3 recent-tweet-foot foot-widget">
                            <div class="foot-widget-title"><?=($_SESSION['lang']=='en')?'Latest':'Ultimos';?> Tweets</div>
                                <a class="twitter-timeline" href="https://twitter.com/olioarg" 
                                data-widget-id="583827786453929984"
                                 width="400"
                                height="200"
                                data-chrome="nofooter noheader noborders transparent noscrollbar">
                                
                            </a>
                            
                            

                            
                        </div>
                        
                        <!--Foot widget-->
                        <div class="col-xs-12 col-sm-6 col-md-3 foot-widget">
                            <div class="foot-widget-title">social media</div>
                            <div class="social-wrap">
                                <ul>
                                <li><a href="#"><i class="icon-facebook foot-social-icon" id="face-foot" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a></li>
                                <li><a href="https://twitter.com/olioarg" target="_blank"><i class="icon-social-twitter foot-social-icon" id="tweet-foot" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a></li>                                
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                 </div>       
                 
            </footer>
            
            <div class="bottom-footer">
            <div class="container">
            
                <div class="row">
                    <!--Foot widget-->
                    <div class="col-xs-12 col-sm-12 col-md-12 foot-widget-bottom">
                    <p class="col-xs-12 col-md-5 no-pad">Copyright 2014 ADS Olio | <?=($_SESSION['lang']=='en')?'Designed by Disaigner':'Diseñado por Disaigner';?></p>
                    <ul class="foot-menu col-xs-12 col-md-7 no-pad">
                    <li><a href="contacto.php"><?=($_SESSION['lang']=='en')?'Contact':'Contacto';?></a></li> 
                    <li><a href="#"><?=($_SESSION['lang']=='en')?'Hair Coloring':'Coloración';?></a></li>    
                    <li><a href="encontranos.php?tipo=puntos"><?=($_SESSION['lang']=='en')?'Dealers':'Distribuidores';?></a></li>
                    <li><a href="encontranos.php?tipo=salones"><?=($_SESSION['lang']=='en')?'Saloons':'Salones';?></a></li>
                    <li><a href="#"><?=($_SESSION['lang']=='en')?'Tips':'Consejos';?></a></li>    
                    <li><a href="./">Home</a></li>                           
                    
                    </ul>
                    </div>
                </div>
            </div> 
            </div>
            
            </div>
    
    </section>
    
  
    
    <!--JS Inclution-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>  
    <script type="text/javascript" src="bootstrap-new/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/jquery.scrollUp.min.js"></script>
    <script type="text/javascript" src="js/jquery.sticky.min.js"></script>
    
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/jquery.flexisel.min.js"></script>
    <script type="text/javascript" src="js/jquery.imedica.min.js"></script>
    <script type="text/javascript" src="js/custom-imedicajs.min.js"></script>
    
    <script type="text/javascript">
        $( document ).ready(function() {
            $(".content-tabs").fadeIn();

            //esto va en el footer asi pisa lo del template
            $("#hidden-search").keydown(function(e){
                var currentQuery = $("#hidden-search").val(); //get the current value of the search input
                if(e.keyCode == 13){ //if the user hits backspace...                
                    document.location.href="http://annadesanctis.com.ar/nuevo/productos.php?q="+currentQuery;                       
                }
            });
        });

    </script>
    <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
    </script>
