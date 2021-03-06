<?php get_header(); ?>
  <div class="wrap-content container general-content">
    <div class="site-content col-md-9 col-xs-12 col-sm-12">
      <section id="primary" class="content-area">
        <main id="main" class="site-main">
        <?php if ( have_posts() ) {
          while ( have_posts() ) : the_post(); ?>
            <?php $catgory = get_the_category(); 
             ?> 
            <?php if($catgory[0]->name != "TEMPLATE ElEMENT") : ?> 
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
              <header class="entry-header">
                <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
              </header>
              <div class="entry-content">
                <?php the_content(); ?>
              </div>
            </article>
          <?php endif;?>
          <?php endwhile;
        } else { ?>
          <article id="post-0" class="post no-results not-found">
            <header class="entry-header">
              <h1><?php _e( 'Not found', 'voidx' ); ?></h1>
            </header>
            <div class="entry-content">
              <p><?php _e( 'Sorry, but your request could not be completed.', 'voidx' ); ?></p>
              <?php get_search_form(); ?>
            </div>
          </article>
        <?php } ?>
        </main>
        <?php voidx_post_navigation(); ?>
      </section>
    </div>
    <div class="siderbar col-md-3 hidden-xs hidden-sm">
    <?php get_sidebar(); ?>
    </div>
  </div>
<?php get_footer(); ?>