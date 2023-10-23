<?php
define('ROOT', __DIR__);

define('DS', DIRECTORY_SEPARATOR);

require_once ROOT . DS . 'traits' . DS . 'traits.php';

require_once ROOT . DS . 'models' . DS . 'categories.php';

require_once ROOT . DS . 'models' . DS . 'products.php';

require_once ROOT . DS . 'models' . DS . 'food.php';

require_once ROOT . DS . 'models' . DS . 'toy.php';

require_once ROOT . DS . 'models' . DS . 'kennel.php';

require_once ROOT . DS . 'db.php';

require_once ROOT . DS . 'partials' . DS . 'head.php';

?>

<main>
    <section id="products">

        <div class="container">

            <?php
            include ROOT . DS . 'partials' . DS . 'dog_products.php';
            ?>

        </div>

    </section>
</main>

<?php

require_once ROOT . DS . 'partials' . DS . 'footer.php';

?>