<?php 
    include('includes/funciones.inc.php');
    $menu=get_items_menu();
?>
<header>
            
            <div class="header-bg">
            
            <div id="search-overlay">
            <div class="container">
        						<div id="close">X</div>
        	
        						<input id="hidden-search" type="text" placeholder="Start Typing..." autofocus autocomplete="off"  /> <!--hidden input the user types into-->
        						<input id="display-search" type="text" placeholder="Start Typing..." autofocus autocomplete="off" /> <!--mirrored input that shows the actual input value-->
        					</div></div>
               
                	
                    <!--Topbar-->
                    <div class="topbar-info no-pad">                    
                        <div class="container">                     
                            <div class="social-wrap-head col-md-2 no-pad">
                                <ul>
                                <li><a href="#"><i class="icon-facebook head-social-icon" id="face-head" data-original-title="" title=""></i></a></li>
                                <li><a href="#"><i class="icon-social-twitter head-social-icon" id="tweet-head" data-original-title="" title=""></i></a></li>
                                <li><a href="#"><i class="icon-google-plus head-social-icon" id="gplus-head" data-original-title="" title=""></i></a></li>
                                </ul>
                            </div>                            
                            <div class="top-info-contact pull-right col-md-6">Ventas +123 455 755  |    contact@olio.com  <div id="search" class="fa fa-search search-head"></div>
                            </div>                      
                        </div>
                    </div><!--Topbar-info-close-->
                    
                    
                    
                    
                    
                    <div id="headerstic">
                    
                    <div class=" top-bar container">
                    	<div class="row">
                            <nav class="navbar navbar-default" role="navigation">
                              <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                          
                          <button type="button" class="navbar-toggle icon-list-ul" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                          </button>

                          <a href="./"><div class="logo"></div></a>
                        </div>
                            
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                  
                                  
                                  <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="./"><i class="icon-home"></i>Home</a></li>

                            
                            <li class="dropdown"><a href="#">Profesional<b class="icon-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                    <?php foreach ($menu['profesional'] as $key => $value) { ?>
                                    <li>
                                        <a href="productos.php?categoria=<?php echo $value['id']; ?>"><?php echo $value['nombre'] ?></a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </li>
                            
                            <li class="dropdown"><a href="#">Gran Consumo<b class="icon-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                    <?php foreach ($menu['gran_consumo'] as $key => $value) { ?>
                                    <li>
                                        <a href="productos.php?categoria=<?php echo $value['id']; ?>"><?php echo $value['nombre'] ?></a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </li>
                            
                            <li class="dropdown"><a href="#" >Consejos<b class="icon-angle-down"></b></a>
                            </li>

                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file"></i>Encontranos<b class="icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                    <li><a href="encontranos.php?tipo=puntos">Puntos de venta</a></li>
                                    <li><a href="encontranos.php?tipo=salones">Salones</a></li>
                                  </ul>
                            </li>

                            <li class="dropdown"><a href="#">Coloracion<b class="icon-angle-down"></b></a>
                            </li>
                            
                            <li class="dropdown"><a href="contact-2.html">Contacto<b class="icon-angle-down"></b></a>
                            
                            </li>
                            

                          </ul>
                                </div><!-- /.navbar-collapse -->
                                
                                
                                
                              </div><!-- /.container-fluid -->
                            </nav>
                    	</div>    
                    </div><!--Topbar End-->
                	</div>
                    
                    
                    
                    
                    
                    
                    
              </div>
            </header>