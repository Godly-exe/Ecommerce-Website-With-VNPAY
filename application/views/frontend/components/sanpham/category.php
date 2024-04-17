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
                <div class="list-menu pull-left col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php $this->load->view('frontend/modules/category'); ?>
                </div>
                <?php $this->load->view('frontend/modules/product-sale'); ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 product-content">
               <div class="product-wrap">
                 <div class="collection__title">
                     <h1><span><?php echo $categoryname ?></span></h1>
                    <div id="sort-by" class="hidden-xs">
                      <label class="left hidden-xs" for="sort-select">Sắp xếp theo: </label>
                      <form class="form-inline form-viewpro">
                        <div class="form-group">
                            <?php 
                            $html_list="";
                            $html_list.='<select id ="sortControl" class = "form-control input-sm" onchange="sortby(this.value)">';
                            if($this->session->userdata('sortby-category')){
                                $data = $this->session->userdata('sortby-category');
                                $sort = $data[0].'-'.$data[1];
                                if($sort == 'number_buy-desc'){
                                    $html_list.='<option value="number_buy-desc" selected>Bán chạy nhất</option>';
                                }else{
                                    $html_list.='<option value="number_buy-desc">Bán chạy nhất</option>';
                                }
                                if($sort == 'name-asc'){
                                    $html_list.='<option value="name-asc" selected>A → Z</option>';
                                }else{
                                    $html_list.='<option value="name-asc" >A → Z</option>';
                                }
                                if($sort == 'name-desc'){
                                    $html_list.='<option value="name-desc" selected>Z → A</option>';
                                }else{
                                    $html_list.='<option value="name-desc">Z → A</option>';
                                }
                                if($sort == 'price-asc'){
                                    $html_list.='<option value="price-asc" selected>Giá tăng dần</option>';
                                }else{
                                    $html_list.='<option value="price-asc">Giá tăng dần</option>';
                                }
                                if($sort == 'price-desc'){
                                    $html_list.='<option value="price-desc" selected>Giá giảm dần</option>';
                                }else{
                                    $html_list.='<option value="price-desc">Giá giảm dần</option>';
                                }
                                if($sort == 'created-desc'){
                                    $html_list.='<option value="created-desc" selected>Hàng mới nhất</option>';
                                }else{
                                    $html_list.='<option value="created-desc">Hàng mới nhất</option>';
                                }
                                if($sort == 'created-asc'){
                                    $html_list.='<option value="created-asc" selected>Hàng cũ nhất</option>';
                                }else{
                                    $html_list.='<option value="created-asc">Hàng cũ nhất</option>';
                                }
                            }else{
                                $html_list.='<option value="number_buy-desc">Bán chạy nhất</option>';
                                $html_list.='<option value="name-asc">A → Z</option>';
                                $html_list.='<option value="name-desc">Z → A</option>';
                                $html_list.='<option value="price-asc">Giá tăng dần</option>';
                                $html_list.='<option value="price-desc">Giá giảm dần</option>';
                                $html_list.='<option value="created-desc">Hàng mới nhất</option>';
                                $html_list.='<option value="created-asc">Hàng cũ nhất</option>';
                                
                            }
                            $html_list.='</select>';
                            echo $html_list;
                            ?>
                        </div>
                    </form>
                </div>
                    <div class="collection-filter" id = "list-product">
                      <div class="category-products clearfix">
                       <div class="products-grid clearfix">
                        <?php if(count($list)==0): ?>
                            <p class="no-products"> Danh mục hiện chưa có sản phẩm nào !</p>
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
<script type="text/javascript">
    function sortby(option){
        var strurl="<?php echo base_url();?>"+'/sanpham/category';
        jQuery.ajax({
            url: strurl,
            type: 'POST',
            dataType: 'json',
            data: {'sapxep-category': option},
            success: function(data) {
                $('#list-product').html(data);
            },error: (error) => {
                     console.log(JSON.stringify(error));
   }
        });
    }
</script>