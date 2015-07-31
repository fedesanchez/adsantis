<!--Icon Boxes 1-->
            <div class="container iflip">
                <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12 pull-left subtitle ibg-transparent wow flipInX" data-wow-delay="0.9s" data-wow-offset="10"><?=($_SESSION['lang']=='en')?'Latest Releases':'Novedades';?></div>                
                    <?php
                        $novedades=get_novedades();
                        foreach ($novedades as $novedad) { 
                        $data_wow_delay=$data_wow_delay+0.3; 
                    ?>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12"> 
                        <div class="flip-box-wrap wow flipInY" data-wow-delay="<?=$data_wow_delay;?>s" data-wow-offset="10">
                            <div class="flip-box auto horizontal_flip_left" data-animation="" data-animation-delay="03">
                                <div class="ifb-flip-box">
                                
                                    <div class="ifb-face ifb-front">
                                        <img alt="" class="img-responsive novedad" src="<?php echo $novedad['img']; ?>"/>
                                        
                                        <h3 class="flip-box-head-txt"><?php echo $novedad['nombre']; ?></h3>
                                        <!--<p><?php echo $novedad['resumen']; ?></p>-->
                                    </div> 
                                    
                                        <div class="ifb-face ifb-back flip-backface">
                                            <h3><?php echo $novedad['nombre']; ?></h3>
                                            <p><?php echo $novedad['resumen']; ?>.</p>
                                            <div class="flip_link"><a href="./producto.php?id=<?php echo $novedad['id_linea']; ?>" class="flip-read-more"><?=($_SESSION['lang']=='en')?'Go':'Ver';?></a></div>
                                        </div><!-- END .back -->
                                        
                                   </div> <!-- ifb-flip-box -->
                              </div> <!-- flip-box -->
                          </div>
                    </div>
                    <?php
                        }
                    ?>                        
                </div>
            </div><!--Icon Boxes 1 end-->
        
    