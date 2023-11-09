<?php
if (isset($_POST['add_cat'])) {
    $return_msg = $obj->add_category($_POST);
}


?>

<h1>Add category page</h1>
<?php if (isset($return_msg)) {
    echo $return_msg;
} ?>
<form class="" action="" method="post">
    <div class=" mb-3 form-group">
        <label for="cadName">Category Name</label>
        <input class="form-control" type="text" name="cat_name" id="cadName">
    </div>

    <div class="mb-3 form-group">
        <label for="cad_des">Category Description</label>
        <input class="form-control" type="text" name="cat_des" id="cad_des">
    </div>

    <input class="btn btn-danger form-control" type="submit" name="add_cat" value="Add Category">
</form>