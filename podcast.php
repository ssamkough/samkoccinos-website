<html>
  <?php include './components/head.php'; ?>
  <body>
    <div id="podcast-outer-container" class="outer-container">
      <div id="podcast-inner-container" class="inner-container">
        <div class="page-header">
          <h1>podcast</h1>
          <div class="podcast-page-description">
            <h3>a bunch of nerds that like to geek out with others</h3>
            <?php include './components/podcastLinks.php'; ?>
          </div>
        </div>
        <div class="page-body">
          <div class="podcast-items">
            <?php
              $podcastItems = array(
                array("JebTube", "Sunday, November 8",  "Geeking out with JebTube, an analysis YouTuber covering video games (mostly Sega as to date).", 
                "https://youtu.be/PDBeh03kq-8", "https://open.spotify.com/episode/29GunkZ6FijoA4FJAdy8cM?si=KoaFVR35SXaGkoKN5slfMw", "https://podcasts.apple.com/us/podcast/jebtube-samkoccinos-1/id1540023862?i=1000498237747", "", "https://soundcloud.com/samkoccinos/samkoccinos-podcast-001-jebtube-audio", "https://tunein.com/podcasts/Arts--Culture-Podcasts/samkoccinos-podcast-p1382688/?topicId=158708127"));

              for ($i = 0; $i < count($podcastItems); $i++) {
                $podcastNum = $i + 1;
                $podcastTitle = $podcastItems[$i][0];
                $podcastDate = $podcastItems[$i][1];
                $podcastDescription = $podcastItems[$i][2];
                $podcastYoutube = $podcastItems[$i][3];
                $podcastSpotify = $podcastItems[$i][4];
                $podcastApple = $podcastItems[$i][5];
                $podcastGoogle = $podcastItems[$i][6];
                $podcastSoundcloud = $podcastItems[$i][7];
                $podcastTunein = $podcastItems[$i][8];
                $podcastMoreInfo = './podcastItems/' . $podcastNum . '.php';
                include './components/podcastItem.php';
              }
            ?>
          </div>
        </div>
        <?php include './components/nav.php'; ?>
      </div>
    </div>
    <?php include './components/footer.php'; ?>
  </body>
</html>
