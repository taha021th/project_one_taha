<!-- کوئری استرینگ استفاده میکنیم ما 
خواندن پیام های فرستاده شده به بات
https://tapi.bale.ai/bot232214987:1fMH4PdOANH8l3EIFlaax4Ebod6NKavvY963io3c/getupdates
send message
https://tapi.bale.ai/bot232214987:1fMH4PdOANH8l3EIFlaax4Ebod6NKavvY963io3c/sendMessage?chat_id=862966103&text=Hello World! -->


<!-- $url = 'http://mail.google.com';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, true);    
curl_setopt($ch, CURLOPT_NOBODY, true);    
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_TIMEOUT,10);
$output = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);


curl_close($ch);

echo 'HTTP code: ' . $httpcode; -->


<?php
$random = rand(1, 2);
if ($random == 1) { $sub = "mail" ;} else { $sub = "www"; }

$url = "http://$sub.google.com";
$ch = curl_init($url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_TIMEOUT,10);
$output = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

echo $httpcode;

?>



















<!-- 
// $text="hello curl3\nsalam";

// $curl=curl_init();
// // ارسال مقادری از طریق ادرس
// $address="https://tapi.bale.ai/bot232214987:1fMH4PdOANH8l3EIFlaax4Ebod6NKavvY963io3c/sendMessage?";

// $curl = curl_init($address);
// curl_setopt($curl , CURLOPT_POST, TRUE);
// curl_setopt($curl , CURLOPT_POSTFIELDS, "chat_id=862966103&text=$text");
// $send = curl_exec($curl);
// curl_close($curl);

// header("location:https://www.google.com/"); 

 -->