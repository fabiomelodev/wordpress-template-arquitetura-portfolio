<?php if (isset(get_field('banners')[0])): ?>
    <section class="relative">

        <div class="swiper js-swiper">

            <div class="swiper-wrapper">

                <!-- slide -->
                <?php foreach (get_field('banners') as $banner): ?>
                    <div class="swiper-slide">

                        <div class="h-[400px] lg:h-[660px] relative block bg-cover bg-no-repeat"
                            style="background-image: url(<?php echo $banner['imagem']; ?>)">

                            <div class="inset-0 absolute bg-black/40"></div>

                            <div
                                class="container h-full relative flex justify-center lg:justify-start items-end lg:pl-24 pb-20">

                                <div class="w-8/12 lg:w-5/12 flex flex-col items-center lg:items-start">
                                    <h3 class="section-title text-center lg:text-start text-white">
                                        buscamos entender o gosto do cliente
                                    </h3>

                                    <a class="btn-pattern border border-white text-white hover:text-[#87928B]/90 hover:bg-white"
                                        href="<?php echo $banner['link']['url'] ? $banner['link']['url'] : '#'; ?>"
                                        title="<?php echo $banner['link']['title'] ? $banner['link']['title'] : ''; ?>"
                                        target="<?php echo $banner['link']['target'] ? $banner['link']['target'] : ''; ?>"
                                        rel="noreferrer noopener">
                                        <?php echo $banner['link']['title'] ? $banner['link']['title'] : 'Faça orçamento'; ?>
                                    </a>
                                </div>
                            </div>
                        </div>
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