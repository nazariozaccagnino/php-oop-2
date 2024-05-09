<?php

include __DIR__ . '/Views/header.php';
include __DIR__ . '/Models/Product.php';
include __DIR__ . '/Models/Cani.php';
include __DIR__ . '/Models/Gatti.php';
// $movies = Product::fetchAll('movies_db', 'Movie');
// $books = Product::fetchAll('books_db', 'Book');
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

    <section>
        <h2>Cat food</h2>
        <div class="row">
            <?php foreach ($gatti as $gato) {
                echo $gato->printCard($gato->formatItem());
            } ?>
        </div>
    </section>

     <section>
        <h2>Fish food</h2>
        <div class="row">
            <?php foreach ($books as $book) {
                echo $book->printCard($book->formatItem());
            } ?>
        </div>
    </section>

    <section>
        <h2>birds food</h2>
        <div class="row">
            <?php foreach ($books as $book) {
                echo $book->printCard($book->formatItem());
            } ?>
        </div>
    </section> 

</main>

<?php include __DIR__ . '/Views/footer.php'; ?>