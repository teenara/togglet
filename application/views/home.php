


		<div class="span9">		
			<div class="well well-small">
			<h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
			<div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner">
			<div class="item active">
			  <ul class="thumbnails"> 
				  <?php foreach($featureProNew as $featureProNew){?>
					<?php
					$prodAddDate=$featureProNew->product_time;
					$proTime=strtotime($prodAddDate);
					$proDate=date("Y-m-d",$proTime);
					$today=date("Y-m-d");
					?>
            <li class="span3">
				  <div class="thumbnail">
					  <?php if($proDate==$today){?>
				  <i class="tag"></i>
				  <?php }?>
					<a href="<?php echo base_url("product/ProductDetails")?>?pid=<?php echo $featureProNew->product_id?>"><img src="<?php echo base_url();?><?php echo $featureProNew->product_image?>" alt=""></a>
					<div class="caption">
					  <h5><?php echo $featureProNew->product_name ?></h5>
					  <h4><a class="btn" href="<?php echo base_url("product/ProductDetails")?>?pid=<?php echo $featureProNew->product_id?>">VIEW</a> <span class="pull-right">$<?php echo $featureProNew->product_price ?></span></h4>
					</div>
				  </div>
				</li>
				<?php } ?>
				</ul>
			  </div>
			   <div class="item" >
			  <ul class="thumbnails">
			  <?php foreach ($featureProOld as $featureProOld){?>
				<?php
                    $prodAddDate=$featureProOld->product_time;
                    $proTime=strtotime($prodAddDate);
                    $proDate=date("Y-m-d", $proTime);
                    $today=date("Y-m-d");
                    ?>
				<li class="span3">
				  <div class="thumbnail">
				  <?php if ($proDate==$today) {?>
				  <i class="tag"></i>
				  <?php }?>
					<a href="<?php echo base_url("product/ProductDetails")?>?pid=<?php echo $featureProOld->product_id?>"><img src="<?php echo base_url();?><?php echo $featureProOld->product_image?>" alt=""></a>
					<div class="caption">
					  <h5><?php echo $featureProOld->product_name ?></h5>
					   <h4><a class="btn" href="<?php echo base_url("product/ProductDetails")?>?pid=<?php echo $featureProOld->product_id?>">VIEW</a> <span class="pull-right">$<?php echo $featureProOld->product_price ?></span></h4>
					</div>
				  </div>
				</li>
				<?php }?>
			  </ul>
			  </div>
			  </div>
			  <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
			  <a class="right carousel-control" href="#featured" data-slide="next">›</a>
			  </div>
			  </div>
		</div>
		    <h4>Latest Products </h4>
			  <ul class="thumbnails">
				<?php foreach ($homeLatestPro as $homeLatestPro){?>
					<li class="span3">
				  <div class="thumbnail">
					<a  href="<?php echo base_url("product/ProductDetails")?>?pid=<?php echo $homeLatestPro->product_id?>"><img src="<?php echo base_url();?><?php echo $homeLatestPro->product_image?>" alt=""/></a>
					<div class="caption">
					  <h5><?php echo $homeLatestPro->product_name?></h5>
					  <p> 
						Lorem Ipsum is simply dummy text. 
					  </p>
					 
					  <h4 style="text-align:center"><a class="btn" href="<?php echo base_url("product/ProductDetails")?>?pid=<?php echo $homeLatestPro->product_id?>"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?php echo $homeLatestPro->product_price?></a></h4>
					</div>
				  </div>
				</li>
				<?php }?>
				</ul>	

		</div>
		</div>
	</div>
</div>
