<?php
    $path = get_template_directory_uri();
    $path = $path.'/Module/Post/post_author_1_0_0';
?>
<style>
    <?php include(locate_template("Module/Post/post_author_1_0_0/sass/post_author_1_0_0.min.css")); ?>
</style>

<ul class="post_author_1_0_0">
    <li class="post_author_1_0_0__Date">
        <div class="post_author_1_0_0__iconDate"></div>
        <p><?php echo get_post_modified_time('d/m/Y - g:i'); ?></p>
    </li>
    <li class="post_author_1_0_0__Person">
        <div class="symp"> *</div>
        <div class="post_author_1_0_0__iconPerson"></div>
        <p>Tác giả:<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"> <?php echo get_the_author() ?></a></p>
    </li>
    <?php 
        $doctor = get_field('doctor');
        if($doctor && is_object($doctor)) {
            $title = $doctor->post_title;
            $link = '/'.$doctor->post_type.'/'.$doctor->post_name;
            if($title){
                echo '
                    <li class="post_author_1_0_0__Person">
                        <div class="symp"> *</div>
                        <div class="post_author_1_0_0__iconPerson"></div>
                        <p>Tham vấn y khoa: <a href="'.$link.'/">'.$title.'</a></p>
                    </li>
                ';
            }
        }
    ?>
</ul>
