<?php
if (get_field('segundo_orcamento_imagem_de_fundo')) {
    $background_image = get_field('segundo_orcamento_imagem_de_fundo');
} else {
    $background_image = get_template_directory_uri() . '/resources/images/budget-second-background.png';
}
?>
<section class="h-[260px] lg:h-[386px] bg-cover bg-no-repeat my-20"
    style="background-image: url(<?php echo $background_image; ?>)">

    <div class="container h-full grid grid-cols-12">

        <div
            class="col-span-full lg:col-span-5 h-full flex flex-col justify-center items-center gap-y-6 bg-color-primary bg-opacity-90 px-10">

            <p class="text-xl lg:text-2xl font-bold font-cinzel text-center text-white" data-aos="fade-up"
                data-aos-duration="1000">
                Transforme seu apartamento em um espaço único e especial
            </p>

            <a class="btn-pattern border border-white text-white hover:text-[#87928B]/90 hover:bg-white"
                href="<?php echo get_field('segundo_orcamento_botao_de_acao')['url'] ? get_field('segundo_orcamento_botao_de_acao')['url'] : '#'; ?>"
                title="<?php echo get_field('segundo_orcamento_botao_de_acao')['title'] ? get_field('segundo_orcamento_botao_de_acao')['title'] : ''; ?>"
                target="<?php echo get_field('segundo_orcamento_botao_de_acao')['target'] ? get_field('segundo_orcamento_botao_de_acao')['target'] : ''; ?>"
                rel="noreferrer noopener" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                <?php echo get_field('segundo_orcamento_botao_de_acao')['title'] ? get_field('segundo_orcamento_botao_de_acao')['title'] : 'Faça orçamento'; ?>
            </a>
        </div>
    </div>
</section>