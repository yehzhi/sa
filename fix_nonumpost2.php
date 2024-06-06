<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sa";

    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die('連線失敗'.$conn->connect_error);
    }

    $post_id = $_POST['post_id'];
    $article = $_POST['article'];
    $content = $_POST['content'];
    $star_rate = $_POST['star_rate'];
    $house_photo = $_FILES['house_photo']['name'];

    // 檢查是否接收到必要的參數
    if (!isset($post_id) || !isset($article) || !isset($content) || !isset($star_rate) || !isset($house_photo)) {
        echo "請提供所有必要的參數";
        exit;
    }


    // 確認是否有新的圖片上傳
    if(isset($_FILES["house_photo"]) && !empty($_FILES["house_photo"]["name"])) {
        $target_dir = "post/";
        $target_file = $target_dir . basename($_FILES["house_photo"]["name"]);
        $house_photo = basename($_FILES["house_photo"]["name"]);
        move_uploaded_file($_FILES['house_photo']['tmp_name'], $target_file);
    } else {
        // 如果沒有新的圖片，保持原有的圖片不變
        $sql_select = "SELECT house_photo FROM post WHERE post_id='$post_id'";
        $result = $conn->query($sql_select);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $house_photo = $row["house_photo"];
            }
        }
    }

    // 檢查是否有文章內容發生了改變
    $sql_select = "SELECT * FROM post WHERE post_id='$post_id'";
    $result = $conn->query($sql_select);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if ($row["article"] == $article && $row["content"] == $content && $row["star_rate"] == $star_rate && $row["house_photo"] == $house_photo) {?>
                
                    <script>
                    // 如果文章內容沒有改變，則不執行更新數據庫的操作
                        alert("文章內容沒有改變!");
                        location.href = "my_post_nonum.php";
                    </script>
           <?php }
        }
    }

    // 更新文章數據庫中的相應記錄
    $sql = "UPDATE post SET article='$article', content='$content', star_rate='$star_rate', house_photo='$house_photo' WHERE post_id='$post_id'";
    if ($conn->query($sql) === TRUE) {?>
        <script>
            alert("文章修改成功!");
            location.href = "my_post_nonum.php";
        </script>
    <?php
    } else {?>
        <script>
            alert("文章修改失敗!");
            location.href = "my_post_nonum.php"; // 或者重定向到其他頁面
        </script>
    <?php
    }

    $conn->close();
?>