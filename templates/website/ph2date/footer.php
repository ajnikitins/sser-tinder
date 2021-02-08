    </div>
</div>

<div class="footer">
    <div class="container">
      <p class="text-muted">
         <a class="text-danger" href="http://association.lv">SA Website</a> &nbsp;&bull;&nbsp;
      <?php foreach($pages AS $page): ?>
          <a class="text-danger" href="<?php echo site_url('main/page/'.$page->page_url) ?>"><?php echo $page->page_name ?></a> &nbsp;&bull;&nbsp;
      <?php endforeach ?>

      </p>
    </div>
</div>

</body>
</html>
