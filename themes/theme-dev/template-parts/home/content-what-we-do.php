<section class="bg-gray-100/50 py-20">

    <div class="container flex flex-wrap">

        <div class="w-10/12">

            <h2 class="section-title title-color" data-aos="fade-right">
                O que fazemos
            </h2>

            <?php if (get_field('o_que_fazemos_descricao')): ?>
                <p class="section-description text-color" data-aos="fade-up" data-aos-duration="1000">
                    <?php echo get_field('o_que_fazemos_descricao'); ?>
                </p>
            <?php endif; ?>
        </div>

        <?php if (get_field('o_que_fazemos_itens')): ?>
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-10 mt-20">
                <?php
                $delay = 0;

                foreach (get_field('o_que_fazemos_itens') as $item):
                    $delay = $delay + 500;
                    ?>
                    <div class="hover:-translate-y-6 transition hover:shadow-2xl rounded-lg border border-gray-100 relative bg-white py-10 px-8"
                        data-aos="fade-up" data-aos-duration="5000" data-aos-delay="<?php echo $delay; ?>">
                        <div class="w-1 h-4 top-1/2 -translate-y-1/2 right-full absolute bg-black"></div>

                        <h6 class="text-lg font-bold text-center uppercase font-cinzel title-color">
                            <?php echo $item['titulo']; ?>
                        </h6>

                        <p class="text-sm lg:text-base font-normal text-center text-color mt-10">
                            <?php echo $item['descricao']; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>