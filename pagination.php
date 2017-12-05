<?php

require_once('connectvars.php');//Подключение переменных
//Подключение к базе данных--------->
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)//------>Переменая $dbc ссылка на соединение с базой данных
or die ('Ошибка соединения с MySQL-сервером');////Проверка подключился ли  к базе данных, и если нет, вывод ошибки--------->

//Создание запроса к БД-------------->
$sql = "SELECT id, head, price,screenshot,href  FROM gallery1 ORDER BY id ASC";//Несмотря на то, что по умолчанию оператор ORDER BY сортирует по возрастанию,

$result = mysqli_query($dbc, $sql)
or die ('Ошибка при выполнении запроса к базе данных. ');
//-------------->Pagination Logic 
$nr = mysqli_num_rows($result);

if (isset($_GET['page'])) { // Получить страницу из URL-адресов, если она присутствует
    $page = preg_replace('#[^0-9]#i', '', $_GET['page']); 
   
} else { 
    $page = 1;
}
$itemsPerPage = 12;
$lastPage = ceil($nr / $itemsPerPage);//$nr=12 делим на $itemsPerPage=4 результат = 3

$centerPages = "";
$sub1 = $page - 1;
$sub2 = $page - 2;
$sub3 = $page - 3;
$add1 = $page + 1;//$add1 = 2
$add2 = $page + 2;//$add2 = 3
$add3 = $page + 3;

if ($page == 1) { //если $page равна 1 то пункты меню три штуки первое 1 не активна
    $centerPages .= '&nbsp; <span style="background-color: #49fc14;"> '. $page .'</span>&nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?page=' . $add1 . '">' . $add1 . '</a>&nbsp;';
	$centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?page=' . $add2 . '">' . $add2 . '</a>&nbsp;';
	$centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?page=' . $add3 . '">' . $add3 . '</a>&nbsp;';

}

else if ( $page == 2 ) { 
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?page=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <span style="background-color: #49fc14;">' . $page . '</span> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?page=' . $add1 . '">' . $add1 . '</a> &nbsp;';
	$centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?page=' . $add2 . '">' . $add2 . '</a>&nbsp;';	
}

else if ($page > 2 && $page < $lastPage) { 
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?page=' . $sub2 . '">' . $sub2 . '</a> &nbsp;';  	
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?page=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
	$centerPages .= '&nbsp; <span style="background-color: #49fc14;">' . $page . '</span> &nbsp;';	
	$centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?page=' . $add1 . '">' . $add1 . '</a>&nbsp;';	
}

 else if ($page == $lastPage) { //если page равен последней странице то 3 пункт  не активен
	$centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?page=' . $sub1 . '">' . $sub3 . '</a> &nbsp;';//1
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?page=' . $sub2 . '">' . $sub2 . '</a> &nbsp;';//2
	$centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?page=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <span style="background-color: #49fc14;"> '. $page .'</span> &nbsp;';//3	
}   


$limit = 'LIMIT ' .($page - 1) * $itemsPerPage .',' .$itemsPerPage;


$query = "SELECT * FROM gallery1 ORDER BY id ASC $limit";
$sql2 = mysqli_query($dbc, $query) or die ('Ошибка при выполнении запроса к базе данных');
    
    if ($page != 1) {
        $previous = $page - 1;
        $prev = '&nbsp;  <a href="' . $_SERVER['PHP_SELF'] . '?page=' . $previous . '">Назад</a> ';
    }   

    if ($page != $lastPage) {
        $nextPage = $page + 1;
        $next = '&nbsp;  <a  href="' . $_SERVER['PHP_SELF'] . '?page=' . $nextPage . '">Далее</a> ';
    }
mysqli_close($dbc);
   		
 	












