<html>
  <?php include './components/head.php'; ?>
  <body>
    <div id="games-outer-container" class="outer-container">
      <div id="games-inner-container" class="inner-container">
        <div class="page-header">
          <h1>games</h1>
          <div class="games-description">
            <h3>favorite games and top family members</h3>
          </div>
        </div>
        <div class="page-body">
          <div class="gameitems">
            <?php
              $gameItems = array(
                array("Minecraft", "mario", "./../assets/games/games-minecraft.jpg"),
                array("Smash Ultimate", "adamccini", "./../assets/games/games-ssbu.jpg"),
                array("Krunker", "zaghetti", "./../assets/games/games-krunker.jpg"),
                array("Rainbow Six Siege", "zaghetti, mario", "./../assets/games/games-rainbow-six-siege.jpg"),
                array("Rocket League", "zaghetti", "./../assets/games/games-rocket-league.jpg"),
                array("Dota 2", "mario", "./../assets/games/games-dota2.jpg"),
                array("Rust", "zaghetti", "./../assets/games/games-rust.jpg"),
                array("Haxball", "tambiano", "./../assets/games/games-haxball.png"),
                array("GTA V", "robbhetti", "./../assets/games/games-gtav.png"),
                array("Dark Souls III", "mario", "./../assets/games/games-dark-souls3.jpg"),
                array("Among Us", "adoptinni, nourioli", "./../assets/games/games-among-us.jpg"));

              for ($i = 0; $i < count($gameItems); $i++) {
                $gameNum = $i + 1;
                $gameTitle = $gameItems[$i][0];
                $gameMember = $gameItems[$i][1];
                $gameImg = $gameItems[$i][2];
                include 'components/gameItem.php';
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
