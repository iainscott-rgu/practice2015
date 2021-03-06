<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List all News Items Table</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/CSS/style.css" type="text/css">
    <link rel="stylesheet" href="assets/CSS/unsemantic-grid-responsive-tablet.css" type="text/css">
</head>
<body>
<header>

    <h1>newsbox: all news</h1><br>
    all the news in a box

</header>

<?php
include("connection.php");

if(isset($_GET['category'])){
    $news_itemCategory = $_GET['category'];
    echo "category {$news_itemCategory}";
    $sql = "SELECT * FROM news_item WHERE category = '$news_itemCategory'";
    }
else{
    echo "category all news";
    $sql = "SELECT * FROM news_item";
}

$result = $db->query($sql);
while ($row = $result->fetch_array()) {
    $title = $row['title'];
    $link = $row['link'];
    $summary = $row['summary'];
    $category = $row['category'];

    echo " <form class='form2'>
        <table>
            <tr><td><input type='text' name='title' size='100' value='{$title}'></td></tr>
            <tr><td><input type='text' name='link' size='100' value='{$link}'></td></tr>
            <tr><td><textarea cols='101' rows='5' name='summary'>'{$summary}'</textarea></td></tr>
            <tr><td><input type='text' name='category' size='100' value='{$category}'></td></tr>
        </table>
    </form>

    <hr size='3'>";
}
?>
<main>
<!--
    <form class="form2">
        <table>
            <tr><td><input type="text" name="title" size="100" value="{$title}"></td></tr>
            <tr><td><input type="text" name="link" size="100"></td></tr>
            <tr><td><textarea cols="101" rows="5" name="summary"></textarea></td></tr>
            <tr><td><input type="text" name="category" size="100"></td></tr>
        </table>
    </form>

    <hr size="3">
    <form class="form2">
        <table>
            <tr><td><input type="text" name="link" size="100"></td></tr>
            <tr><td><textarea cols="101" rows="5" name="summary"></textarea></td></tr>
            <tr><td><input type="submit" id="submit2" value="submit"></td></tr>
        </table>
    </form>

-->
</main>
<footer>
    <p>Designed by Iain Scott, 2016</p>

</footer>
</body>
</html>