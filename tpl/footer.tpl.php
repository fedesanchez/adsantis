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
                            <div class="col-xs-12 no-pad"><i class="icon-phone2 address-icons"></i>(011) 4301 8725</div>
                            <div class="col-xs-12 no-pad"><i class="icon-mail address-icons"></i>info@annadesanctis.com.ar</div>
                        </address>
                        </div>
                        
                        <!--Foot widget-->
                        <div class="col-xs-12 col-sm-6 col-md-3 recent-post-foot foot-widget">
                            <div class="foot-widget-title">Lanzamientos recientes</div>
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
                            <div class="foot-widget-title">Ultimos Tweets</div>
                            <ul>
                                <li>Integer iaculis egestas odio. eget: <b>t.co/RTSoououIdg</b><br /><span class="event-date">hace 3 dias</span></li>
                                <li>Integer iaculis egestas odio. eget: <b>t.co/RTSoououIdg</b><br /><span class="event-date">hace 7 dias</span></li>
                            </ul>
                        </div>
                        
                        <!--Foot widget-->
                        <div class="col-xs-12 col-sm-6 col-md-3 foot-widget">
                            <div class="foot-widget-title">newsletter</div>
                            <p>Ipsum dolor sit amet, teft consecte tur.</p>
                            <div class="news-subscribe"><input type="text" class="news-tb" placeholder="Correo Electronico" /><button class="news-button">Suscribirse</button></div>
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
                    <p class="col-xs-12 col-md-5 no-pad">Copyright 2014 ADS Olio | Diseñado por Disaigner</p>
                    <ul class="foot-menu col-xs-12 col-md-7 no-pad">
                    <li><a href="contacto.php">Contacto</a></li> 
                    <li><a href="#">Coloración</a></li>    
                    <li><a href="encontranos.php?tipo=puntos">Puntos de Venta</a></li>
                    <li><a href="encontranos.php?tipo=salones">Salones</a></li>
                    <li><a href="#">Consejos</a></li>    
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
        });
    </script>