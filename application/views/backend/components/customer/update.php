<?php echo form_open('admin/customer/update/'.$row['id']); ?>
<div class="content-wrapper">
    <form action="<?php echo base_url() ?>admin/customer/update.html" method="post" accept-charset="utf-8">
        <section class="content-header">
            <h1><i class="fa fa-user-plus"></i> Cập nhật khách hàng</h1>
            <div class="breadcrumb">
                <a class="btn btn-primary btn-sm" href="admin/customer" role="button">
                    <span class="glyphicon glyphicon-remove"></span> Thoát
                </a>
            </div>
        </section>    
        <section class="content">
          <!-- Info boxes -->
            <div class="row">
                <div class="col-md-12">
                                    <div class="box">
                        <div class="box-body">
                            <!--ND-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Họ và tên <span class="maudo">(*)</span></label>
                                    <input type="text" name="fullname" class="form-control" value="<?php echo $row['fullname'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Điện thoại <span class="maudo">(*)</span></label>
                                    <input type="text" name="phone" class="form-control" value="<?php echo $row['phone'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Email <span class="maudo">(*)</span></label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $row['email'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="status" class="form-control" style="width:300px">
                                        <option value="1" <?php if($row['status'] == 1) {echo 'selected';}?> >Đang hoạt động</option>
                                        <option value="0" <?php if($row['status'] == 0) {echo 'selected';}?>>Ngừng hoạt động</option>
                                    </select>
                                </div>
                            </div>
                            <!--/.ND-->
                        </div>
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </form>        
</div>