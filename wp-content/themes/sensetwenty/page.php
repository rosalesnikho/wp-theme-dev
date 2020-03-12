<?php get_header();

while ( have_posts() ) {
	the_post();
	?>
    <!-- Page Title ============================================= -->
    <section id="page-title">
        <div class="container clearfix">
            <h1><?php the_title() ?></h1>
            <!--	        Optional Subtitle WP-Dev Udemy Lesson 27 -->
        </div>
    </section><!-- #page-title end -->
	<?php
}

?>

    <!-- Content ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Post Content
				============================================= -->
                <div class="postcontent nobottommargin clearfix">

					<?php
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();

							global $post;
							$author_ID  = $post->post_author;
							$author_URL = get_author_posts_url( $author_ID );

							?>
                            <div class="single-post nobottommargin">

                                <!-- Single Post ============================================= -->
                                <div class="entry clearfix">


                                    <!-- Entry Image ============================================= -->
                                    <div class="entry-image">

										<?php
										if ( has_post_thumbnail() ) {
											?>
                                            <div class="entry-image">
                                                <a href="<?php the_permalink(); ?>">
													<?php the_post_thumbnail( 'full' ); ?>
                                                </a>
                                            </div>
											<?php
										}
										?>
                                    </div><!-- .entry-image end -->

                                    <!-- Entry Content ============================================= -->
                                    <div class="entry-content notopmargin">

										<?php
										the_content();

										// link_pages will pull 'page-break' functionality and paginate automatically on the view
										// $default are option and settings for wp_link_pages()
										// resource: https://developer.wordpress.org/reference/functions/wp_link_pages/
										$link_pages_defaults = array(
											'before' => '<p class="text-center text-black-50">' . __( 'Pages:', 'sensetwenty' ),
											'after'  => '</p>'
										);
										wp_link_pages( $link_pages_defaults );
										?>
                                        <!-- Post Single - Content End -->

                                        <div class="clear"></div>

                                    </div>
                                </div><!-- .entry end -->


                                <!-- Post Single - Author End -->

                                <div class="line"></div>


                                <!-- Looks for and loads comments -->
								<?php
								if ( comments_open() || get_comments_number() ) {
									comments_template();
								}
								?>
                            </div>
							<?php

						}
					}
					?>
                </div><!-- .postcontent end -->

                <!-- Add Sidebar PHP Here-->
				<?php get_sidebar(); ?>
            </div>
        </div>

    </section><!-- #content end -->

<?php get_footer(); ?>