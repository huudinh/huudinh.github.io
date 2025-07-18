<footer class="footer_mz_1_0_0">
    <div class="container">
        <div class="footer_mz_1_0_0__box">
            <p><?php echo $field["info"] ?></p>
        </div>
    </div>
</footer>
<?php
    $gaId = $field["tracking"];
    if($gaId):
?>
<script>
	function gaInit(){
        // Tạo thẻ script
        const scriptTag = document.createElement("script");
        scriptTag.async = true;
        scriptTag.src = "https://www.googletagmanager.com/gtag/js?id=<?php echo $gaId;  ?>";
    
        // Thêm thẻ script vào cuối body
        document.body.appendChild(scriptTag);
    
        // Tạo mã JavaScript để cấu hình Google Analytics
        const scriptConfig = document.createElement("script");
        scriptConfig.textContent = `
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '<?php echo $gaId ?>');
        `;
    
        // Thêm mã cấu hình vào cuối body
        document.body.appendChild(scriptConfig);

    }
	setTimeout(() => {
        gaInit();     
    }, 3000); // 3 giây
</script>

<?php endif; ?>