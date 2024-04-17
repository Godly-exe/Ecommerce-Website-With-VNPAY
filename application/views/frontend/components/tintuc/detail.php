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
				<div class="product-wrap" id="info-content">
					<div class="content-ct">
						<div class="fs-ne2-it clearfix" style="padding-top: 5px">
							<div class="fs-ne2-it clearfix">
								<div class="entry-title">
									<h3><?php echo $row['title']; ?></h3>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="fa fa-calendar" style="margin-right: 5px"></i><?php echo $row['created']; ?></li>
								</ul>
							</div>
							<div class="introtext">
								<p><?php echo $row['introtext']; ?></p>
							</div>
							<div class="entry-content">
								<p><?php echo $row['fulltext']; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>