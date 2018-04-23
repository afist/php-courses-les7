<?php
/**
 * CURRENCY CONVERTER
 * PHP version 7.1
 *
 * @category Check
 * @package  PackageName
 * @author   Sheyko Bogdan <afisttiik@gmail.com>
 * @license  https://mysite.ua PHP License
 * @link     https://mysite.ua
 */

require_once 'lib\FormProcessing.class.php';
require_once 'lib\ReadFile.class.php';
require_once 'lib\CurrencyConverter.class.php';
// require_once 'lib\WriteToFile.class.php';

// $vendorDir = dirname(dirname(__FILE__));
// $baseDir = dirname($vendorDir);
// return array(
//     'lib\FormProcessing.class.php' => array($baseDir . '/includes'),
//     'lib\ReadFile.class.php' => array($baseDir . '/includes'),
//     'lib\CurrencyConverter.class.php' => array($baseDir . '/includes'),
// );

 use lib\FormProcessing\FormProcessing;
 use lib\ReadFile\ReadFile;
 use lib\CurrencyConverter\CurrencyConverter;

 // use lib\WriteToFile as write;
$a = [01=>"tu vasa?", 02=>"a esli naydu?"];
$b = [01=>"da", 02=>"net"];
$arr = [1, 2, 3, 4, 5, 6, 677, 8, 9, 29];

//$start = $_POST[start];
$random = random_int(0,10);
$a = $arr[$random];

file_put_contents ("1.txt",$a.",",FILE_APPEND);
//echo $a;
$arr1 = file_get_contents("1.txt");
$arr2 = explode(",", $arr1);
 var_dump($arr2);



//$form_date = new FormProcessing($_POST);
//$date = $form_date->getData();
//
//$readFileJson = new ReadFile('https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json');
//$readFilePhp = $readFileJson->readFileJson();
//

//$convert = new CurrencyConverter($date, $readFilePhp);
//$test = $convert->getVal();
//echo $test;
//
//

 // $write = new write\WriteToFile();
 // $textToFile = $convert->getCurrencyFromTxt()." в ".$convert->getCurrencyToTxt();
 // $write->writeToFile($textToFile, '1.txt');
