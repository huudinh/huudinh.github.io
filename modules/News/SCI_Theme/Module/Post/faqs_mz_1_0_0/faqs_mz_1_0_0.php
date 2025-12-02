<?php
    $path = get_template_directory_uri();
    $path = $path.'/Module/Post/faqs_mz_1_0_0';

    // Lấy danh sách bài viết từ trường ACF
    $content = get_field('faqs');

    // Kiểm tra nếu có bài viết
    if( $content) {
        $html = "";
        $faq_json = [];

        // Lặp qua từng bài viết và thêm vào danh sách
        foreach($content as $row):
            $question = $row['question'];
            $answer = $row['answer'];

            // HTML
            $html .='
                <li class="faqs_mz_1_0_0__item">
                    <h3 class="faqs_mz_1_0_0__question">'.$question.'</h3>
                    <p class="faqs_mz_1_0_0__answer">
                        '.$answer.'
                    </p>
                </li>
            ';

            // Schema JSON
            $faq_json[] = [
                "@type" => "Question",
                "name"  => wp_strip_all_tags($question),
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text"  => wp_strip_all_tags($answer)
                ]
            ];

        endforeach;
       
        // Hiển thị danh sách bài viết
        echo '
            <div class="faqs_mz_1_0_0__topic">FAQ – Câu hỏi thường gặp</div>
            <ul class="faqs_mz_1_0_0">'.$html.'</ul>
        ';

        ?>
        <script type="application/ld+json">
            {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": <?php echo wp_json_encode($faq_json, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT); ?>
            }
        </script>
        <?php
    }
?>