<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-06 09:04:02
  from 'D:\xampp\htdocs\smarty\demo\templates\display.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e6203f2473d77_30683419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5da13c19a879d6b68a1b7b0f1dff156a29f4ce25' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smarty\\demo\\templates\\display.tpl',
      1 => 1583481840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e6203f2473d77_30683419 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, false);
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?> 
  <?php echo $_smarty_tpl->tpl_vars['r']->value['userID'];?>
 
  <?php echo $_smarty_tpl->tpl_vars['r']->value['userName'];?>

<?php
}
if ($_smarty_tpl->tpl_vars['r']->do_else) {
?>
  .. no results .. 
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
