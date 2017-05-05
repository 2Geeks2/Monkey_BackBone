<?php
get_header(); 
$home_img_url = esc_url( get_theme_mod('lm-home-img' ) );
$home_left_img = esc_url( get_theme_mod('lm-home-left-img' ) );
$home_center_img = esc_url( get_theme_mod('lm-home-center-img' ) );
$home_right_img = esc_url( get_theme_mod('lm-home-right-img' ) );
$home_video_url = esc_url( get_theme_mod('lm-home-video' ) );
$cta_url = esc_url( get_theme_mod(  'lm-home-cta-url' ) );
$cta_text = sanitize_text_field( get_theme_mod(  'lm-home-cta-text', __('Click Here', 'lightning-monkey') ) );
$header_text = sanitize_text_field( get_theme_mod(  'lm-home-header-text', __('Lightning Monkey', 'lightning-monkey') ) );
$subheader_text = sanitize_text_field( get_theme_mod(  'lm-home-subheader-text', __('Fast, Responsive and Customizable', 'lightning-monkey') ) );
$content_text = sanitize_text_field( get_theme_mod(  'lm-home-content-text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ornare imperdiet urna. Ut vehicula enim non bibendum tristique. Proin eleifend nibh neque, vitae tristique ex pellentesque quis.' ) );
$left_header = sanitize_text_field( get_theme_mod(  'lm-home-left-header', __('Left Header', 'lightning-monkey') ) );
$center_header = sanitize_text_field( get_theme_mod(  'lm-home-center-header', __('Center Header', 'lightning-monkey') ) );
$right_header = sanitize_text_field( get_theme_mod(  'lm-home-right-header', __('Right Header', 'lightning-monkey') ) );
$left_text = sanitize_text_field( get_theme_mod(  'lm-home-left-text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ornare imperdiet urna.' ) );
$center_text = sanitize_text_field( get_theme_mod(  'lm-home-center-text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ornare imperdiet urna.' ) );
$right_text = sanitize_text_field( get_theme_mod(  'lm-home-right-text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ornare imperdiet urna.' ) );
?>

<div class="container-wrapper home-container-wrapper" id="home-page-main-container">
    <div class="container" id="home-page">
        <div class="row section">
            <div class="col-md-6 left-home">     
                <h1 id="home-header"><?php echo $header_text; ?></h1>
                <h3 id="home-subheader"><?php echo $subheader_text; ?></h3>

                <?php echo '<div class="home-text">' . $content_text . '</div>'; ?>
		<?php echo '<div><a href="http://medicalmonkeys.ddns.net/donors/" id="home-cta-button">' . $cta_text . '</a></div>'; ?>

                <?php echo '<div class="home-text"> Challenge your friends, show your ability and increase the skills of our team. And get a 3D Print of your Organs! </div>'; ?>
                <?php echo '<div><a href="http://medicalmonkeys.ddns.net/gamerlogin/" id="home-cta-button"> I am a Gamer! </a></div>'; ?>
            </div>
            <div class="col-md-6 right-home">
                <div id="home-img-wrapper">
                    <?php 
                        if($home_video_url != ''){
                            $home_video_url = str_replace('youtu.be', 'youtube.com/embed', $home_video_url);
                            $home_video_url = str_replace('https://vimeo.com/', 'https://player.vimeo.com/video/', $home_video_url);
                            echo '<iframe id="home-video" width="560" height="315" src="' . $home_video_url . '" frameborder="0" allowfullscreen></iframe>';
                        }
                        elseif($home_img_url == ''){
                            $default_img_url = get_template_directory_uri() . '/images/responsive_illustration.jpg';
                            echo '<img src="' . $default_img_url . '"/>';
                        }
                        else{
                            echo '<img src="' . $home_img_url . '"/>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo do_shortcode("[slide-anything id='105']");  ?>
<div class="container-wrapper container-wrapper-bg home-container-wrapper bottom-home-container-wrapper">
    <div class="container section-container">
        <div class="row section">
            <div class="col-md-4">
                <div class="content home-section-wrapper">
                    <?php if(!empty($home_left_img)){ ?>
                        <img src="<?php echo $home_left_img; ?>"/>
                    <?php } ?>
                    <h3 class="home-section-header"><?php echo $left_header; ?></h3>
                    <div class="home-section-content"><?php echo $left_text; ?></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content home-section-wrapper">
                    <?php if(!empty($home_center_img)){ ?>
                        <img src="<?php echo $home_center_img; ?>"/>
                    <?php } ?>
                    <h3 class="home-section-header"><?php echo $center_header; ?></h3>
                    <div class="home-section-content"><?php echo $center_text; ?></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content home-section-wrapper">
                    <?php if(!empty($home_right_img)){ ?>
                        <img src="<?php echo $home_right_img; ?>"/>
                    <?php } ?>
                    <h3 class="home-section-header"><?php echo $right_header; ?></h3>
                    <div class="home-section-content"><?php echo $right_text; ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php the_content(); ?>
<?php 
get_footer(); ?>
<script type="text/javascript">
    function resizeIframe(selector){
      var iframe = jQuery(selector);
      var w = iframe.parent().width();
      var h = w * 0.5625;
      iframe.attr('width', w);
      iframe.attr('height', h);
    }
    jQuery(document).ready(function(){
      resizeIframe('#home-video');
      jQuery(window).resize(function(){
         resizeIframe('#home-video');
      });
    });
</script>