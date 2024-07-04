$action = explode('/', $_SERVER['REQUEST_URI']);
if(!isset($action[1]))
    $page = NULL;
else
    $page = $action[1];

if($page == 'api') {
    include_once 'api/main/api.class.php';
    new api;
} else {

   //тут можете подгрузить свой клиентский код заинклюдив, например, index.html

}
