<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Загрузка нового теста</title>
</head>
<body>
<article>
  <nav>
    <ul>
      <li><a href="list.php">Список тестов</a></li>
    </ul>   
  </nav>
<section>
<h1>Загрузка нового теста</h1>
  <form method="post" action="" enctype="multipart/form-data">
    Загрузить новый тест .JSON<br><br>
    <input type="file" name="myfile"><br><br>
    <input type="submit" value="ОТПРАВИТЬ">
  </form>
</section>
</article>
</body>
</html>
<?php 
if (isset($_FILES['myfile'])) {
    $file = $_FILES['myfile'];
}
if (!empty($file['name']) && $file['error'] == UPLOAD_ERR_OK && 
    move_uploaded_file($file['tmp_name'], __DIR__ . '/uploadedFilesinfo.json')) {
        echo 'Файл загружен';
} else {
    echo 'Файл не загружен, попробуйте еще раз.';
}
 ?>