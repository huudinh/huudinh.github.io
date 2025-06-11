<style>
	<?php include(locate_template("Module/Home/video_knbm_1_0_0/sass/video_knbm_1_0_0.min.css")); ?>
</style>
<?php
  // Remove tag a
  function removeTag($tag){
    return preg_replace('/<a\s+.*?>(.*?)<\/a>/is', '$1', $tag);
  }

  function convertToSlug($string) {
      // Chuyển đổi chuỗi sang dạng chữ thường
      $string = mb_strtolower($string);

      // Mảng chuyển đổi ký tự có dấu sang không dấu
      $vietnameseMap = array(
          'à'=>'a', 'á'=>'a', 'ạ'=>'a', 'ả'=>'a', 'ã'=>'a', 'â'=>'a', 'ầ'=>'a', 'ấ'=>'a', 'ậ'=>'a', 'ẩ'=>'a', 'ẫ'=>'a', 'ă'=>'a', 'ằ'=>'a', 'ắ'=>'a', 'ặ'=>'a', 'ẳ'=>'a', 'ẵ'=>'a',
          'è'=>'e', 'é'=>'e', 'ẹ'=>'e', 'ẻ'=>'e', 'ẽ'=>'e', 'ê'=>'e', 'ề'=>'e', 'ế'=>'e', 'ệ'=>'e', 'ể'=>'e', 'ễ'=>'e',
          'ì'=>'i', 'í'=>'i', 'ị'=>'i', 'ỉ'=>'i', 'ĩ'=>'i',
          'ò'=>'o', 'ó'=>'o', 'ọ'=>'o', 'ỏ'=>'o', 'õ'=>'o', 'ô'=>'o', 'ồ'=>'o', 'ố'=>'o', 'ộ'=>'o', 'ổ'=>'o', 'ỗ'=>'o', 'ơ'=>'o', 'ờ'=>'o', 'ớ'=>'o', 'ợ'=>'o', 'ở'=>'o', 'ỡ'=>'o',
          'ù'=>'u', 'ú'=>'u', 'ụ'=>'u', 'ủ'=>'u', 'ũ'=>'u', 'ư'=>'u', 'ừ'=>'u', 'ứ'=>'u', 'ự'=>'u', 'ử'=>'u', 'ữ'=>'u',
          'ỳ'=>'y', 'ý'=>'y', 'ỵ'=>'y', 'ỷ'=>'y', 'ỹ'=>'y',
          'đ'=>'d'
      );

      // Thay thế các ký tự có dấu bằng ký tự không dấu
      $string = strtr($string, $vietnameseMap);

      // Thay thế khoảng trắng bằng dấu gạch ngang
      $string = preg_replace('/\s+/', '-', $string);

      // Loại bỏ các ký tự không phải chữ cái và số
      $string = preg_replace('/[^a-z0-9\-]/', '', $string);

      return $string;
  }

  $tieude_nb = 'Video nổi bật';

  $titvideo_nb = get_field('title-nb');
  $title_nb = explode("\n", str_replace("\r", "", $titvideo_nb));

  $linkvideo_nb = get_field('link-video-nb');
  $link_nb = explode("\n", str_replace("\r", "", $linkvideo_nb));

  $linkimages_nb = get_field('link-anh-nb');
  $linkimg_nb = explode("\n", str_replace("\r", "", $linkimages_nb));

  $tieude1Tag = get_field('tieu-de-1');
  $tieude1 = removeTag($tieude1Tag);

  $titvideo1 = get_field('title-video-1');
  $title1 = explode("\n", str_replace("\r", "", $titvideo1));

  $linkvideo1 = get_field('list-link-1');
  $link1 = explode("\n", str_replace("\r", "", $linkvideo1));

  $linkimages1 = get_field('list-anh-1');
  $linkimg1 = explode("\n", str_replace("\r", "", $linkimages1));

  $tieude2Tag = get_field('tieu-de-2');
  $tieude2 = removeTag($tieude2Tag);

  $titvideo2 = get_field('title-video-2');
  $title2 = explode("\n", str_replace("\r", "", $titvideo2));

  $linkvideo2 = get_field('list-link-2');
  $link2 = explode("\n", str_replace("\r", "", $linkvideo2));

  $linkimages2 = get_field('list-anh-2');
  $linkimg2 = explode("\n", str_replace("\r", "", $linkimages2));

  $tieude3Tag = get_field('tieu-de-3');
  $tieude3 = removeTag($tieude3Tag);

  $titvideo3 = get_field('title-video-3');
  $title3 = explode("\n", str_replace("\r", "", $titvideo3));

  $linkvideo3 = get_field('list-link-3');
  $link3 = explode("\n", str_replace("\r", "", $linkvideo3));

  $linkimages3 = get_field('list-anh-3');
  $linkimg3 = explode("\n", str_replace("\r", "", $linkimages3));

  $tieude4Tag = get_field('tieu-de-4');
  $tieude4 = removeTag($tieude4Tag);

  $titvideo4 = get_field('title-video-4');
  $title4 = explode("\n", str_replace("\r", "", $titvideo4));

  $linkvideo4 = get_field('list-link-4');
  $link4 = explode("\n", str_replace("\r", "", $linkvideo4));

  $linkimages4 = get_field('list-img-4');
  $linkimg4 = explode("\n", str_replace("\r", "", $linkimages4));

