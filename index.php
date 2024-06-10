<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
    $servername = "localhost";
    $username = "fares";
    $password = "feres997";
    $database = "db";



    // إنشاء الاتصال
    $conn = new mysqli($servername, $username, $password, $database);

    // فحص الاتصال
    if ($conn->connect_error) {
      die("error" . $conn->connect_error);
    }

    echo "success";

    // الآن يمكنك تنفيذ الاستعلامات واستخدام بيانات قاعدة البيانات هنا

    // إغلاق الاتصال
    $conn->close();
    ?>


</html>s