<section class="py-20" id="sobre">

    <div class="container flex flex-wrap justify-between mx-auto">

        <div class="lg:w-4/12">

            <div class="h-[570px] relative p-10">
                <?php if (get_field('sobre_primeira_imagem')): ?>
                    <div class="w-[140px] h-[140px] top-0 left-0 overflow-hidden rounded-lg absolute bg-white p-2"
                        data-aos="fade-up" data-aos-duration="5000" data-aos-delay="500">
                        <img class="w-full h-full rounded-md object-cover"
                            src="<?php echo get_field('sobre_primeira_imagem'); ?>" alt="<?php echo get_bloginfo(); ?>" />
                    </div>
                <?php endif; ?>

                <?php if (get_field('sobre_terceira_imagem')): ?>
                    <div class="w-[140px] h-[140px] bottom-0 right-0 overflow-hidden rounded-lg absolute bg-white p-2"
                        data-aos="fade-up" data-aos-duration="5000" data-aos-delay="500">
                        <img class="w-full h-full rounded-md object-cover"
                            src="<?php echo get_field('sobre_terceira_imagem'); ?>" alt="<?php echo get_bloginfo(); ?>" />
                    </div>
                <?php endif; ?>

                <?php if (get_field('sobre_segunda_imagem')): ?>
                    <div class="w-full h-full flex justify-center items-center">
                        <img class="w-full h-full rounded-lg object-cover"
                            src="<?php echo get_field('sobre_segunda_imagem'); ?>" alt="<?php echo get_bloginfo(); ?>" />
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="lg:w-4/12 mt-6 lg:mt-0">
            <?php if (get_field('sobre_nome')): ?>
                <h2 class="section-title title-color" data-aos="fade-left">
                    <?php echo get_field('sobre_nome'); ?>
                </h2>
            <?php endif; ?>

            <?php if (get_field('sobre')): ?>
                <p class="section-description text-color" data-aos="fade-up">
                    <?php echo get_field('sobre'); ?>
                </p>
            <?php endif; ?>

            <div class="grid grid-cols-2 gap-x-6 mt-12 lg:pr-16">

                <?php if (get_field('sobre_imoveis_reformados')): ?>
                    <div class="shadow-lg rounded-lg relative flex flex-col items-center gap-y-2 bg-gray-100/50 p-4"
                        data-aos="fade-left" data-aos-duration="5000" data-aos-delay="500">

                        <div class="w-1 h-4 top-1/2 -translate-y-1/2 right-full absolute bg-black"></div>

                        <p class="text-3xl font-bold text-center">
                            +<?php echo get_field('sobre_imoveis_reformados'); ?>
                        </p>

                        <p class="text-sm font-bold text-center font-cinzel uppercase">
                            Imóveis reformados
                        </p>
                    </div>
                <?php endif; ?>

                <?php if (get_field('sobre_anos_de_experiencia')): ?>
                    <div class="shadow-lg rounded-lg relative flex flex-col items-center gap-y-2 bg-gray-100/50 p-4"
                        data-aos="fade-left" data-aos-duration="5000" data-aos-delay="1000">

                        <div class="w-1 h-4 top-1/2 -translate-y-1/2 right-full absolute bg-black"></div>

                        <p class="text-3xl font-bold text-center">
                            +<?php echo get_field('sobre_anos_de_experiencia'); ?>
                        </p>

                        <p class="text-sm font-bold text-center font-cinzel uppercase">
                            Anos de experiência
                        </p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>