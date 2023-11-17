<?php
$posts = $obj->display_post_public();


?>

<div class="col-lg-8">
    <div class="all-blog-posts">
        <div class="row">
            <?php while ($postData = mysqli_fetch_assoc($posts)) { ?>
                <div class="col-lg-12">
                    <div class="blog-post">
                        <div class="blog-thumb">
                            <img width="100" src="upload/<?php echo $postData['post_img']; ?>">
                        </div>
                        <div class="down-content">
                            <span><?php echo $postData['cat_name']; ?></span>
                            <a href="post-details.html">
                                <h4>Best Template Website for HTML CSS</h4>
                            </a>
                            <ul class="post-info">
                                <li><a href="#"><?php echo $postData['post_author']; ?></a></li>
                                <li><a href="#"><?php echo $postData['post_date']; ?></a></li>
                                <li><a href="#"><?php echo $postData['post_comment_count']; ?></a></li>
                            </ul>
                            <p><?php echo $postData['post_summery']; ?></p>
                            <div class="post-options">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="#"><?php echo $postData['post_tag']; ?>
                                    </div>
                                    <div class="col-6">
                                        <ul class="post-share">
                                            <li><i class="fa fa-share-alt"></i></li>
                                            <li><a href="#">Facebook</a>,</li>
                                            <li><a href="#"> Twitter</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>