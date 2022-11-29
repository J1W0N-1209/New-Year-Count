<?php
    include "db_conn.php";

    if(isset($_POST['submit'])) {
        $hope = htmlentities($_POST['hope']);
        $code = htmlentities($_POST['code']);
        $ip = $_SERVER['REMOTE_ADDR'];
        if(!isset($_COOKIE['created_At'])) {
            $sql = "INSERT INTO hopeNewYears(hope,internetProtocol,created_At,code) VALUES('$hope','$ip',now(),'$code')";
            mysqli_query($conn,$sql);
            setcookie("created_At",time(),time() + 15);
            ?>
                <script>
                    location.href="index.php";
                </script>
            <?php
        }
        else {
            ?>
                <script>
                    alert("15초 뒤에 작성해주세요 !");
                    location.href="index.php";
                </script>
            <?php
        }
        
    }
?>
