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

define("FILE_QUESTION", "question.json");
define("FILE_ANSWER", "answer.json");

require_once 'lib\FormProcessing.class.php';
require_once 'lib\ChangeFile.php';
require_once 'lib\Question.php';
require_once 'lib\Answer.php';


// require_once 'lib\WriteToFile.class.php';

// $vendorDir = dirname(dirname(__FILE__));
// $baseDir = dirname($vendorDir);
// return array(
//     'lib\FormProcessing.class.php' => array($baseDir . '/includes'),
//     'lib\ReadFile.class.php' => array($baseDir . '/includes'),
//     'lib\CurrencyConverter.class.php' => array($baseDir . '/includes'),
// );

 use lib\FormProcessing\FormProcessing;
 use lib\ChangeFile\ChangeFile;
 use lib\Question\Question;

 // use lib\Question\Answer;
 session_start();
$fileQuestion = new ChangeFile(FILE_QUESTION);
$_SESSION['question'] = $fileQuestion->readFileJson();

$fileAnswer = new ChangeFile(FILE_ANSWER);
$array2 = $fileAnswer->readFileJson();
var_dump($_SESSION['question']);

$question = new Question($_SESSION['question']);
$a = $question->getQuestion();
$idQuestion = $question->getIdQuestion();
// unset($_SESSION['question']);
echo "<br>";
echo "<br>";

$_SESSION['question'] = $question->deleteQuestion();

// if (!isset($_SESSION['count'])) {
//     $_SESSION['count'] = 0;
// } else {
//     $_SESSION['count']++;
// }
var_dump($_SESSION['question']);


// echo $a;
// $array = $question->deleteQuestion();
// $fileQuestion->writeFilePhpToJson($array);



// var_dump($file);
// $random = random_int(0, 10);
// $a = $arr[$random];

// file_put_contents("1.txt", $a.",", FILE_APPEND);
// $arr1 = file_get_contents("1.txt");
// $arr2 = explode(",", $arr1);
//  var_dump($arr2);



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
