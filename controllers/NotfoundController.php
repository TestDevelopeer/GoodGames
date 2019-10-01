<?php

function indexAction($smarty) {
    
    $smarty->assign('pageTitle', 'Ошибка 404');

    loadTemplate($smarty, 'notfound/notfound');
    
}