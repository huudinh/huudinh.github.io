<?php
// Custom thông báo bảo trì
// if (!is_user_logged_in()){
// 	echo '<div style="text-align:center; padding: 50px 0; min-height: 500px;">Website đang trong quá trình bảo trì, vui lòng quay lại sau !
// 		Rất xin lỗi vì sự bất tiện này !</div>
// 	';
// 	exit();
// } 
//set headers to NOT cache a page
header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
header("Pragma: no-cache"); //HTTP 1.0
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

//or, if you DO want a file to cache, use:
header("Cache-Control: max-age=31557600"); //30days (60sec  60min  24hours * 30days)

?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <?php 
        if (current_user_can('administrator') || current_user_can('editor')) {
        wp_admin_bar_render();
        echo '
            <meta name="robots" content="noindex,follow"/>
            <link id="pagestyle" rel="stylesheet" type="text/css" href="/wp-includes/css/admin-bar.min.css?ver=4.9.10" />
            <link id="pagestyle" rel="stylesheet" type="text/css" href="/wp-includes/css/dashicons.min.css?ver=4.9.10" />
        ';
        }
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link type="image/x-icon" rel="shortcut icon" href="https://banvouchervinpearlgiare.com/wp-content/uploads/2018/01/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="vGwPlQGO6FDZAeGP7HQwch7HovT1QSk3RfGJJhAE5zI" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112022741-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112022741-1');
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Voucher Vinpearl",
  "@id": "https://banvouchervinpearlgiare.com/",
  "logo": "http://banvouchervinpearlgiare.com/wp-content/uploads/2018/01/logo-voucher-vinpearl-1.png",
  "image": "http://banvouchervinpearlgiare.com/wp-content/uploads/2018/01/logo-voucher-vinpearl-1.png",
  "description": "Voucher Vinpearl giá rẻ - Đại lý mua bán voucher nghỉ dưỡng vinpearl resort trên cả nước. Hỗ trợ săn voucher du lịch vinpearl giảm tới 55%, giữ phòng ngay.",
  "hasMap": "https://www.google.com/maps/place/%C4%90%E1%BA%A1i+l%C3%BD+Voucher+Vinpearl/@20.8653439,106.6621313,17z/data=!3m1!4b1!4m5!3m4!1s0x314a7a19aaaaaaab:0x689c3b563820dbe0!8m2!3d20.8653439!4d106.6621313",	
  "url": "https://banvouchervinpearlgiare.com/",
  "telephone": "0901776893",
  "priceRange": "10000VND-100000000VND",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "BH06-18, Vinhomes Imperia",
    "addressLocality": "Hồng Bàng",
	"addressRegion": "Hải Phòng",
    "postalCode": "180000",
    "addressCountry": "VN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 20.8653439,
    "longitude": 106.6621313
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "00:00",
    "closes": "23:59"
  },
  "sameAs": [
    "https://www.facebook.com/voucher.5saotravel.vn/",
    "https://twitter.com/vouchvinpearl",
	"https://www.linkedin.com/in/vouchervinpearl/",
	"https://www.pinterest.com/vouchervinpearll/",
	"https://soundcloud.com/vouchervinpearl",
	"https://www.youtube.com/channel/UCnFvT-56REXsu-NL1fovdqw",
	"https://sites.google.com/view/vouchervinpearll/",
	"https://ello.co/vouchervinpearll",
	"https://vouchervinpearll.blogspot.com/",
	"https://vouchervinpearll.weebly.com/"
  ]
}
</script>

<meta name="google-site-verification" content="PIrzQDlQhVDi_MYuR6NHQwPPZj0eWVV7Skz0HF-U_jg" />
<meta name='dmca-site-verification' content='akc3RjJDRk9JQVVhNmoyWkJuWGQwSmpDb08xMUhISS9HVkhKZmJxMUFwaz01' />
<!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '802046100809109');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=802046100809109&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TBCKSRL');</script>
<!-- End Google Tag Manager -->
    <title><?php wp_title() ?></title>
    <?php wp_head(); ?>

    <?php
        include(locate_template('Module/assets/sass/lib_css.php')); 
        include(locate_template('Module/assets/sass/custom_css.php')); 
    ?>
</head>
<body itemscope itemtype="http://schema.org/Service">  
    <?php get_template_part('Module/module_header'); ?>
    <?php 
        get_template_part('Module/module');	
        get_template_part('Module/module_footer');
    ?>
</body>