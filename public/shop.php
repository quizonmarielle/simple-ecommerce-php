<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>


    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header>
            <h1>Shop</h1>
        </header>

        <hr>

        <!-- /.row -->

        <!-- Page Features -->
        <?php get_products_in_shop_page(); ?>

        <!-- /.row -->

    </div>

    <?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
    <!-- /.container -->
