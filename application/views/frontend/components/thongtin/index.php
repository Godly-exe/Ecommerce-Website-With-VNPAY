<section id="content">
	<div class="container account">
        <aside class="col-right sidebar col-md-3 col-xs-12">
            <div class="block block-account">
                <div class="general__title">
                    <h2><span>Thông tin tài khoản</span></h2>
                </div>
                <div class="block-content">
                    <p>Tài khoản: <strong><?php echo $info['username'] ?></strong></p>
                    <p>Họ và tên: <strong><?php echo $info['fullname'] ?></strong></p>
                    <p>Email: <strong><?php echo $info['email'] ?></strong></p>
                    <p>Số điện thoại: <strong><?php echo $info['phone'] ?></strong></p>
                </div>
                <br>    
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

                <?php if($this->Minfocustomer->order_listorder_customerid_not($info['id']) != null)
                { ?>
                    <div class="general__title">
                        <h2><span>Danh sách đơn hàng chưa duyệt</span></h2>
                    </div>
                    <table style="padding-right: 10px; width: 100%;">
                        <thead style="border: 1px solid silver;">
                            <tr>
                                <th class="text-left" style="padding:5px 10px">Đơn hàng</th>
                                <th style="padding:5px 10px">Ngày</th>
                                <th style="text-align: center; padding:5px 10px">
                                    Giá trị đơn hàng 
                                </th>
                                <th style="text-align: center;">Trạng thái đơn hàng</th>
                                <th style="text-align: center;" colspan="2">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody style="border: 1px solid silver;">
                            <?php $order = $this->Minfocustomer->order_listorder_customerid_not($info['id']);
                            foreach ($order as $value):?>
                                <tr style="border-bottom: 1px solid silver;">
                                    <td style="padding:5px 10px;">#<?php echo $value['orderCode'] ?></td>
                                    <td style="padding:5px 10px;"><?php echo $value['orderdate'] ?></td>
                                    <td style="text-align: center; padding:5px 10px;"><span class="price-2"><?php echo number_format($value['money']) ?> VNĐ</span></td>
                                    <td style="padding:5px 10px; text-align: center;">
                                       <?php
                                       switch ($value['status']) {
                                        case '0':
                                        echo 'Đang đợi duyệt';
                                        break;
                                    }
                                    $id = $value['id'];
                                    ?>
                                </td>
                                <td width="70">
                                    <span> <a style="color: rgb(89, 17, 17);;" href="account/orders/<?php echo $value['id'] ?>">Xem chi tiết</a></span>
                                </td>
                                <td width="70">
                                    <a style="color: red;" href="thongtin/update/<?php echo $value['id'];?>" onclick="return confirm('Xác nhận hủy đơn hàng này ?')">Hủy đơn hàng</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php
            }
            ?>
            
            <div class="general__title">
                <h2><span>Danh sách đơn hàng</span></h2>
            </div>
            <div class="table-order">
                <table style="padding-right: 10px; width: 100%;">
                    <thead style="border: 1px solid silver;">
                        <tr>
                            <th class="text-left" style="padding:5px 10px">Đơn hàng</th>
                            <th style="padding:5px 10px">Ngày</th>
                            <th style="text-align: center; padding:5px 10px">
                                Giá trị đơn hàng 
                            </th>
                            <th style="text-align: center;">Trạng thái đơn hàng</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody style="border: 1px solid silver;">
                        <?php $i = 0 ?>
                        <?php $order = $this->Minfocustomer->order_listorder_customerid($info['id']);
                        foreach ($order as $value):?>
                            <tr style="border-bottom: 1px solid silver;">
                                <td style="padding:5px 10px;">#<?php echo $value['orderCode'] ?></td>
                                <td style="padding:5px 10px;"><?php echo $value['orderdate'] ?></td>
                                <td style="text-align: center; padding:5px 10px;"><span class="price-2"><?php echo number_format($value['money']) ?> VNĐ</span></td>
                                <td style="padding:5px 10px; text-align: center;">
                                   <?php
                                   switch ($value['status']) {
                                    case '0':
                                    echo 'Đang đợi duyệt';
                                    break;
                                    case '1':
                                    echo 'Đang giao hàng';
                                    break;
                                    case '2':
                                    echo 'Đã giao';
                                    break;
                                    case '3':
                                    echo 'Khách hàng đã hủy';
                                    break;
                                    case '4':
                                    echo 'Nhân viên đã hủy';
                                    break;
                                }
                                $id = $value['id'];
                                ?>
                            </td>
                            <td width="70">
                                <span> <a style="color: rgb(89, 17, 17);;" href="account/orders/<?php echo $value['id'] ?>">Xem chi tiết</a></span>
                            </td>
                        </tr>
                        <?php $i++; ?>
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
