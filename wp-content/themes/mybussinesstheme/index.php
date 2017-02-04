<?php get_header() ; ?>

<section id="sec-11">
        <div class="container">
        <h1><?php echo __('Blog'); ?></h1>
</section>
<section class="container" id="article">
        <div class="row">
            <?php if(is_active_sidebar('sidebar')) : ?>
              <div class="col-md-8">
                   <?php get_template_part('content', get_post_format()) ; ?>
              </div> <!-- .col-sm-8 -->
              <div class="col-sm-4">
                <?php get_sidebar() ; ?>
              </div> <!-- .col-sm-4 -->
        </div> <!-- .row -->    
            <?php else : ?>
              <div class="col-md-12">
                  <?php get_template_part('content', get_post_format()) ; ?>
              </div>  <!-- .col-md-12 -->    
            <?php endif; ?>
</section> <!-- .container -->
<section id="sec-2">
        <div class="container">
            <h3>Clean Bootstrap Wordpress Theme </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien sem, laoreet eu tempus vitae, sollicitudin eu odio </p>
        </div>
    </section>
<section id="sec-3">
        <div class="container">
            <div class="row">
                <div class="col-md-5"><img src="assets/img/pic1.jpg" class="img-responsive"></div>
                <div class="col-md-7">
    <h3>Theme Features</h3>
            <ul class="list-group">
              <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Clean Code</li>
              <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Custom Showcase Area</li>
              <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Bootstrap 3 Framework</li>
              <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Multiple Color Choices</li>
            </ul>
</div>
            </div>
        </div>
    </section>
    
<?php get_footer() ; ?>