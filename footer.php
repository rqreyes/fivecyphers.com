<?php $Get_URL = $_SERVER['REQUEST_URI'];
if ( $Get_URL == '/' ) {  ?> 
    <section class="cta">
      <div class="row">
        <div class="medium-4 medium-offset-1 columns">
          <p>With the aim to encourage and empower dancers to discover their own Path, <em>The Book of Five Cyphers </em>takes you on a journey through the dance and into a new perspective on life.</p>
          <a href="https://www.amazon.com/Book-Five-Cyphers-Cory-Howell/dp/0692671803" class="button hollow expanded" target="_blank">Pick up your copy now</a>
        </div>
        <div class="medium-6 columns"></div>
      </div>
    </section>
<?php } else { ?>
    <section class="cta">
      <div class="row">
        <div class="medium-4 medium-offset-8 columns">
          <p>With the aim to encourage and empower dancers to discover their own Path, <em>The Book of Five Cyphers </em>takes you on a journey through the dance and into a new perspective on life.</p>
          <a href="https://www.amazon.com/Book-Five-Cyphers-Cory-Howell/dp/0692671803" class="button hollow expanded" target="_blank">Pick up your copy now</a>
        </div>
      </div>
    </section>
<?php } ?>

<footer class="row columns text-center">
	<p>&copy; <?php echo date('Y') ?> The Book of Five Cyphers<br>Website developed by <a href="http://rqreyes.com/" target="_blank">Randy Q Reyes</a></p>
</footer>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/what-input/1.1.4/what-input.min.js'></script>
<script src='https://cdn.jsdelivr.net/foundation/6.2.0/foundation.min.js'></script>
<script src="js/app.js"></script>