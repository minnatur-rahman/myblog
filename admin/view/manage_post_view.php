<?php
$posts = $obj->display_post();

?>

<h1>Manage post page</h1>
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
                    <td><img height="100" src="../upload/<?php echo $postData['post_img']; ?>" alt=""></td>
                    <td><?php echo $postData['post_author']; ?></td>
                    <td><?php echo $postData['post_date']; ?></td>
                    <td><?php echo $postData['cat_name']; ?></td>
                    <td><?php echo $postData['post_status']; ?></td>
                    <td>
                        <a class="btn btn-danger" href="#">Edit</a>
                        <a class="btn btn-warning" href="#">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>