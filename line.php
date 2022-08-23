<?php
  include 'api.php';
  if ($status_data == 'true') {
    $message = "\n";
    $message .= "วันที่ " . $data_date['day'] . " " . $data_date['month'] . " " . $data_date['year'] . "\n";
    $message .= "---------------" . "\n";
    if ($next_subject  == null) {
      $message .= "วิชาที่เรียนอยู่ : ". $subject ."" . "\n";
    }else {
      $message .= "เวลาที่เริ่มเรียน : ". $time_next ."" . "\n";
      $message .= "วิชาที่เรียนอยู่ : ". $subject ."" . "\n";
      $message .= "วิชาต่อไป : ". $next_subject ."" . "\n";
    }
    $message .= "---------------" . "\n";
    $line_message = $message;
    $opts = array(
      'http' => array(
        'method' => 'POST',
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n" . 'Authorization: Bearer ' . $line_token,
        'content' => 'message=' . $line_message
      )
    );
    $context = stream_context_create($opts);
    if (file_get_contents('https://notify-api.line.me/api/notify', false, $context)) {
      $arrayName = array(
        'status' => 'success',
        'message' => 'message has send'
      );
   echo json_encode($arrayName);
      return 1;
    } else {
      $arrayName = array(
        'status' => 'unsuccess',
        'message' => 'cannot send message'
      );
   echo json_encode($arrayName);
      return 0;

    }

  }else {

    if ($time >= '05:00:00' && $time < '09:25:00') {

      $message = "\n";
      $message .= "วันที่ " . $data_date['day'] . " " . $data_date['month'] . " " . $data_date['year'] . "\n";
      $message .= "---------------" . "\n";
      if ($next_subject  == null) {
        $message .= "Status : ". $subject ."" . "\n";
      }else {
        $message .= "วิชาที่เรียนอยู่ : ". $subject ."" . "\n";
        $message .= "วิชาต่อไป : ". $subject ."" . "\n";
      }
      $message .= "---------------" . "\n";
      $line_message = $message;
      $opts = array(
        'http' => array(
          'method' => 'POST',
          'header' => "Content-Type: application/x-www-form-urlencoded\r\n" . 'Authorization: Bearer ' . $line_token,
          'content' => 'message=' . $line_message
        )
      );
      $context = stream_context_create($opts);
      if (file_get_contents('https://notify-api.line.me/api/notify', false, $context)) {
        $arrayName = array(
          'status' => 'success',
          'message' => 'message has send'
        );
     echo json_encode($arrayName);
        return 1;
      } else {
        $arrayName = array(
          'status' => 'unsuccess',
          'message' => 'cannot send message'
        );
     echo json_encode($arrayName);
        return 0;
      }

    }else {

      $arrayName = array(
        'status' => 'false',
        'message' => 'holiday'
      );
     echo json_encode($arrayName);

    }

  }

?>
