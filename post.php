<?php
require_once "./templates/header.php";
?>
    <main>
      <section class="section-title">
        <h1> Title</h1>
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
                    Jan 1, 2020
                    </p>
                  </div>
                  <hr>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi pariatur, aliquid at numquam aperiam
                    velit laboriosam, esse vero, maxime facilis explicabo voluptate dolores? Libero animi itaque porro
                    quia cupiditate? Enim?</p>
                  <p>Aperiam voluptate obcaecati eum blanditiis voluptates ipsam voluptatum repellendus. Molestiae
                    deleniti, totam sed, saepe magni eos, reiciendis temporibus pariatur porro ipsam mollitia assumenda
                    suscipit praesentium adipisci officiis illo odio natus? Ipsum totam a ratione earum et sit provident
                    saepe veniam eveniet porro beatae vitae in error commodi vel amet fuga, consequatur similique nemo!
                    Dignissimos quisquam quaerat itaque molestias, reiciendis magni!</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <aside class="sidebar-default">
                <h2>Latests Posts</h2>
                <hr>
                <ul class="posts-links">
                  <li>
                    <a href="post.html">One Post</a>
                  </li>
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
