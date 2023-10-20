<main class="py-5">
    <section id="products">
        <div class="container">
            <div class="row row-cols-3 g-5">

                <?php foreach ($products as $product) : ?>

                    <div class="col">

                        <div class="card border-0">

                            <img width="250" src="<?= $product->image ?>" alt="">

                            <div class="card-body">

                                <div>Per: <?= $product->getIcon() ?></div>
                                <div><strong>Nome:</strong> <?= $product->name ?></div>
                                <div><strong>Prezzo</strong> <?= $product->price ?></div>
                                <div><strong>Animale:</strong> <?= $product->categories->animal ?></div>
                                <div><strong>Tipo:</strong> <?= $product->type ?></div>

                            </div>

                        </div>

                    </div>

                <?php endforeach ?>


            </div>
        </div>
    </section>
</main>