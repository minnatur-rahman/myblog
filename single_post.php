<?php include('admin/class/function.php');

$obj = new myAdminBlog();

$getCat = $obj->display_category();

if (isset($_GET['view'])) {
    if ($_GET['view'] = 'postView') {
        $id = $_GET['id'];
        $single = $obj->get_post_info($id);
    }
}

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
                <div class="col-lg-8">
                    <img src="upload/<?php echo $single['post_img']; ?>" class="img-fluid">
                    <h2><?php echo $single['post_title'] ?></h2>
                    <p>
                        <?php echo $single['post_content'] ?>
                    </p>
                </div>
                <?php include_once('include/sidebar.php'); ?>
            </div>
        </div>
    </section>


    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>