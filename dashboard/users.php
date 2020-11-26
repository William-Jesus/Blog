<?php
$pageTitle = "User";
require_once "templates/header.php";
require_once "templates/sidebar.php";
?>
  <div class="container-fluid">
    <div class="row">
    <?php echo sidebar($pageTitle); ?>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Users Management</h1>
          <a href="user_new.php" class="btn btn-success" title="New User">
            New User
          </a>
        </div>
        <section class="dashboard-section">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Creation Date</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Joe Doe</td>
                  <td>joedoe@example.com</td>
                  <td>01/01/2020</td>
                  <td>
                    <a href="user_update.php" class="btn btn-info" title="Update">
                      Update
                    </a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jane Doe</td>
                  <td>janedoe@example.com</td>
                  <td>10/01/2020</td>
                  <td>
                    <a href="user_update.php" class="btn btn-info" title="Update">
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
  require_once "templates/footer.php";
