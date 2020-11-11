<?php namespace Listener;

require('PaypalIPN.php');


// include your composer dependencies
// require __DIR__ . '/vendor/autoload.php';
require_once '../../vendor/autoload.php';
putenv('GOOGLE_APPLICATION_CREDENTIALS=../../config/serviceAccount/skullcrawl-221121-e2ae1313c83e.json');
use Google_Client;
use Google_Service_Drive;
use PaypalIPN;
use Google_Service_Drive_Permission;

$movie_item_name = "Masterclass i fiskskinnsgarvning";
// Set this to true to save a log file:
$save_log_file = true;
$log_file_dir = __DIR__ . "/logs";
date_default_timezone_set("Europe/Stockholm");
list($year, $month, $day, $hour, $minute, $second, $timezone) = explode(":", date("Y:m:d:H:i:s:T"));
$date = $year . "-" . $month . "-" . $day;
$timestamp = $date . " " . $hour . ":" . $minute . ":" . $second . " " . $timezone;
$dated_log_file_dir = $log_file_dir . "/" . $year . "/" . $month;
$test_text = "";


$ipn = new PaypalIPN();

// Use the sandbox endpoint during testing.
// $ipn->useSandbox();
$verified = $ipn->verifyIPN();

$data_text = "";

//--------GOOGLE STUFF TEST----------
$client = new Google_Client();
$client->useApplicationDefaultCredentials();
$client->addScope(Google_Service_Drive::DRIVE);
// $client->setSubject("john.rahme.se@gmail.com");
$service = new Google_Service_Drive($client);

// Print the names and IDs for up to 10 files.
// $optParams = array(
//   'pageSize' => 10,
//   'fields' => 'nextPageToken, files(id, name)'
// );
// $results = $service->files->listFiles($optParams);

// if (count($results->getFiles()) == 0) {
//     print "No files found.\n";
// } else {
//     print "Files:\n";
//     foreach ($results->getFiles() as $file) {

//         $data_text .= $file->getName() . " => " . $file->getId() . "\r\n";
//         printf("%s (%s)\n", $file->getName(), $file->getId());
//     }
// }


//--------------------------------

if (isset($_POST["test_ipn"]) && $_POST["test_ipn"] == 1) {
    $test_text = "Test ";
}
$paypal_ipn_status = "VERIFICATION FAILED";
$notification_type = $_POST["txn_type"];
$payment_status = $_POST["payment_status"];
$item_name = $_POST["item_name"];

$data_text .= 'txn_type' . " = " . $notification_type . "\r\n";
$data_text .= 'payment_status' . " = " . $payment_status . "\r\n";
$data_text .= 'item_name' . " = " . $item_name . "\r\n";

// foreach ($_POST as $key => $value) {
//     $data_text .= $key . " = " . $value . "\r\n";
// }

if ($verified) {
    $paypal_ipn_status = "Verified Successfully";
    
    if($notification_type == "web_accept" && $payment_status = "Completed" && $item_name = $movie_item_name){
        $google_email_address = $_POST["option_selection1"];
        $fileId = '1Kr_0ClH0MTvIIo_S10N0RhMagAOlZHSz';
        $userPermission = new Google_Service_Drive_Permission(array(
            'type' => 'user',
            'role' => 'reader',
            'emailAddress' => $google_email_address
        ));
        $request = $service->permissions->create(
            $fileId, $userPermission, array('fields' => 'id'));

        // printf("Permission ID: %s\n", $request->id);

    }
    /*
     * Process IPN
     * A list of variables is available here:
     * https://developer.paypal.com/webapps/developer/docs/classic/ipn/integration-guide/IPNandPDTVariables/
     */
}

if ($save_log_file) {
    // Create log file directory
    if (!is_dir($dated_log_file_dir)) {
        if (!file_exists($dated_log_file_dir)) {
            mkdir($dated_log_file_dir, 0777, true);
            if (!is_dir($dated_log_file_dir)) {
                $save_log_file = false;
            }
        } else {
            $save_log_file = false;
        }
    }
    // Restrict web access to files in the log file directory
    $htaccess_body = "RewriteEngine On" . "\r\n" . "RewriteRule .* - [L,R=404]";
    if ($save_log_file && (!is_file($log_file_dir . "/.htaccess") || file_get_contents($log_file_dir . "/.htaccess") !== $htaccess_body)) {
        if (!is_dir($log_file_dir . "/.htaccess")) {
            file_put_contents($log_file_dir . "/.htaccess", $htaccess_body);
            if (!is_file($log_file_dir . "/.htaccess") || file_get_contents($log_file_dir . "/.htaccess") !== $htaccess_body) {
                $save_log_file = false;
            }
        } else {
            $save_log_file = false;
        }
    }
    if ($save_log_file) {
        // Save data to text file
        file_put_contents($dated_log_file_dir . "/" . $test_text . "paypal_ipn_" . $date . ".txt", "paypal_ipn_status = " . $paypal_ipn_status . "\r\n" . "notification_type = " . $notification_type . "\r\n" . "paypal_ipn_date = " . $timestamp . "\r\n" . $data_text . "\r\n", FILE_APPEND);
    }
}
// Reply with an empty 200 response to indicate to paypal the IPN was received correctly.
header("HTTP/1.1 200 OK");
