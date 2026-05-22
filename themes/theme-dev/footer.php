<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Evoluta
 */

?>

</div><!-- #content -->

</div><!-- #page -->

<!-- footer -->
<footer class="bg-[#87928B] pt-20 pb-6">

    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-y-20 gap-x-4">

        <div>
            <?php if (get_field('informacoes_gerais_sobre', 'option')): ?>
                <h3 class="text-xl font-bold font-cinzel uppercase text-white">
                    Sobre
                </h3>

                <p class="text-xs font-normal text-[#E0E0E0] mt-4">
                    <?php echo get_field('informacoes_gerais_sobre', 'option'); ?>
                </p>
            <?php endif; ?>
        </div>

        <div class="flex lg:justify-center">
            <?php if (get_field('instagram', 'option') || get_field('facebook', 'option') || get_field('youtube', 'option')): ?>
                <div>
                    <h3 class="text-xl font-bold font-cinzel uppercase text-white">
                        Redes sociais
                    </h3>

                    <ul class="flex gap-x-4 mt-4">
                        <?php if (get_field('instagram', 'option')): ?>
                            <li>
                                <a class="flex items-center" href="<?php echo get_field('instagram', 'option'); ?>"
                                    target="_blank" rel="noreferrer noopener">
                                    <?php echo get_template_part('template-parts/icons/content', 'instagram', get_icon_setting('w-6 h-6 fill-white fill-color-primary-hover')); ?>

                                    <span style="font-size:0">
                                        Instagram
                                    </span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (get_field('facebook', 'option')): ?>
                            <li>
                                <a class="flex items-center" href="<?php echo get_field('facebook', 'option'); ?>"
                                    target="_blank" rel="noreferrer noopener">
                                    <?php echo get_template_part('template-parts/icons/content', 'facebook', get_icon_setting('w-6 h-6 fill-white fill-color-primary-hover')); ?>

                                    <span style="font-size:0">
                                        Facebook
                                    </span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (get_field('youtube', 'option')): ?>
                            <li>
                                <a class="flex items-center" href="<?php echo get_field('youtube', 'option'); ?>"
                                    target="_blank" rel="noreferrer noopener">
                                    <?php echo get_template_part('template-parts/icons/content', 'youtube', get_icon_setting('w-6 h-6 fill-white fill-color-primary-hover')); ?>

                                    <span style="font-size:0">
                                        Youtube
                                    </span>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>

        <div>
            <h3 class="text-xl font-bold font-cinzel uppercase text-white">
                Navegação
            </h3>

            <ul class="flex flex-col gap-y-2 mt-4">
                <?php
                $menu_name = 'menu-principal';

                $menu = wp_get_nav_menu_object($menu_name);

                $menu_items = wp_get_nav_menu_items($menu->term_id);

                foreach ($menu_items as $item): ?>
                    <li>
                        <a class="font-normal text-[#E0E0E0] hover:underline" href="<?php echo $item->url; ?>">
                            <?php echo $item->post_title; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>


        <div class="col-span-full">
            <div class="flex justify-center lg:justify-end items-center">
                <a class="text-xs lg:text-sm text-[#E0E0E0]" href="https://singletemas.com.br" target="_blank"
                    rel="noreferrer noopener">
                    Desenvolvido por <span class="font-black">Single Temas</span>
                </a>
            </div>

            <h3 class="text-xs font-medium text-center text-[#E0E0E0] mt-6">
                <?php echo get_bloginfo() . ' - ' . date('Y'); ?>
            </h3>
        </div>
    </div>
</footer>
<!-- end footer -->

<?php wp_footer(); ?>

</body>

</html>