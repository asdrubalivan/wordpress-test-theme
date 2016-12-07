<?php 
/*
 * Template Name: Special Layouta
 * */
    get_header();
    if(have_posts()):
        while(have_posts()):
            the_post();
?>
    <article class="post page clearfix">
    <h2>
    <?php echo the_title(); ?></h2>
        <div class="text-column-left">
<div class="info-box">
Lorem sint quisquam eligendi impedit necessitatibus vero explicabo perferendis. Rem quae veritatis minus ad ab repudiandae ratione quidem repellendus. Sit ut aperiam asperiores hic voluptatem autem suscipit dolores totam temporibus!
</div>

<?php the_content(); ?>
</div>
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

