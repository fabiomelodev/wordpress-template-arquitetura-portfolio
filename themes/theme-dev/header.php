<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme Dev
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>
    <style>
        [x-cloak] {
            display: none !important;
        }

        :root {
            --color-primary:
                <?php echo get_field('informacoes_gerais_cores_cor_primaria', 'option') ? get_field('informacoes_gerais_cores_cor_primaria', 'option') :
                    "#87928b"; ?>
            ;

            --color-title:
                <?php echo get_field('informacoes_gerais_cores_titulo', 'option') ? get_field('informacoes_gerais_cores_titulo', 'option') : "#3D3D3D"; ?>
            ;

            --color-text:
                <?php echo get_field('informacoes_gerais_cores_texto', 'option') ? get_field('informacoes_gerais_cores_texto', 'option') : "#3D3D3D"; ?>
            ;

            --color-button:
                <?php echo get_field('informacoes_gerais_cores_botao_fundo', 'option') ? get_field('informacoes_gerais_cores_botao_fundo', 'option') : "#87928B"; ?>
            ;
        }

        .title-color {
            color: var(--color-title);
        }

        .text-color-primary-hover:hover {
            color: var(--color-primary);
        }

        .text-color {
            color: var(--color-text);
        }

        .bg-btn {
            background-color: var(--color-button);
        }

        .bg-color-primary {
            background-color: var(--color-primary);
        }

        .fill-color-primary-hover:hover {
            fill: var(--color-primary);
        }

        .swiper-button-pattern {
            background-color: var(--color-primary);
        }

        .swiper-pagination-bullet-active {
            background-color: var(--color-primary) !important;
        }
    </style>
</head>

<body <?php body_class(); ?>>

    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', ''); ?></a>

        <!-- top -->
        <?php echo get_template_part('template-parts/components/content', 'top-social'); ?>
        <!-- end top -->

        <header class="w-full left-0 transition border-b-2 border-white/20 fixed backdrop-blur-md z-50 py-4 lg:py-8"
            x-data="{ scrolled: false, menuMobile: false }" x-init="
        window.addEventListener('scroll', () => {
            scrolled = window.scrollY > 50
        });
        
        $nextTick(() => {
            $refs.mobileMenuContainer.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => menuMobile = false);
            });
        });
    " :class="scrolled ? 'top-0 shadow-lg bg-black/50' : 'lg:top-10'">

            <div class="container">
                <nav class="flex justify-between">

                    <div class="w-8/12 lg:w-3/12 flex items-center">
                        <?php if (get_custom_logo()): ?>
                            <div class="w-[52px] lg:w-[100px]">
                                <?php echo get_custom_logo(); ?>
                            </div>
                        <?php else: ?>
                            <a class="text-sm lg:text-xl font-black font-cinzel uppercase text-[#E5E5E5] hover:text-white"
                                href="<?php echo esc_url(home_url('/')); ?>">
                                <?php esc_url(bloginfo('name')); ?>
                            </a>
                        <?php endif; ?>
                    </div>

                    <div class="flex-1 hidden lg:flex justify-end items-center">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => 'div',
                            'container_id' => 'main-nav',
                            'menu_id' => false,
                            'menu_class' => 'navbar-nav',
                            'depth' => 1,
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                        ));
                        ?>
                    </div>
                    <div x-ref="mobileMenuContainer" class="w-full h-screen top-0 left-0 fixed bg-black/40 z-50"
                        x-show="menuMobile" x-cloak x-transition:enter="transition duration-500"
                        x-transition:leave="transition duration-500" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0">

                        <div class="w-full h-full flex" x-show="menuMobile" x-cloak
                            x-transition:enter="transition duration-500" x-transition:enter-start="translate-x-full"
                            x-transition:enter-end="translate-x-0" x-transition:leave="transition duration-500"
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">

                            <div class="w-2/12">
                                <button class="w-full h-16 flex justify-center items-center bg-color-primary"
                                    x-on:click="menuMobile = false">
                                    <span class="text-3xl font-black text-white">
                                        <?php echo get_template_part('template-parts/icons/content', 'close', get_icon_setting('w-8 h-8 fill-white')); ?>
                                    </span>
                                </button>
                            </div>

                            <div class="w-10/12">
                                <div class="h-full flex flex-col justify-between items-center bg-black pt-6">
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'primary',
                                        'container' => 'div',
                                        'container_id' => 'main-nav',
                                        'menu_id' => false,
                                        'menu_class' => 'navbar-nav',
                                        'depth' => 1,
                                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                    ));
                                    ?>

                                    <div class="w-full">
                                        <ul class="flex justify-center gap-x-6">
                                            <li>
                                                <a href="#">
                                                    <?php echo get_template_part('template-parts/icons/content', 'instagram', get_icon_setting('w-8 h-8 fill-white')); ?>
                                                    <span style="font-size:0">Instagram</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <?php echo get_template_part('template-parts/icons/content', 'facebook', get_icon_setting('w-8 h-8 fill-white')); ?>
                                                    <span style="font-size:0">Facebook</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <?php echo get_template_part('template-parts/icons/content', 'youtube', get_icon_setting('w-8 h-8 fill-white')); ?>
                                                    <span style="font-size:0">Youtube</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 flex lg:hidden justify-end">
                        <button class="w-8 h-8 rounded-full flex justify-center items-center bg-black/20"
                            x-on:click="menuMobile = true">
                            <?php echo get_template_part('template-parts/icons/content', 'menu', get_icon_setting('w-6 h-6 fill-white')); ?>
                        </button>
                    </div>
                </nav>
            </div>
        </header>

        <div> <!-- #content -->