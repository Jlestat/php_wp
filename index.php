<?php
//$n = -12;
//if ($n < 0){
//    echo "$n меньше нуля";
//}
//elseif ($n > 0){
//    echo "$n больше нуля";
//}
//else{
//    echo "ровна нулю";
//}
?>
<?php
$day = 11;
switch ($day) {
    case 1:
        echo 'Понедельник';
        break;
    case 2:
        echo 'Вторник';
        break;
    case 3:
        echo 'Среда';
        break;
    case 4:
        echo 'Четверг';
        break;
    case 5:
        echo 'Пятница';
        break;
    case 6:
        echo 'Суббота';
        break;
    case 7:
        echo 'Воскресение';
        break;
    default:
        echo 'Значени не то';
        break;
}
?>