<div class="sidebar">
            <div class="sidebar__sidebar-item">
              <div class="sidebar-item__title">Теги</div>
              <div class="sidebar-item__content">
              <?php 
              $args = array(
                'number'			=> 45,  
                'format'			=> 'list',
                'orderby'			=> 'name', 
                'order'				=> 'ASC',
                'exclude'			=> null, 
                'include'			=> null, 
                'topic_count_text_callback'	=> default_topic_count_text,
                'link'				=> 'view', 
                'taxonomy'			=> 'post_tag', 
                'echo'				=> true,
                'child_of'			=> null
              );
              wp_tag_cloud($args); ?>

              </div>
            </div>
            <div class="sidebar__sidebar-item">
              <div class="sidebar-item__title">Категории</div>
              <div class="sidebar-item__content">
                <?php 
                    $categories = get_terms(
                        [
                            'taxonomy' => 'category',
                            'hide_empty' => false,
                            'parent' => 0
                        ]
                    );
                    if ($categories) :
                ?>
                <ul class="category-list">
                    <?php
                   foreach($categories as $category) : ?>
                  <li class="category-list__item"><a href="<?php echo get_term_link($category) ?>" class="category-list__item__link">
                      <?php echo $category->name ?></a>

                      <?php 
                        $categories2 = get_terms(
                            [
                                'taxonomy' => 'category',
                                'hide_empty' => false,
                                'parent' => $category->term_id
                            ]
                        );
                        if ($categories2) :
                            echo '<ul class="category-list__inner">';
                            foreach($categories2 as $category2) :
                            echo "<li class='category-list__item'><a href=" . get_term_link($category2) . " class='category-list__item__link'>" . $category2->name . "</a></li>";
                            endforeach;
                            echo '</ul>';
                        endif;
                      ?>
                    <!-- <ul class="category-list__inner">
                      <li class="category-list__item"><a href="#" class="category-list__item__link">Москва</a></li>
                      <li class="category-list__item"><a href="#" class="category-list__item__link">Санкт-Петербург</a></li>
                    </ul> -->
                  </li>
                   <?php endforeach; ?>
                  <!-- <li class="category-list__item"><a href="#" class="category-list__item__link">
                      Вылеты из
                      регионов</a>
                    <ul class="category-list__inner">
                      <li class="category-list__item"><a href="#" class="category-list__item__link">Москва</a></li>
                      <li class="category-list__item"><a href="#" class="category-list__item__link">Санкт-Петербург</a></li>
                    </ul>
                  </li> -->
                   
                </ul>
                <?php endif; ?>
              </div>
            </div>
            <?php dynamic_sidebar( 'true_side' ); ?>
          </div>