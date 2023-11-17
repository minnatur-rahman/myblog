<?php
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'editimg') {
        $id = $_GET['id'];
    }
}
if (isset($_POST['change_img_btn'])) {
    $msg = $obj->edit_img($_POST);
}

?>

<div class="shadow m-5 p-5">
    <?php if (isset($msg)) {
        echo $msg;
    } ?>
    <form class="form" action="" method="post" enctype="multipart/form-data">
        <input name="editImg_id" type="hidden" value="<?php echo $id; ?>">
        <div class="form-group">
            <label class="mb-" for="change_img">Change Thumbnail</label><br>
            <input class="py-4" type="file" id="change_img" name="change_img">
        </div>
        <input class="btn btn-danger" type="submit" name="change_img_btn" value="Change Thumbnail">
    </form>
</div>