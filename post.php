<?php
require_once "./templates/header.php";
require_once "./dashboard/functions/post_helper.php";
$post = get_post($_GET["post_id"]);
?>
    <main>
      <section class="section-title">
        <h1><?php echo $post->title; ?></h1>
      </section>
      <section class="post-tipe section_min-height">
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <div class="post-item item-highlight">
                <div class="post-item-main">
                  <div class="post-item-meta">
                    <h4 class="post-author"><em>John Doe</em></h4>
                    <p class="post-date">
                    <i class="fa fa-calendar"></i>
                    <?php echo $post->creation_date; ?>
                    </p>
                  </div>
                  <hr>
                  <?php echo $post->text; ?>

                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <aside class="sidebar-default">
                <h2>Latests Posts</h2>
                <hr>
               <?php $result = get_recent_post(); ?>
                <ul class="posts-links">
                <?php while($post = $result->fetch_object()) { ?>
                  <li>
                    <a href="post.php?post_id=<?php echo $post->id;?>"><?php echo $post->title ?></a>
                  </li>
                <?php }?>
                </ul>
              </aside>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php
        require_once "./templates/footer.php"
    ?>
