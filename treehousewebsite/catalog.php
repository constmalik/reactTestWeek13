<?php
include('inc/data.php');
include('inc/functions.php');
//default page title
$pageTitle = "Full Catalog";
//by default we're not showing any of our specific categories.
$section = null;
//put all if statements inside of "is set" if statement to make sure notice isn't shown if a variable doesn't exist
if(isset($_GET["cat"])) {
  //changes title of each page depending on that pages GET url also helps prevent errors
  if($_GET["cat"] == "books") {
    $pageTitle = "Books";
    $section = "books";
  } else if ($_GET["cat"] == "movies") {
    $pageTitle = "Movies";
    $section = "movies";
  } else if ($_GET["cat"] == "music") {
    $pageTitle = "Music";
    $section = "music";
  }
}
include("inc/header.php"); ?>

<div class="section catalog page">

  <div class="wrapper">

    <h1><?php echo $pageTitle; ?></h1>

    <ul class="items">

      <?php
      foreach($catalog as $id => $item) {
        echo get_item_html($id, $item);
      }
      ?>

    </ul>

  </div>

</div>

<?php include("inc/footer.php"); ?>
