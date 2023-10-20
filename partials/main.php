<main class="mt-5">
    <section id="products">
        <div class="container">
            <div class="row row-cols-3 g-5">

                <?php foreach ($products as $product) : ?>

                    <div class="col">

                        <div class="card">

                            <div class="card-body">

                                <div>Nome: <?= $product->name ?></div>
                                <div>Prezzo <?= $product->price ?></div>
                                <div>Animale: <?= $product->categories->animal ?></div>
                                <div>Tipo: <?= $product->type ?></div>

                            </div>

                        </div>

                    </div>

                <?php endforeach ?>


            </div>
        </div>
    </section>
</main>