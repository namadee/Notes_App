<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <?php include "db.php"; ?>
    
    
    <title>Document</title>
</head>
<body>
    <h1>Notes</h1>

    <table>
        <th><?php echo $title?></th>
        <tr>
            <td>
            <?php echo $content?>
            </td>
        </tr>
    </table>

    <table>
        <th>Title 2</th>
        <tr>
            <td>
                content
            </td>
        </tr>
    </table>

    <table>
        <th>Title 3</th>
        <tr>
            <td>
                content
            </td>
        </tr>
    </table>

    <button> <a href="addNote.php">Add</a></button>

    
</body>
</html>