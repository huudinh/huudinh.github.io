<style>
.post_author_1_0_0 {
    font-size:13px;
    margin-bottom: 10px;
    font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial
}

.post_author_1_0_0__navg {
    display: flex;
    padding:0;
    margin:0;
}

.post_author_1_0_0 li {
    list-style-type: none;
    display: flex;
    padding-right: 10px
}

.post_author_1_0_0__iconDate {
    background: url(<?php echo $path ?>/images/date.png) no-repeat;
    width: 25px;
    height: 20px;
}

.post_author_1_0_0__iconPerson {
    background: url(<?php echo $path ?>/images/person.png) no-repeat;
    width: 25px;
    height: 20px;
    margin-top: 2px
}

.post_author_1_0_0__iconDoctor {
    background: url(<?php echo $path ?>/images/doctor.png) no-repeat;
    width: 25px;
    height: 20px
}

.post_author_1_0_0__iconview {
    background: url(<?php echo $path ?>/images/view.png) no-repeat;
    width: 25px;
    height: 20px;
    margin-top: 3px
}

.post_author_1_0_0 p {
    /* font-weight: 600; */
    color: #000;
    margin:0;
    padding: 0;
}

.post_author_1_0_0 p a {
    color: #105496
}

.post_author_1_0_0 .symp {
    padding-right: 5px;
    color: #000
}

.post_author_1_0_0 .line {
    border-top: 2px solid #ddeeff;
    margin-top:5px;
}

@media (max-width: 768px) {
    .post_author_1_0_0__navg {
        flex-wrap: wrap
    }
}

@media (max-width: 480px) {
    .post_author_1_0_0 {
        font-size:12px;
    }
    .post_author_1_0_0__navg {
        padding-left: 0
    }
    .post_author_1_0_0 .symp {
        display: none;
    }
}
</style>