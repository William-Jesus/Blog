<?php
require_once "templates/header.php"
?>
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="posts.php" title="Posts">
                Posts <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="users.php" title="Users">
                Users
              </a>
            </li>
          </ul>
        </div>
      </nav>

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
                <tr>
                  <th scope="row">1</th>
                  <td>Post 01</td>
                  <td>Joe Doe</td>
                  <td>01/01/2020</td>
                  <td>
                    <a href="post_update.php" class="btn btn-info" title="Update">
                      Update
                    </a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Post 02</td>
                  <td>Joe Doe</td>
                  <td>20/01/2020</td>
                  <td>
                    <a href="post_update.php" class="btn btn-info" title="Update">
                      Update
                    </a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Post 03</td>
                  <td>Jane Doe</td>
                  <td>05/02/2020</td>
                  <td>
                    <a href="post_update.php" class="btn btn-info" title="Update">
                      Update
                    </a>
                  </td>
                </tr>
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
  require_once "tempates/footer.php";
