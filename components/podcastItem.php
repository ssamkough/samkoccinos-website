<?php
    echo 
    "<div class=\"podcast-item\">
        <h3 class=\"podcast-title\">$podcastTitle - Samkoccinos #$podcastNum</h3>
        <hr />
        <p class=\"podcast-published-date\">$podcastDate</p>
        <p class=\"podcast-description\">$podcastDescription</p>
        <hr />
        <ul class=\"podcast-item-links\">
            <li><a class=\"podcast-spotify-link\" href=\"$podcastSpotify\">Spotify</a></li>
            <li><a class=\"podcast-google-link\" href=\"$podcastGoogle\">Google</a></li>
            <li><a class=\"podcast-apple-link\" href=\"$podcastApple\">Apple</a></li>
            <li><a class=\"podcast-yt-link\" href=\"$podcastYoutube\">YouTube</a></li> 
            <li><a class=\"podcast-link\" href=\"$podcastMoreInfo\">More Info</a></li> 
        </ul>
    </div> ";
?>