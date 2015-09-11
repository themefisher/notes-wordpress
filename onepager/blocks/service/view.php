
    



<!-- 
        Service start
        ==================== -->
        <section id="<?php echo $id; ?>" class="service section" >
            <div class="container">
                <div class="row">
                	<div class="col-md-12">
	                    <div class="heading">
	                        <h2><?php echo $contents['title']; ?></h2>
	                        <p><?php echo $contents['description']; ?></p>
	                    </div>
                	</div>
                </div>
            	<div class="row">
            		<?php foreach($contents['items'] as $ii=>$feature): ?>
		            	<div class="col-sm-6 col-md-3 col-xs-6 wow fadeInUp" data-wow-delay="<?php echo 0.5+0.3*$ii ?>s">

		            		<div class="service-item">
		            			<div class="icon-box">
	                            	<span class="icon">
	                                    <i class="<?php echo $feature['media'] ?>"></i>   
	                                </span>
	                            </div>

	                            <div class="caption">
	                                <h3><?php echo $feature['title']?></h3>
	                                <p><?php echo $feature['description']?></p>
	                            </div>
		                        
		            			
		            		</div>
		                </div>
					<?php endforeach; ?> 
                    <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.9s">
                        <div class="service">



                            <!-- <div class="icon-box">
                            	<span class="icon">
                                    <i class="ion-ios-cloud-outline"></i>   
                                </span>
                            </div>
                            <div class="caption">
                                <h3>Cloud Option</h3>
                                <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                            </div> -->
                        </div>
                    </div>
            		
            	</div>
                		
            </div><!-- .container close -->
        </section><!-- #service close -->


