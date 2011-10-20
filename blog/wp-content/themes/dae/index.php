
<?php get_header(); ?>

<div id="main">
<div id="mainContents">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="post">

<div class="title">
<div class="line1"></div>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
</div>

<div class="date"><?php the_time('F jS, Y'); ?></div>

<div class="entry">
<?php the_content(); ?>
</div>

<div class="postmetadata">Posted in <?php the_category(', '); ?></div>
</div> <!-- 最初の div ボックスを閉じる -->

<?php endwhile; else: ?>

<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

</div>

<div id="sidebar">
<?php get_sidebar(); ?>
</div>

</div>

<?php get_footer(); ?>

