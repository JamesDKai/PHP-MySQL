<?php
  include('includes/header.php');
  include('includes/posts.php');
?>

      <div class="blog-header">
        <div class="container">
          <h1 class="blog-title">The Bootstrap Blog</h1>
          <p class="lead blog-description">An example blog template built with Bootstrap.</p>
        </div>
      </div>

      <div class="container">

        <div class="row">

          <div class="col-sm-8 blog-main">
            <?php foreach($posts as $post) { ?>
              <div class="blog-post">
                <h2 class="blog-post-title"><?php echo $post['post-title']; ?></h2>
                <p class="blog-post-meta"><?php echo $post['post-date']; ?> by <?php echo $post['post-author']; ?></p>
                <?php echo $post['post-content']; ?>
              </div><!-- /.blog-post -->
            <?php } ?>

            <nav class="blog-pagination">
              <a class="btn btn-outline-primary" href="#">Older</a>
              <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>

          </div><!-- /.blog-main -->

        <?php include('includes/sidebar.php'); ?>

        </div><!-- /.row -->

      </div><!-- /.container -->

      <?php include('includes/footer.php'); ?>
