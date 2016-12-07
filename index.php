<?php 
    get_header();
    if(have_posts()):
        while(have_posts()):
            the_post();
?>
    <h1>
    <a href="<?php echo the_permalink(); ?>">
    <?php echo the_title(); ?></a></h1>
    <article class="post">
        <?php the_content(); ?>
    </article>
<?php
        endwhile;
    else:
        ?>
    <p>No content found</p>

<?php
    endif;
    get_footer();
?>
