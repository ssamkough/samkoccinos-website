<html>
  <?php include './components/head.php'; ?>
  <body>
    <div id="members-outer-container" class="outer-container">
      <div id="members-inner-container" class="inner-container">
        <div class="page-header">
          <h1>members</h1>
        </div>
        <div id="members-body" class="page-body">
          <ul>
            <?php
              $members = array(
                array("member-adamccini", "adamccini",  "the slimiest", "https://twitter.com/_Squidpai"),
                array("member-adoptinni", "adoptinni",  "the squeakiest", "https://twitter.com/FortniteGame"),
                array("member-mario", "mario",  "the memeiest", "https://twitter.com/TiggerCult"),
                array("member-nourioli", "nourioli",  "the stinkiest", "https://twitter.com/noursboynour"),
                array("member-robbhetti", "robbhetti",  "the plantiest", "https://twitter.com/ssamkough"),
                array("member-salami", "salami",  "the girliest", "https://twitter.com/ArianaGrande"),
                array("member-tambiano", "tambiano",  "the angriest", "https://twitter.com/tambiano1"),
                array("member-zaghetti", "zaghetti",  "the gameiest", "https://twitter.com/zaghetti_"));

                for ($i = 0; $i < count($members); $i++) {
                  $memberNum = $i + 1;
                  $memberId = $members[$i][0];
                  $memberName = $members[$i][1];
                  $memberContent = $members[$i][2];
                  $memberTwitter = $members[$i][3];
                  include 'components/member.php';
                }
            ?>
          </ul>
        </div>
        <?php include './components/nav.php'; ?>
      </div>
    </div>
    <?php include './components/footer.php'; ?>
  </body>
</html>
