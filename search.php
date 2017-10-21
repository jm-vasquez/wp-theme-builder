<?php
global $query_string;
rewind_posts();
$query_args = explode("&", $query_string);
$search_query = array();
foreach ($query_args as $key => $string) {
    $query_split = explode("=", $string);
    $search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$loop = new WP_Query($search_query);
$total_results = $loop->found_posts;
wp_reset_postdata();
get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php $search = filter_input(INPUT_GET, 's', FILTER_SANITIZE_SPECIAL_CHARS); ?>
            <h1 class="entry-title">Resultados de la b&uacute;squeda: <?php echo $search; ?></h1>
            <?php
            if ($loop->have_posts()):
                while ($loop->have_posts()): $loop->the_post();
                   
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            
                                    
                                    <p><a href="<?php the_permalink(); ?>">
                                        <h5><?php the_title(); ?></h5>
                                    </a><?php the_excerpt(); ?></p>
                                    <hr>
                        </div>

                    </div>
                    
                    <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
            </div>
            <!--<div class="row navegacion">
                <div class="col-md-6 text-left"><?php next_posts_link('Noticias anteriores', $loop->max_num_pages); ?></div>
                <div class="col-md-6 text-right"><?php previous_posts_link('Noticias nuevas', $loop->max_num_pages); ?></div>
            </div>-->
        </div>
        
        
    </div>
</div>

<?php
get_footer();
?>
