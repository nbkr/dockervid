    <div class="row">
      <div class="twelve columns" style="margin-bottom:50px; margin-top:30px;">
		<hr />
        <div style="text-align:center; with:100%; position:relative; top:-20px; font-size:0.8em;">
        <?php
            if (! in_array($_SERVER['REQUEST_URI'], ['/index.html', '/'])) {
                echo '<a href="/">Home</a> &middot; ';
            }
        ?>
		<a href="/impressum/">Impressum</a> &middot; <a href="/datenschutz/">Datenschutz</a>
        </div>
      </div>
    </div>
  </div>




</body>
</html>

