<!-- 
Contact start
==================== -->
<section id="<?php echo $id; ?>" class="section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="block">
                    <div class="heading wow fadeInUp">
                        <h2><?php echo $contents['title']; ?></h2>
                        <p><?php echo $contents['description']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 wow fadeInUp">
                <div class="block text-left">
                    <div class="sub-heading">
                        <h4><?php echo $contents['subtitle']; ?></h4>
                        <p><?php echo $contents['sub-description']; ?></p>
                    </div>
                    <address class="address">
                        <hr>
                        <p><?php echo $contents['address']; ?></p>
                        <hr>
                        <p><?php echo $contents['email-address'] ?></p>
                        <strong>P:</strong>&nbsp;+614 3948 2726</p>
                        
                        
                    </address>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 wow fadeInUp" data-wow-delay="0.3s">
                <div class="contact-form">
                    <?php echo do_shortcode($contents['contact_form']) ?>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="block">
                    <p>
                        <?php echo $contents['copyright_text']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
