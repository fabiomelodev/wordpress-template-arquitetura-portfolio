<section class="py-20">

    <div class="container">

        <div class="lg:h-[420px] overflow-hidden rounded-3xl flex flex-wrap bg-[#F3F4F3]">

            <div class="w-full lg:w-1/2 h-full">
                <?php if (get_field('orcamento_imagem')): ?>
                    <img class="w-full h-full object-cover" src="<?php echo get_field('orcamento_imagem'); ?>"
                        alt="<?php echo get_bloginfo() ?> - Faça o seu orçamento" data-aos="fade-right"
                        data-aos-duration="5000" />
                <?php else: ?>
                    <div class="w-full h-full bg-[#87928B]"></div>
                <?php endif; ?>
            </div>

            <div
                class="w-full lg:w-1/2 h-full flex flex-col justify-center items-center gap-y-6 py-10 lg:py-16 px-4 lg:px-24">
                <?php if (get_field('orcamento_descricao')): ?>
                    <p class="section-description text-center text-color" data-aos="fade-up" data-aos-duration="5000">
                        <?php echo get_field('orcamento_descricao'); ?>
                    </p>
                <?php endif; ?>


                <a class="btn-pattern text-white bg-btn"
                    href="<?php echo get_field('orcamento_botao_de_acao')['url'] ? get_field('orcamento_botao_de_acao')['url'] : '#'; ?>"
                    title="<?php echo get_field('orcamento_botao_de_acao')['title'] ? get_field('orcamento_botao_de_acao')['title'] : ''; ?>"
                    target="<?php echo get_field('orcamento_botao_de_acao')['target'] ? get_field('orcamento_botao_de_acao')['target'] : ''; ?>"
                    rel="noreferrer noopener" data-aos="fade-up" data-aos-duration="5000" data-aos-delay="500">
                    <?php echo get_field('orcamento_botao_de_acao')['title'] ? get_field('orcamento_botao_de_acao')['title'] : 'Faça orçamento'; ?>
                </a>
            </div>
        </div>
    </div>
</section>