<?php
    function sidebar($title) {

        $dashboardActive = '';
        $postsActive = '';
        $usersActive = '';

        $postTitle = ['Posts', 'New Post', 'Úpdate Posts'];
        $userTitle = ["New User", "User", "User Update"];

        if ($title === 'Dashboard') {
            $dashboardActive = 'active';
        }

        if (in_array($title, $postTitle)) {
            $postsActive = 'active';
        }

        if (in_array($title, $userTitle)) {
            $usersActive = 'active';
        }

        return '
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                        <a class="nav-link '. $dashboardActive .' " href="index.php">
                            Dashboard <span class="sr-only">(current)</span>
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link ' .$postsActive . ' "href="posts.php" title="Posts">
                            Posts
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link ' . $usersActive . ' "href="users.php" title="Users">
                            Users
                        </a>
                        </li>
                    </ul>
                </div>
            </nav>
        ';
    }
