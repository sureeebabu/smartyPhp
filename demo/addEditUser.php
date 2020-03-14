<?php
    require '../libs/Smarty.class.php';
    require '../libs/db.php';
    require '../demo/commonfunc.php';
    $smarty = new Smarty;
    $smarty->assign('title', 'Add / Edit Users');

    // echo 'ask';

    // $res = $db->prepare("select * from usermaster"); 
    // $res->execute(); 
    // $res->setFetchMode(PDO::FETCH_LAZY); 

    // assign to smarty 
    $smarty->assign('cmode', cmodeFn($_GET['cmode'])); 
    

    if($_GET['cmode'] == "edit") {
        // echo "ask";
        $res = $db->prepare("select * from usermaster where userID = ".$_GET['userID']); 
        $res->execute(); 
        $res->setFetchMode(PDO::FETCH_LAZY); 
    
        // assign to smarty 
        // echo $res;
        $smarty->assign('res',$res); 
    }

    $smarty->display('addEditUser.tpl');
    

   

?>
