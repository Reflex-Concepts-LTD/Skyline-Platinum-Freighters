<header class="fixed-top scroll-change" data-menu-anima="fade-in">
    <div class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top" role="navigation">
        <div class="navbar navbar-main">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="?home">
                        <img src="images/branding/Re-Imagination-3.png" alt="logo"/>
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">

                        <li class="dropdown <?php if (is_menu_set('home')) { ?> active <?php } ?>">
                            <a class="dropdown-toggle" href="?home">Home</a>
                        </li>
                        <li class="dropdown <?php if (is_menu_set('about') || is_menu_set('history') || is_menu_set('vision')) { ?> active <?php } ?>">
                            <a href="?about" class="dropdown-toggle" data-toggle="dropdown" role="button">About Us <span class="caret"></span></a>
                            <ul class="dropdown-menu multi-level">
                                <li><a href="?history" <?php if (is_menu_set('history')) { ?> class="active" <?php } ?>>History</a></li>
                                <li><a href="?vision" <?php if (is_menu_set('vision')) { ?> class="active" <?php } ?>>Vision & Values</a></li>
                                <!--<li><a href="?faqs">FAQs</a></li>-->
                            </ul>
                        </li>
                        <li class="dropdown <?php if (is_menu_set('products') || is_menu_set('customs-clearing') || is_menu_set('pack-ship') || is_menu_set('industry-logistics') || is_menu_set('freight-forwarding') || is_menu_set('car-logistics') || is_menu_set('transit-clearing')) { ?> active <?php } ?>">
                            <a href="?products" class="dropdown-toggle" data-toggle="dropdown" role="button">Products/Services <span class="caret"></span></a>
                            <ul class="dropdown-menu multi-level">
                                <li><a href="?customs-clearing">Customs Clearing</a></li>
                                <li><a href="?pack-ship">Pack & Ship</a></li>
                                <li><a href="?industry-logistics">Industry Customized Logistics</a></li>
                                <li><a href="?freight-forwarding">Freight Forwarding</a></li>
                                <li><a href="?car-logistics">Car Importation & Related Logistics</a></li>
                                <li><a href="?transit-clearing">Transit Cargo Clearance</a></li>

                            </ul>
                        </li>
                        <li class="dropdown <?php if (is_menu_set('customs-clearing-advantages')) { ?> active <?php } ?>">
                            <a class="dropdown-toggle" href="?customs-clearing-advantages">Our Advantages</a>
                        </li>
                        <li class="dropdown <?php if (is_menu_set('get_quote')) { ?> active <?php } ?>">
                            <a class="dropdown-toggle" href="?get_quote">Get Quote</a>
                        </li>
<!--                        <li class="dropdown <?php if (is_menu_set('careers')) { ?> active <?php } ?>">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="?careers">Careers</a>
                        </li>-->
                        <li class="dropdown <?php if (is_menu_set('contacts')) { ?> active <?php } ?>">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="?contacts">Contact Us</a>
                        </li>




                        <!--                        <li class="dropdown">
                                                    <a href="?subsidiaries" class="dropdown-toggle" data-toggle="dropdown" role="button">Subsidiaries <span class="caret"></span></a>
                                                    <ul class="dropdown-menu multi-level">
                                                        <li><a href="http://eic.eig.co.ke">Emirates International Credit</a></li>
                                                        <li><a href="http://eig-security.eig.co.ke">EIG Corporate Security</a></li>
                                                        <li><a href="http://tech.eig.co.ke">Technochratic Age - Africa</a></li>
                                                        <li><a href="http://age.eig.co.ke">Age Africa Aviation</a></li>
                                                    </ul>
                                                </li>-->
                        <!--<li class="dropdown">
                            <a href="?portfolio" class="dropdown-toggle" data-toggle="dropdown" role="button">Portfolio <span class="caret"></span></a>
                            <ul class="dropdown-menu multi-level">
                                <li><a href="?consultancy">Consultancy</a></li>
                                <li><a href="?c-fowarding">Clearing & Forwarding</a></li>
                                <li><a href="?market-research">Market Research</a></li>
                            </ul>
                        </li>
                         <li class="dropdown mega-dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="?experience">Experience</a>
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="?opportunities">Opportunities</a>
                        </li>-->

                    </ul>

                    <div class="nav navbar-nav navbar-right">
                        <div class="search-box-menu">
                            <div class="search-box scrolldown">
                                <input type="text" class="form-control" placeholder="Search for...">
                            </div>
                            <button type="button" class="btn btn-default btn-search">
                                <span class="fa fa-search"></span>
                            </button>
                        </div>
                        <!--<ul class="nav navbar-nav lan-menu">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><img src="images/en.png" alt="" />En<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><img src="images/it.png" alt="" />IT</a></li>
                                </ul>
                            </li>
                        </ul>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>