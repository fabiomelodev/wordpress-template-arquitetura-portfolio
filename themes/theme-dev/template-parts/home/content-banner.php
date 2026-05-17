<?php if (isset(get_field('banners')[0])): ?>
    <section class="relative">

        <div class="swiper js-swiper">

            <div class="swiper-wrapper">

                <!-- slide -->
                <?php foreach (get_field('banners') as $banner): ?>
                    <div class="swiper-slide">
                        <?php if (!empty($banner['link'])): ?>
                            <a class="h-[660px] relative block bg-cover bg-no-repeat"
                                style="background-image: url(<?php echo $banner['imagem']; ?>)"
                                href="<?php echo $banner['link']['url'] ? $banner['link']['url'] : '#'; ?>"
                                title="<?php echo $banner['link']['title'] ? $banner['link']['title'] : ''; ?>"
                                target="<?php echo $banner['link']['target'] ? $banner['link']['target'] : ''; ?>"
                                rel="noreferrer noopener">

                                <div class="inset-0 absolute bg-black/40"></div>

                                <div class="container h-full relative flex items-end pb-20">

                                    <div class="w-5/12">
                                        <h3 class="section-title text-white">
                                            buscamos entender o gosto do cliente
                                        </h3>

                                        <button
                                            class="transition hover:scale-110 rounded-full border border-white hover:opacity-90 font-medium font-poppins text-center uppercase text-white hover:text-[#87928B]/90 hover:bg-white py-4 px-8">
                                            Faça orçamento
                                        </button>
                                    </div>
                                </div>
                            </a>
                        <?php else: ?>
                            <img class="w-full h-[400px] object-cover" src="<?php echo $banner['imagem']; ?>"
                                alt="<?php echo get_the_title(); ?>" />
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
                <!-- end slide -->
            </div>

            <div class="swiper-pagination js-swiper-pagination"></div>
        </div>

        <!-- navigations -->
        <div class="swiper-button-prev swiper-button-pattern swiper-button-prev-pattern js-swiper-button-prev"></div>
        <div class="swiper-button-next swiper-button-pattern swiper-button-next-pattern js-swiper-button-next"></div>
        <!-- end navigations -->
    </section>
<?php endif; ?>