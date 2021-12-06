<?php

include('connection.php');

$id =$_GET['id'];
$sql = "SELECT * FROM  product_type WHERE id ='$id'";
$query = mysqli_query($conn, $sql);
$data =mysqli_fetch_assoc($query);
if(isset($_POST) && !empty($_POST)){
        $id_product = $_POST['id_product'];
        $name_product = $_POST['name_product'];
        $quantity_product = $_POST['quantity_product'];
        $price_product = $_POST['price_product'];
       
        $sql_edit = "UPDATE product_type SET id_product='$id_product',name_product ='$name_product',quantity_product='$quantity_product',price_product ='$price_product'
    WHERE id='$id'"; 
    $query_edit = mysqli_query ($conn,$sql_edit);
    if ($query_edit){
        echo 'อัปเดทข้อมูลสำเร็จ'; 
    }else{
        echo'อัปเดทข้อมูลไม่สำเร็จ';

    }
    
}

?>

<!doctype html>
<html lang="en">
<head>
    
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit and Update</title>
    <link rel="stylesheet" href="style.css">
        <div class="container ">
        <div class="col-auto bg-primary ">
        <center> <h3>ระบบบันทึกรายการสินค้า</h3></center> 
        </div>
          </head>
            <body>

            <form action="home.php" method="post">
                <div class="row mb-3 mt-3 fs-4">
                    <label for="id_product" class="col-sm-2 col-form-label">รหัสประเภทสินค้า</label>
                    <div class="col-6">
                    <input type="text" name="id_product" value="<?=$data['id_product']?>" class="form-control" placeholder="รหัสประเภทสินค้า" required>
                    </div>
                  </div>
                <div class="row mb-3 mt-3 fs-4">
                    <label for="name_product" class="col-sm-2 col-form-label">ประเภทสินค้า</label>
                    <div class="col-6">
                    <input type="text" name="name_product"  value="<?=$data['name_product']?>" class="form-control" placeholder="ประเภทสินค้า" required>
                    </div>
                  </div>
                  <div class="row mb-3 mt-3 fs-4">
                    <label for="quantity_product" class="col-sm-2 col-form-label">จำนวนสินค้า</label>
                    <div class="col-6">
                    <input type="text" name="quantity_product" value="<?=$data['quantity_product']?>" class="form-control" placeholder="จำนวนสินค้า" required>
                    </div>
                  </div>
                <div class="row mb-3 mt-3 fs-4">
                    <label for="price_product" class="col-sm-2 col-form-label">รวมราคาสินค้า</label>
                    <div class="col-6">
                    <input type="text" name="price_product"  value="<?=$data['price_product']?>" class="form-control" placeholder="รวมราคาสินค้า" required>
                    </div>
                  </div>
                  <div class="row mb-3 mt-3 fs-4">
                    <label for="product_price" class="col-sm-2 col-form-label">ราคาสินค้า</label>
                    <div class="col-6">
                    <input type="text" name="product_price" value="<?=$data['product_price']?>" class="form-control" placeholder="ราคาสินค้า" required>
                    </div>
                  </div>
                
                
                  <br>
                  <center>
                  <div class="col-auto">
                    <input type="submit" class="btn btn-primary" name="submit" value="บันทึกข้อมูล">
                    <input type="reset" class="btn btn-primary" name="reset" value="แก้ไขข้อมูล">
                    </div>
                </div>
                  </center>
              </form>
        </div>
      <br>
      <center><h3><p><a href="home.php">หน้าหลัก</a></p</h3><center>
    
</body>
</html>