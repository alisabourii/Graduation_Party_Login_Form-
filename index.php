<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
  <form method="post" class="formDiv">
      <input placeholder='TC.No' maxlength="11">
      <input placeholder='TC.No' maxlength="11">
      <input placeholder='TC.No' maxlength="11">
    <button type="submit">Kaydet</button>
  </form>
</body>
</html>