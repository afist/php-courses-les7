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

require_once 'lib\ChangeFile.php';
require_once 'lib\Question.php';

 use lib\ChangeFile\ChangeFile;
 use lib\Question\Question;

session_start();
if (!empty($_POST['start'])) {
    $_SESSION['start'] = microtime(true);
    $fileQuestion = new ChangeFile(FILE_QUESTION);
    $_SESSION['question'] = $fileQuestion->readFileJson();

    unset($_SESSION['answerId']);
    $_SESSION['count'] = 0;
}

$fileAnswer = new ChangeFile(FILE_ANSWER);
$array = $fileAnswer->readFileJson();

if (!empty($_POST['answer'])) {
    foreach ($array as $value) {
        foreach ($value as $k => $v) {
            if ($v == $_SESSION['answerId']) {
                if ($_POST['answer']== $value['answer']) {
                    $_SESSION['count']++;
                }
            }
        }
    }
}

if (empty($_SESSION['question'])) {
    $timeEnd = number_format(microtime(true) - $_SESSION['start']);
    echo "Pravilnux otvetov : ".$_SESSION['count']."; Vrema testa: ".$timeEnd." s";
    unset($_SESSION['answerId']);
    exit();
}

$question = new Question($_SESSION['question']);
$questionWrite = $question->getQuestion();
echo $questionWrite;
$_SESSION['question'] = $question->deleteQuestion();
$_SESSION['answerId'] = $question->getIdQuestion();
