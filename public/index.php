<?php
// Инициализируем наше приложение
require __DIR__ . '/../bootstrap.php';

require __DIR__ . '/../routes/routes.php';

$Routes = new Routes;

$arrayRoutes = $Routes->getAllRoutes();


if (isset($_REQUEST['page']) && is_numeric($_REQUEST['page'])) {
    $state = null;
    foreach ($Routes->getAllRoutes() as $item) {
        if($_REQUEST['page'] == $item->adress){
            $state = $item;
            break;
        }
    }
    if ($state == null){
        require __DIR__ .'/404.php';
    } else {
        require __DIR__ . '/../controllers/'.$state->views;
    }
} else {
    require __DIR__ .'/../controllers/main.php';
}

