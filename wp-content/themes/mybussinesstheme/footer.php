<section id="footer">
      <footer class="footer">
        <div class="container">
         <?php if(is_active_sidebar('footer-1')) : ?>
              <?php dynamic_sidebar('footer-1'); ?>
            <?php endif; ?>

          <?php if(is_active_sidebar('footer-2')) : ?>
              <?php dynamic_sidebar('footer-2'); ?>
            <?php endif; ?>

          <?php if(is_active_sidebar('footer-3')) : ?>
              <?php dynamic_sidebar('footer-3'); ?>
            <?php endif; ?>
            
        </div>
      </footer>
</section>
<?php wp_footer() ; ?> 
</body>

</html>