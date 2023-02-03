<?php
session_start();
include("connect.php");

if(isset($_REQUEST['id_basket1'])){
    id_basket1($conn); 
}
else if(isset($_REQUEST['id_basket2'])){
    id_basket2($conn); 
}
else{
    switch($_REQUEST['cmd']){
        case 'login' : login($conn); break;
        case 'register' : register($conn); break;
        case 'edituser' : edituser($conn); break;
        case 'editfood' : editfood($conn); break;
        case 'deluserfood' : deluserfood($conn); break;
        case 'deluser' : deluser($conn); break;
        case 'insert' : insert($conn); break;
        case 'delbasket' : delbasket($conn); break;
        case 'delbasket_detail' : delbasket_detail($conn); break;
        case 'logout' : logout($conn); break;

    
    }

}
function register($conn){
    $num_person= $_POST['num_person'];
    $prefix= $_POST['prefix'];
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $gmail= $_POST['gmail'];
    $tel= $_POST['tel'];
    $address= $_POST['address'];
    //echo $member." ".$fname;
    $sql = "INSERT INTO tb_customer (num_person,prefix, firstname, lastname, username, password, gmail, tel, address,status) 
    VALUES('$num_person','$prefix','$firstname','$lastname','$username','$password','$gmail','$tel','$address','1')";
    $query = mysqli_query($conn,$sql);
    if($query){
        echo "Inter success";
        header("refresh:2; url=login.html");
    }else{
        echo "Inter fail";
    }
}
function login($conn){
    $gmail =$_POST['gmail'];
    $password =$_POST['password'];
    //echo $email." ".$password;
    $sql ="SELECT * FROM tb_customer WHERE gmail ='$gmail' AND password ='$password' and  status='1'";
    $query = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($query);
    if($gmail=='nattanon0280@gmail.com' & $password=='nattanon0280'){
        echo "admin login success";
        header("refresh:2; url=admin.php");
    }else if($num > 0){
        $obj =mysqli_fetch_array($query,MYSQLI_ASSOC);
      
        $_SESSION['gmail'] = $obj['gmail'];
        $_SESSION['id_person'] = $obj['id_person'];
        echo "login success";
        header("refresh:2; url=main.php");
    }else{
        echo "login fail";
        header("refresh:2; url=login.html");
    }
}


function edituser($conn){
    $id_person= $_POST['id_person'];
    $num_person= $_POST['num_person'];
    $prefix= $_POST['prefix'];
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $gmail= $_POST['gmail'];
    $tel= $_POST['tel'];
    $address= $_POST['address'];
    $sql ="UPDATE tb_customer set num_person = '$num_person',prefix ='$prefix',firstname ='$firstname',lastname = '$lastname',username = '$username',password ='$password', gmail = '$gmail', tel = '$tel', address = '$address' WHERE id_person = '$id_person'";
    $query = mysqli_query($conn,$sql);
    if($query){
       echo "update success";
       header("refresh:2; url=admin.php");
    }else{
      echo "update fail";
    }

}
function editfood($conn){
    $id_product= $_REQUEST['id_product'];
    $nameproduct= $_POST['nameproduct'];
    $category= $_POST['category'];
    $number= $_POST['number'];
    $status="1";
    // $status= $_POST['status'];

    $randnum = rand(0, 9999);
    $filetype = "." . @end(explode('.', $_FILES["image"]["name"]));
    $savefile = date('Ymd-His') . '-' . $randnum . $filetype;
    $price= $_POST['price'];


    if(move_uploaded_file($_FILES["image"]["tmp_name"], "img/" . $savefile)) {
    $price= $_POST['price'];
    $sql ="UPDATE tb_product SET nameproduct = '$nameproduct',category ='$category',number ='$number',status = '$status',image = '$savefile',price ='$price' WHERE id_product = '$id_product'";
    }else{
        $sql ="UPDATE tb_product SET nameproduct = '$nameproduct',category ='$category',number ='$number',status = '$status',price ='$price' WHERE id_product = '$id_product'";
    }
    // UPDATE `tb_product` SET `id_product`=[value-1],`nameproduct`=[value-2],`category`=[value-3],`number`=[value-4],`status`=[value-5],`image`=[value-6],`price`=[value-7] WHERE 1
    $query = mysqli_query($conn,$sql);
    if($query){
       echo "update food success";
       header("refresh:2; url=food.php");
    }else{
      echo "update food fail";
    }

}

