<section class="bg-gray-100/50 py-20" id="projetos">

    <div class="container flex flex-wrap gap-y-40 justify-center">

        <div class="w-8/12">
            <h2 class="section-title text-center">
                Projetos realizados
            </h2>

            <?php if (get_field('projetos_descricao')): ?>
                <p class="section-description text-center">
                    <?php echo get_field('projetos_descricao'); ?>
                </p>
            <?php endif; ?>
        </div>

        <div class="w-full flex flex-wrap gap-40">

            <!-- loop -->
            <?php
            $args = array(
                'post_type' => 'projeto',
                'posts_per_page' => 3,
            );

            $projects = new WP_Query($args);

            if ($projects->have_posts()):
                while ($projects->have_posts()):
                    $projects->the_post();
                    ?>
                    <div class="project-item">

                        <div class="project-item-col col-span-5">
                            <h3 class="text-7xl font-bold font-cinzel text-[#E0E0E0] mb-10">
                                <?php the_title() ?>
                            </h3>

                            <div class="rounded-2xl border border-[#F0F0F0] bg-white p-4">
                                <p class="text-sm font-normal text-[#7A7A7A]">
                                    <?php the_content() ?>
                                </p>
                            </div>
                        </div>

                        <div class="project-item-col col-span-7 grid grid-cols-3 gap-4">

                            <div class="h-[400px] pb-8">
                                <div class="w-full h-full rounded-3xl bg-green-500">

                                </div>
                            </div>
                            <div class="h-[400px] pt-8">
                                <div class="w-full h-full rounded-3xl bg-yellow-500">

                                </div>
                            </div>

                            <div class="h-[400px] pb-8">
                                <div class="w-full h-full rounded-3xl bg-gray-500">

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
</section>