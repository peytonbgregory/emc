<?php
/**
 * The main template file.
 *
 */

get_header(); ?>


		<div class="row">
			<div class="col-md-12">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
					<h1>Projects</h1>
					<?php if ( have_posts() ) : ?>
					
						<?php while ( have_posts() ) : the_post(); ?>
                        	<div class="row">
                            	<div class="col-md-2">
                                	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'cat-img img-thumbnail')); ?></a>
                                </div>
                                <div class="col-md-10">
                                    <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p class="category-excerpt"><?php the_excerpt(); ?></p>
                                    <footer class="entry-meta">
										<?php if ('post' == get_post_type()) : // Hide category and tag text for pages on Search ?>
                                            <?php
                                                /* translators: used between list items, there is a space after the comma */
                                                $categories_list = get_the_category_list( __( ', ', 'upbootwp' ) );
                                                if ( $categories_list && upbootwp_categorized_blog() ) :
                                            ?>
                                            <span class="cat-links">
                                                <?php printf( __( 'Posted in %1$s', 'upbootwp' ), $categories_list ); ?>
                                            </span>
                                            <?php endif; // End if categories ?>
                                
                                            <?php
                                                /* translators: used between list items, there is a space after the comma */
                                                $tags_list = get_the_tag_list( '', __( ', ', 'upbootwp' ) );
                                                if ( $tags_list ) :
                                            ?>
                                            <span class="tags-links">
                                                <?php printf( __( 'Tagged %1$s', 'upbootwp' ), $tags_list ); ?>
                                            </span>
                                            <?php endif; // End if $tags_list ?>
                                        <?php endif; // End if 'post' == get_post_type() ?>
                                
                                
                                        <?php edit_post_link( __( 'Edit', 'upbootwp' ), '<span class="edit-link">', '</span>' ); ?>
                                    </footer><!-- .entry-meta -->
                                    <a class="btn btn-default read-more-btn" href="<?php the_permalink(); ?>">Read More</a>
                            	</div>
							</div><!-- row -->
						<?php endwhile; ?>
			
					
			
					<?php else : ?>
						<?php get_template_part( 'no-results', 'index' ); ?>
					<?php endif; ?>
			
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- .col-md-12 -->
			
			
		</div><!-- .row -->

<?php get_footer(); ?> 