<html>
<head><title>Pole</title></head>
<body><div align = 'center'>
  <form
      action=""
      method="POST">
      <input type="text" name="input_letter" />
      <input type="submit" name="send" value="OK">
    </form>
<?php
session_start();
$input_letter = NULL;
$input_letter = $_POST["input_letter"];
// $alphabet = array(
//   "А","Б","В","Г","Ґ","Д","Е","Є","Ж","З","И","І","Ї","Й","К","Л","М","Н","О","П",
//   "Р","С","Т","У","Ф","Х","Ц","Ч","Ш","Щ","Ь","Ю","Я");
$words = array("ПОСЛІДОВНІСТЬ","МОРОЗИВО","ЛІТАК","МОТОЦИКЛ","АРИФМЕТИКА","ШКОЛА","КОХАННЯ","МЕЛЬБУРН","МАМА");
if (!isset($word_number)){
  $word_number = rand(0,count($words) - 1);
   }
$word = $words[$word_number];
$text = preg_split("//u", $word, -1, PREG_SPLIT_NO_EMPTY);
echo "<h2>";
for ($i=0; $i < count($text); $i++) {
  if ($text[$i] === $input_letter){
      echo $text[$i];
  }
  else {
    echo '_';
  }
}
echo "</h2>";
?>
</div>
</body>
</html>
