<div class="full-width-grey">
    <div class="container">
        <div class="col-md-6">        
            <a name="contact-us"><h2>CONTACT US</h2></a>
            <?php the_secondary_content('Contact-us'); ?>
        </div>

        <div class="col-md-6">
            <br/>
<?php echo do_shortcode("[contact-form][contact-field label='Your name' type='name' required='1'/][contact-field label='Your email' type='email' required='1'/][contact-field label='How can we help?' type='textarea' required='0'/][/contact-form]"); ?>
        </div>
    </div>
    <a href="https://goo.gl/maps/LYsfyF9SCUB2"><img src="<?php bloginfo('template_directory'); ?>/img/google-map.jpg" style="max-width:100%;"></a>
</div>