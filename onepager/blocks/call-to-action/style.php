#<?php echo $id; ?>{
	background-image : url(<?php echo $contents['banner_bg']?>);
	background-size : cover;
	background-repeat : no-repeat;
}

#<?php echo $id ?> .subscription-form input[type=submit] {
	background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,<?php echo $settings['button-color'] ;?>), color-stop(100%,#41aba0));
    background: -webkit-linear-gradient(-45deg, <?php echo $settings['button-color'] ;?> 0%,#41aba0 100%);
    background: -o-linear-gradient(-45deg, <?php echo $settings['button-color'] ;?> 0%,#41aba0 100%);
    background: -ms-linear-gradient(-45deg, <?php echo $settings['button-color'] ;?> 0%,#41aba0 100%);
    background: linear-gradient(135deg, <?php echo $settings['button-color'] ;?> 0%,#41aba0 100%);
}