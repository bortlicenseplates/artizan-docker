<?php
/**
 * Template Name: Cesium
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
// get_header( 'cesium-head' );
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Use correct character set. -->
  <meta charset="utf-8">
  <!-- Tell IE to use the latest, best version. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Make the application on mobile take up the full browser screen and disable user scaling. -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
  <title>Hello World!</title>

		<?php wp_head(); ?>
  <style>
      @import url(<?php echo get_template_directory(); ?>/js/Cesium/Widgets/widgets.css);
      html, body, #cesiumContainer {
          width: 100%;
          height: 100%;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-image: url("http://www.publicdomainpictures.net/pictures/120000/velka/spreading-rust.jpg");
      }
  </style>
</head>
<body style="backgroundColor:#303030">
  <div id="cesiumContainer"></div>
  <script src="<?php echo get_template_directory(); ?>/js/setup.js" type="text/javascript"></script>

</body>
</html>

