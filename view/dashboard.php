<?php
require_once('../model/user_model.php');
//we want to redirect the user to the login if his session is expired/invalid

session_start();

if (!isset($_SESSION['user']))
{
    header("Location:login.php");
}
else
{
    $user = $_SESSION['user'];
}

?>

    <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                <title>Carpoon Dashboard</title>
                <meta name="description" content="">
                <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
                <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../resources/images/icons/apple-touch-icon-144-precomposed.png"><link rel="apple-touch-icon-precomposed" sizes="114x114" href="../resources/images/icons/apple-touch-icon-114-precomposed.png">
                <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../resources/images/icons/apple-touch-icon-72-precomposed.png"><link rel="apple-touch-icon-precomposed" href="../resources/images/icons/apple-touch-icon-57-precomposed.png"><link rel="shortcut icon" href="../resources/images/icons/favicon.png">
                <script type="text/javascript" src="../resources/js-core.js"></script>
                <script type="text/javascript">$(window).load(function(){
                    setTimeout(function() {
                        $('#loading').fadeOut( 400, "linear" );
                    }, 300);
                });</script>
                <style>
                    #loading {position: fixed;width: 100%;height: 100%;left: 0;top: 0;right: 0;bottom: 0;display: block;background: #fff;z-index: 10000;}
                    #loading img {position: absolute;top: 50%;left: 50%;margin: -23px 0 0 -23px;}
               </style>
                <link rel="stylesheet" type="text/css" href="../resources/helpers/helpers-all.css">
                <link rel="stylesheet" type="text/css" href="../resources/elements/elements-all.css">
                <link rel="stylesheet" type="text/css" href="../resources/icons/fontawesome/fontawesome.css">
                <link rel="stylesheet" type="text/css" href="../resources/icons/linecons/linecons.css">
                <link rel="stylesheet" type="text/css" href="../resources/snippets/snippets-all.css">
                <link rel="stylesheet" type="text/css" href="../resources/applications/mailbox.css">
                <link rel="stylesheet" type="text/css" href="../resources/themes/supina/layout.css">
                <link id="layout-color" rel="stylesheet" type="text/css" href="../resources/themes/supina/default/layout-color.css">
                <link id="framework-color" rel="stylesheet" type="text/css" href="../resources/themes/supina/default/framework-color.css"><link rel="stylesheet" type="text/css" href="../resources/themes/supina/border-radius.css"><link rel="stylesheet" type="text/css" href="../resources/helpers/colors.css">
            </head>
                <body>
                  <div id="loading"><img src="../resources/images/spinner/loader-dark.gif" alt="Loading..."></div>
                  <div id="sb-site">

                    <div id="page-wrapper">
                      <div id="page-header" class="clearfix">
                        <div id="header-logo" class="rm-transition">
                          <a href="#" class="tooltip-button hidden-desktop" title="Navigation Menu" id="responsive-open-menu">
                            <i class="glyph-icon icon-align-justify"></i>
                          </a> <span>Welcome to Carpooling Application<i class="opacity-80">1.0</i></span>
                           <a id="collapse-sidebar" href="#" title="">
                             <i class="glyph-icon icon-chevron-left"></i></a>
                           </div>
                          <div id="sidebar-search">
                             <input type="text" placeholder="Search..." class="autocomplete-input input tooltip-button" data-placement="bottom" title="Type &apos;jav&apos; to see the available tags..." id="" name=""> 
                          <i class="glyph-icon icon-search"></i>
                          </div>
                          
                          
                          <div id="header-right">
                              <b><a href="index1.php?loginSubmit=logout">Logout</a> </b>
                                </div>
                          </div>
    
                        </div>
                        <div id="page-sidebar" class="rm-transition">
                        <div id="page-sidebar-wrapper">
                            <div id="sidebar-top">
                        
                        
                        
                        <div class="tab-content">
                            <div class="tab-pane clearfix fade active in" id="tab-example-1">
                                <div class="user-profile-sm clearfix">
                                    <img width="45" class="img-rounded" src="../resources/dummy-images/gravatar.jpg" alt="">
                                    <div class="user-welcome">Welcome back, <b><?php print $user->get_userName() ?> </b></div>
                                    <a href="#" title="" class="btn btn-sm btn-black-opacity-alt">
                                        <i class="glyph-icon icon-cog"></i></a></div></div>
                           <div id="sidebar-menu"><ul><li><a href="#" title="Dashboard">
                                <i class="glyph-icon icon-linecons-tv"></i> 
                                <span>Dashboard</span></a></li><li>
                                <a href="#" title="Presentation websites">
                                    <i class="glyph-icon icon-linecons-cloud"></i> 
                                    <span>Frontend presentation</span></a><ul>
                                <li class="header"><span>Homepage</span></li>
                        
                        <li><a href="featured-area-1.html" title="Hero area 1">
                            <span>Hero area 1</span></a></li>
                         
                        </ul></li><li class="divider"></li>
                             
                          </ul>
                            </div>
                          
 
                         
                          
                          </div>
                            
                            </div>
                            
                            </div>
                      </div>
                             
                    <div id="page-content-wrapper" class="rm-transition">
                       <div id="page-content" >
                              <div class="row">
                                  <div class="col-md-6">
                                    <div class="content-box bg-white post-box"><textarea name="" class="textarea-autosize" id="" placeholder="What are you doing right now?"></textarea>
                                        <div class="button-pane"><a href="#" class="btn btn-md btn-link hover-white" title="">
                                        <a href="#" class="btn btn-md btn-post float-right btn-success" title="">Post</a></div></div>
                                    
                                  </div>
                              </div>
                            </div>
                    </div>
                          
                          
                          
             
        
     <link rel="stylesheet" type="text/css" href="../resources/demo-widgets.css"><script type="text/javascript" src="../resources/demo-widgets.js"></script>
    </body>
 </html>