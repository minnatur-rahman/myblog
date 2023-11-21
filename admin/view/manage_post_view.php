<?php
$posts = $obj->display_post();

if(isset($_GET['status'])){
    if($_GET['status']='deletepost'){
        $id = $_GET['id'];
         $delmsg = $obj->delete_post($id);
    }
}

?>

<h1>Manage post page</h1>
<?php if(isset $delmsg ){echo $delmsg ;} ?>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Thumb</th>
                <th>Author</th>
                <th>Date</th>
                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($postData = mysqli_fetch_assoc($posts)) { ?>
                <tr>
                    <td><?php echo $postData['post_id']; ?></td>
                    <td><?php echo $postData['post_title']; ?></td>
                    <td><?php echo $postData['post_content']; ?></td>
                    <td><img height="100" src="../upload/<?php echo $postData['post_img']; ?>"><br>
                        <a href="edit_img.php?status=editimg&&id=<?php echo $postData['post_id']; ?>">Change</a>
                    </td>
                    <td><?php echo $postData['post_author']; ?></td>
                    <td><?php echo $postData['post_date']; ?></td>
                    <td><?php echo $postData['cat_name']; ?></td>
                    <td><?php if ($postData['post_status'] == 1) {
                            echo "published";;
                        } else {
                            echo "Unpublished";
                        } ?></td>
                    <td>
                        <a class="btn btn-danger" href="edit_post.php?status=editpost&&id=<?php echo $postData['post_id']; ?>">Edit</a>
                        <a class="btn btn-warning" href="delete_post.php?status=deletepost&&id=<?php echo $postData['post_id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>