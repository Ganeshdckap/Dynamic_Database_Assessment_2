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
// first parentElement will be td and second will be tr.
}