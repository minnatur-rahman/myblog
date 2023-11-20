<?php include('admin/class/function.php');

$obj = new myAdminBlog();
$getCat = $obj->display_category();


?>



<?php include_once('include/head.php'); ?>

<body>

    <?php include_once('include/preloader.php'); ?>

    <?php include_once('include/header.php'); ?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <?php include_once('include/banar.php'); ?>
    <!-- Banner Ends Here -->

    <?php include_once('include/cta.php'); ?>


    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <?php include_once('<include/blogpost.php'); ?>
                <?php include_once('include/sidebar.php'); ?>
            </div>
        </div>
    </section>


    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>