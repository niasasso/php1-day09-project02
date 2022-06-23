<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>    
<title>Homepage</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-700">


<div class="container mx-auto bg-gray-200 p-5 my-5">
<a href="add.php" class="bg-cyan-600 hover:bg-gray-600 p-3 text-white rounded">Add New User</a><br/><br/>


<table width='80%' border=1 class="table-auto w-full">
<tr>
    <th class="border-2 border-black bg-gray-700 text-white">Name</th> 
    <th class="border-2 border-black bg-gray-700 text-white">Mobile</th> 
    <th class="border-2 border-black bg-gray-700 text-white">Email</th> 
    <th class="border-2 border-black bg-gray-700 text-white">Update</th>
    <th class="border-2 border-black bg-gray-700 text-white">Kelurahan</th>
    <th class="border-2 border-black bg-gray-700 text-white">Distrik</th>
    <th class="border-2 border-black bg-gray-700 text-white">Kabupaten</th>
    <th class="border-2 border-black bg-gray-700 text-white">Provinsi</th>
</tr>
<?php  
while($user_data = mysqli_fetch_array($result)) {         
    echo "<tr>";
    echo "<td class='border-2 border-black p-2'>".$user_data['name']."</td>";
    echo "<td class='border-2 border-black p-2'>".$user_data['mobile']."</td>";
    echo "<td class='border-2 border-black p-2'>".$user_data['email']."</td>";    
    echo "<td class='border-2 border-black p-2'>".$user_data['kelurahan']."</td>";    
    echo "<td class='border-2 border-black p-2'>".$user_data['distrik']."</td>";    
    echo "<td class='border-2 border-black p-2'>".$user_data['kabupaten']."</td>";    
    echo "<td class='border-2 border-black p-2'>".$user_data['provinsi']."</td>";    
    echo "<td class='border-2 border-black p-2'><a href='edit.php?id=$user_data[id]' class='bg-yellow-500 hover:bg-gray-600 p-1 text-white rounded cursor-pointer'>Edit</a> | <a href='delete.php?id=$user_data[id]' class='bg-red-700 hover:bg-gray-600 p-1 text-white rounded cursor-pointer'>Delete</a></td></tr>";        
}
?>
</table>
</div>





</body>
</html>