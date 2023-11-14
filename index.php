 <?php include('header.php'); ?>

 <section class="candidaturas features-head bg-light py-3 init">
   <div class="container">
     <div>
       <div class="page_header">
         <h1>Projects</h1>
         <div class="page_header--intro">
           <p class="page_header--intro-p">
             Here are some of main projects that I have been working on.
           </p>
         </div>
       </div>
     </div>
   </div>
 </section>
 <section id="main-content" class="posts features-head bg-light py-3">
   <div class="container">
     <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post();
      ?>
         <div class="post-item article-card">
           <a href="<?php the_permalink(); ?>" class="the_archive-news_card">

             <div class="archive-news-card--left">
               <img class="archive-news-card__image" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" style="object-fit: cover;">
             </div>
           </a>
           <div class="archive-news-card--right">
             <div class="archive-newsPreviewContent">
               <div class="article-previewContent--header">
                 <span class="post">
                   <?php echo get_the_category_list(', '); ?>
                 </span>
                 <?php the_date('Y-m-d', '<span class="theDate">', '</span>'); ?>
               </div>
             </div>
             <h2 class="archive-newsTitle"><?php the_title(); ?></h2>
           </div>
         </div>
       <?php }
      } else {
        ?>
       <h3>We have found no posts.</h3>
     <?php
      }
      ?>
     <?php echo paginate_links(); ?>
   </div>
 </section>

 <script>
   jQuery(document).ready(function($) {
     $(".article-card").click(function() {
       window.location = $(this).find("a").attr("href");
       return false;
     });
   });
 </script>

 <?php
  get_footer();
  ?>