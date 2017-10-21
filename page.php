<?php
// Evita el acceso directo al archivo .php
if (!defined('ABSPATH'))
    exit;
get_header();
?>
<?php if (have_posts()) : ?>
    <?php /* Start the Loop */ ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
<?php else : ?>


<?php endif; ?>
<?php
get_footer();
?>
