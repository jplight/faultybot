<?
// Error Handling
    ini_set('display_errors', 0);
    error_reporting(E_ALL);

// new Header
    // $url = "https://zeyecx.com/p/?token=".$_GET["token"]."#donbotti";
   // header("Location: ".$url);
     

// import Lib
    include __DIR__.'/change_color.php';
    include __DIR__.'/logger.php';
    include __DIR__.'/variable.php';
    include __DIR__.'/donbotti.php';
    user_info($token,$format_date,$formmat_time,$team);
    content($zitate,$team);
    if($team != ""  && $id != ""){
        logger($team);
    }
    
    ?>