<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<form action="/create_database" method="post" enctype="multipart/form-data">
 
            <h2>Create Your Database</h2>
            <label for="dbname">Database</label>
            <input type="text" name="dbname" id="dbname" autocomplete="dbname" placeholder="Database Name">
            <button type="submit">Submit</button>
</form>

<style>

    /* style.css */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

form {
  max-width: 400px;
  margin: 50px auto;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 5px;
}

h2 {
  text-align: center;
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"] {
  width: 95%;
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

button[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  margin-top: 10px;
  font-size: 16px;
 background-color: #333;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #45a049;
}

</style>
</body>
</html>





