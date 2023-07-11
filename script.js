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