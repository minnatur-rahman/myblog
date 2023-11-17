<?php
if (isset($_GET['status'])) {
    if ($_GET['status'] = 'editpost') {
        $id = $_GET['id'];
        $postData = $obj->get_post_info($id);
    }
}
?>


<div class="shadow m-5 p-5">
    <form class="form" action="" method="post">
        <input name="edit_post_id" type="hidden" value="<?php echo $id; ?>">
        <div class="form-group">
            <label class="mb-2" for="change_title">Post Title</label>
            <input value="<?php echo $postData['post_title']; ?>" class="form-control py-4" type="text" name="change_title" id="change_title">
        </div>
        <div class="form-group">
            <label class="mb-3" for="change_cont">Change Content</label>
            <textarea class="form-control" name="change_cont" id="change_cont" cols="30" rows="10">
            <?php echo $postData['post_content']; ?>
            </textarea>
        </div>
        <input type="submit" value="Update Posts" class="btn btn-danger" name="update_post">
    </form>
</div>