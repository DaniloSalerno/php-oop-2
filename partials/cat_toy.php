<h4>Giocattoli:</h4>

<div class="row row-cols-3 g-5">

    <?php foreach ($products as $product) : ?>

        <?php if ($product->getCategories()->getAnimal()  == 'Gatto') : ?>

            <?php if ($product->type  == 'Giocattolo') : ?>

                <div class="col">

                    <?php include ROOT . DS . 'partials' . DS . 'card_toy.php'; ?>

                </div>

            <?php endif ?>

        <?php endif ?>

    <?php endforeach ?>

</div>