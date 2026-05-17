<section class="bg-gray-100/50 py-20">

    <div class="container flex flex-wrap">

        <div class="w-10/12">

            <h2 class="section-title">
                O que fazemos
            </h2>

            <?php if (get_field('o_que_fazemos_descricao')): ?>
                <p class="section-description">
                    <?php echo get_field('o_que_fazemos_descricao'); ?>
                </p>
            <?php endif; ?>
        </div>

        <?php if (get_field('o_que_fazemos_itens')): ?>
            <div class="grid grid-cols-4 gap-10 mt-20">
                <?php foreach (get_field('o_que_fazemos_itens') as $item): ?>
                    <div
                        class="hover:-translate-y-6 transition hover:shadow-2xl rounded-lg border border-gray-100 relative bg-white py-10 px-8">
                        <div class="w-1 h-4 top-1/2 -translate-y-1/2 right-full absolute bg-black"></div>

                        <h6 class="text-lg font-bold text-center uppercase font-cinzel">
                            <?php echo $item['titulo']; ?>
                        </h6>

                        <p class="font-normal text-center mt-10">
                            <?php echo $item['descricao']; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>