<?php
$categoryName = $obj->display_category();

if (isset($_post['add_post'])) {
    $msg = $obj->add_post($_post);
}
?>


<h1>Add post page</h1>
<?php if (isset($msg)) {
    echo $msg;
} ?>

<form class="table table-responsive" action="" method="post" enctype="multipart/form-data">
    <div class=" mb-5 form-group">
        <label for="post_title">Post Title</label>
        <input class="form-control" type="text" name="post_title" id="post_title">
    </div>

    <div class="mb-5 form-group">
        <label for="post_content">Post Content</label>
        <textarea class="form-control" name="post_content" id="post_content" cols="30" rows="10"></textarea>
    </div>
    <div class="mb-5 form-group">
        <label for="post_img">Upload Image</label><br>
        <input class="mt-3" type="file" name="post_img" id="post_img">
    </div>
    <div class="mb-5 form-group">
        <label for="post_cat">Select Post Category</label>
        <select class="form-control" name="post_ctg" id="post_cat">
            <?php while ($category = mysqli_fetch_assoc($categoryName)) { ?>
                <option value="<?php echo $category['cat_id']; ?>"><?php echo $category['cat_name']; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="mb-5 form-group">
        <label for="post_summery">Post Summery</label>
        <input class="form-control" type="text" name="post_summery" id="post_summery ">
    </div>
    <div class="mb-5 form-group">
        <label for="post_tags">Post Tags</label>
        <input class="form-control" type="text" name="post_tag" id="post_tags">
    </div>
    <div class="mb-5 form-group">
        <label for="post_status">Post Status</label>
        <select class="form-control" name="post_status" id="post_status">
            <option value="1">Published</option>
            <option value="0">Unpublished</option>
        </select>
    </div>


    <input class="btn btn-danger form-control" type="submit" name="add_post" value="Add Posts">
</form>