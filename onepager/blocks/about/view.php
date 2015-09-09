<section id="<?php echo $id ?>" class="about section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-7">
                <div class="section-content wow fadeInLeft">
                    <div class="content">
                        <div class="sub-heading">
                            <h3><?php echo $contents['title']; ?></h3>
                        </div>
                        <div class="block">
                            <p><?php echo $contents['description']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
                    
            <div class="col-sm-6 col-md-5">
                <div class="about-slider">

                    <?php foreach($contents['items'] as $ii=>$slide): ?>
                        <img src=" <?php echo $slide['slider-image']; ?> " alt="<?php echo $slide['title'] ?> ">
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>


