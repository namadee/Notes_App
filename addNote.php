<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "db.php";?>
    <title>Add Note</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="title">Enter Title</label>
        <input type="text" name="title" id="title">

        <textarea name="content" id="content" cols="30" rows="10"></textarea>

        <button type="submit">Save</button>
    </form>
</body>
</html>