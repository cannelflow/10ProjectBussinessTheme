<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="blog">
                        <div class="row">
                            <div class="col-md-5">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="blog-img">
                                <?php the_post_thumbnail('full',array(
                                      'class' => 'img-responsive',
                                       )); ?>
                                    </div> <!-- .blog-img -->
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-block">
                                             <?php echo __('Read More'); ?>
                                    </a>
                                <?php endif ; ?> <!-- if ends here of thumbnail -->    
                            </div> <!-- .col-md-5 -->
                            <div class="col-md-7">
                                <div class="blog-meta">
                                  <h2 class="blog-meta-title"><a href="<?php the_permalink() ; ?>"><?php the_title() ; ?></a></h2>
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
                                <div class="blog-excerpt">
		                             <?php the_excerpt(); ?>
		                         </div> <!-- .blog-excerpt -->
                            </div> <!-- .col-md-7 -->
                        </div> <!-- .row -->
                    </article> <!-- .blog -->
                  <?php endwhile; else : ?>
	              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>