<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php bloginfo('name'); ?></title>

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu.css">

                <!--inicio fonts-->
                <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/font_light.css">
                    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/font_semibold.css">
                        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/font_bold.css">
                            <!--final fonts-->
                            </head>

                            <script type="text/jscript">
                                function Link(val){
                                if(val == 1){
                                window.open('http://www.facebook.com','_blank');
                                }
                                if(val == 2){
                                window.open('http://www.skype.com','_blank');
                                }
                                if(val == 3){
                                window.open('http://www.twitter.com','_blank');
                                }
                                }
                            </script>

                            <body>

                                <!--inicio geral-->
                                <div class="geral">

                                    <!--inicio topo-->
                                    <div class="topo">

                                        <!--inicio logo-->
                                        <div class="logo"></div>
                                        <!--final logo-->

                                        <!--inicio menu-->
                                        <div class="menu_geral">
                                            <?php
                                            wp_nav_menu(array('menu' => 'Footer', 'container_class' => 'navegacao'));
                                            ?>
                                        </div>
                                        <!--final menu-->

                                        <!--inicio social-->
                                        <div class="social">
                                            <div id="facebook" onclick="Link(1);"></div>
                                            <div id="skype" onclick="Link(2);"></div>
                                            <div id="twitter" onclick="Link(3);"></div>
                                        </div>
                                        <!--final social-->

                                    </div>
                                    <!--final topo-->


                                    <!--inicio titulo-->
                                    <div class="sub_topo">
                                        <div class="titulo"><?php the_title('<h1>', '</h1>'); ?></div>
                                        <div class="seta1"></div>
                                    </div>
                                    <!--final titulo-->

                                    <!-- inicio bemvido-slider-->


                                    <!--inicio link leia mais-->

                                    <!--fim link leia mais-->


                                    <div class="slider">

                                        <div class="conteudo_post">
                                            <div id="page">
                                                <?php
                                                the_post();
                                                the_content();
                                                wp_reset_query();
                                                ?>
                                            </div>
                                        </div>

                                        <div class="link">
                                            <div class="link_geral">
                                                <br/>
                                                <a href="#">Leia +</a>

                                            </div>
                                        </div> 

                                        <!--inicio slide show-->
                                        <div class="slide_show"><?php echo do_shortcode("[metaslider id=7]") ?></div>
                                        <!--final slide show-->
                                    </div>
                                    <!--final bemvindoslider-->

                                    <!--inicio galerias-->
                                    <div class="galerias">
                                        <div class="galeria">
                                            <div id="title">

                                                <ul>
                                                    <li><a href="">COMO COMPRAR?</a></li>
                                                    <li><a href="">GALERIA DE FOTOS</a></li>
                                                </ul>
                                                <div id="galeria">
                                                    <div id="gale">
                                                    </div>
                                                </div>
                                                <div id="comprar">
                                                    <div id="comp"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="info"></div>
                                    </div>
                                    <!--final galerias-->

                                </div>
                                <!--final geral-->

                                <?php wp_footer(); ?>

                            </body>
                            </html>