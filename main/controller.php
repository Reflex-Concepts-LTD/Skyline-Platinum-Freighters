<?php

require WPATH . "core/include.php";
$currentPage = "";

if ( is_menu_set('logout') != "" )
    App::logOut();

else if ( is_menu_set('?') != ""){
    $currentPage = WPATH . "modules/home.php";
    set_title("Skyline Platinum Freighters | Home");
}

else if ( is_menu_set('home') != ""){
    $currentPage = WPATH . "modules/home.php";
    set_title("Skyline Platinum Freighters | Home");
}

else if ( is_menu_set('about') != ""){
    $currentPage = WPATH . "modules/about.php";
    set_title("Skyline Platinum Freighters | About Us");
}

else if ( is_menu_set('experience') != ""){
    $currentPage = WPATH . "modules/experience.php";
    set_title("Skyline Platinum Freighters | Experience");
}

else if ( is_menu_set('customs-clearing') != ""){
    $currentPage = WPATH . "modules/customs-clearing.php";
    set_title("Skyline Platinum Freighters | Customs Clearing");
}

else if ( is_menu_set('pack-ship') != ""){
    $currentPage = WPATH . "modules/pack-ship.php";
    set_title("Skyline Platinum Freighters | Pack & Ship");
}

else if ( is_menu_set('industry-logistics') != ""){
    $currentPage = WPATH . "modules/industry-logistics.php";
    set_title("Skyline Platinum Freighters | Industry Customised Logistics");
}

else if ( is_menu_set('automotive') != ""){
    $currentPage = WPATH . "modules/industry-logistics/automotive.php";
    set_title("Skyline Platinum Freighters | Automotive[Industry Customised Logistics]");
}

else if ( is_menu_set('car-logistics') != ""){
    $currentPage = WPATH . "modules/car-logistics.php";
    set_title("Skyline Platinum Freighters | Vehicle Logistics]");
}

else if ( is_menu_set('industrial') != ""){
    $currentPage = WPATH . "modules/industry-logistics/industrial.php";
    set_title("Skyline Platinum Freighters | Industrial[Industry Customised Logistics]");
}

else if ( is_menu_set('marine') != ""){
    $currentPage = WPATH . "modules/industry-logistics/marine.php";
    set_title("Skyline Platinum Freighters | Marine[Industry Customised Logistics]");
}

else if ( is_menu_set('emergency-relief') != ""){
    $currentPage = WPATH . "modules/industry-logistics/emergency-relief.php";
    set_title("Skyline Platinum Freighters | Emergency Relief[Industry Customised Logistics]");
}

else if ( is_menu_set('fmcg') != ""){
    $currentPage = WPATH . "modules/industry-logistics/fmcg.php";
    set_title("Skyline Platinum Freighters | FMCG[Industry Customised Logistics]");
}

else if ( is_menu_set('freight-forwarding') != ""){
    $currentPage = WPATH . "modules/freight-forwarding.php";
    set_title("Skyline Platinum Freighters | Freight Forwarding");
}

else if ( is_menu_set('air-freight') != ""){
    $currentPage = WPATH . "modules/freight-forwarding/air-freight.php";
    set_title("Skyline Platinum Freighters | Air Freight Forwarding");
}

else if ( is_menu_set('sea-freight') != ""){
    $currentPage = WPATH . "modules/freight-forwarding/sea-freight.php";
    set_title("Skyline Platinum Freighters | Sea Freight Forwarding");
}

else if ( is_menu_set('lcl') != ""){
    $currentPage = WPATH . "modules/freight-forwarding/sea-freight/lcl.php";
    set_title("Skyline Platinum Freighters | Less than Container Load(LCL)");
}

else if ( is_menu_set('fcl') != ""){
    $currentPage = WPATH . "modules/freight-forwarding/sea-freight/fcl.php";
    set_title("Skyline Platinum Freighters | Full Container Load(FCL)");
}

else if ( is_menu_set('break-bulk') != ""){
    $currentPage = WPATH . "modules/freight-forwarding/sea-freight/break-bulk.php";
    set_title("Skyline Platinum Freighters | Break Bulk");
}

else if ( is_menu_set('roro') != ""){
    $currentPage = WPATH . "modules/freight-forwarding/sea-freight/roro.php";
    set_title("Skyline Platinum Freighters | Roll On Roll Off(RORO)");
}

else if ( is_menu_set('heavy-cargo') != ""){
    $currentPage = WPATH . "modules/freight-forwarding/sea-freight/heavy-cargo.php";
    set_title("Skyline Platinum Freighters | Projects & Heavy Lift Cargo");
}

