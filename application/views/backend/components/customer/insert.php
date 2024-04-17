<?php echo form_open('admin/customer/insert'); ?>
<div class="content-wrapper" style="min-height: 454px;">
    <form action="http://kimhongphat.com/khpquanly/customer/insert.html" method="post" accept-charset="utf-8">
        <section class="content-header">
            <h1><i class="fa fa-user-plus"></i> Thêm thành viên</h1>
            <div class="breadcrumb">
                <button name="THEM_NEW" type="submit" class="btn btn-primary btn-sm">
                        <span class="glyphicon glyphicon-floppy-save"></span> Lưu [Thêm]
                </button>
                <a class="btn btn-primary btn-sm" href="khpquanly/customer" role="button">
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
                                    <input type="text" name="fullname" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Điện thoại <span class="maudo">(*)</span></label>
                                    <input type="text" name="phone" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email <span class="maudo">(*)</span></label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Giới tính</label>
                                    <select name="gender" class="form-control" style="max-width:30%">
                                        <option value="1">Nam</option>
                                        <option value="0">Nữ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ <span class="maudo">(*)</span></label>
                                    <input type="text" name="address" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Trạng thái </label>
                                    <select name="status" class="form-control" style="max-width:30%">
                                        <option value="1">Xuất bản</option>
                                        <option value="0">Chưa xuất bản</option>
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