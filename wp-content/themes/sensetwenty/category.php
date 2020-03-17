<?php get_header() ?>

    <section id="page-title">

        <div class="container clearfix">
            <h1><?php the_archive_title(); ?></h1>
            <span><?php the_archive_description();?></span>
        </div>

    </section><!-- #page-title end -->

    <!-- Content ============================================= -->
    <section id="content">
            <br>
            <div class="container clearfix">
                <!-- Post Content
				============================================= -->
                <div class="postcontent nobottommargin clearfix">

                    <!-- Posts
					============================================= -->
                    <div id="posts">
						<?php
						if( have_posts()) {
							while(have_posts()) {
								the_post();
								// primary template
								get_template_part('template-parts/post/content-excerpt');

								// back up template
								// get_template_part('template-parts/post/content','excerpt');
							}
						}
						?>
                    </div><!-- #posts end -->

                    <!-- Pagination
					============================================= -->
                    <div class="row mb-3">
                        <div class="col-12">

							<?php
							next_posts_link('&larr; Older');
							?>

							<?php
							previous_posts_link('Newer &rarr;');
							?>
                        </div>
                    </div>
                    <!-- .pager end -->
                </div><!-- .postcontent end -->

                <!-- Add Sidebar PHP Here-->
				<?php get_sidebar();?>
            </div>
        </div>

    </section><!-- #content end -->

<?php get_footer(); ?>