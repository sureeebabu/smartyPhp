{include file="header.tpl" title=$title }

{*
<div>
My Name is : {$myname} <br> I am student of {$dept} Department. <br> My skills contain {$skill} as one of the best.
</div> *}

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
                            {* {$smarty.get.cmode} *}
                            {$cmode}
                        </span> User</h3>
                    <div class="box-tools">
                        <a class="btn btn-primary btn-sm" href="listUser.php" role="button">List User</a>
                    </div>
                </div>
                <div class="box-body">

                {foreach $res as $r}

                {* {$res.userID} *}

                    <div class="form-group" style="padding-bottom: 25px;">
                        <label for="name" class="col-sm-2 control-label">Name<span class="text-red"> *</span> </label>
                        <div class="col-sm-10">
                            <input name="txtUserName" maxlength="50"
                                id="txtUserName" class="form-control" type="text"
                                placeholder="Enter Your Name" value='{$r.userName}' />
                            <span id="ContentPlaceHolder1_reqName" style="color:Red;visibility:hidden;">Enter
                                Name</span>
                        </div>
                    </div>
                    <div class="form-group" style="padding-bottom: 25px;">
                        <label for="name" class="col-sm-2 control-label">Email<span class="text-red"> *</span> </label>
                        <div class="col-sm-10">
                            <input name="ctl00$ContentPlaceHolder1$txtUserEmail" type="text" maxlength="50"
                                id="ContentPlaceHolder1_txtUserEmail" class="form-control"
                                placeholder="Enter Email Id"  value='{$r.userEmail}' />
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
                 {/foreach}
                <!-- /.box-body -->
                <div class="box-footer">
                    <input type="submit" name="btnSubmit" value="Submit" id="btnSubmit" class="btn btn-primary pull-right" />
                </div>
                <!-- /.box-footer -->
            </div>
        </div>
    </div>
</section>

<script src="http://dwwms.daijiworld.com/plugins/jquery/jquery-2.2.3.min.js"></script>
    <script>
        $(document).ready(function () {
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%'
                });
            });
        });
    </script>

{include file="footer.tpl" }