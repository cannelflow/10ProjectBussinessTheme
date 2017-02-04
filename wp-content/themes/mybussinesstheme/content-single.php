<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section id="sec-111">
        <div class="container">
         <h2 class="blog-meta-title"><?php the_title() ; ?></h2>
        </div> 
</section>

                    <article class="blog">
                        <div class="row">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="blog-img">
                                <?php the_post_thumbnail('full',array(
                                      'class' => 'img-responsive',
                                       )); ?>
                                    </div> <!-- .blog-img -->
                                <?php endif ; ?> <!-- if ends here of thumbnail -->   
                                <div class="blog-meta">
                                  
                                  <p class="blog-meta-detail">
                                    Posted by <?php the_author_posts_link(); ?> 
                                    on <?php the_time('F j, Y'); ?>
                                    Category <?php if(has_category()) {
                                        the_category(', ');
                                      } else {
                                       echo("No Category Found!!");
                                        }
                                      ?>
                                    <?php if(has_tag()) {
                                        the_tags();
                                      } else {
                                       echo("No Tags Found!!");
                                        }
                                      ?>
                                   </p>
                                </div> <!-- .blog-meta -->
                                <div class="blog-content">
		                             <?php the_content(); ?>
		                         </div> <!-- .blog-content -->
                        </div> <!-- .row -->
                    </article> <!-- .blog -->
                    <div class="comment">
	                       <?php comments_template() ?>
	                    </div> <!-- .comment -->
                  <?php endwhile; else : ?>
	              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>   