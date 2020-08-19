<?get_header();?>
<!-- Title section -->
<div class="container">
<h2 class="drinks-title"><span class="dark-green"><?wp_title('');?></span> Blog</h2>
</div>
<?php $catquery = new WP_Query( 'cat=5&posts_per_page=1' ); ?>
<?php while($catquery->have_posts()) : $catquery->the_post(); ?>

<section id="drinks">
<div class="album py-5 text-center container mt-5">
<div class="container">
<div class="row">
<div class="col-md-4">
    <div class="card-body">
    <div class="hover-class">
    <a href="<?the_permalink();?>" class="blog-link">
      <img src="<?echo get_the_post_thumbnail_url(get_the_ID());?>" alt="blog-fp-image" class="blog-images-fp">
      <div class="card-bg">
      <h6 class="card-title"><?the_title();?></h6>
    </div>
    </div>
    </a>
    </div>
<?endwhile;?>
  </div>
<?php wp_reset_postdata(); ?>

<?php $catquery = new WP_Query( 'cat=5&posts_per_page=1&offset=1' ); ?>
<?php while($catquery->have_posts()) : $catquery->the_post(); ?>

<div class="col-md-4">
    <div class="card-body">
    <div class="hover-class">
    <a href="<?the_permalink();?>" class="blog-link">
      <img src="<?echo get_the_post_thumbnail_url(get_the_ID());?>" alt="blog-fp-image" class="blog-images-fp">
      <div class="card-bg">
      <h6 class="card-title"><?the_title();?></h6>
    </div>
    </div>
    </a>
    </div>
<?endwhile;?>
  </div>
  <?php wp_reset_postdata(); ?>

<?php $catquery = new WP_Query( 'cat=5&posts_per_page=6&offset=2' ); ?>
<?php while($catquery->have_posts()) : $catquery->the_post(); ?>

<div class="col-md-4">
    <div class="card-body">
    <div class="hover-class">
    <a href="<?the_permalink();?>" class="blog-link">
      <img src="<?echo get_the_post_thumbnail_url(get_the_ID());?>" alt="blog-fp-image" class="blog-images-fp">
      <div class="card-bg">
      <h6 class="card-title"><?the_title();?></h6>
    </div>
    </div>
    </div>
    </a>
  </div>
  </div>
  <?endwhile;?>
  </div>
  <?php wp_reset_postdata(); ?>
  </section>

<?get_footer();?>