<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @author      Local Marketing Inc.
 * @version     1.2.3
 * @since       WPegg 0.18
 */
?>

<?php get_header(); ?>
<!-- content » Single Post -->
<div class="page-holder-single content post">
  <div class="container" id="main">
    <div class="row">
      <?php if (have_posts() ) : while (have_posts()) : the_post(); ?>
        <article>
          <div class="col-md-7" style="margin-top: 30px;">
            <h2><?php the_title(); ?></h2>

            <?php if (has_post_thumbnail()) : ?>
              <div class="thumbnail" style="background-image: url(<?php the_post_thumbnail_url() ?>)"></div>
            <?php endif ?>
            <?php the_content(); ?>

            <nav>
              <ul class="pager">
                <?php 
                $post_permalink = get_permalink(); 
                $previous_post = get_permalink(get_adjacent_post(false,'',false));
                $next_post = get_permalink(get_adjacent_post(false,'',true));

                if( $post_permalink != $previous_post ):
                  ?>
                <li class="previous"><a href="<?php echo $previous_post; ?>"><span aria-hidden="true">&larr;</span> Previous Post</a></li>
              <?php endif; ?>
              <?php if( $post_permalink != $next_post ): ?>
                <li class="next"><a href="<?php echo $next_post; ?>">Next Post <span aria-hidden="true">&rarr;</span></a></li>
              <?php endif; ?>
            </ul>
          </nav>
          <?php /* EOF */ ?>
        </div>
      </article>
    <?php endwhile; endif; ?>
    <div class="single-post-sidebar" style="margin-top: 75px;">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
</div>
<?php get_footer(); ?>