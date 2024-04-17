<section id="product-all" class="collection">
	<div class="banner-product">
        <!-- <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="public/images/sp.png">
            </div>
        </div> -->
    </div>
	<div class="slider">
		<div class="container">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-menu pull-left">
                    <?php $this->load->view('frontend/modules/category'); ?>
                </div>
                <?php $this->load->view('frontend/modules/product-sale'); ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 product-content">
             <div class="product-wrap">
               <div class="collection__title">
                   <?php
                    echo '<h3>Tìm được '.$count.' kết quả với từ khóa : <span style="color: red;">'.$key.'</span></h3>';
                    ?>
                   <div class="collection-filter" id = "list-product">
                      <div class="category-products clearfix">
                         <div class="products-grid clearfix">
                            <?php if(count($list)==0): ?>
                                <p>Không có sản phẩm !</p>
                                <?php else : ?>
                                    <?php foreach ($list as $sp) :?>
                                       <div class="col-md-3 col-lg-3 col-xs-6 col-6">
                                        <div class="product-lt">
                                            <div class="lt-product-group-image">
                                                <a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>" >
                                                    <img class="img-p"src="public/images/products/<?php echo $sp['avatar'] ?>" alt="">
                                                </a>
                                                <?php if($sp['sale'] > 0) :?>
                                                    <div class="giam-percent">
                                                        <span class="text-giam-percent">Giảm <?php echo $sp['sale'] ?>%</span>
                                                    </div>
                                                <?php endif; ?>
                                            </div>

                                            <div class="lt-product-group-info">
                                                <a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>">
                                                    <h3><?php echo $sp['name'] ?></h3>
                                                </a>
                                                <div class="price-box">
                                                    <?php if($sp['sale'] > 0) :?>

                                                        <p class="old-price">
                                                            <span class="price"><?php echo(number_format($sp['price'])); ?>₫</span>
                                                        </p>
                                                        <p class="special-price">
                                                            <span class="price"><?php echo(number_format($sp['price_sale'])); ?>₫</span>
                                                        </p>
                                                        <?php else: ?>
                                                         <p class="old-price">
                                                            <span class="price" style="color: #fff"><?php echo(number_format($sp['price'])); ?>₫</span>
                                                        </p>
                                                        <p class="special-price">
                                                            <span class="price"><?php echo(number_format($sp['price'])); ?>₫</span>
                                                        </p>
                                                    <?php endif;?>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class = "text-center pull-right">
                                <ul class ="pagination">
                                    <?php echo $strphantrang; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<script>
    function onAddCart(id){
        var strurl="<?php echo base_url();?>"+'/sanpham/addcart';
        jQuery.ajax({
            url: strurl,
            type: 'POST',
            dataType: 'json',
            data: {id: id},
            success: function(data) {
                document.location.reload(true);
                alert('Thêm sản phẩm vào giỏ hàng thành công !');
            }
        });
    }
    function sortby(option){
        var strurl="<?php echo base_url();?>"+'/sanpham/index';
        jQuery.ajax({
            url: strurl,
            type: 'POST',
            dataType: 'json',
            data: {'sapxep': option},
            success: function(data) {
                $('#list-product').html(data);
            }
        });
    }
</script>
