<section class="bg-gray-100/50 py-20" id="contato">

    <div class="container">

        <div class="lg:h-[420px] overflow-hidden rounded-3xl flex flex-wrap bg-white">

            <div class="w-full lg:w-1/2 h-full flex flex-col justify-center gap-y-6 py-8 lg:py-16 px-10 lg:px-24">
                <h2 class="section-title title-color" data-aos="fade-right" data-aos-duration="1000">
                    Contato
                </h2>

                <div class="flex flex-col gap-y-2">
                    <?php if (get_field('informacoes_gerais_endereco', 'option')): ?>
                        <p class="text-sm lg:text-base text-color" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="200">
                            <strong>Endereço:</strong> <?php echo get_field('informacoes_gerais_endereco', 'option'); ?>
                        </p>
                    <?php endif; ?>

                    <?php if (get_field('informacoes_gerais_email', 'option')): ?>
                        <p class="text-sm lg:text-base text-color" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="400">
                            <strong>E-mail:</strong>
                            <?php echo get_field('informacoes_gerais_email', 'option'); ?>
                        </p>
                    <?php endif; ?>

                    <?php if (get_field('informacoes_gerais_whatsapp', 'option') && get_field('informacoes_gerais_whatsapp_link', 'option')): ?>
                        <a class="text-sm lg:text-base text-color"
                            href="<?php echo get_field('informacoes_gerais_whatsapp_link', 'option'); ?>" target="_blank"
                            rel="noreferrer noopener" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            <strong>WhatsApp:</strong>
                            <?php echo get_field('informacoes_gerais_whatsapp', 'option'); ?>
                        </a>
                    <?php endif; ?>

                    <?php if (get_field('informacoes_gerais_telefone', 'option')): ?>
                        <p class="text-sm lg:text-base text-color" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="800">
                            <strong>Telefone:</strong>
                            <?php echo get_field('informacoes_gerais_telefone', 'option'); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="w-full lg:w-1/2 h-full">

                <div class="iframe-map">
                    <?php echo get_field('informacoes_gerais_mapa', 'option'); ?>
                </div>
            </div>
        </div>
    </div>
</section>