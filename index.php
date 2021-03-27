<?php

declare(strict_types=1);
namespace App;
const DEFAULT_ACTION = 'list';
$action = null;
require_once('src/Utils/debug.php');
require_once('src/View.php');
$action = $_GET['action'] ?? DEFAULT_ACTION;
$view = new View();

$viewParams =[];
if($action === 'create')
{
    $viewParams['resultCreate'] = 'Udało się';
}
else {
    $viewParams['resultList'] =  'Wyświetlamy notatki';
}

$view->render($action, $viewParams);
