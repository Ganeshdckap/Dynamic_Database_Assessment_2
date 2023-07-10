<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dynamic DataBase</title>
</head>
<body>

    <form method="POST" action="/create_database" enctype="multipart/form-data">
        <h3>Select Your Database</h3>
    <select name="dbname" id="dbname">
                            <option value="">select</option>
                            <?php foreach ($databaseList as $dbList =>$list): ?>
                            <option value="<?php echo$list->Database?>"><?php echo$list->Database?></option>
                            <?php endforeach;?>
                        </select> 
                        <h3>Enter table name</h3>
        <input type="text" name="tableName" placeholder="Enter table name" required>   
        <table>
            <tr>
                <th>#</th>
                <th>Column</th>
                <th>Data Type</th>
                <th>Delete</th>
            </tr>
            <tbody id="tbody"></tbody>
        </table>
     
        <button type="button" onclick="addItem();">Add Column</button>
        <input type="submit" name="Submit" value="Submit">

        
    </form>
   <script>
    var items = 0;
function addItem() {
    items++;

    var html = "<tr>";
        html += "<td>" + items + "</td>";
        html += "<td><input type='text' name='datatype[]'></td>";
        html += "<td><select><option>int</option><option>Varchar</option><option>Text</option></select></td>";
        html += "<td><button type='button' onclick='deleteRow(this);'>Delete</button></td>"
        html += "</tr>";

    var row = document.getElementById("tbody").insertRow();
    row.innerHTML = html;
}

function deleteRow(button) {
items--
button.parentElement.parentElement.remove();

}
   </script>

</body>
</html>


