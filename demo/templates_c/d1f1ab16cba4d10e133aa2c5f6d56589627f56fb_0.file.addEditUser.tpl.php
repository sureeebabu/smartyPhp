<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-14 09:50:08
  from 'D:\xampp\htdocs\smartyPhp\demo\templates\addEditUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e6c9ac0028dd2_55275059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1f1ab16cba4d10e133aa2c5f6d56589627f56fb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smartyPhp\\demo\\templates\\addEditUser.tpl',
      1 => 1584175804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e6c9ac0028dd2_55275059 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, false);
?>


<section class="content-header">
<h1><i class="fa fa-user"></i> User Master</h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box  box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <span> 
                                                        <?php echo $_smarty_tpl->tpl_vars['cmode']->value;?>

                        </span> User</h3>
                    <div class="box-tools">
                        <a class="btn btn-primary btn-sm" href="listUser.php" role="button">List User</a>
                    </div>
                </div>
                <div class="box-body">

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>

                
                    <div class="form-group" style="padding-bottom: 25px;">
                        <label for="name" class="col-sm-2 control-label">Name<span class="text-red"> *</span> </label>
                        <div class="col-sm-10">
                            <input name="txtUserName" maxlength="50"
                                id="txtUserName" class="form-control" type="text"
                                placeholder="Enter Your Name" value='<?php echo $_smarty_tpl->tpl_vars['r']->value['userName'];?>
' />
                            <span id="ContentPlaceHolder1_reqName" style="color:Red;visibility:hidden;">Enter
                                Name</span>
                        </div>
                    </div>
                    <div class="form-group" style="padding-bottom: 25px;">
                        <label for="name" class="col-sm-2 control-label">Email<span class="text-red"> *</span> </label>
                        <div class="col-sm-10">
                            <input name="ctl00$ContentPlaceHolder1$txtUserEmail" type="text" maxlength="50"
                                id="ContentPlaceHolder1_txtUserEmail" class="form-control"
                                placeholder="Enter Email Id"  value='<?php echo $_smarty_tpl->tpl_vars['r']->value['userEmail'];?>
' />
                            <span id="ContentPlaceHolder1_lblEmail" class="pull-left" style="color:Red;">[Ex : .com /
                                org / co.in]</span>
                            <br />
                            <span id="ContentPlaceHolder1_reqEmail" style="color:Red;display:none;">Enter Email</span>
                            <span id="ContentPlaceHolder1_RegularExpressionValidator1"
                                style="color:Red;display:none;">Enter Your Mail In Correct Format</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password <span
                                class="text-red">*</span> </label>
                        <div class="col-sm-10">
                            <input name="ctl00$ContentPlaceHolder1$txtUserPassword" type="password" maxlength="20"
                                id="ContentPlaceHolder1_txtUserPassword" class="form-control" type="text" minlength="8"
                                placeholder="Enter Password" />
                            <span id="ContentPlaceHolder1_Label1" class="pull-left" style="color:Red;">Password should
                                contains Atleast 8 characters</span>
                            <br />
                            <span id="ContentPlaceHolder1_reqPassword" style="color:Red;display:none;">Enter
                                Password</span>
                            <div class="form-group has-error">
                                <span class="help-block text-danger">To Reset Password Enter New Password</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="padding-bottom: 100px;">
                        <label for="name" class="col-sm-2 control-label">MobileNo</label>
                        <div class="col-sm-10">
                            <input name="txtUserMobileNo" maxlength="20"
                                id="txtUserMobileNo" class="form-control" type="text"
                                placeholder="Enter Mobile No" />
                            <span id="ContentPlaceHolder1_lblMobile" class="pull-left" style="color:Red;">Enter Only
                                Number</span>
                            <br />
                            <span id="ContentPlaceHolder1_ReqMobNum" style="color:Red;display:none;">Enter Mobile
                                Number</span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Image</label>
                        <div class="col-sm-10">
                            <img src="images/users/noImg.png" width="100px" />

                            &nbsp;
                            <span class="aspNetDisabled"><input id="ContentPlaceHolder1_chkRemoveImage" type="checkbox"
                                    name="ctl00$ContentPlaceHolder1$chkRemoveImage" disabled="disabled" /><label
                                    for="ContentPlaceHolder1_chkRemoveImage"> Remove Image</label></span>
                            <input type="file" name="ctl00$ContentPlaceHolder1$flpUserImage"
                                id="ContentPlaceHolder1_flpUserImage" class="form-control" maxlenth="50"
                                accept="image/x-png,image/jpeg" />
                            <span id="ContentPlaceHolder1_lblConImg" style="color:Red;">Image should be less than 500 kb
                                / .jpg or .gif</span>
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$hFUserImageName"
                                id="ContentPlaceHolder1_hFUserImageName" value="noImg.png" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Active</label>
                        <div class="col-sm-10">
                            <div class="checkbox icheck">
                                <input id="chkUserActive" type="checkbox"
                                    name="chkUserActive" checked="checked" />
                            </div>
                        </div>
                    </div>&nbsp;

                    <div class="form-group">
                        <label class="col-sm-2 control-label">User Role <span class="text-red">*</span> </label>
                        <div class="col-sm-10">
                            <select name="userRole" id="userRole"
                                class="form-control" style="width:250px;">
                                <option value="0">--Select--</option>
                                <option value="admin">Admin</option>
                                <option selected="selected" value="user">User</option>
                                <option value="developer">Software Developer</option>

                            </select>
                            <span id="userRole" style="color:Red;visibility:hidden;">Choose User
                                Role</span>
                        </div>
                    </div>

                </div>
                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <!-- /.box-body -->
                <div class="box-footer">
                    <input type="submit" name="btnSubmit" value="Submit" id="btnSubmit" class="btn btn-primary pull-right" />
                </div>
                <!-- /.box-footer -->
            </div>
        </div>
    </div>
</section>

<?php echo '<script'; ?>
 src="http://dwwms.daijiworld.com/plugins/jquery/jquery-2.2.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%'
                });
            });
        });
    <?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
