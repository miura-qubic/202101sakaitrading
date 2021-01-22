<?php

header("Content-Type: text/html;charset=utf-8");
mb_language('ja');
mb_internal_encoding("utf-8");

//【２】HTMLエンティティ変換
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, "utf-8");
$kana = htmlspecialchars($_POST['kana'], ENT_QUOTES, "utf-8");
$sex = htmlspecialchars($_POST['sex'], ENT_QUOTES, "utf-8");
$year = htmlspecialchars($_POST['year'], ENT_QUOTES, "utf-8");
$month = htmlspecialchars($_POST['month'], ENT_QUOTES, "utf-8");
$day = htmlspecialchars($_POST['day'], ENT_QUOTES, "utf-8");
$zip1 = htmlspecialchars($_POST['zip1'], ENT_QUOTES, "utf-8");
$zip2 = htmlspecialchars($_POST['zip2'], ENT_QUOTES, "utf-8");
$addr1 = htmlspecialchars($_POST['addr1'], ENT_QUOTES, "utf-8");
$tel01 = htmlspecialchars($_POST['tel01'], ENT_QUOTES, "utf-8");
$tel02 = htmlspecialchars($_POST['tel02'], ENT_QUOTES, "utf-8");
$tel03 = htmlspecialchars($_POST['tel03'], ENT_QUOTES, "utf-8");
$email = htmlspecialchars($_POST['mail'], ENT_QUOTES, "utf-8");
$university = htmlspecialchars($_POST['university'], ENT_QUOTES, "utf-8");
$undergraduate = htmlspecialchars($_POST['undergraduate'], ENT_QUOTES, "utf-8");
$department = htmlspecialchars($_POST['department'], ENT_QUOTES, "utf-8");
$grdyear = htmlspecialchars($_POST['grdyear'], ENT_QUOTES, "utf-8");
$grdmonth = htmlspecialchars($_POST['grdmonth'], ENT_QUOTES, "utf-8");
$trigger = htmlspecialchars($_POST['trigger'], ENT_QUOTES, "utf-8");


$msg = mb_convert_kana($message, "sKV");

//管理者受信用メール送信処理
function funcManagerAddress($name, $kana, $sex, $year, $month, $day, $zip1, $zip2, $addr1, $tel01, $tel02, $tel03, $email, $university, $undergraduate, $department, $grdyear, $grdmonth, $trigger)
{

  $mailto = 'info@qu-bic.jp'; // 管理者当てメール、カンマで複数設定可能
  // $mailto = 'info@sakaitrading.co.jp'; // 管理者当てメール、カンマで複数設定可能
  $subject = $name . "様。エントリーありがとうございます"; //件名




  $content .= "内容を確認後、返信してください。\n\n";
  $content .= "--------------------------------\n\n";
  $content .= "■お名前\n";
  $content .= $name . "\n";
  $content .= "■ふりがな\n";
  $content .= $kana . "\n";
  $content .= "■性別\n";
  $content .= $sex . "\n";
  $content .= "■生年月日\n";
  $content .= $year . "年" . $month . "月" . $day . "日\n";
  $content .= "■ご住所\n";
  $content .= "〒" . $zip1 . "-" . $zip2 . "\n";
  $content .= $addr1 . "\n";
  $content .= "■電話番号\n";
  $content .= $tel01 . "-" . $tel02 . "-" . $tel03 . "\n";
  $content .= "■メールアドレス\n";
  $content .= $email . "\n";
  $content .= "■大学\n";
  $content .= $university . "\n";
  $content .= "■学部\n";
  $content .= $undergraduate . "\n";
  $content .= "■学科\n";
  $content .= $department . "\n";
  $content .= "■卒業（予定）年・月\n";
  $content .= $grdyear . "年" . $grdmonth . "月\n";
  $content .= "■堺商事を知ったきっかけ\n";
  $content .= $trigger . "\n\n";
  $content .= "--------------------------------\n\n";
  $content .= "cam505";

  $mailfrom = "From:" . mb_encode_mimeheader($name) . "<" . $email . ">";
  if (mb_send_mail($mailto, $subject, $content, $mailfrom) == true) {
    $managerFlag = "○";
  } else {
    $managerFlag = "×";
  }
  return $managerFlag;
}


//送信者用自動返信メール送信処理
function funcContactAddress($name, $kana, $sex, $year, $month, $day, $zip1, $zip2, $addr1, $tel01, $tel02, $tel03, $email, $university, $undergraduate, $department, $grdyear, $grdmonth, $trigger)
{
  $mailto = $email;
  $subject = "エントリーありがとうございます";
  $content = "\n堺商事株式会社へのエントリー、ありがとうございます。\n";
  $content .= "以下の内容でエントリーを受け付けました。\n\n";

  $content .= "■お名前\n";
  $content .= $name . "\n";
  $content .= "■ふりがな\n";
  $content .= $kana . "\n";
  $content .= "■性別\n";
  $content .= $sex . "\n";
  $content .= "■生年月日\n";
  $content .= $year . "年" . $month . "月" . $day . "日\n";
  $content .= "■ご住所\n";
  $content .= "〒" . $zip1 . "-" . $zip2 . "\n";
  $content .= $addr1 . "\n";
  $content .= "■電話番号\n";
  $content .= $tel01 . "-" . $tel02 . "-" . $tel03 . "\n";
  $content .= "■メールアドレス\n";
  $content .= $email . "\n";
  $content .= "■大学\n";
  $content .= $university . "\n";
  $content .= "■学部\n";
  $content .= $undergraduate . "\n";
  $content .= "■学科\n";
  $content .= $department . "\n";
  $content .= "■卒業（予定）年・月\n";
  $content .= $grdyear . "年" . $grdmonth . "月\n";
  $content .= "■堺商事を知ったきっかけ\n";
  $content .= $trigger . "\n\n";

  $content .= "選考の予定については、改めてご連絡させていただきます。\n";
  $content .= "それでは、よろしくお願いいたします。\n\n";
  $content .= "□■--------------------------------------\n";
  $content .= "堺商事株式会社\n"; //社名
  $content .= "総務人事部　総務人事課　児玉\n";
  $content .= "〒530-0005\n";
  $content .= "大阪市北区中之島3丁目2番4号\n";
  $content .= "中之島フェスティバルタワー・ウエスト16階\n";
  $content .= "TEL：(06)7166-6180　FAX：(06)7166-6181\n";
  $content .= "Mail：info@sakaitrading.co.jp\n";
  $content .= "--------------------------------------□■\n";


  $mailfrom = "From:" . mb_encode_mimeheader("堺商事株式会社") . "<'info@qu-bic.jp'>";
  // $mailfrom = "From:" . mb_encode_mimeheader("堺商事株式会社") . "<'info@sakaitrading.co.jp'>";

  if (mb_send_mail($mailto, $subject, $content, $mailfrom) == true) {
    $contactFlag = "○";
  } else {
    $contactFlag = "×";
  }
  return $contactFlag;
}


//送信者用自動返信メール送信
$contactAddress = funcContactAddress($name, $kana, $sex, $year, $month, $day, $zip1, $zip2, $addr1, $tel01, $tel02, $tel03, $email, $university, $undergraduate, $department, $grdyear, $grdmonth, $trigger);
//管理者受信用メール送信
$managerAddress = funcManagerAddress($name, $kana, $sex, $year, $month, $day, $zip1, $zip2, $addr1, $tel01, $tel02, $tel03, $email, $university, $undergraduate, $department, $grdyear, $grdmonth, $trigger);

if ($contactAddress === "○" && $managerAddress === "○") {
  header("Location: ./thanks.html");
}
