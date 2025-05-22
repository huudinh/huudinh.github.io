<style>
    <?php 
        include(locate_template("Module/Category/pagination_1_0_0/sass/pagination_1_0_0.min.css")); 
    ?>
</style>

<div class="pagination_1_0_0">
    <?php
        $custom_query = new WP_Query($args);

        if (isset($custom_query) && $custom_query instanceof WP_Query && function_exists("pagination")) {
            // Truy cập thuộc tính max_num_pages
            pagination($custom_query->max_num_pages,2);
        } else {
            echo "Lỗi: custom_query không hợp lệ.";
        }
    ?>
</div>