else if ( is_menu_set('cargo-logistics') != ""){
    $currentPage = WPATH . "modules/cargo-logistics.php";
    set_title("Skyline Platinum Freighters | Car Importaion & Related Logistics");
}

else if ( is_menu_set('transit-clearing') != ""){
    $currentPage = WPATH . "modules/freight-forwarding/transit-clearing.php";
    set_title("Skyline Platinum Freighters | Transit Cargo Clearance");
}

else if ( is_menu_set('customs-clearance-list-of-services') != ""){
    $currentPage = WPATH . "modules/custom-clearance-list-of-services.php";
    set_title("Skyline Platinum Freighters | Customs Clearance List of Services");
}

else if ( is_menu_set('customs-clearing-advantages') != ""){
    $currentPage = WPATH . "modules/customs-clearing-advantages.php";
    set_title("Skyline Platinum Freighters | Customs Clearance Advantages");
}

else if ( is_menu_set('get_quote') != ""){
    $currentPage = WPATH . "modules/get_quote.php";
    set_title("Skyline Platinum Freighters | Get Quote");
}












else if ( is_menu_set('market-research') != ""){
    $currentPage = WPATH . "modules/market-research.php";
    set_title("Skyline Platinum Freighters  | Market Research");
}

else if ( is_menu_set('404') != ""){
    $currentPage = WPATH . "modules/404.php";
    set_title("Skyline Platinum Freighters  | 404");
}

else if ( is_menu_set('contacts') != ""){
    $currentPage = WPATH . "modules/contacts.php";
    set_title("Skyline Platinum Freighters  | Contact Us");
}

else if ( is_menu_set('opportunities') != ""){
    $currentPage = WPATH . "modules/opportunities.php";
    set_title("Skyline Platinum Freighters  | New Opportunities");
}

else if ( is_menu_set('faqs') != ""){
    $currentPage = WPATH . "modules/faqs.php";
    set_title("Skyline Platinum Freighters  | FAQs");
}

else if ( is_menu_set('history') != ""){
    $currentPage = WPATH . "modules/history.php";
    set_title("Skyline Platinum Freighters  | Our History");
}

else if ( is_menu_set('careers') != ""){
    $currentPage = WPATH . "modules/careers.php";
    set_title("Skyline Platinum Freighters  | Careers");
}

else if ( is_menu_set('portfolio') != ""){
    $currentPage = WPATH . "modules/portfolio.php";
    set_title("Skyline Platinum Freighters  | Portfolio");
}

else if ( is_menu_set('vision') != ""){
    $currentPage = WPATH . "modules/vision.php";
    set_title("Skyline Platinum Freighters  | Vision & Values");
}

else if ( is_menu_set('products') != ""){
    $currentPage = WPATH . "modules/products.php";
    set_title("Skyline Platinum Freighters  | Products");
}

else if ( is_menu_set('trade') != ""){
    $currentPage = WPATH . "modules/trade.php";
    set_title("Skyline Platinum Freighters  | Trade Finance Facility");
}

else if ( is_menu_set('secured-loans') != ""){
    $currentPage = WPATH . "modules/secured-loans.php";
    set_title("Skyline Platinum Freighters  | Secured Loans");
}

else if ( is_menu_set('invoice-discounting') != ""){
    $currentPage = WPATH . "modules/invoice-discounting.php";
    set_title("Skyline Platinum Freighters  | Invoice Discounting");
}

else if ( is_menu_set('lpo-financing') != ""){
    $currentPage = WPATH . "modules/lpo-financing.php";
    set_title("Skyline Platinum Freighters  | LPO Financing");
}

else if ( is_menu_set('loans-to-saccos') != ""){
    $currentPage = WPATH . "modules/loans-to-saccos.php";
    set_title("Skyline Platinum Freighters  | Loans to SACCOS");
}

else if ( is_menu_set('mobile-lending') != ""){
    $currentPage = WPATH . "modules/mobile-lending.php";
    set_title("Skyline Platinum Freighters  | Mobile Lending");
}

else if ( is_menu_set('subsidiaries') != ""){
    $currentPage = WPATH . "modules/subsidiaries.php";
    set_title("Skyline Platinum Freighters  | Subsidiaries");
}

else if (!empty($_GET)) {
    App::redirectTo("?");
}

else{
    $currentPage = WPATH . "modules/home.php";
    if ( App::isLoggedIn() ) {
		set_title("Home | Skyline Platinum Freighters ");
	}
}

if (App::isAjaxRequest())
    include $currentPage;
else {
    require WPATH . "core/template/layout.php";
}
?>