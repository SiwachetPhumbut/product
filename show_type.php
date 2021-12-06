<?php

        include('connection.php');

        $sql = "SELECT * FROM  product_type";
        $query = mysqli_query($conn, $sql);
       

        ?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #20c997;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #d63384;
}
</style>
</head>
<body>
  <header>
  <div class="container ">
    <div class="col-auto bg-primary">
      <div class="alert alert-primary" role="alert">
      <center><h2>ระบบบันทึกรายการสินค้า</h2></center>
      </div>
    </div>
  </div>
  <table>
  <tr>
  <center><th>รหัสประเภทสินค้า</th></center>
  <center><th>ประเภทสินค้า</th></center>
  <center><th>จำนวนสินค้า</th></center>
  <center><th>รวมราคาสินค้า</th></center>
  <center><th>แก้ไข/เพิ่ม</th></center>
  <center><th>ลบข้อมูล</th></center>
  
  </tr>
  <?php foreach ($query as $data){?>
    
  <tr>
  <center><th><?=$data['id_product']?></th><center>
  <center><th><?=$data['name_product']?></th><center>
  <center><th><?=$data['quantity_product']?></th><center>
  <center><th><?=$data['price_product']?></th><center>
    
    <center> <th><a href="edit_product_type.php?id=<?=$data['id']?>">แก้ไข/เพิ่ม</a></th></center>
    <center> <th><a href="delete_product_type.php?id=<?=$data['id']?>">ลบข้อมูล</a></th></center>
    
  </tr>
    
    <?php } ?>
</table>
<center><h3><p><a href="home.php">หน้าหลัก</a></p></h3></center>
</body>
</html>