<?php
class Parser {
        public $hubs = array(
            'infosecurity'=>"https://habrahabr.ru/hub/infosecurity/",
            'programming' =>"https://habrahabr.ru/hub/programming/",
            'webdev'=>"https://habrahabr.ru/hub/webdev/",
            'linux'=>"https://habrahabr.ru/hub/linux/",
            'algorithms'=>"https://habrahabr.ru/hub/algorithms/"
            ); 
        public $links, $headers, $texts  = array(
            'infosecurity' => '',
            'programming' => '',
            'webdev' => '',
            'linux' => '',
            'algorithms' =>'');

        //функции принимают аргументы страницу и тэг(класс), тип возвр значения и возвращает содержимое тэга
        
        public function get_article_link($page_link, $tag, $type) {
        $html = get_curl($page_link);//получаем html         
        $dom = str_get_html($html);// создает для каждого тэга свой обьект
        $article = $dom->find($tag);//ссылка на статью
        
        return $article[0]->$type.'<br>';            
        }
        public function get_content($page_link, $tag, $type) {
         echo    $page_link;
        $html = get_curl($page_link);//получаем html 
        $dom = str_get_html($html);// создает для каждого тэга свой обьект
        $article = $dom->find($tag);//ссылка на статью
       
        return  $article[0]->$type.'<br>';              
        }
    }
