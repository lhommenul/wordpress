<?php get_header(); ?>

        <main id="primary" class="content-area" role="main">

            <?php if(have_posts()) {
                while(have_posts()) {
                    the_post(); ?>
                    <article class="post hentry">

                        <header class="entry-header">
                            <h2 class="entry-title"><?php the_title(); ?></a></h2>
                            <p class="entry-meta">
                                <span class="byline">Posted in <?php the_category(', '); ?>, on <?php the_date(); ?></span>
                            </p><!-- .entry-meta -->
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div><!-- .entry-content -->
                        
                    </article><!-- #post-## -->
                <?php }
            } ?>

        </main><!-- #main -->

        <?php dynamic_sidebar('aside'); ?>
    
<?php get_footer(); ?>