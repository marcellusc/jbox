<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Cargo Lite
 */

get_header(); ?>
<div class="main-container">
<div class="content-area">
    <div class="middle-align">
        <div class="error-404 not-found" id="sitefull">
            <header class="page-header">
                <h1 class="title-404"><?php esc_html_e( '404 Not Found', 'cargo-lite' ); ?></h1>
            </header><!-- .page-header -->
            <div class="page-content">
                <p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn..... Do Not worry... it happens to the best of us.', 'cargo-lite' ); ?></p>
                <?php get_search_form(); ?>
            </div><!-- .page-content -->
        </div>
        <div class="clear"></div>
    </div>
</div>

<?php get_footer(); ?>