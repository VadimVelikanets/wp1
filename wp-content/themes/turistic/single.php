    <?php get_header(); ?>
      <!-- header_end-->
      <div class="main-content">
        <div class="content-wrapper">
          <div class="content">
            <div class="article-title title-page">
              <?php the_title(); ?>
            </div>
            <div class="article-image">
              <?php the_post_thumbnail() ?>
            </div>
            <div class="article-info">
              <div class="post-date"><?php the_time('d.m.y'); ?></div>
            </div>
            <div class="article-text">
             <?php the_post();
              the_content();
               ?>
            </div>
            
            <div class="article-pagination">
            <?php 
               $previous_post = get_previous_post(); 
               $next_post = get_next_post(); 
               ?>

              <?php if($previous_post) : ?>
              <div class="article-pagination__block pagination-prev-left"><a href="<?php echo get_permalink($previous_post->ID); ?>" class="article-pagination__link"><i class="icon icon-angle-double-left"></i>Предыдущая статья</a>
                <div class="wrap-pagination-preview pagination-prev-left">
                  <div class="preview-article__img"><img src="<?php echo get_the_post_thumbnail($previous_post->ID, 'thumbnail')?>" class="preview-article__image"></div>
                  <div class="preview-article__content">
                    <div class="preview-article__info"><a href="<?php echo get_permalink($previous_post->ID); ?>" class="post-date"><?php echo get_the_time('d.m.y', $previous_post->ID ) ?></a></div>
                    <div class="preview-article__text"><?php echo get_the_title($previous_post->ID);  ?></div>
                  </div>
                </div>
              </div>
              <?php endif; ?>
              <?php if($next_post) : ?>
              <div class="article-pagination__block pagination-prev-left"><a href="<?php echo get_permalink($next_post->ID); ?>" class="article-pagination__link"><i class="icon icon-angle-double-left"></i>Следующая статья</a>
                <div class="wrap-pagination-preview pagination-prev-left">
                  <div class="preview-article__img"><img src="<?php echo get_the_post_thumbnail($next_post->ID, 'thumbnail')?>" class="preview-article__image"></div>
                  <div class="preview-article__content">
                    <div class="preview-article__info"><a href="<?php echo get_permalink($next_post->ID); ?>" class="post-date"><?php echo get_the_time('d.m.y', $next_post->ID ) ?></a></div>
                    <div class="preview-article__text"><?php echo get_the_title($next_post->ID);  ?></div>
                  </div>
                </div>
              </div>
              <?php endif; ?>
          </div>
        </div>
          <!-- sidebar-->
          <?php get_sidebar(); ?>
        

      </div>
      <?php get_footer(); ?>