<?php
  $currentMainNav = '데크';
  $currentMainNavEng = 'deck';
  $currentPage = '데크배치도';

  include("header.php");

  echo "<div class=\"heading-box\">
    <div class=\"heading-box--bg heading-box--".$currentMainNavEng."\"></div>
    <h1>".$currentPage."</h1>
  </div>";
?>

<section class="container-lg deck-plan text-center">
<?php
  include("deck_plan.php");
?>
</section>

<?php
  include("footer.php");
?>