<?php
    require '../libs/Smarty.class.php';
    require '../libs/db.php';
    $smarty = new Smarty;
    $smarty->assign('title', 'List of Users');

    $res = $db->prepare("select * from usermaster"); 
    $res->execute(); 
    $res->setFetchMode(PDO::FETCH_LAZY); 
  
    // assign to smarty 
    $smarty->assign('res',$res); 
    $smarty->display('listUser.tpl');
    
?>
