<?php 
    get_header();
    if(have_posts()):
        while(have_posts()):
            the_post();
?>
    <article class="post page">
        <h2>
        <?php echo the_title(); ?></h2>
        <?php the_content(); ?>
    </article>
<?php
        endwhile;
    else:
        ?>
    <p>No content found</p>

<?php
    endif;
    ?>
<?php 
    get_footer();

