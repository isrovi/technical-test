if($_GET['act']== 'tambahbuku'){
    $id = $_POST['id'];
    $nama = $_POST['name'];
    $stok = $_POST['stok'];
    $gambar = $_POST['image'];
    $deskripsi = $_POST['deskripsi'];
    $category = $_POST[category_id];

    //query
    $querytambah =  mysqli_query($db, "INSERT INTO books VALUES('$id' , '$nama' , '$stok' , '$gambar', 'deskripsi', '$category')");

    if ($querytambah) {    
        header("location:index.php");
    }
    else{
        echo "ERROR". mysqli_error($db);
    }
}