<?php 

$args = array(
    'post_type' => 'post', // You can change this to a custom post type if needed
    'posts_per_page' => -1, // Display all posts, you can limit this number
);

// créer la requête
$custom_query = new WP_Query($args);

//checker si posts et lancer la boucle
if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : $custom_query->the_post();
   
   $post_terms = get_the_terms(get_the_ID(), 'category'); ?>

       
ici conntenu de la boucle


<?php 
endwhile;
// Restore the original post data
wp_reset_postdata();
else :
// If no posts are found
echo 'No projects found';
endif


?>