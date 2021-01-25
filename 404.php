<?php get_header(); ?>
    <section class="layout basic-content content-center">
        <div class="wrapper">
            <div class="row">
                <div class="col">
                    <div class="content">
                        <h1>404</h1>
                        <p class="h1"><?php the_field('404_headline', 'option'); ?></p>
                    </div>
                    <div class="buttons">
                        <?php $link = get_field( '404_link', 'option' ); ?>
                        <?php if ( $link ) : ?>
                            <a class="btn" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
                        <?php endif; ?>                  
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
