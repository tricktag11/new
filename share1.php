<?php include ("config.php");

$w = "\033[1;0m";
$g = "\033[1;32m";
$r = "\033[1;31m";
$cy = "\033[1;36m";
$y = "\033[1;33m";
$b = "\033[1;34m";
$asciicode = " \033[1;30m                                                                 

\033[1;33m===========================<\033[1;0m BOT REFFERAL BIGTOKEN \033[1;33m>==========================";

error_reporting(0);
function getStr($string,$start,$end){
	$str = explode($start,$string);
	$str = explode($end,($str[1]));
	return $str[0];
	
}

echo "Input name : ";
$ema = trim(fgets(STDIN));

echo "Input reff : ";
$reff = trim(fgets(STDIN));

function clm2($ema, $count, $reff){
	$arr = array("\r","	");
	$headers = array();
	$headers[] = "content-type: application/x-www-form-urlencoded";
    $headers[] = "Accept-Encoding: gzip";
    $headers[] = "Host: api.bigtoken.com";
	$headers[] = "user-agent: Redmi 5A_7.1.2_1.0.6";
	$headers[] = "accept: application/json";
	$url = "https://api.bigtoken.com/signup";
	$h = explode("\n",str_replace($headers,"",""));
	
	$bod = "email=".$ema."&password=%40Aq123456&referral_id=".$reff."&monetize=1";
	$b = "email=".$ema."size".$count."@lifeguru.online&password=%40Aq123456&referral_id=".$reff."&monetize=1";
	$bo = "email=".$ema."size".$count."@nopemail.me&password=%40Aq123456&referral_id=".$reff."&monetize=1";
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $bo);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$xx = curl_exec($ch); 
	curl_reset($ch);
	return json_decode($xx,true); 
}

echo $asciicode;
echo $cy."\nSi Pembuat : ".$b."Ndhye\n";
echo $w."Tutorial Mudah cek yutub : https://youtu.be/FKDE6OqSpzk\n";
echo "menggunakan aplikasi nopemail di playstore ";
echo "\n";
echo $r."Sc Orang...\n".$g."Yang Punya Sc nya Baik\n";
echo $g."Gunakan sebaik mungkin\n";
echo $y."Karena Si Pembuat Pusing 7 Keliling\n";


while(TRUE){
	$count =1;
	
	$js2 = clm2($ema, $count, $reff);
	$ot2 = json_encode($js2);
	
echo date('d-m-Y H:i:s')."\n";
for($a=1;$a<551;$a++){

echo $count."/10";
echo $g."Succes Claim : ".$w, $ot2, $g."\n";
$count++;
sleep (10);
}

}
