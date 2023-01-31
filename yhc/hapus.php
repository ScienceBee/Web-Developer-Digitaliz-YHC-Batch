<?php 
$conn = mysqli_connect('localhost', 'root', '13052003','seleksi');
$No = $_GET['no']; 
 
$query = "DELETE FROM proyek WHERE id = '$No'"; 
if(mysqli_query($conn, $query) ){
    echo "BERHASIL";
    mysqli_query($conn, $query);
    header('Location: index.php');
}
else{
    echo "gagal";
}
?> 


