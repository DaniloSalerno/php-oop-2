<h4>Cucce:</h4>

<div class="row row-cols-3 g-5">

    <?php foreach ($products as $product) : ?>

        <?php if ($product->getCategories()->getAnimal()  == 'Gatto') : ?>

            <?php if ($product->type  == 'Cuccia') : ?>

                <div class="col">

                    <?php include ROOT . DS . 'partials' . DS . 'card_kennel.php'; ?>

                </div>

            <?php endif ?>

        <?php endif ?>

    <?php endforeach ?>

</div>