function deluserfood($conn){
    $id_product = $_REQUEST['id_product'];
    $sql = "DELETE FROM tb_product WHERE id_product = '$id_product'";
    $query = mysqli_query($conn,$sql);
    if($query){
        echo "delete success";
        header("refresh:2; url=food.php");
    }else{
        echo "delete fail";
    }

}
function deluser($conn){
    $id_person = $_REQUEST['id_person'];
    $sql = "DELETE FROM tb_customer WHERE id_person = '$id_person'";
    $query = mysqli_query($conn,$sql);
    if($query){
        echo "delete success";
        header("refresh:2; url=admin.php");
    }else{
        echo "delete fail";
    }

}
function insert($conn){
    $nameproduct= $_POST['nameproduct'];
    $category= $_POST['category'];
    $number= $_POST['number'];


    $randnum = rand(0, 9999);
    $filetype = "." . @end(explode('.', $_FILES["image"]["name"]));
    $savefile = date('Ymd-His') . '-' . $randnum . $filetype;
    $price= $_POST['price'];


    if(move_uploaded_file($_FILES["image"]["tmp_name"], "img/" . $savefile)) {
    $sql = "INSERT INTO   tb_product (nameproduct, category, number, status, image, price)
    VALUES('$nameproduct','$category','$number','1','$savefile','$price')";
    $query = mysqli_query($conn,$sql);
    }
    if($query){
        echo "Insert success";
        header("refresh:2; url=food.php");
    }else{
        echo "Insert fail";
    }
}
function id_basket1($conn){
    $id_basket= $_GET['id_basket1'];
    $sql ="UPDATE tb_basket SET status_basket = '1' WHERE id_basket = '$id_basket'";
    $query = mysqli_query($conn,$sql);
    if($query){


        $query="SELECT * from tb_basket_detail where id_basket='$id_basket'";
        $query1 = mysqli_query($conn,$query);
  while($obj1 = mysqli_fetch_array($query1,MYSQLI_ASSOC))
{
 $id_product = $obj1['id_product'];
 $qty = $obj1['qty'];

 $sql_tb_product="SELECT * from tb_product where id_product='$id_product'";
 $query_tb_product = mysqli_query($conn,$sql_tb_product);
 $obj_tb_product = mysqli_fetch_array($query_tb_product,MYSQLI_ASSOC);
 $qty_product = $obj_tb_product['number'];

$number=$qty_product-$qty;


 $sql ="UPDATE tb_product SET number = '$number' WHERE id_product = '$id_product'";
 $query = mysqli_query($conn,$sql);
}

        echo "updata success";
        header("refresh:2; url=bill.php");
    }else{
        echo "Insert fail";
    }
}
function id_basket2($conn){
    $id_basket= $_GET['id_basket2'];
    $sql ="UPDATE tb_basket SET status_basket = '2' WHERE id_basket = '$id_basket'";
    $query = mysqli_query($conn,$sql);
    if($query){
        echo "updata success";
        header("refresh:2; url=bill.php");
    }else{
        echo "Insert fail";
    }

    
 }
 function delbasket($conn){
    $id_basket = $_REQUEST['id_basket'];
    $sql = "DELETE FROM tb_basket WHERE id_basket = '$id_basket'";
    $query = mysqli_query($conn,$sql);
    if($query){
        echo "delete basket success";
        header("refresh:2; url=bill.php");
    }else{
        echo "delete basket fail";
    }

}
function delbasket_detail($conn){
    $id_detail = $_REQUEST['id_detail'];
    $sql = "DELETE FROM tb_basket_detail WHERE id_detail = '$id_detail'";
    $query = mysqli_query($conn,$sql);
    if($query){
        echo "delete product success";
        header("refresh:2; url=bill.php");
    }else{
        echo "delete product fail";
    }

}
function logout($conn){
    session_destroy(); 
    header("location:index.html");
}
?>