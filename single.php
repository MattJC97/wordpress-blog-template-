<?get_header();?>

<?while(have_posts()):the_post()?>

<div class="container">
<h2 class="title"><?the_title();?></h2>
<h6 class="author text-muted">Written by: <span class="dark-green"><?the_author();?></span> at <span class="dark-green"><?the_time();?></span></h6>
<p><?the_content();?></p>
</div>
<?endwhile;?>
<?get_footer();?>