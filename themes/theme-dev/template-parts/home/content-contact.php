<section class="bg-gray-100/50 py-20" id="contato">

    <div class="container">

        <div class="lg:h-[420px] overflow-hidden rounded-3xl flex flex-wrap bg-white">

            <div class="w-full lg:w-1/2 h-full flex flex-col justify-center gap-y-6 py-8 lg:py-16 px-10 lg:px-24">
                <h2 class="section-title title-color">
                    Contato
                </h2>

                <div class="flex flex-col gap-y-2">
                    <?php if (get_field('endereco', 'option')): ?>
                        <p class="text-sm lg:text-base text-color">
                            <strong>Endereço:</strong> <?php echo get_field('endereco', 'option'); ?>
                        </p>
                    <?php endif; ?>

                    <?php if (get_field('e-mail', 'option')): ?>
                        <p class="text-sm lg:text-base text-color">
                            <strong>E-mail:</strong>
                            <?php echo get_field('e-mail', 'option'); ?>
                        </p>
                    <?php endif; ?>
                    <?php if (get_field('telefone', 'option')): ?>
                        <p class="text-sm lg:text-base text-color">
                            <strong>Telefone:</strong>
                            <?php echo get_field('telefone', 'option'); ?>
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