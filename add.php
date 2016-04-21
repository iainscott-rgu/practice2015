<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add News Item Form</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/CSS/style.css" type="text/css">
    <link rel="stylesheet" href="assets/CSS/unsemantic-grid-responsive-tablet.css" type="text/css">

<?php
include("connection.php");
?>

</head>
<body>
<header>

    <h1>newsbox: add news item</h1><br>
    all the news in a box

</header>
<main class="form">
<form>
    <table>
        <tr><td><label for="title">title:</label></td><td><input type="text" name="title" size="30" required></td></tr>
        <tr><td><label for="link">link:</label></td><td><input type="text" name="link" size="30" required></td></tr>
        <tr><td><label for="summary">summary:</label></td><td><textarea cols="31" rows="5" name="summary" required></textarea></td></tr>
        <tr><td><label for="category">category:</label></td><td>
            <select>
                <option value="sport" name="sport">sport</option>option>
                <option value="politics" name="politics">politics</option>option>
                <option value="technology" name="technology">technology</option>option>
            </select>
        </td></tr>
        <tr><td colspan="2"><input type="submit" id="submit" value="submit"></td></tr>
    </table>
</form>
</main>

<footer>
    <p>Designed by Iain Scott, 2016</p>

</footer>
</body>
</html>