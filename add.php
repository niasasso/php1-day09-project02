<html>
<head>
<title>Add Users</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-700">


<div class="container mx-auto bg-gray-200 p-5 my-5">



<a href="index.php" class="bg-gray-700 hover:bg-gray-600 p-3 text-white rounded">Go to Home</a>
<br/><br/>


<form action="add.php" method="post" name="form1">
    <table width="25%" border="0">
        <tr class="w-full"> 
            <td>Name</td>
            <td><input type="text" name="name" class="px-4 py-2 text-gray-700 rounded mb-2 shadow"></td>
        </tr>
        <tr> 
            <td>Email</td>
            <td><input type="text" name="email" class="px-4 py-2 text-gray-700 rounded mb-2 shadow"></td>
        </tr>
        <tr> 
            <td>Mobile</td>
            <td><input type="text" name="mobile" class="px-4 py-2 text-gray-700 rounded mb-2 shadow"></td>
        </tr>
        <tr> 
            <td>Kelurahan</td>
            <td><input type="text" name="kelurahan" class="px-4 py-2 text-gray-700 rounded mb-2 shadow"></td>
        </tr>
        <tr> 
            <td>Distrik</td>
            <td><input type="text" name="distrik" class="px-4 py-2 text-gray-700 rounded mb-2 shadow"></td>
        </tr>
        <tr> 
            <td>Kabupaten</td>
            <td><input type="text" name="kabupaten" class="px-4 py-2 text-gray-700 rounded mb-2 shadow"></td>
        </tr>
        <tr> 
            <td>Provinsi</td>
            <td><input type="text" name="provinsi" class="px-4 py-2 text-gray-700 rounded mb-2 shadow"></td>
        </tr>
        <tr> 
            <td></td>
            <td><input type="submit" name="Submit" value="Add" class="bg-gray-700 hover:bg-gray-600 p-3 text-white rounded cursor-pointer"></td>
        </tr>
    </table>
</form>

<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $kelurahan = $_POST['kelurahan'];
    $distrik = $_POST['distrik'];
    $kabupaten = $_POST['kabupaten'];
    $provinsi = $_POST['provinsi'];
    
    // include database connection file
    include_once("config.php");
            
    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile,kelurahan,distrik,kabupaten,provinsi) VALUES('$name','$email','$mobile','$kelurahan','$distrik','$kabupaten','$provinsi')");
    
    // Show message when user added
    echo "User added successfully. <a href='index.php' class='bg-sky-700 hover:bg-gray-600 p-2 text-white rounded cursor-pointer'>View Users</a>";
}
?>

</div>



</body>
</html>