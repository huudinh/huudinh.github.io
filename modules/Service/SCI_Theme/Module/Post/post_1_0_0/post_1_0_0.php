<style>
	<?php include(locate_template("Module/Post/post_1_0_0/sass/post_1_0_0.min.css")); ?>
</style>

<h1 class="post_1_0_0__title"><?php the_title(); ?></h1>

<?php  include(locate_template('Module/Post/post_author_1_0_0/post_author_1_0_0.php')); ?>

<div class="post_1_0_0">		
    <?php 
        $sapo = get_field('sapo',$post->ID);
        if($sapo != ''){
        echo '<div class="sapo">'.$sapo.'</div>';
        }
    ?>
   
    <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
</div>