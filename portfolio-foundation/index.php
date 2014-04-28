<?php include 'inc/header.php';?>
<?php //workthumb() ;?>

<?php 
echo '<div class="row">';

foreach($works as $work) {

    //check to see if the count is divisible by 4 with no modulo
    // $test = $count / 4;

    // if ($count == 1) {
    //   echo '<div class="row">';
    // }
    echo '<div class="small-6 columns medium-4 portfolio-piece end"><img src="img/' . $work["path"] . '/' . $work["thumb"]. '"></div>';
    //echo '<div class="small-6 columns medium-3 portfolio-piece"><img class="scale-with-grid" src="http://placehold.it/500x400&text='. $count .'"></div>';

}
echo "</div>";
;?>



<?php include 'inc/footer.php';?>
