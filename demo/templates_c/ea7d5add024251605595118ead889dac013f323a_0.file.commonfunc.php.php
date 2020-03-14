<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-14 09:12:35
  from 'D:\xampp\htdocs\smartyPhp\demo\commonfunc.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e6c91f36a0948_91127934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea7d5add024251605595118ead889dac013f323a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartyPhp\\demo\\commonfunc.php',
      1 => 1584173189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6c91f36a0948_91127934 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php

';?>
function cmodeFn($mode) {
    if($mode == "add") {
        return "Add";
    } elseif($mode == "edit"){
        return "Edit";
    }
}

function isActiveFn($active) {
    if($active == 1) {
        return "Yes";
    } else {
        return "No";
    }
}



<?php echo '?>';
}
}
