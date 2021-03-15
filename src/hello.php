
<?php
// header('Location: http://www.freetuts.net/');
echo "hello </br>";
// session_start();

chao();
$bientoancuc = 10; // biến toàn cục
static $bientinh = 12; // biến tĩnh 

function chao($a = 0){
    echo "Chao nhe".$a;
    global $bientoancuc;
}
if(isset($_GET["id"])) echo $_GET["id"];

//json_decode($json, $is_array)
array_combine($array_keys, $array_values); // trộn 2 mảng bằng nhau 
array_count_values ( $array ); // đếm số lần values xuất hiện trong mảng
//array_push(&$array, $add_value1, $add_value2, $add_value…); // Thêm phần tử vào cuối mảng 

$path = 'demo.txt';
$fp = @fopen($path, "r");
file_exists('demo.txt'); // file có tồn tại ? 
  
// Kiểm tra file mở thành công không
// if (!$fp) {
//     echo 'Mở file không thành công';
// }
// else{
//     echo 'Mở file thành công';
//     while(!feof($fp))
//     {
//         echo fgetc($fp);
//         echo fgets($fp);
//         $data = fread($fp, filesize('demo.txt'));
//         echo $data;
//     }
//     fwrite($fp, $data);
//     fclose($fp);
// }

?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form method="POST">
            Username: <input type="text" name="username" value=""/> <br/>
            password: <input type="password" name="password" value=""/><br/>
            <input type="submit" name="form_click" value="Gửi Dữ Liệu"/>
            <?php
                // Nếu người dùng click vào button Gửi Dữ Liệu
                // Vì button đó tên là form_click nên đó cũng là
                // tên của key nằm trong biến $_POST
                if (isset($_POST['form_click'])){
                  
                    echo 'Tên đăng nhập là: ' . $_POST['username'];
                    echo '<br/>';
                    echo 'Mật khẩu là: ' . $_POST['password'];
                }
           ?>
        </form>
    </body>
</html>