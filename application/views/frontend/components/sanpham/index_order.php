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
                                    <div class="tra-gop-0">
                                        <span class="text-tra-gop-0">Trả góp 0%</span>
                                    </div>
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