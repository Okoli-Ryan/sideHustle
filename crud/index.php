<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud App</title>
    <link rel="stylesheet" href="index.css">
</head>
<!-- 
<body>
    <div class="read-elements">
        <?php
        require_once "databaseLink.php";

        function template($id, $content)
        {
            return <<<EOF
            <div class="element"><div class='inline'>
            <p class='content'>id: {$id} text: {$content}</p><button class='delete_button' onclick="window.location.href = 'delete.php?q_id=${id}'">delete</button></div>
            <div class="inline"><form class='update_form' method="post" action="update.php?q_id={$id}"><input type="text" placeholder="update element" name="update" class='update_input'><button class='update_button'>Update</button></form></div>
            </div>
            EOF;
        }

        $sql = "select * from texts";
        if ($result = $mysqli->query($sql)) {
            while ($rows = $result->fetch_array()) {
                echo template($rows['id'], $rows['content']);
            }
            print_r($result->fetch_array());
        }
        ?></div>
    <form class="add-container" action="create.php" method="post">
        <input type="text" name="add-input" class="add_input" placeholder="Add text">
        <button class="add_button">add</button>
    </form>
</body> -->

<h2>Hello</h2>

</html>