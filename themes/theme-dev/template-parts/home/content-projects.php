<section class="bg-gray-100/50 py-20" id="projetos">

    <div class="container flex flex-wrap gap-y-20 xl:gap-y-40 justify-center">

        <div class="w-full lg:w-8/12">
            <h2 class="section-title text-center">
                Projetos realizados
            </h2>

            <?php if (get_field('projetos_descricao')): ?>
                <p class="section-description text-center">
                    <?php echo get_field('projetos_descricao'); ?>
                </p>
            <?php endif; ?>
        </div>

        <div class="w-full flex flex-wrap gap-20 xl:gap-40">

            <!-- loop -->
            <?php
            $args = array(
                'post_type' => 'projeto',
                'posts_per_page' => 3,
            );

            $projects = new WP_Query($args);

            $row = 0;

            if ($projects->have_posts()):
                while ($projects->have_posts()):
                    $projects->the_post();
                    $row++;
                    ?>
                    <div class="project-item">

                        <div class="project-item-col col-span-full xl:col-span-5">
                            <h3 class="text-4xl lg:text-6xl xl:text-7xl font-bold font-cinzel text-[#E0E0E0] mb-6 lg:mb-10">
                                <?php the_title() ?>
                            </h3>

                            <div class="rounded-2xl border border-[#F0F0F0] bg-white p-4">
                                <p class="text-sm font-normal text-[#7A7A7A]">
                                    <?php the_content() ?>
                                </p>
                            </div>
                        </div>

                        <div class="project-item-col col-span-full xl:col-span-7">

                            <!-- swiper -->
                            <div class="swiper js-swiper-projects js-swiper-projects-<?php echo $row; ?>">

                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="h-[400px] xl:pb-8">
                                            <div class="w-full h-full overflow-hidden rounded-3xl bg-[#87928B] js-project-open-modal"
                                                data-slug="<?php echo basename(get_permalink(get_the_ID())) ?>">
                                                <?php if (get_field('foto_1')): ?>
                                                    <img class="w-full h-full object-cover js-project-item-image"
                                                        data-slug="<?php echo basename(get_permalink(get_the_ID())) ?>"
                                                        src="<?php echo get_field('foto_1') ?>"
                                                        alt="<?php echo get_the_title() . ' - ' . get_bloginfo(); ?>" />
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">

                                        <div class="h-[400px] xl:pt-8">
                                            <div class="w-full h-full overflow-hidden rounded-3xl bg-[#87928B] js-project-open-modal"
                                                data-slug="<?php echo basename(get_permalink(get_the_ID())) ?>">
                                                <?php if (get_field('foto_2')): ?>
                                                    <img class="w-full h-full object-cover js-project-item-image"
                                                        data-slug="<?php echo basename(get_permalink(get_the_ID())) ?>"
                                                        src="<?php echo get_field('foto_2') ?>"
                                                        alt="<?php echo get_the_title() . ' - ' . get_bloginfo(); ?>" />
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="h-[400px] xl:pb-8">
                                            <div class="w-full h-full overflow-hidden rounded-3xl bg-[#87928B] js-project-open-modal"
                                                data-slug="<?php echo basename(get_permalink(get_the_ID())) ?>">
                                                <?php if (get_field('foto_3')): ?>
                                                    <img class="w-full h-full object-cover js-project-item-image"
                                                        data-slug="<?php echo basename(get_permalink(get_the_ID())) ?>"
                                                        src="<?php echo get_field('foto_3') ?>"
                                                        alt="<?php echo get_the_title() . ' - ' . get_bloginfo(); ?>" />
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end swiper -->

                            <div class="hidden h-[400px] pb-8">
                                <div class="w-full h-full overflow-hidden rounded-3xl bg-[#87928B]">
                                    <?php if (get_field('foto_1')): ?>
                                        <img class="w-full h-full object-cover" src="<?php echo get_field('foto_1') ?>"
                                            alt="<?php echo get_the_title() . ' - ' . get_bloginfo(); ?>" />
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="hidden h-[400px] pt-8">
                                <div class="w-full h-full overflow-hidden rounded-3xl bg-[#87928B]">
                                    <?php if (get_field('foto_2')): ?>
                                        <img class="w-full h-full object-cover" src="<?php echo get_field('foto_2') ?>"
                                            alt="<?php echo get_the_title() . ' - ' . get_bloginfo(); ?>" />
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="hidden h-[400px] pb-8">
                                <div class="w-full h-full overflow-hidden rounded-3xl bg-[#87928B]">
                                    <?php if (get_field('foto_3')): ?>
                                        <img class="w-full h-full object-cover" src="<?php echo get_field('foto_3') ?>"
                                            alt="<?php echo get_the_title() . ' - ' . get_bloginfo(); ?>" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
            endif;

            wp_reset_query();
            ?>
            <!-- end loop -->
        </div>
    </div>

    <!-- modal -->
    <div class="modal-projects js-projects-modal">

        <div class="w-full h-full top-0 left-0 absolute js-modal-close"></div>

        <div class="container h-[900px] relative flex justify-center items-center">

            <div class="w-10/12 h-full">

                <div class="w-full h-full flex justify-center items-center">

                    <div class="w-full h-[728px] overflow-hidden shadow-lg rounded-lg">

                        <div class="swiper h-full js-swiper-projects-modal">

                            <div class="swiper-wrapper js-modal-projects-wrapper">
                            </div>

                            <!-- navigations -->
                            <div
                                class="swiper-button-prev swiper-button-pattern swiper-button-prev-pattern js-swiper-button-prev-projects-modal">
                            </div>

                            <div
                                class="swiper-button-next swiper-button-pattern swiper-button-next-pattern js-swiper-button-next-projects-modal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->
</section>