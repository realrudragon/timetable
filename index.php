<?php
/**
credit by Worachote
Discord : RealRuDraGon#5915
Fanpage : fb.com/developer.ctc
**/
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetable System</title>
  </head>
  <body>
    <?php include 'api.php'; ?>
    <center>
    <p><?php echo "วันที่ " . $data_date['day'] . " " . $data_date['month'] . " " . $data_date['year'];?></p>
    <?php if ($status_data != 'true'): ?>
      <p><?php echo "Status : " . $subject; ?></p>
    <?php exit; ?>
    <?php endif; ?>
    <?php if ($next_subject  == null): ?>
      <p><?php echo "ชุดที่ต้องใส่ไปเรียน : " . $arr_sub[$week]['clothes']; ?></p>
      <p><?php echo "Status : " . $subject; ?></p>
    <?php exit; ?>
    <?php endif; ?>
    <p><?php echo "ชุดที่ต้องใส่ไปเรียน : " . $arr_sub[$week]['clothes']; ?></p>
    <p><?php echo "เวลาเริ่มเรียน : " . $time_next; ?></p>
    <p><?php echo "วิชาที่เรียนอยู่ตอนนี้ : " . $subject; ?></p>
    <p><?php echo "วิชาที่เรียนคาบต่อไป : " . $next_subject; ?></p>
  </center>
  </body>
</html>
