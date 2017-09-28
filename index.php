<?php
header("Refresh:60");
        $args = array( 'numberposts' => '1' );
        $recent_posts = wp_get_recent_posts( $args );
        foreach( $recent_posts as $recent ){
                 $DAPOST = do_shortcode($recent["post_content"]);
                 $body_content = preg_replace('/\<img src="(.*)".*\>/i', '<div class="fullscreen" style="background: url($1)"></div>', $DAPOST);
        }
        wp_reset_query();
preg_match('/color\s*:\s*white/i', $body_content, $colormatch, PREG_OFFSET_CAPTURE);
if ($colormatch) {
        $MEMECOLOR = "color: #fff !important; text-shadow: 2px 2px 12px #000 !important;";
} else {
        $MEMECOLOR = "color: #000 !important; text-shadow: 2px 2px 12px #fff !important;";
}
preg_match('/size\s*:\s*(\d+)/i', $body_content, $sizematch, PREG_OFFSET_CAPTURE);
if ($sizematch) {
        foreach ($sizematch as $sval) {
          $MEMESIZE = preg_replace('/size:(\d+)/i', '$1', $sval[0]);
        }
} else {
        $MEMESIZE = "x-large";
}
preg_match('/top\s*:(.+)/i', $body_content, $topmatch, PREG_OFFSET_CAPTURE);
if ($topmatch) {
        foreach ($topmatch as $tval) {
          $MEMETOP = preg_replace('/top:(.+)/i', '$1', $tval[0]);
        }
} else {
        $MEMETOP = "";
}
preg_match('/bottom\s*:(.+)/i', $body_content, $bottommatch, PREG_OFFSET_CAPTURE);
if ($bottommatch) {
        foreach ($bottommatch as $bval) {
          $MEMEBOTTOM = preg_replace('/bottom:(.+)/i', '$1', $bval[0]);
        }
} else {
        $MEMEBOTTOM = "";
}
echo "<html>
<head>
<link href=\"https://fonts.googleapis.com/css?family=Oswald\" rel=\"stylesheet\">
<style>
body {
  margin: 0px !important;
  font-family: 'Oswald', sans-serif;
    ".$MEMECOLOR."
    font-size: ".$MEMESIZE." !important;
    overflow: hidden !important;
    text-transform: uppercase;
}
iframe {
  border: 0px !important;
  width: 100%;
  height: 100%;
}
img {
  width: 100%;
  height: auto;
}
.fullscreen {
  width: 100%;
  height: 100%;
  background-size: contain !important;
  background-position: center !important;
  background-repeat: no-repeat !important;
}
.meme-top {
    float: left;
    z-index: 9999;
    width: 100%;
    height: auto;
    max-height: 50%;
    position: absolute;
    top: 5%;
    text-align: center;
}
.meme-bottom {
    float: left;
    z-index: 9999;
    width: 100%;
    height: auto;
    max-height: 50%;
    position: absolute;
    bottom: 5%;
    text-align: center;
}
</style>
</head>
<body>
<div class='meme-top'>".$MEMETOP."</div>
" . $body_content . "
<div class='meme-bottom'>".$MEMEBOTTOM."</div>
</body>";
?>