?>

<section class="screen1">
  <div class="container">
    <div class="screen1__box">
      <div class="screen1__menu">
        <ul id="menuItems" class="screen1__menuItems"></ul>
      </div>
      <div class="screen1__detail">
        <h1 class="screen1__title">Video</h1>
        <div class="screen1__ani">
          <div class="screen1__inner"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
var services = [
  <?php if($linkimg_nb): ?>
  {
    name: "<?php echo $tieude_nb; ?>",
    link: "#<?php echo convertToSlug($tieude_nb) ?>",
    images: [
      <?php
        foreach ($linkimg_nb as $key => $item) {
          if (isset($linkimg_nb[$key]) && isset($link_nb[$key]) && isset($title_nb[$key])) {
            echo '
              {
                  link: `'.$linkimg_nb[$key].'`,
                  linkVideo: "'.$link_nb[$key].'",
                  alt: "'.$title_nb[$key].'"
              },
            ';
          }
        }
      ?>
    ],
  },
  <?php endif; ?>
  <?php if($tieude1): ?>
  {
    name: "<?php echo $tieude1; ?>",
    link: "#<?php echo convertToSlug($tieude1) ?>",
    images: [
      <?php
        foreach ($linkimg1 as $key => $item) {
          if (isset($linkimg1[$key]) && isset($link1[$key]) && isset($title1[$key])) {
            echo '
              {
                  link: `'.$linkimg1[$key].'`,
                  linkVideo: "'.$link1[$key].'",
                  alt: "'.$title1[$key].'"
              },
            ';
          }
        }
      ?>
    ],
  },
  <?php endif; ?>
  <?php if($tieude2): ?>
  {
    name: "<?php echo $tieude2; ?>",
    link: "#<?php echo convertToSlug($tieude2) ?>",
    images: [
      <?php
        foreach ($linkimg2 as $key => $item) {
          if (isset($linkimg2[$key]) && isset($link2[$key]) && isset($title2[$key])) {
            echo '
              {
                  link: `'.$linkimg2[$key].'`,
                  linkVideo: "'.$link2[$key].'",
                  alt: "'.$title2[$key].'"
              },
            ';
          }
        }
      ?>
    ],
  },
  <?php endif; ?>
  <?php if($tieude3): ?>
  {
    name: "<?php echo $tieude3; ?>",
    link: "#<?php echo convertToSlug($tieude3) ?>",
    images: [
      <?php
        foreach ($linkimg3 as $key => $item) {
          if (isset($linkimg3[$key]) && isset($link3[$key]) && isset($title3[$key])) {
            echo '
              {
                  link: `'.$linkimg3[$key].'`,
                  linkVideo: "'.$link3[$key].'",
                  alt: "'.$title3[$key].'"
              },
            ';
          }
        }
      ?>
    ],
  },
  <?php endif; ?>
  <?php if($tieude4): ?>
  {
    name: "<?php echo $tieude4; ?>",
    link: "#<?php echo convertToSlug($tieude4) ?>",
    images: [
      <?php
        foreach ($linkimg4 as $key => $item) {
          if (isset($linkimg4[$key]) && isset($link4[$key]) && isset($title4[$key])) {
            echo '
              {
                  link: `'.$linkimg4[$key].'`,
                  linkVideo: "'.$link4[$key].'",
                  alt: "'.$title4[$key].'"
              },
            ';
          }
        }
      ?>
    ],
  },
  <?php endif; ?>
];
</script>


<script>
	<?php include(locate_template("Module/Home/video_knbm_1_0_0/js/video_knbm_1_0_0.min.js")); ?>
</script>
