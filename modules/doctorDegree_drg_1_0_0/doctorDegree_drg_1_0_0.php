<style>
    <?php
        include(locate_template("Module/Post/doctorDegree_drg_1_0_0/sass/doctorDegree_drg_1_0_0.min.css"));
    ?>
</style>  
<section class="doctorDegree_drg_1_0_0 post">
    <div class="doctorDegree_drg_1_0_0__title">
        Chứng nhận & giải thưởng
    </div>
    <div class="doctorDegree_drg_1_0_0__boxSlide">
        <div class="doctorDegree_drg_1_0_0__slide">
            <?php
                $degree = explode("\n", get_field('degree'));
                foreach($degree as $item){
                    echo '
                        <div class="doctorDegree_drg_1_0_0__pic">
                            <img width="223" height="150" src="'.$item.'" alt="bằng cấp">
                        </div>
                    ';
                }
            ?>
        </div>
    </div>
    <div class="doctorDegree_drg_1_0_0__controls">
        <div class="doctorDegree_drg_1_0_0__prev">
            ❮
        </div>
        <div class="doctorDegree_drg_1_0_0__next">
            ❯
        </div>
    </div>
</section>
<script>
    <?php
        include(locate_template('Module/Post/doctorDegree_drg_1_0_0/js/doctorDegree_drg_1_0_0.min.js')); 
    ?>
</script>