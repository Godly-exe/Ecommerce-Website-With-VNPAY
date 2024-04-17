<script>
<!-- //FlexSlider-->
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
});
});            
</script>

<div class="flexslider">
  <ul class="slides">
   <?php 
   $img = $row['img'];
   $mang = explode('#', $img);
   foreach ($mang as $value) :?>
     <li data-thumb="public/images/products/<?php echo $value; ?>">
        <div class="thumb-image"> <img src="public/images/products/<?php echo $value; ?>"class="img-responsive"> </div>
    </li>
<?php endforeach; ?>
</ul>
<div class="clearfix"></div>
</div>