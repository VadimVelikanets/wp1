    <?php get_header(); ?>
      <!-- header_end-->
      <div class="main-content">
        <div class="content-wrapper">
          <div class="content">
            <?php if(is_category() ) : ?>
            <?php elseif( is_search()): ?>
              <h1>Результаты поиска:</h1>
            <?php else: ?>
            <h1 class="title-page">Последние новости и акции из мира туризма</h1>
            <?php endif; ?>
            <?php if(have_posts()) : the_post();?>
            <div class="posts-list">
              <!-- post-mini-->
              <?php  while(have_posts()) : the_post(); ?>
                <div class="post-wrap">
                  <div class="post-thumbnail"><?php the_post_thumbnail('posts'); ?></div>
                  <div class="post-content">
                    <div class="post-content__post-info">
                      <div class="post-date"><?php the_date('d.m.y') ?></div>
                    </div>
                    <div class="post-content__post-text">
                      <div class="post-title">
                        <?php the_title(); ?>
                      </div>
                      <p>
                        <?php  the_excerpt(); ?>
                      </p>
                    </div>
                    <div class="post-content__post-control"><a href="<?php the_permalink(); ?>" class="btn-read-post">Читать далее >></a></div>
                  </div>
                </div>
              <?php  endwhile;?>
              <!-- post-mini_end-->

            </div>
            <?php else: ?>
              <p>Постов не найдено!</p>
            <?php endif; ?>
            <div class="pagenavi-post-wrap">
             <?php echo paginate_links(); ?> 
            </div>
          </div>
          <!-- sidebar-->
          <?php get_sidebar(); ?>
        </div>
      </div>
    <?php get_footer(); ?>