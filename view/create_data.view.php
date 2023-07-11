<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inser values</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="/create_data" method="post" enctype="multipart/form-data">

        <select name="dbname" id="dbname">
            <option selected="" value="">select</option>
            <?php foreach ($databaseList as $dbList =>$list): ?>
            <option id="<?php echo$list->Database?>" value="<?php echo$list->Database?>">
                <?php echo$list->Database?>
            </option>
            <?php endforeach;?>
        </select>
        <label for="dbname">Table name</label>

        <select name="table_name" id="dbname">
            <option value="">select</option>
            <option value=""></option>
        </select>
        <button type="submit">Add your Value</button>
    </form>


</body>

</html>