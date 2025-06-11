<?php
/**
 * The template for displaying Comments.
 */
if ( post_password_required() )
    return;
?>
<style>
	<?php include(locate_template("Module/Post/comment_1_0_0/sass/comment_1_0_0.min.css")); ?>
</style>

<div id="comments" class="comments-area post_comment">
    <!-- <div class="count_cmt">
        Có <?php //echo get_comments_number($post->ID); ?> bình luận bài <i><?php //echo  get_the_title() ?></i>
    </div> -->
 
    <?php //if ( have_comments() ) : ?>
        <ol class="comment-list">
            <?php
                $comments = get_comments(array(
                    'post_id' => $post->ID,
                    'status' => 'approve',
                ));

                wp_list_comments(array(
                    'per_page' => 10, //Allow comment pagination
                    'reverse_top_level' => false, //Show the oldest comments at the top of the list
                ), $comments);                
            ?>
        </ol>
 
        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 || get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&amp;larr; Older Comments', 'twentythirteen' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &amp;rarr;', 'twentythirteen' ) ); ?></div>
        </nav>
        <?php endif; // Check for comment navigation ?>
 
        <?php if ( ! comments_open() || get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
        <?php endif; ?>
 
    <?php //endif; // have_comments() ?>
    <p>Hãy để lại bình luận của bạn bên dưới!</p>
    <?php comment_form(); ?>
    
    <div class="show-form">
        <button id="sub">Gửi</button>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <p>Nhập thông tin của bạn</p>
                <span class="close">&times;</span>
            </div>
            <div class="modal-main">
                <form action="/wp-comments-post.php" method="post" id="commentform" class="comment-form">
                    <p class="comment-form-author"><input name="author" type="text" value="" size="30" maxlength="245" required="required" placeholder="Họ tên *:..."></p>
                    <p class="comment-form-email"><input name="email" type="text" value="" size="30" maxlength="100" aria-describedby="email-notes" placeholder="Email:..." required="required"></p>
                    <p class="comment-form-url"><input name="url" type="text" value="" size="30" maxlength="200" placeholder="Số điện thoại *:..." required="required"></p>
                    <p style="display:none;"><textarea type="hidden" id="comment-2" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>
                    <p class="form-submit">
                    <input name="submit" type="submit" id="submit" class="submit" value="Hoàn thành"> 
                    <input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>" id="comment_post_ID">
                    <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                    </p>
                </form>
            </div>
        </div>
    </div>
 
</div>
<script>
    <?php include(locate_template("Module/Post/comment_1_0_0/js/comment_1_0_0.min.js")); ?>
</script>

