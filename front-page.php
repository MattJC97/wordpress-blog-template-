<?get_header();?>

<!-- The loop -->
  <?
  $args = array(
    'post_type' =>'post',
    'posts_per_page'=>1,
  );

  $featuredPost = new WP_Query($args);

    while($featuredPost->have_posts()){
      $featuredPost->the_post();
    
    ?>
<!-- End of loop -->

<!-- Get post thumbnail to display as featured image cover -->
<?
  $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
?>
<!-- end of php -->
<a href="<?the_permalink();?>" class="featured-link">
<section id="featured-blog" style="background: url('<? echo $backgroundImg[0];?>') no-repeat;">
<div class="bg-standout">
  <div class="container featured-container">
    <div class="row">
      <div class="col col-md-8 featured-content">
        <h6 class="featured-tag"> <span class="featured-tag-style">Featured Article</span></h6>
     <h1 class="featured-title" ><?the_title();?></h1>
     <p class="text-muted"></p>
  </div>
    </div>
      </div>
      </div>
</section>
</a>
<?}
  wp_reset_query();
?>

<!-- The loop -->
<?
  $args = array(
    'post_type' =>'post',
    'posts_per_page'=>1,
    'offset' => 1,
  );

  $blogposts = new WP_Query($args);

    while($blogposts->have_posts()){
      $blogposts->the_post();
    
    ?>
<section id="blog-posts">
<div class="album py-5 text-center container mt-5">
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
  </div>
  <?}
  wp_reset_query();
  ?>
  <!-- The loop -->
  <?
  $args = array(
    'post_type' =>'post',
    'posts_per_page'=>1,
    'offset' => 2,
  );

  $blogposts = new WP_Query($args);

    while($blogposts->have_posts()){
      $blogposts->the_post();
    
    ?>
  <div class="col-md-4">
    <div class="card-body">
      <div class="hover-class">
    <a href="<?the_permalink();?>"class="blog-link">
      <img src="<?echo get_the_post_thumbnail_url(get_the_ID());?>" alt="blog-fp-image" class="blog-images-fp">
      <div class="card-bg">
      <h6 class="card-title"><?the_title();?></h6>
      </div>
      </div>
    </a>
    </div>
  </div>
  <?}
  wp_reset_query();
  ?>
  <!-- The loop -->
<?
  $args = array(
    'post_type' =>'post',
    'posts_per_page'=>12,
    'offset' => 3,
  );

  $blogposts = new WP_Query($args);

    while($blogposts->have_posts()){
      $blogposts->the_post();
    
    ?>
    <div class="col-md-4">
    <div class="card-body">
      <div class="hover-class">
    <a href="<?the_permalink();?>"class="blog-link">
      <img src="<?echo get_the_post_thumbnail_url(get_the_ID());?>" alt="blog-fp-image" class="blog-images-fp">
      <div class="card-bg">
      <h6 class="card-title"><?the_title();?></h6>
      </div>
      </div>
    </a>
    </div>
  </div>
  <?}
  wp_reset_query();
  ?>
</div>
</div>
</section>
<?get_footer();?>