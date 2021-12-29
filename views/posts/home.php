<?php $title = 'Neuronabit'; include("views/layouts/app_top.php"); ?>
<br>
<div class="card-columns">   
<?php

foreach($categories as $category){
    echo "<div class=\"card bg-dark text-white\">\n";
    echo "<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Eiche_bei_Graditz.jpg/1200px-Eiche_bei_Graditz.jpg\" class=\"card-img\">\n";
    echo "<div class=\"card-img-overlay\">\n";
    echo "<h5 class=\"card-title\">" . $category["name"] . "</h5>\n";
    echo "<p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>\n";
    echo "</div>\n";
    echo "</div>\n";
}
?>
</div>


<?php include("views/layouts/app_bottom.php"); ?>


