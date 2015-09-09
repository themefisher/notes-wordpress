 <!-- 
        Header start
        ==================== -->

<header id="<?php echo $id; ?>" class="header">
    <div class="navbar-default navbar-fixed-top" id="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url(); ?>">
                    <img class="logo-1" src="<?php echo $contents['logo']; ?>" alt="<?php echo site_url(); ?>">
                    <img class="logo-2" src="<?php echo $contents['logo-2']; ?>" alt="<?php echo site_url(); ?>">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <nav class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right" >
                </ul>
                    <?php wp_nav_menu(array(
                    'menu' =>$contents['menu'] ,
                    'menu_class'=>'nav navbar-nav navbar-right',
                    'menu_id'=>'top-nav',

                    )) ?>
                    
            </nav><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </div>

    <section id="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="block">
                        <h1 class="wow fadeInDown"><?php echo $contents['title']; ?></h1>
                        <p class="wow fadeInDown" data-wow-delay="0.3s"><?php echo $contents['description'] ?></p>
                        <div class="wow fadeInDown" data-wow-delay="0.3s">
                            <a class="btn btn-default btn-home" href="<?php echo $contents['button_link'] ?>" role="button"><?php echo $contents['button_text'] ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow zoomIn">
                    <div class="block">
                        <div class="counter text-center">
                            <ul id="countdown_dashboard">
                                <li>
                                    <div class="dash days_dash">
                                        <div class="digit">0</div>
                                        <div class="digit">0</div>
                                        <div class="digit">0</div>
                                        <span class="dash_title">Days</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="dash hours_dash">
                                        <div class="digit">0</div>
                                        <div class="digit">0</div>
                                        <span class="dash_title">Hours</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="dash minutes_dash">
                                        <div class="digit">0</div>
                                        <div class="digit">0</div>
                                        <span class="dash_title">Minutes</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="dash seconds_dash">
                                        <div class="digit">0</div>
                                        <div class="digit">0</div>
                                        <span class="dash_title">Seconds</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- header close -->
</header>






        

        



<script>
jQuery(document).ready(function(){
     jQuery('#countdown_dashboard').countDown({
        targetDate: {
            'day':      <?php echo $contents['counter_day']  ?>,
            'month':    <?php echo $contents['counter_month']  ?>,
            'year':     <?php echo $contents['counter_year']  ?>,
            'hour':     <?php echo $contents['counter_hour']  ?>,
            'min':      59,
            'sec':      59,
        },
        omitWeeks: true
    });
});

</script>

