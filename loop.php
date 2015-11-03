<?php if ( is_front_page() && is_home() ) { ?>
  <!-- // Default homepage -->

<div class="container">
<?php rewind_posts(); ?>
<?php while (have_posts()) : the_post(); ?>
<div class="row">
    <h1><?php the_title(); ?></h1>
    </div>
<div class="row">
     <div class="col-md-8">
         <?php the_content(); ?>
    </div>
</div>
  <?php endwhile; ?>
</div>
<?php } elseif ( is_front_page() ) { ?>
  <!-- // static homepage -->

<div class="container">
<?php rewind_posts(); ?>
<?php while (have_posts()) : the_post(); ?>
<div class="row-fluid">
    <a name="about-us"><h2>About Us</h2></a>
    </div>
<div class="row-fluid">
     <div class="col-md-12">
         <?php the_content(); ?>
    </div>
</div>
  <?php endwhile; ?>
</div>
<?php } elseif ( is_home() ) { ?>
  <!-- // blog page -->

<div class="container">
<?php rewind_posts(); ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="row-fluid">
    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><h2><?php the_title(); ?></h2></a>    
    </div>
    <hr>
    
<div class="row-fluid">
     <div class="col-md-8">
         <?php the_content(); ?>
    </div>
    <div class="col-md-4">
	<?php if ( has_post_thumbnail() ) the_post_thumbnail(array(400,400,true), array('class' => 'img-thumbnail hidden-xs')); else { ?>
    <img src="<?php bloginfo('template_directory'); ?>/img/OW_LOGO.png" alt="<?php the_title(); ?>" class="img-thumbnail hidden-xs" style="width: 100%;" /><?php } ?>
    
    </div>    
</div>
    
    
  <?php endwhile; ?>
</div>
<?php } else { ?>

  <!-- //everything else -->

<div class="container">
<?php rewind_posts(); ?>
<?php while (have_posts()) : the_post(); ?>
<div class="row">
    <h1><?php the_title(); ?></h1>
    </div>
<div class="row">
     <div class="col-md-8">
         <?php the_content(); ?>
    </div>
    <div class="col-md-4">
	<?php if ( has_post_thumbnail() ) the_post_thumbnail(array(400,400,true), array('class' => 'img-thumbnail hidden-xs')); else { ?>
    <img src="<?php bloginfo('template_directory'); ?>/img/OW_LOGO.png" alt="<?php the_title(); ?>" class="img-thumbnail hidden-xs" style="width: 100%;" /><?php } ?>
    </div>    
    
</div>
  <?php endwhile; ?>
</div><?php } ?>

