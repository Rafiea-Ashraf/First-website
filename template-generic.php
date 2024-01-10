<?php
/*
Template Name: Enhanced Template
*/
?>

<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>

    <div class="entry-content">
        <?php
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
        ?>
    </div>

    <footer class="entry-footer">
        <?php
        // Display post meta information (date, author, categories, tags)
        if (is_single()) :
            echo '<div class="post-meta">';
            echo '<span class="post-date">' . get_the_date() . '</span>';
            echo '<span class="post-author">' . esc_html__('By', 'your-theme') . ' ' . get_the_author() . '</span>';
            echo '<span class="post-categories">' . get_the_category_list(', ') . '</span>';
            echo '<span class="post-tags">' . get_the_tag_list('', ', ') . '</span>';
            echo '</div>';
        endif;
        ?>

        <?php
        // Add a comment section
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
        ?>
    </footer>
</article>

<div class="clearfix">
    <div class="sidebar-left">
        <?php dynamic_sidebar('Primary Sidebar'); ?>
    </div>
    <div class="content-right">
        <?php
        // Your main content loop goes here
        while (have_posts()) : the_post();
            // Display the content of the post
            the_content();
        endwhile;
        ?>
    </div>
</div>

<?php get_footer(); ?>