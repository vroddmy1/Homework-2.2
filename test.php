<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="UTF-8">

    <title>Тест</title>
    
</head>
<body>

<form method="post">
    
    <?php
    if (!empty($_GET["name"])) {
        $test = json_decode(file_get_contents('./tests/' . $_GET["name"] . '.json'));
        
        foreach($test->questions as $question) {
            echo '<h3>' . $question->question . '</h3>';
            
            foreach($question->var as $key => $choice) {
                echo '<label><input type="radio" value="' . $key . '" name="' . $question->id . '">'. $var . '</label>';
            }
        }
    }
    ?>
    <br><input type="submit" value="Проверка">

</form>
</body>
</html>

<?php
if ($_POST) {
    $count = 0;
    
    foreach($_POST as $number => $answer) {
        foreach($test->questions as $questions) {
            if ($answer === $question->correct && $number === $question->id) {
                $count++;
            }
        }
    }
    echo '<h3>Правильных ответов: ' . $count . '</h3>';

}
?>