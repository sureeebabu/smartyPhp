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
            {* <asp:Panel ID="pnlerror" runat="server" Visible="false">
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                    <asp:Label ID="lblError" runat="server" Text=""></asp:Label>
                </div>
            </asp:Panel>
            <asp:Panel ID="pnlMSG" runat="server" Visible="false">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                    <asp:Label ID="lblMSG" runat="server" Text=""></asp:Label>
                </div>
            </asp:Panel>
            *}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">List of Users</h3>
                    <div class="box-tools">
                        <a class="btn btn-primary btn-sm" href="#?cmode=add" role="button">Add New
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
                        {foreach $res as $r}
                        <tr>
                            <td class="text-center">{$r.userID} </td>
                            <td>{$r.userName}</td>
                            <td>{$r.userEmail}</td>
                            <td>{$r.userMobileNo}</td>
                            <td class="text-center">
                                <b>{$r.userIsActive}
                            </td>
                            <td class="text-center">
                                <a class="paddingRight-15" title="Edit" href="#"><i class="fa fa-edit"></i></a>
                        </tr>
                        {foreachelse}
                        <tr>
                            <td colspan="2" class="text-center">
                                <b class="text-danger">No Record Found</b>
                            </td>
                        </tr>
                        {/foreach}
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{include file="footer.tpl" }