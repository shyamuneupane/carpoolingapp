<?php
   // we want to redirect the user to the main if he is alreadly logged in

session_start();
if(isset($_SESSION['user'])) header("Location:dashboard.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>

        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title> CarPool Login Page </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicons -->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../resources/images/icons/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../resources/images/icons/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../resources/images/icons/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../resources/images/icons/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../resources/images/icons/favicon.png">



    <!-- JS Core -->

    <script type="text/javascript" src="../resources/js-core.js"></script>



    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>
    <style>
        #loading {position: fixed;width: 100%;height: 100%;left: 0;top: 0;right: 0;bottom: 0;display: block;background: #fff;z-index: 10000;}
        #loading img {position: absolute;top: 50%;left: 50%;margin: -23px 0 0 -23px;}
    </style>



    <!-- HELPERS -->

<link rel="stylesheet" type="text/css" href="../resources/helpers/helpers-all.css">

<!-- ELEMENTS -->

<link rel="stylesheet" type="text/css" href="../resources/elements/elements-all.css">

<!-- Icons -->

<link rel="stylesheet" type="text/css" href="../resources/icons/fontawesome/fontawesome.css">
<link rel="stylesheet" type="text/css" href="../resources/icons/linecons/linecons.css">

<!-- SNIPPETS -->

<link rel="stylesheet" type="text/css" href="../resources/snippets/snippets-all.css">

<!-- APPLICATIONS -->

<link rel="stylesheet" type="text/css" href="../resources/applications/mailbox.css">



<!-- Admin Theme -->

<link rel="stylesheet" type="text/css" href="../resources/themes/supina/layout.css">
<link id="layout-color" rel="stylesheet" type="text/css" href="../resources/themes/supina/default/layout-color.css">
<link id="framework-color" rel="stylesheet" type="text/css" href="../resources/themes/supina/default/framework-color.css">
<link rel="stylesheet" type="text/css" href="../resources/themes/supina/border-radius.css">

<!-- Color Helpers CSS -->

<link rel="stylesheet" type="text/css" href="../resources/helpers/colors.css">

</head>
    <body>
    <div id="loading"><img src="../resources/images/spinner/loader-dark.gif" alt="Loading..."></div>


<div class="center-vertical">
    <div class="center-content">
         
        <div class="row">
        <div class="col-md-4 center-margin">
          <img src = "../resources/images/carpool.png" alt="CarPool image">
        </div>
        </div>
    
        <form action="index1.php" id="login-validation" class="col-md-4 center-margin" method="post" novalidate>
            
            <h3 class="text-center pad25B font-gray text-transform-upr font-size-23">CarPool User Login <span class="opacity-80">v1.0</span></h3>
            <div id="login-form" class="content-box modal-content">
                <div class="content-box-wrapper pad20A">

                    <div class="form-group">
                        <label for="inputUserName">User Name:</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon addon-inside bg-white font-primary">
                                <i class="glyph-icon icon-user"></i>
                            </span>
                            <input type="text" class="form-control" id="inputUserName" name="enterUserName" placeholder="Enter User Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password:</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon addon-inside bg-white font-primary">
                                <i class="glyph-icon icon-unlock-alt"></i>
                            </span>
                            <input type="password" class="form-control" id="inputPassword" name="enterPassword" placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="checkbox-primary col-md-4" style="height: 20px;">
                            <label>
                                <input type="checkbox" id="loginCheckbox1" class="custom-checkbox">
                                Remember me
                            </label>
                        </div>
                        
                        
                        <div class="text-right col-md-4">
                            <a href="#" class="switch-button" switch-target="#login-signup" switch-parent="#login-form" title="Register New User">Register New User</a>
                        </div>
            
                        
                        <div class="text-right col-md-4">
                            <a href="#" class="switch-button" switch-target="#login-forgot" switch-parent="#login-form" title="Recover password">Forgot your password?</a>
                        </div>
                    </div>     
                        
                </div>
                
            <?php if (@$_GET['err'] ==1) { ?>
                  <div class="alert-danger"> Invalid User or Password !</div>
            <?php  } ?>
                
              
              <?php if (@$_GET['err'] ==2) { ?>
                  <div class="alert-danger"> Couldn't Create New Account..Sry !!</div>
              <?php  } ?>
              
             
             
               <?php if (@$_GET['succ'] ==1) { ?>
                  <div class="alert-success"> Successful..New Account Created !!</div>
              <?php  } ?>
                
                <div class="button-pane">
                    <input type="submit" class="btn btn-block btn-primary" name="loginSubmit" value="Login">
                </div>
            </div>

            <div id="login-forgot" class="content-box modal-content hide">
                <div class="content-box-wrapper pad20A">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address:</label>
                        <div class="input-group">
                            <span class="input-group-addon addon-inside bg-gray">
                                <i class="glyph-icon icon-envelope-o"></i>
                            </span>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                    </div>
                </div>
                <div class="button-pane text-center">
                    <button type="submit" class="btn btn-md btn-primary">Recover Password</button>
                    <a href="#" class="btn btn-md btn-link switch-button" switch-target="#login-form" switch-parent="#login-forgot" title="Cancel">Cancel</a>
                </div>
              
            </div>
                
         <div id="login-signup" class="content-box modal-content hide">
                <div class="content-box-wrapper pad20A">
                    
                    <div class="form-group">
                        <label for="inputUserName">UserName:</label>
                          <span class="required">*</span>
                        <div class="input-group">
                            <span class="input-group-addon addon-inside bg-gray">
                                <i class="glyph-icon icon-user"></i>
                            </span>
                            <input type="text" class="form-control" id="newInputUserName" name = "newUserInputUserName" placeholder="Enter UserName" required="required">
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label for="inputPasswoed">Password:</label>
                          <span class="required">*</span>
                        <div class="input-group">
                            <span class="input-group-addon addon-inside bg-gray">
                                <i class="glyph-icon icon-unlock-alt"></i>
                            </span>
                            <input type="password" class="form-control" id="newInputPassword" name = "newUserInputPassword" placeholder="Enter password" required="required">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address:</label>
                          <span class="required">*</span>
                        <div class="input-group">
                            <span class="input-group-addon addon-inside bg-gray">
                                <i class="glyph-icon icon-envelope-o"></i>
                            </span>
                            <input type="email" class="form-control" id="newInputEmail"  name="newUserInputEmail"  placeholder="Enter email" required="required">
                        </div>
                    </div>
                    
                </div>
             
             
             
               
                <div class="button-pane text-center">
                    <input type="submit" class="btn btn-md btn-primary" name="loginSubmit" value= "Register">
                    <a href="#" class="btn btn-md btn-link switch-button" switch-target="#login-form" switch-parent="#login-signup" title="Cancel">Cancel</a>
                </div>
            </div>
                
         </form>
    </div>
</div>



    <!-- WIDGETS -->



    <!-- WIDGETS -->

    <!-- Bootstrap Dropdown -->

    <link rel="stylesheet" type="text/css" href="../resources/widgets/dropdown/dropdown.css">
    <script type="text/javascript" src="../resources/widgets/dropdown/dropdown.js"></script>

    <!-- PieGage charts -->

    <link rel="stylesheet" type="text/css" href="../resources/widgets/charts/piegage/piegage.css">
    <script type="text/javascript" src="../resources/widgets/charts/piegage/piegage.js"></script>
    <script type="text/javascript" src="../resources/widgets/charts/piegage/piegage-demo.js"></script>

    <!-- Bootstrap Tooltip -->

    <link rel="stylesheet" type="text/css" href="../resources/widgets/tooltip/tooltip.css">
    <script type="text/javascript" src="../resources/widgets/tooltip/tooltip.js"></script>

    <!-- Bootstrap Popover -->

    <link rel="stylesheet" type="text/css" href="../resources/widgets/popover/popover.css">
    <script type="text/javascript" src="../resources/widgets/popover/popover.js"></script>


    <!-- Bootstrap Buttons -->

    <script type="text/javascript" src="../resources/widgets/button/button.js"></script>

    <!-- Bootstrap Collapse -->

    <script type="text/javascript" src="../resources/widgets/collapse/collapse.js"></script>

    <!-- Bootstrap Progress Bar -->

    <link rel="stylesheet" type="text/css" href="../resources/widgets/progressbar/progressbar.css">
    <script type="text/javascript" src="../resources/widgets/progressbar/progressbar.js"></script>

    <!-- Uniform -->

    <link rel="stylesheet" type="text/css" href="../resources/widgets/uniform/uniform.css">
    <script type="text/javascript" src="../resources/widgets/uniform/uniform.js"></script>

    <!-- Chosen -->

    <link rel="stylesheet" type="text/css" href="../resources/widgets/chosen/chosen.css">
    <script type="text/javascript" src="../resources/widgets/chosen/chosen.js"></script>

    <!-- Superfish -->

    <script type="text/javascript" src="../resources/widgets/superfish/superfish.js"></script>

    <!-- Superclick -->

    <script type="text/javascript" src="../resources/widgets/superclick/superclick.js"></script>

    <!-- Nice scroll -->

    <script type="text/javascript" src="../resources/widgets/nicescroll/nicescroll.js"></script>

    <!-- Overlay -->

    <script type="text/javascript" src="../resources/widgets/overlay/overlay.js"></script>

    <!-- jQueryUI Autocomplete -->

    <script type="text/javascript" src="../resources/widgets/autocomplete/autocomplete.js"></script>
    <script type="text/javascript" src="../resources/widgets/autocomplete/menu.js"></script>

    <!-- Skycons -->

    <script type="text/javascript" src="../resources/widgets/skycons/skycons.js"></script>

    <!-- Content box -->

    <script type="text/javascript" src="../resources/widgets/content-box/contentbox.js"></script>

    <!-- Bootstrap Tabs -->

    <script type="text/javascript" src="../resources/widgets/tabs/tabs.js"></script>

    <!-- Sparklines charts -->

    <script type="text/javascript" src="../resources/widgets/charts/sparklines/sparklines.js"></script>
    <script type="text/javascript" src="../resources/widgets/charts/sparklines/sparklines-demo.js"></script>

    <!-- Slidebars -->

    <link rel="stylesheet" type="text/css" href="../resources/widgets/slidebars/slidebars.css">
    <script type="text/javascript" src="../resources/widgets/slidebars/slidebars.js"></script>

    <!-- Widgets init for demo -->

    <script type="text/javascript" src="../resources/widgets-init.js"></script>

    <!-- Theme layout -->

    <script type="text/javascript" src="../resources/themes/supina/js/layout.js"></script>






    </body>
</html>

