<section class="bg-gray-100/50 py-20">

    <div class="container">

        <div>

            <h2 class="section-title">
                O que fazemos
            </h2>

            <p class="section-description">
                Trabalhamos com o estilo contemporâneo e atemporal, onde buscamos entender o gosto do cliente e aplicar
                de forma personalizada, com um toque de decoração afetiva para ser sentida, com características únicas e
                sempre diferente uns dos outros, acreditamos que um lar deve refletir seus moradores.
            </p>
        </div>

        <div class="grid grid-cols-4 gap-10 mt-20">
            <?php
            $items = [
                [
                    'name' => 'Arquitetura',
                    'description' => 'A empresa de design de interiores oferece um serviço completo, que atende às necessidades dos clientes e cria projetos que atendam aos seus sonhos.'
                ],

                [
                    'name' => 'Designe de  interiores',
                    'description' => 'Planejamos o desenvolvimento de projetos para áreas residenciais e comerciais especificando itens necessários para que o ambiente fique completo.'
                ],

                [
                    'name' => 'Assesoria de obra',
                    'description' => 'Tem caráter preventivo e busca conferir a qualidade dos serviços, atestando e documentando a instalação do projeto executado. '
                ],

                [
                    'name' => 'Consultoria decorativa',
                    'description' => 'Para ambientes com a arquitetura pronta que não precisem de reforma, apenas melhorar o espaço de forma rápida, eficaz com itens de decoração. '
                ],
            ];
            ?>
            <?php foreach ($items as $item): ?>
                <div
                    class="hover:-translate-y-6 transition hover:shadow-2xl rounded-lg border border-gray-100 relative bg-white py-10 px-8">
                    <div class="w-1 h-4 top-1/2 -translate-y-1/2 right-full absolute bg-black"></div>

                    <h6 class="text-lg font-bold text-center uppercase font-cinzel">
                        <?php echo $item['name']; ?>
                    </h6>

                    <p class="font-normal text-center mt-10">
                        <?php echo $item['description']; ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>