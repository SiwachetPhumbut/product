<?php 

    session_start();

    require_once "connection.php";

    if (isset($_POST['submit'])) {
        

        $id_product = $_POST['id_product'];
        $name_product = $_POST['name_product'];
        $quantity_product = $_POST['quantity_product'];
        $price_product = $_POST['price_product'];
        
    
        $product_type_check = "SELECT * FROM product_type WHERE id_product = '$id_product' LIMIT 1";
        $result = mysqli_query($conn, $product_type_check);
        $product_type= mysqli_fetch_assoc($result);

        if ($product_type['id_product'] === $id_product) {
            echo "<script>alert('Name already exists');</script>";
        } else {
            $passwordenc = md5($password);

            $query = "INSERT INTO product_type(id_product,name_product,quantity_product,price_product)
                        VALUE ('$id_product' , '$name_product' , '$quantity_product' , '$price_product')";
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
            <center> <h3>ระบบบันทึกรายการสินค้า(ประเภทสินค้า)</h3></center> 
            </div>
            </head>
            <body>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="row mb-3 mt-3 fs-4">
                    <label for="id_product" class="col-sm-2 col-form-label">รหัสประเภทสินค้า</label>
                        <div class="col-6">
                            <input type="text" name="id_product"class="form-control" placeholder="รหัสประเภทสินค้า" required>
                            </div>
                            </div>
                        <div class="row mb-3 mt-3 fs-4">
                    <label for="name_product" class="col-sm-2 col-form-label">ประเภทสินค้า</label>
                        <div class="col-6">
                    <input type="text" name="name_product"class="form-control" placeholder="ประเภทสินค้า" required>
                            </div>
                            </div>
                            <div class="row mb-3 mt-3 fs-4">
                    <label for="quantity_product" class="col-sm-2 col-form-label" >จำนวนสินค้า</label>
                        <div class="col-sm-6">
                    <input type="text" name="quantity_product" class="form-control" placeholder="จำนวนสินค้า" required>
                            </div>
                            </div>
                        <div class="row mb-3 mt-3 fs-4">
                    <label for="price_product"class="col-sm-2 col-form-label">รวมราคาสินค้า</label>
                        <div class="col-sm-6">
                    <input type="text" name="price_product" class="form-control" placeholder="รวมราคาสินค้า" required>
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