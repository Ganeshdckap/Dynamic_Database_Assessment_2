<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dynamic DataBase</title>
</head>
<body>

<form action="/create_table" method="post" enctype="multipart/form-data">
        <h3>Select Your Database</h3>
    <select name="dbname" id="dbname">
                            <option value="">select</option>
                            <?php foreach ($databaseList as $dbList =>$list): ?>
                            <option value="<?php echo$list->Database?>"><?php echo$list->Database?></option>
                            <?php endforeach;?>
                        </select> 
                        <h3>Enter Table name</h3>
        <input type="text" name="Table_Name" placeholder="Enter table name" required>   
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
        html += "<td><input placeholder='Enter column name' type='text' name='column_name'></td>";
        html += "<td><select name='data_type' id='data_type'><option name='data_type' value='int'>int</option><option name='data_type' value='varchar(255)'>varchar</option><option name='data_type' value='timestamp'>Date_Time</option></select></td>";
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


