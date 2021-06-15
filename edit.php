<?php
     $host = "localhost";
     $username = "root";
     $passwd = "";
     $dbname = "bharvi";
     $connection = mysqli_connect($host,$username,$passwd,$dbname);
     if(!isset($_GET['id']) || empty($_GET['$id'])){
         header("location:table.php");
     }
    $editid = $_GET['id'];
    //select data from table
    $editq = mysqli_query($connection,"select * from tbl_user where user_id = '{$editid}'") or die(mysqli_error($connection));
    $editdata = mysqli_fetch_array($editq);
    if($_POST){
        $txt1 = $_POST['txt1'];
        $txt2 = $_POST['txt2'];
        $txt3 = $_POST['txt3'];
        $txt4 = $_POST['txt4'];
        $txt5 = $_POST['txt5'];
        $txt6 = $_POST['txt6'];
        $txt7 = $_POST['txt7'];
        $txt8 = $_POST['txt8'];
        $txt9 = $_POST['txt9'];
        $uq = mysqli_query($connection,"update tbl_user set user_name='{$txt1}',user_gender='{$txt2}',user_dob='{$txt3}',user_email='{$txt4}',user_mobile='{$txt5}',user_address='{$txt6}',user_password='{$txt7}',user_area='{$txt8}',user_pincode='{$txt9}' where user_id='{$editid}'") or die(mysqli_error($connection));
        if($uq){
            echo "<script>alert('Record Updated');window.location='table.php';</script>";
        }
        
    }

?>
<!DOCTYPE html>
<html>
    <body>
        <form method="POST">
            Name :<input type="text" value="<?php echo $editdata['user_name'];?>" name="txt1"required/><br/>
            Email :<input type="email"value="<?php echo $editdata['user_email'];?>" name="txt4" required/><br/>
            Password :<input type="password" value="<?php echo $editdata['user_password'];?>" name="txt7" required/><br/>
            Mobile number :<input type="number" value="<?php echo $editdata['user_mobile'];?>" name="txt5" required/><br/>
            <input type="submit"/>
        </form>
    </body>
</html>