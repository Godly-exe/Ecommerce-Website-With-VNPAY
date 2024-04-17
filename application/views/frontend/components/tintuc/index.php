<section id="content">
    <div class="row wraper">
      <div class="banner-product">
    <!-- <div class="container">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <img src="public/images/sp.png">
      </div>
    </div> -->
  </div>
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-menu pull-left">
                    <?php $this->load->view('frontend/modules/category'); ?> 
                </div>
                <?php $this->load->view('frontend/modules/news'); ?> 
            </div>
            <div class = "col-xs-12 col-sm-12 col-md-9 col-lg-9 product-content" id="list-content">
                <div class="product-wrap">
                  <div class="fs-newsboxs">
                    <?php foreach ($list as $item) :?>
                        <div class="fs-ne2-it clearfix">
                            <div class="fs-ne2-if">
                                <a class="fs-ne2-img" href="tin-tuc/<?php echo $item['alias']; ?>">
                                    <img  src="public/images/posts/<?php echo $item['img']; ?>"">
                                </a>
                                <div class="fs-n2-info">
                                    <h3><a class="fs-ne2-tit" href="tin-tuc/<?php echo $item['alias']; ?>" title=""><?php echo $item['title']; ?></a></h3>
                                    <div class="fs-ne2-txt"><?php echo $item['introtext']; ?></div>
                                    <p class="fs-ne2-bot">
                                        <span class="fs-ne2-user">
                                            <img class="lazy"src="" style="">
                                        </span> 
                                        <span><?php echo $item['created']; ?></span>
                                    </p>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>   

                </div>
                <div class = "row text-center">
                   <ul class ="pagination">
                      <?php echo $strphantrang; ?>
                  </ul>
              </div>
          </div>

      </div>
  </div>
</div>
</section>