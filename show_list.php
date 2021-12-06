<?php

        include('connection.php');

        $sql = "SELECT * FROM  product_list";
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
  border: 1px solid #d23688;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #d63254;
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
  <center><th>รหัสสินค้า</th></center>
  <center><th> ชื่อสินค้า</th></center>
  <center><th>รายละเอียดสินค้า</th></center>
  <center><th>จำนวน</th></center>
  <center><th>ราคาสินค้า</th></center>
  <center><th>วันที่บันทึก</th></center>
  <center><th>แก้ไข/เพิ่ม</th></center>
  <center><th>ลบข้อมูล</th></center>
  </tr>
  <?php foreach ($query as $data){?>
    
  <tr>
  <center><th><?=$data['product_code']?></th><center>
  <center><th><?=$data['product_name']?></th><center>
  <center><th><?=$data['product_desc']?></th><center>
  <center><th><?=$data['product_quantity']?></th><center>
  <center><th><?=$data['product_price']?></th><center>
  <center><th><?=$data['recording_date']?></th><center>
   
    <center> <th><a href="edit_product_list.php?id=<?=$data['id']?>">แก้ไข/เพิ่ม</a></th></center>
    <center> <th><a href="delete_product_list.php?id=<?=$data['id']?>">ลบข้อมูล</a></th></center>
    
    
  </tr>
    
    <?php } ?>
</table>
<center><h3><p><a href="home.php">หน้าหลัก</a></p></h3></center>
</body>
</html>