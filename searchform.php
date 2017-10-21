<form method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="screen-reader-text" for="s"><?php _x('Search for:', 'label'); ?></label>
    <input type="text" value="<?php echo get_search_query(); ?>" name="s" class="search" placeholder="Buscar" />
    <input type="submit" class="search" value="<?php echo esc_attr_x('Buscar', 'submit button'); ?>" />
</form>