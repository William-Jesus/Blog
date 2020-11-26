<?php
$pageTitle = 'Posts';
require_once "templates/header.php";
require_once "templates/sidebar.php";
require_once "functions/post_helper.php";
?>
  <div class="container-fluid">
    <div class="row">
    <?php echo sidebar($pageTitle); ?>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Posts Management</h1>
          <a href="post_new.php" class="btn btn-success" title="New Post">
            New Post
          </a>
        </div>
        <section class="dashboard-section">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Author</th>
                  <th scope="col">Creation Date</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $result = get_post();
              while($post = $result->fetch_object()) { ?>
              <tr>
                  <th scope="row"><?php echo $post->id; ?></th>
                  <td><?php echo $post->title; ?></td>
                  <td><?php echo $post->slug; ?></td>
                  <td><?php echo $post->creation_date; ?></td>
                  <td>
                    <a href="post_update.php?post_id=<?php echo $post->id;?>" class="btn btn-info" title="Update">
                      Update
                    </a>
                  </td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>

          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-3">
                <nav aria-label="Posts navigation">
                  <ul class="pagination pagination-default">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>
  <?php
  require_once "templates/footer.php";
