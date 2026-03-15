<?php
/*
Template Name: Recruit Seika Part Page
*/
get_header(); ?>

<main class="recruit-detail-page">
  <div class="recruit-detail-container">

    <div class="recruit-detail-header">
      <h1 class="recruit-detail-title">募集要項</h1>
      <h2 class="recruit-detail-subtitle">生花部 - パート</h2>
    </div>

    <div class="recruit-requirements">
      <?php
      while (have_posts()) : the_post();
        the_content();
      endwhile;
      ?>
    </div>

    <div class="recruit-detail-footer">
      <a href="<?php echo home_url('/recruit'); ?>" class="recruit-back-btn">求人募集トップへ戻る ➜</a>
      <a href="https://job-gear.net/shunjusha/" target="_blank" rel="noopener noreferrer" class="recruit-site-btn">
        採用サイトへ<span class="link_img_white"></span>
      </a>
    </div>

  </div>
</main>

<?php get_footer(); ?>
