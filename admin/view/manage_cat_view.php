<?php
$catData = $obj->display_category();

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'delete') {
        $dele = $_GET['id'];

        $cat_deleted = $obj->delete_category($dele);
    }
}

?>



<h1>Manage category page</h1>
<?php if (isset($cat_deleted)) {
    echo $cat_deleted;
} ?>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Category Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($cat = mysqli_fetch_assoc($catData)) { ?>
            <tr>
                <td><?php echo $cat['cat_id']; ?></td>
                <td><?php echo $cat['cat_name']; ?></td>
                <td><?php echo $cat['cat_des']; ?></td>
                <td>
                    <a class="btn btn-warning" href="edit.php?status=edit&&id=<?php echo $cat['cat_id']; ?>">Edit</a>
                    <a class="btn btn-danger" href="?status=delete&&id=<?php echo $cat['cat_id']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>