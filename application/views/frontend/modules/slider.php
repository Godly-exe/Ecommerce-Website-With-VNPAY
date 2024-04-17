
<div class="owl-carousel-slider owl-carousel owl-theme">
    <?php
    $list_banner = $this->Mslider->list_img_banner();
    foreach ($list_banner as $value) : ?>
    	<div class="item"><img src="<?php echo base_url() ?>public/images/banners/<?php echo $value['img'];?>"></div>	
   <?php endforeach; ?>
</div>
