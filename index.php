<?php get_header();?>
<?php if (have_rows('sections')):

while (have_rows('sections')): the_row();

if (get_row_layout() == 'top') {
sections('top');
} elseif (get_row_layout() == 'about') {
sections('about');
} elseif (get_row_layout() == 'contact') {
sections('contact');
} elseif (get_row_layout() == 'portfolio') {
sections('portfolio');
} elseif (get_row_layout() == 'services') {
sections('services');
} elseif (get_row_layout() == 'call_to_action') {
sections('call_to_action');
}

endwhile;
endif;
?>
<?php
$sections = get_field('sections');

?>
<?php get_footer() ;?>
