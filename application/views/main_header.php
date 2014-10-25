<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $page_title; ?></title>
    <meta charset="utf-8">
    <link rel="icon" href="<?php echo base_url(); ?>/assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/student_dashboard.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap-select.css" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>/assets/css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/home.css" type="text/css" media="screen">
    <script src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/jquery-ui.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/jquery-1.9.1.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/jquery-2.0.3.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap-select.js"></script>
       <script>
             $(document).ready(function() {
                                 
                             
                           
                             
                            $(".pink_icon_nav").hover(
                                function(){
                                    $(".pink_icon_img").slideUp();
                                    
                                       $("#pink_icon_desc").slideDown();
                                },
                                function(){
                                     $(".pink_icon_img").slideDown();
                                       $("#pink_icon_desc").slideUp();
                                }
                            );     
                           
                           $(".blue_icon_nav").hover(
                                function(){
                                    $(".blue_icon_img").slideUp();
                                       $("#blue_icon_desc").slideDown()();
                                },
                                function(){
                                     $(".blue_icon_img").slideDown();
                                       $("#blue_icon_desc").slideUp();
                                }
                            );     

                            $(".grey_icon_nav").hover(
                                        function(){
                                            $(".grey_icon_img").slideUp();
                                               $("#grey_icon_desc").slideDown();
                                        },
                                        function(){
                                             $(".grey_icon_img").slideDown();
                                               $("#grey_icon_desc").slideUp();
                                        }
                                    );     

                            $(".green_icon_nav").hover(
                                        function(){
                                            $(".green_icon_img").slideUp();
                                               $("#green_icon_desc").slideDown();
                                        },
                                        function(){
                                             $(".green_icon_img").slideDown();
                                               $("#green_icon_desc").slideUp();
                                        }
                                    );     


                            });
                        </script>
</head>
<body>
    
    <header class="main">
      
            <span class="logo_span left">
            <img class="logo" src ="<?php echo base_url(); ?>/assets/images/G-Learn.png" width="220" />
            </span>
           
           <div class="pull-right">
          
                    <div id="myContainerRight">


                         <div class="green_icon_nav">
                            <div class="navbar-images-container green_icon_img">
                                <img class="navbar-images" src="<?php echo base_url();?>/assets/images/docs_nav.png"/>
                            </div>
                             <div id="green_icon_desc" class="navbar_img_desc"> CONTACT US</div>
                        </div>
                        
                           <div class="grey_icon_nav">
                            <div class="navbar-images-container grey_icon_img">
                                <img class="navbar-images" src="<?php echo base_url();?>/assets/images/who_nav.png"/>
                            </div>
                             <div id="grey_icon_desc" class="navbar_img_desc"> WHO WE ARE</div>
                        </div>
                       
                        <div class="blue_icon_nav">
                            <div class="navbar-images-container blue_icon_img">
                                <img class="navbar-images" src="<?php echo base_url();?>/assets/images/features_nav.png"/>
                            </div>
                             <div id="blue_icon_desc" class="navbar_img_desc"> FEATURES</div>
                        </div>
                        <div class="pink_icon_nav">
                            <div class="navbar-images-container pink_icon_img">
                                <img class="navbar-images" src="<?php echo base_url();?>/assets/images/questionmark_nav.png"/>
                            </div>  
                            <div id="pink_icon_desc" class="navbar_img_desc"> WHAT <Br/> IS <br/> G-LEARNING </div>
                        </div>

                     
                         <div class="grey_icon_nav"> <img src="<?php echo base_url();?>/assets/images/who_nav.png"/></div>
                         <div class="green_icon_nav"><img  src="<?php echo base_url();?>/assets/images/docs_nav.png"/></div>
                         <div class="blue_icon_nav"><img src="<?php echo base_url();?>/assets/images/who_nav.png"/></div>
                         <div class="pink_icon_nav"><img src="<?php echo base_url();?>/assets/images/who_nav.png"/></div>  

                     </div> 
<!--               <div > <a title="What is G-Learning" > </a> </div>
                   <div class="navbar_icons"> <a title="Why G-Learning" > </a>  </div>
                   <div class="navbar_icons"> <a title="Features" >  </a>    </div>
                   <div class="navbar_icons"    > <a title="Team" >  </a>   </div>
               -->
              
              
            </div>
        
    </header>

