<section class="py-20" id="avaliacoes">

    <div class="container flex flex-col gap-y-20">

        <div>
            <h2 class="section-title text-center">
                Avaliações
            </h2>
        </div>

        <div class="grid grid-cols-4 gap-4">
            <?php for ($i = 0; $i < 4; $i++): ?>
                <div class="rounded-2xl border border-gray-100 p-4">
                    <p class="text-lg font-bold">
                        Darci Maria
                    </p>

                    <div>
                        <?php for ($j = 0; $j < 5; $j++): ?>
                            <span class="text-yellow-400">★</span>
                        <?php endfor; ?>
                    </div>

                    <p class="text-sm font-normal text-[#7A7A7A]">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit auctor dui, sed efficitur
                        ipsum. Donec a nunc ac nisl efficitur convallis. Donec eget ligula a enim efficitur efficitur. Donec
                        sed odio at enim efficitur convallis. Donec a nunc ac nisl efficitur convallis. Donec sed odio at
                        enim efficitur convallis.
                    </p>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>