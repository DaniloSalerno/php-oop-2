<div class="card border-0">

    <img width="250" src="<?= $product->getImage() ?>" alt="">

    <div class="card-body">

        <div>Per: <?= $product->getCategories()->getIcon() ?></div>

        <div><strong>Nome:</strong> <?= $product->getName() ?></div>

        <div><strong>Prezzo</strong> <?= $product->getPrice() ?></div>

        <div><strong>Colore</strong> <?= $product->getColor() ?></div>

        <div><strong>Peso</strong> <?= $product->getWeight() ?></div>

    </div>

</div>