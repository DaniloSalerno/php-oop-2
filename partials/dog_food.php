<h4>Cibo:</h4>

<div class="row row-cols-3 g-5">

    <?php foreach ($products as $product) : ?>

        <?php if ($product->getCategories()->getAnimal()  == 'Cane') : ?>

            <?php if ($product->type  == 'Cibo') : ?>

                <div class="col">

                    <?php include ROOT . DS . 'partials' . DS . 'card_food.php'; ?>

                </div>

            <?php endif ?>

        <?php endif ?>

    <?php endforeach ?>

</div>