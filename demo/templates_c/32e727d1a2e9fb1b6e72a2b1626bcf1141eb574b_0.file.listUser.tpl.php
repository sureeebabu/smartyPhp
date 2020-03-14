<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-14 07:24:26
  from 'D:\xampp\htdocs\smartyPhp\demo\templates\listUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e6c789a530a66_82214045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32e727d1a2e9fb1b6e72a2b1626bcf1141eb574b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartyPhp\\demo\\templates\\listUser.tpl',
      1 => 1584167064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e6c789a530a66_82214045 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, false);
?>

<section class="content-header">
    <h1><i class="fa fa-user"></i> User Master</h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
                        <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">List of Users</h3>
                    <div class="box-tools">
                        <a class="btn btn-primary btn-sm" href="addEditUser.php?cmode=add" role="button">Add New
                            User</a>
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr class="info">
                            <th class="text-center">#</th>
                            <th class="text-center" style="width:40%">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Mobile No</th>
                            <th class="text-center">Active</th>
                            <th class="text-center" style="width:10%">Action</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                        <tr>
                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['r']->value['userID'];?>
 </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['userName'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['userEmail'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['userMobileNo'];?>
</td>
                            <td class="text-center">
                                <b><?php echo $_smarty_tpl->tpl_vars['r']->value['userIsActive'];?>

                            </td>
                            <td class="text-center">
                                <a class="paddingRight-15" title="Edit" href="addEditUser.php?cmode=edit"><i class="fa fa-edit"></i></a>
                        </tr>
                        <?php
}
if ($_smarty_tpl->tpl_vars['r']->do_else) {
?>
                        <tr>
                            <td colspan="2" class="text-center">
                                <b class="text-danger">No Record Found</b>
                            </td>
                        </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
