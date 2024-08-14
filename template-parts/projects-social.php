<section class="bg-[#2F2F33]">
  <div class="mx-10">
    <div class="max-w-screen-xl mx-auto">
      <div class="w-full h-20 flex items-center">
        <h2 class="text-yellow-theme font-bold text-3xl h-full flex items-center ml-1">Social Media Projects</h2>
      </div>
      <div id="projects2" class="h-[65rem] md:h-auto w-full justify-center items-center grid grid-cols-1 md:flex mb-4">
        <?php
        $posts = get_posts(array(
          'category_name' => 'social',
          'posts_per_page' => 3,
        ));
        $i = 0;
        if ($posts) :
          foreach ($posts as $post) : setup_postdata($post); ?>
            <?php $thumbnail_id = get_post_thumbnail_id($post->ID);
            $thumbnail_url = get_the_post_thumbnail_url($post->ID);
            $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
            ?>
            <?php $i++; ?>
            <div class="post">
              <div id="card1" class="card animateCard2" style="
                <?php
                switch ($i) {
                  case 1:
                    echo "transform:translateX(-8rem)";
                    break;
                  case 2:
                    echo "transform:translateY(8rem)";
                    break;
                  case 3:
                    echo "transform:translateX(8rem)";
                    break;
                }
                ?>
                ">
                <img class="card__img" alt="<?= esc_attr($thumbnail_alt) ?>" src="<?= esc_attr($thumbnail_url) ?>" />
                <h2><?php the_title(); ?></h2>
                <div class="card__info">
                  <p class="text-white"><?php the_title(); ?></p>
                  <a href="https://functional-skills-app.creativevault.ovh/" target="__blank" class="card__btn">Read More</a>
                </div>
              </div>
            </div>
          <?php endforeach;
          wp_reset_postdata(); // Reset the global post object so that the rest of the page works correctly.
        else : ?>
          <p><?php esc_html_e('No posts found in the projects.', 'your-textdomain'); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>