<?php
// Before anything is sent, set the appropriate header
header('Content-Type: text/html; charset=UTF-8');
$configs = parse_ini_file(WPATH . "core/configs.ini");
$_SESSION["mail_host"] = $configs["mail_host"];
$_SESSION["MUsername"] = $configs["MUsername"];
$_SESSION["MPassword"] = $configs["MPassword"];
$_SESSION["SMTPSecure"] = $configs["SMTPSecure"];
$_SESSION["Port"] = $configs["Port"];
$_SESSION["MUsernameFrom"] = $configs["MUsernameFrom"];
$_SESSION["Feedback"] = $configs["Feedback"];
$_SESSION["Null_Feedback"] = $configs["Null_Feedback"];
?>
﻿<!DOCTYPE html>
<!--[if lt IE 10]> <html  lang="en" class="iex"> <![endif]-->
<!--[if (gt IE 10)|!(IE)]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Skyline Platinum Freighter">
        <script src="web/scripts/jquery.min.js"></script>
        <script src='web/scripts/google.maps.min.js'></script>
        <script src='https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyAMn-BQWC42Y9irhc4Fpw_8kUF5tkUJA6I'></script>
        <link rel="stylesheet" href="web/scripts/bootstrap/css/bootstrap.css">
        <script src="web/scripts/script.js"></script>
        <link rel="stylesheet" href="web/style.css">
        <link rel="stylesheet" href="web/css/content-box.css">
        <link rel="stylesheet" href="web/css/image-box.css">
        <link rel="stylesheet" href="web/css/animations.css">
        <link rel="stylesheet" href='web/css/components.css'>
        <link rel="stylesheet" href='web/scripts/flexslider/flexslider.css'>
        <link rel="stylesheet" href='web/scripts/magnific-popup.css'>
        <link rel="stylesheet" href='web/scripts/php/contact-form.css'>
        <link rel="stylesheet" href='web/scripts/social.stream.css'>
        <link rel="icon" href="../images/favicon.png">
        <link rel="stylesheet" href="web/skin.css">
        <!-- Extra optional content header -->

        <?php
        /*         * *
         * This section specifies the page header
         */

        // The page title
        if ($templateResource = TemplateResource::getResource('title')) {
            ?>
            <title><?php echo $templateResource; ?></title>
        <?php } ?>	
        <!-- Basic CSS -->
        <!-- End of basic CSS -->
        <?php
        // The CSS included
        if ($templateResource = TemplateResource::getResource('css')) {
            ?>
            <!-- Additional CSS -->
            <?php
            foreach ($templateResource as $style) {
                $style = "web/$style";
                ?>
                <link rel="stylesheet" href="<?php echo $style; ?>" />
                <?php
            }
            ?>
            <!-- Additional CSS end -->
            <?php
        }
        ?>

        <!-- Favicon and touch icons -->


    </head>
    <body>
        <div id="preloader"></div>
        <?php
        require_once "header.php";
        ?>

        <?php
        require_once $currentPage;
        ?>

        <?php
        require_once "footer.php";
        ?>

        <!-- Basic scripts -->  
        <link rel="stylesheet" href="web/scripts/iconsmind/line-icons.min.css">
        <script async src="web/scripts/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="web/scripts/imagesloaded.min.js"></script>
        <script type="text/javascript" src="web/scripts/parallax.min.js"></script>
        <script type="text/javascript" src='web/scripts/flexslider/jquery.flexslider-min.js'></script>
        <script type="text/javascript" async src='web/scripts/isotope.min.js'></script>
        <script type="text/javascript" async src='web/scripts/php/contact-form.js'></script>
        <script type="text/javascript" async src='web/scripts/jquery.progress-counter.js'></script>
        <script type="text/javascript" async src='web/scripts/jquery.tab-accordion.js'></script>
        <script type="text/javascript" async src="web/scripts/bootstrap/js/bootstrap.popover.min.js"></script>
        <script type="text/javascript" async src="web/scripts/jquery.magnific-popup.min.js"></script>
        <script src='web/scripts/social.stream.min.js'></script>
        <!--<script src='web/scripts/smooth.scroll.min.js'></script>-->
        <!-- End of basic scripts -->
        <?php
        /*         * *
         * Specify the scripts that are to be added.
         */
        if ($templateResource = TemplateResource::getResource('js')) {
            ?>
            <!-- Additional Scripts -->
            <?php
            foreach ($templateResource as $js) {
                $js = "web/$js";
                ?>
                <script src="<?php echo $js; ?>"></script>
                <?php
            }
            ?>
            <?php
        }
        ?>
        <?php if (!App::isLoggedIn()) { ?>
            <script>
                jQuery(document).ready(function () {
                    App.initLogin();
                });
            </script>
        <?php } else { ?>
            <script>
                jQuery(document).ready(function () {
                    // initiate layout and plugins
                    App.init();
                    //App.setMainPage(true);

                });
            </script>
            <?php
        }
        ?>
    </body>
</html>
