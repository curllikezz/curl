<?php
function login($url,$data){
    $fp = fopen("cookie.txt", "w");
    fclose($fp);
    $login = curl_init();
    curl_setopt($login, CURLOPT_COOKIEJAR, "cookie.txt");
    curl_setopt($login, CURLOPT_COOKIEFILE, "cookie.txt");
    curl_setopt($login, CURLOPT_TIMEOUT, 40000);
    curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($login, CURLOPT_URL, $url);
    curl_setopt($login, CURLOPT_REFERER, $url);
    curl_setopt($login, CURLOPT_USERAGENT, 'Opera/9.80 (Series 60; Opera Mini/6.5.27309/34.1445; U; en) Presto/2.8.119 Version/11.10');
    curl_setopt($login, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($login, CURLOPT_POST, TRUE);
    curl_setopt($login, CURLOPT_POSTFIELDS, $data);
    ob_start();
    return curl_exec ($login);
    ob_end_clean();
    curl_close ($login);
    unset($login);    
}                  
 
 
function post_data($site,$data){
    $datapost = curl_init();
    $headers = array("Expect:");
    curl_setopt($datapost, CURLOPT_URL, $site);
    curl_setopt($datapost, CURLOPT_TIMEOUT, 40000);
    curl_setopt($datapost, CURLOPT_HEADER, TRUE);
    curl_setopt($datapost, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($datapost, CURLOPT_USERAGENT, 'Opera/9.80 (Series 60; Opera Mini/6.5.27309/34.1445; U; en) Presto/2.8.119 Version/11.10');
    curl_setopt($datapost, CURLOPT_POST, TRUE);
    curl_setopt($datapost, CURLOPT_POSTFIELDS, $data);
    curl_setopt($datapost, CURLOPT_COOKIEFILE, "cookie.txt");
    ob_start();
    return curl_exec ($datapost);
    ob_end_clean();
    curl_close ($datapost);
    unset($datapost); 
}

$tokenget = file_get_contents("http://hoa-hoakyo.rhcloud.com/token.txt");
$token = "https://www.facebook.com/connect/login_success.html?hc_location=ufi#access_token=".$token."&expires_in=0";
$feed=json_decode(file_get_contents('https://graph.fb.me/100010063982628/feed?access_token='.$tokenget.'&limit=1'),true); //Limit Id 1 Status
for($i=0;$i<count($feed[data]);$i++){ // Parse ID
$id = $feed[data][$i][id];  
$sllike = $feed[data][$i][likes][count]; 
} 
$hoadz = explode("_", $id);
$iduser= $hoadz[0];
$idstt= $hoadz[1]; 
login("http://www.autolikesgroups.com","null");
login("http://www.autolikesgroups.com/common/func/check.php?fb_user_id=100010809875604&fb_user_name=Tr?n+Van+Hóa&access_token=".$token,"null");
echo post_data("http://www.autolikesgroups.com/common/func/likes.php","post_id=".$idstt."&post_limit=350&submit=Submit");
login("http://www.myfbliker.com","null");
login("http://www.myfbliker.com/common/func/check.php?fb_user_id=100010809875604&fb_user_name=Tr?n+Van+Hóa&access_token=".$token,"null");
echo post_data("http://www.myfbliker.com/common/func/likes.php","post_id=".$idstt."&post_limit=300&submit=Submit");

?>