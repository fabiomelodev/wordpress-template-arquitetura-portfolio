<section class="py-20" id="avaliacoes">

    <div class="container flex flex-col gap-y-10 xl:gap-y-20">

        <div>
            <h2 class="section-title text-center">
                Avaliações
            </h2>
        </div>

        <div>

            <div class="swiper js-swiper-ratings">

                <div class="swiper-wrapper">
                    <?php

                    $args = array(
                        'post_type' => 'avaliacao',
                        'posts_per_page' => -1,
                    );

                    $ratings = new WP_Query($args);

                    if ($ratings->have_posts()):
                        while ($ratings->have_posts()):
                            $ratings->the_post(); ?>
                            <div class="swiper-slide">
                                <div class="rounded-2xl border border-gray-100 p-4">
                                    <p class="text-lg font-bold">
                                        <?php the_title() ?>
                                    </p>

                                    <div>
                                        <?php for ($j = 0; $j < 5; $j++): ?>
                                            <span class="text-yellow-400">★</span>
                                        <?php endfor; ?>
                                    </div>

                                    <p class="text-sm font-normal text-[#7A7A7A]">
                                        <?php the_content() ?>
                                    </p>
                                </div>
                            </div>
                        <?php endwhile;
                    endif;

                    wp_reset_query();
                    ?>
                </div>
            </div>
        </div>

        <div class="hidden grid-cols-4 gap-4">
            <?php

            $args = array(
                'post_type' => 'avaliacao',
                'posts_per_page' => -1,
            );

            $ratings = new WP_Query($args);

            if ($ratings->have_posts()):
                while ($ratings->have_posts()):
                    $ratings->the_post(); ?>
                    <div class="rounded-2xl border border-gray-100 p-4">
                        <p class="text-lg font-bold">
                            <?php the_title() ?>
                        </p>

                        <div>
                            <?php for ($j = 0; $j < 5; $j++): ?>
                                <span class="text-yellow-400">★</span>
                            <?php endfor; ?>
                        </div>

                        <p class="text-sm font-normal text-[#7A7A7A]">
                            <?php the_content() ?>
                        </p>
                    </div>
                <?php endwhile;
            endif;

            wp_reset_query();
            ?>
        </div>
    </div>
</section>