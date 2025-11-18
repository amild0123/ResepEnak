<?php 

    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    
        if($page == 'home') 
            include "page/home.php";
        elseif($page == 'bagiResep') 
            include "page/bagiResep.php";
        elseif($page == 'minuman') 
            include "page/minuman.php";
        elseif($page == 'resep') 
            include "page/resep.php";
    
    ?>