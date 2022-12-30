<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">
     <script src="script.js"></script>     
    <title>Notes</title>
</head>
<body>
    <section>
        <?php include 'read.php'; ?>
    </section>
    <form id="add-note-form" action="create.php" method="POST">
        <table>
            <th><input type="text" id="name" name="title" placeholder="Add title"></th>
            <tr>
                <td><input type="text" id="content" name="content" placeholder="content"></td>
            </tr>
            <tr><td><button type="submit" class="save-btn">Save</button></td></tr>
        </table>   
    </form> 
    <button id="add-btn" onclick=openForm();><span class="material-symbols-outlined" id="add-or-close">add</span></button>
</body>
</html>