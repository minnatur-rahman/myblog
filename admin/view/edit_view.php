<?php

$obj = new myAdminBlog();

if (isset($_GET['status'])) {
    if ($_GET['status'] = 'edit') {
        $id = $_GET['id'];

        $addCat = $obj->display_category_by_id($id);
    }
}


?>

<h1>Add category page</h1>

<form class="form" action="" method="post">
    <div class=" mb-3 form-group">
        <label for="cadName">Category Name</label>
        <input class="form-control" type="text" value="<?php echo $addCat['cat_name'] ?>" name="u_cat_name" id="cadName">
    </div>

    <div class="mb-3 form-group">
        <label for="cad_des">Category Description</label>
        <input class="form-control" type="text" value="<?php echo $addCat['cat_des'] ?>" name="u_cat_des" id="cad_des">
    </div>

    <input class="btn btn-danger form-control" type="submit" name="add_cat_btn" value="Update Category">
</form>