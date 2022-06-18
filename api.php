<?php
/**
credit by Worachote
Discord : RealRuDraGon#5915
Fanpage : fb.com/developer.ctc
**/
session_start();
date_default_timezone_set('Asia/Bangkok');
include 'config.php';
function ThDate()
{
  $ThDay = array ( "sunday", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday" );
  $ThDay_true = array ( "อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์" );
  $ThMonth = array ( "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน","พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม","กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม" );

  $week = date( "w" ); // ค่าวันในสัปดาห์ (0-6)
  $months = date( "m" )-1; // ค่าเดือน (1-12)
  $day = date( "d" ); // ค่าวันที่(1-31)
  $years = date( "Y" )+543; // ค่า ค.ศ.บวก 543 ทำให้เป็น ค.ศ.

 $arr_date = array(
   'time' => date("H:i:s"),
   'week' => $ThDay[$week],
   'ThWeek' => $ThDay_true[$week],
   'day' => $day,
   'month' => $ThMonth[$months],
   'year' => $years,
   'date' => date("Y-m-d"),
   'full' => date("Y-m-d H:i:s")
 );

return $arr_date;
}

function helper_time($status,$clothes,$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8)
{
 $arr_create = array(
   'status' => $status,
   'clothes' => $clothes,
   '1' => $s1,
   '2' => $s2,
   '3' => $s3,
   '4' => $s4,
   '5' => $s5,
   '6' => $s6,
   '7' => $s7,
   '8' => $s8,
 );
 return $arr_create;
}

$data_date = ThDate();
$week = $data_date['week'];
$status_data = $arr_sub[$week]['status'];
$time = $data_date['time'];

//modify time +5 Minute
// $date = $data_date['full'];
// $date = strtotime($date);
// $date = strtotime("+5 minute", $date);
// $time = date('H:i:s', $date);

// Test System
// $status_data = 'true';
// $time = '08:30:00';
// $week = 'monday';
// print_r($arr_time);
// print_r($data_date);

if ($status_data == 'true') {

 if ($time >= '00:00:00' && $time < '08:30:00') {
   $subject = null;
   $next_subject = $arr_sub[$week]['1'];
   $time_next = $arr_time['0'];
 }elseif ($time >= '08:30:00' && $time < '09:25:00') {
   $subject = $arr_sub[$week]['1'];
   $next_subject = $arr_sub[$week]['2'];
   $time_next = $arr_time['1'];
 }elseif ($time >= '09:25:00' && $time < '10:20:00') {
   $subject = $arr_sub[$week]['2'];
   $next_subject = $arr_sub[$week]['3'];
   $time_next = $arr_time['2'];
 }elseif ($time >= '10:20:00' && $time < '11:15:00') {
   $subject = $arr_sub[$week]['3'];
   $next_subject = $arr_sub[$week]['4'];
   $time_next = $arr_time['3'];
 }elseif ($time >= '11:15:00' && $time < '12:10:00') {
   $subject = $arr_sub[$week]['4'];
   $next_subject = $arr_sub[$week]['5'];
   $time_next = $arr_time['4'];
 }elseif ($time >= '12:10:00' && $time < '13:05:00') {
   $subject = $arr_sub[$week]['5'];
   $next_subject = $arr_sub[$week]['6'];
   $time_next = $arr_time['5'];
 }elseif ($time >= '13:05:00' && $time < '14:00:00') {
   $subject = $arr_sub[$week]['6'];
   $next_subject = $arr_sub[$week]['7'];
   $time_next = $arr_time['6'];
 }elseif ($time >= '14:00:00' && $time < '14:55:00') {
   $subject = $arr_sub[$week]['7'];
   $next_subject = $arr_sub[$week]['8'];
   $time_next = $arr_time['7'];
 }elseif ($time >= '14:55:00' && $time < '15:50:00') {
   $subject = $arr_sub[$week]['8'];
   $next_subject = "กลับบ้าน";
   $time_next = $arr_time['8'];
 }else {
   $subject = "กลับบ้าน";
   $next_subject = null;
   $time_next = null;
 }

}else {
 $subject = "วันนี้ไม่มีเรียน";
 $next_subject = null;
 $time_next = null;
}

?>
