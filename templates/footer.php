<footer class="site-footer">
      <p>The Blog Project</p>
      <ul class="sociais-item">
        <li>
          <a href="#" title="facebook">
          <i class="fab fa-facebook-square"> </i>
          </a>
        </li>
        <li>
          <a href="#" title="twitter">
          <i class="fab fa-twitter-square"></i>
          </a>
        </li>
        <li>
          <a href="#" title="instagran">
          <i class="fab fa-instagram"></i>
          </a>
        </li>
      </ul>
    </footer>
    <script src="vendor/js/jquery-3.5.1.min.js"></script>
    <script src="vendor/js/popper.min.js"></script>
    <script src="vendor/js/bootstrap.4.5.0.min.js"></script>
    <script>
	    jQuery(document).ready(function($) {
		    $('#signInForm').on('submit', function(event) {
			    event.preventDefault();
			    event.stopPropagation();
			    window.open('dashboard/index.php', '_self');
		    })
      });
    </script>
  </body>
</html>
