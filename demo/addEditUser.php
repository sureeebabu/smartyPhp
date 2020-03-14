<?php
    require '../libs/Smarty.class.php';
    require '../libs/db.php';
    $smarty = new Smarty;
    $smarty->assign('title', 'Add / Edit Users');

    // echo 'ask';

    // $res = $db->prepare("select * from usermaster"); 
    // $res->execute(); 
    // $res->setFetchMode(PDO::FETCH_LAZY); 
  
    // // assign to smarty 
    // $smarty->assign('res',$res); 
    $smarty->display('addEditUser.tpl');
    
?>
