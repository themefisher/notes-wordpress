


<section id="<?php echo $id; ?>" class="call-to-action section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow text-center">
                <div class="block text-center">
                    <h2><?php echo $contents['title']; ?></h2>
                    <p class="wow fadeInUp" data-wow-delay=".3s"><?php echo $contents['description']; ?></p>
                    <div class="form-group subscription-form">
                        <?php echo do_shortcode($contents['subscription_form']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- #call-to-action close -->