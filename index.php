<?php

include __DIR__ . '/Views/header.php';
include __DIR__ . '/Models/Product.php';
include __DIR__ . '/Models/Cani.php';
include __DIR__ . '/Models/Gatti.php';
// $movies = Product::fetchAll('movies_db', 'Movie');
// $books = Product::fetchAll('books_db', 'Book');
$cani =Dogs::fetchAll();

?>
<main class="container">
    <section>
        <h2>Dog food</h2>
        <div class="row">
            <?php foreach ($cani as $cane) {
                echo $cane->printCard($cane->formatItem());
            } ?>
        </div>
    </section>

    

</main>

<?php include __DIR__ . '/Views/footer.php'; ?>