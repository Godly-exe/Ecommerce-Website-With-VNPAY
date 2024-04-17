<script src="<?php echo base_url('public/ckeditor/ckeditor.js'); ?>"></script>

<section id="content">
    <div class="container account">
        <aside class="col-right sidebar col-md-3 col-xs-12">
            <div class="block block-account">
                <div class="general__title">
                    <h2 style="font-size: 20px; border-bottom: 3px solid rgb(89, 17, 17);; padding-bottom: 10px; width: fit-content; margin-bottom: 20px;"><span>Cá nhân</span></h2>
                </div>
                <div class="block-content">
                    <p>Tài khoản: <strong><?php echo $info['username'] ?></strong></p>
                    <p>Họ và tên: <strong><?php echo $info['fullname'] ?></strong></p>
                    <p>Email: <strong><?php echo $info['email'] ?></strong></p>
                    <p>Số điện thoại: <strong><?php echo $info['phone'] ?></strong></p>
                </div>
                <div class="general__title">
                    <h2 style="font-size: 20px; border-bottom: 3px solid rgb(89, 17, 17);; padding-bottom: 10px; width: fit-content; margin-bottom: 20px;"><span>Chức năng</span></h2>
                </div>    
                <div> 
                    <button class="btn"><a href="<?php echo base_url('khach-hang/ban-san-pham/'); ?>">Đăng sản phẩm</a></button>
                    <button class="btn"><a href="<?php echo base_url('khach-hang/san-pham/'); ?>">Quản lý sản phẩm</a></button>
                </div>
                <br>
                <div>
                    <button class="btn"><a href="reset_password">Đổi mật khẩu</a></button>
                    <button class="btn"><a href="<?php echo base_url('dang-xuat/'); ?>">Đăng xuất</a></button>
                </div>    
            </div>
        </aside>
        <div class="col-main col-md-9 col-sm-12">
            <div class="my-account">
            <br>
            <div class="table-order">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">STT</th>
                            <th class="text-center">Hình</th>
                            <th class="text-center">Tên sản phẩm</th>
                            <th class="text-center">Số lượng</th>
                            <th class="text-center">Thể Loại</th>
                            <th class="text-center">Trạng thái</th>
                            <th class="text-center">Nhập hàng</th>
                            <th class="text-center" colspan="2">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        <?php foreach ($products as $row):?>
                            <?php $i++; ?>
                            <tr>
                                <td class="text-center"><?php echo $i; ?></td>
                                <td style="width:70px">
                                    <img src="public/images/products/<?php echo $row['avatar'] ?>" alt="<?php echo $row['name'] ?>" style="width: 150px; height: 100px;" >
                                </td>
                                <td style="font-size: 16px;">
                                    <a style="color: rgb(89, 17, 17);; text-decoration: underline;" href="<?php echo base_url($row['alias'].'/') ?>"><?php echo $row['name'] ?></a>
                                    
                                </td>
                                <td class="text-center"> <?php echo $row['number'] - $row['number_buy'] ?></td>
                                    <?php 
                                        $namecat = $this->Mcategory->category_name($row['catid']);
                                    ?>
                                <td class="text-center">
                                    <?php echo $namecat ?>  
                                </td>
                                <td class="text-center">
                                    
                                    <?php if($row['status']==1):?>
                                        <a href="<?php echo base_url('khach-hang/ngung-ban/'.$row['id'].'/') ?>">
                                            <span class="glyphicon glyphicon-ok-circle mauxanh18"></span>
                                            <br>
                                            <span>Đang giao bán</span>
                                        </a>
                                    <?php else: ?>
                                        <span class="glyphicon glyphicon-remove-circle maudo"></span>
                                        <br>
                                        <span>Chưa được bán</span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-center"><a class="btn btn-info btn-xs" style="padding: 5px" href="<?php echo base_url('khach-hang/nhap-hang/'.$row['id'].'/') ?>" role = "button">
                                    <span class="glyphicon glyphicon-trash"></span>Nhập hàng
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-success btn-xs" style="padding: 5px" href="<?php echo base_url('khach-hang/sua-san-pham/'.$row['id'].'/') ?>" role="button">
                                    <span class="glyphicon glyphicon-edit"></span> Sửa
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-danger btn-xs" style="padding: 5px" href="<?php echo base_url('khach-hang/xoa-san-pham/'.$row['id'].'/'); ?>" onclick="return confirm('Xác nhận xóa sản phẩm này ?')" role = "button">
                                        <span class="glyphicon glyphicon-trash"></span> Xóa
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php if($i == 0){ ?>
                    <br>
                    <p class="text-center">Danh sách đơn hàng của bạn đang trống!</p>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<style type="text/css">
    .mauxanh18{
        color: green;
    }

    .maudo{
        color: red;
    }
</style>