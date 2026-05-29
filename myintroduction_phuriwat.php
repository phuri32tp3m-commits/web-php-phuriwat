<?php
// แนะนำตัวเป็นภาษา PHP

$name = 'ภูริวัจน์ อนุพงศ์เมธี';
$age = 18;
$level = 'ปวส.1';
$major = 'เทคโนโลยีสารสนเทศ';
$studentId = '69319010018';

echo '<!DOCTYPE html>' . PHP_EOL;
echo '<html lang="th">' . PHP_EOL;
echo '<head>' . PHP_EOL;
echo '    <meta charset="UTF-8">' . PHP_EOL;
echo '    <title>แนะนำตัว</title>' . PHP_EOL;
echo '</head>' . PHP_EOL;
echo '<body>' . PHP_EOL;
echo '    <h1>ข้อมูลแนะนำตัว</h1>' . PHP_EOL;
echo '    <p>ชื่อ: ' . $name . '</p>' . PHP_EOL;
echo '    <p>อายุ: ' . $age . ' ปี</p>' . PHP_EOL;
echo '    <p>ชั้น: ' . $level . '</p>' . PHP_EOL;
echo '    <p>สาขา: ' . $major . '</p>' . PHP_EOL;
echo '    <p>รหัสนักศึกษา: ' . $studentId . '</p>' . PHP_EOL;
echo '</body>' . PHP_EOL;
echo '</html>' . PHP_EOL;
?>
