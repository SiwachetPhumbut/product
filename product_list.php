<?php 

    session_start();

    require_once "connection.php";

    if (isset($_POST['submit'])) {

        $product_code = $_POST['product_code'];
        $product_name = $_POST['product_name'];
        $product_desc = $_POST['product_desc'];
        $product_quantity = $_POST['product_quantity'];
        $product_price = $_POST['product_price'];
        $recording_date = $_POST['recording_date'];
        

    
        $product_list_check = "SELECT * FROM product_list WHERE product_code = '$product_code' LIMIT 1";
        $result = mysqli_query($conn, $product_list_check);
        $product_list= mysqli_fetch_assoc($result);

        if ($product_list['product_code'] === $product_code) {
            echo "<script>alert('Name already exists');</script>";
        } else {
            $passwordenc = md5($password);

            $query = "INSERT INTO product_list(product_code,product_name, product_desc,product_quantity,product_price,recording_date)
                        VALUE ('$product_code' ,'$product_name' , '$product_desc','$product_quantity', '$product_price','$recording_date')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $_SESSION['success'] = "[]";
                header("Location: home.php");
            } else {
                $_SESSION['error'] = "";
                header("Location: home.php");
            }
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

    <title>Time in-out</title>
    <link rel="stylesheet" href="style.css">
        <div class="container ">
        <div class="col-auto bg-danger">
            <center> <h3>ระบบบันทึกรายการสินค้า</h3></center> 
            </div>
            </head>
            <body>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="row mb-3 mt-3 fs-4">
                    <label for="product_code" class="col-sm-2 col-form-label">รหัสสินค้า</label>
                        <div class="col-6">
                            <input type="text" name="product_code"class="form-control" placeholder="รหัสสินค้า" required>
                            </div>
                            </div>
                        <div class="row mb-3 mt-3 fs-4">
                    <label for="product_name" class="col-sm-2 col-form-label">ชื่อสินค้า</label>
                        <div class="col-6">
                    <input type="text" name="product_name"class="form-control" placeholder="ชื่อสินค้า" required>
                            </div>
                            </div>
                        <div class="row mb-3 mt-3 fs-4">
                    <label for="product_desc" class="col-sm-2 col-form-label" >รายละเอียดสินค้า</label>
                        <div class="col-sm-6">
                    <input type="text" name="product_desc" class="form-control" placeholder="รายละเอียดสินค้า" required>
                            </div>
                            </div>
                            <div class="row mb-3 mt-3 fs-4">
                    <label for="  product_quantity" class="col-sm-2 col-form-label" >จำนวน</label>
                        <div class="col-sm-6">
                    <input type="text" name="  product_quantity" class="form-control" placeholder="จำนวน" required>
                            </div>
                            </div>
                        <div class="row mb-3 mt-3 fs-4">
                    <label for="product_price"class="col-sm-2 col-form-label">ราคาสินค้า</label>
                        <div class="col-sm-6">
                    <input type="text" name="product_price" class="form-control" placeholder="ราคาสินค้า" required>
                            </div>
                            </div>
                        <div class="row mb-3 mt-3 fs-4">
                    <label for="recording_date"class="col-sm-2 col-form-label">วันที่บันทึก</label>
                        <div class="col-sm-6">
                    <input type="date" name="recording_date" class="form-control" placeholder="วันที่บันทึก" required>
                            </div>
                            </div>
                            
                        <br>
                    <center>
                        <div class="col-auto">
                    <input type="submit" class="btn btn-primary" name="submit" value="บันทึกข้อมูล">
                    <input type="reset" class="btn btn-primary" name="reset" value="แก้ไขข้อมูล">
                    </center>
                
                        </div>
                    </div>
                </div>
            
            </form>
        </div>
    </form>
    <br>
    <center><h3><p><a href="home.php">หน้าหลัก</a></p</h3></center>
    
</body>
</html>