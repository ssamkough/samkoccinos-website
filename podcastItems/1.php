<html>
  <?php include './../components/podcastItemHead.php'; ?>
  <body>
    <div id="podcast-item-outer-container" class="outer-container">
        <div id="podcast-item-inner-container" class="inner-container">
          <div class="page-header">
          <div class="podcast-item-page">
            <h2 class="podcast-title-page">JebTube - Samkoccinos #1</h2>
            <h3 class="podcast-published-date-page">Sunday, November 8</h3>
            <p class="podcast-item-description-page"></p>Geeking out with JebTube, an analysis YouTuber covering video games (mostly Sega as to date).
            <img class="podcast-image-page" alt="Samkcoccinos/JebTube Art Cover" src="./assets/podcastItemArt001.png" />
            <ul class="podcast-item-links">
                <li><a class="podcast-spotify-link" href="$podcastSpotify">Spotify</a></li>
                <li><a class="podcast-google-link" href="$podcastGoogle">Google</a></li>
                <li><a class="podcast-apple-link" href="$podcastApple">Apple</a></li>
                <li><a class="podcast-yt-link" href="$podcastYoutube">YouTube</a></li> 
            </ul>
        </div>
        </div>
        <?php include './../components/podcastItemNav.php'; ?>
      </div>
    </div>
    <?php include './../components/podcastItemFooter.php'; ?>
  </body>
</html>