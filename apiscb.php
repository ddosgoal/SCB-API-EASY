<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// API URL //
$api_transactions 	= "https://fasteasy.scbeasy.link/v2/deposits/casa/transactions";
$api_balanceOne 	= "https://fasteasy.scbeasy.link/v2/deposits/summary";
$api_transfer 		= "https://fasteasy.scbeasy.link/v3/transfer/confirmation";
/////////////

$deviceid = "5ecc03a4-4df7-7589-8b8b-5eb9ba7932c1"; // เลข id เครื่อง
$account_number= "1234567890"; // บัญชีธนาคารของท่าน
$pincode= "123456"; // รหัส pincode app scb ของท่าน

$startDate = "2021-08-01";
$endDate = "2021-08-28";

$scb 	= new scb();

/// Get transactions //
$data = '{"deviceid":"'.$deviceid.'","accountNo":"'.$account_number.'","pincode":"'.$pincode.'","endDate":"'.$endDate.'","pageNumber":"1","pageSize":20,"productType":"2","startDate":"'.$startDate.'"}';
$header	= array(
			'Accept-Language: th',
			'Content-Type: application/json; charset=UTF-8'
		);
$check 	= $scb->Curl("POST", $api_transactions, $header, $data, false);
print_r($check);
///////////////////////


/// Get balance //
// $data = '{"depositList":[{"deviceid":"'.$deviceid.'","accountNo":"'.$account_number.'","pincode":"'.$pincode.'"}],"numberRecentTxn":2,"tilesVersion":"39"}';
// $header	= array(
			// 'Content-Type: application/json; charset=UTF-8'
		// );

// $check 	= $scb->Curl("POST", $api_balanceOne, $header, $data, false);
// print_r($check);
///////////////////////


/// Transfer //
// $accountTo			= "1234567890"; // เลขที่บัญชีปลายทาง
// $accountToBankCode	= "004"; // รหัสธนาคาร
// $amount				= "1";

// $transferType="ORFT";
// if ($accountToBankCode=='014') {
	// $transferType="3RD";
// }

// $data 	= '{"deviceid":"'.$deviceid.'","accountFrom":"'.$account_number.'","pincode":"'.$pincode.'","accountFromType":"2","accountTo":"'.$accountTo.'","accountToBankCode":"'.$accountToBankCode.'","amount":"'.$amount.'","annotation":null,"transferType":"'.$transferType.'"}';
// $header	= array(
			// 'Content-Type: application/json; charset=UTF-8'
		// );

// $check 	= $scb->Curl("POST", $api_transfer, $header, $data, false);
// print_r($check);
///////////////////////

class scb
{
	public function Curl($method, $url, $header, $data, $cookie, $http = false)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        if ($data) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }
        if ($cookie) {
            curl_setopt($ch, CURLOPT_COOKIESESSION, true);
            curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
            curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
        }
        $result = curl_exec($ch);
        return $result;
    }
}
?>
