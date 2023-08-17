<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Product_book
 */

get_header();
?>
<div class="container-fluid archive-books" style="max-width:90%;">
    <div class="row">
        <main class="col-md-8 col-xxl-9">
            <h1 class="text-center display-2 mb-3">Books</h1>
            <?php
            echo get_template_part( 'template-parts/books/book-loop' );
            ?>
        </main>
        <aside class="col-md-4 col-xxl-3">
            <?php
            get_sidebar();
            ?>
        </aside>
    </div>
</div>
<?php
get_footer();

