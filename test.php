<!--<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        //<?php
//        include_once 'lib/simple_html_dom.php'; // библиотека для более удобного парсинга 1  
//        include 'curl_query.php'; 
//        $html = get_curl("https://habrahabr.ru/hub/infosecurity/");
//        $dom = str_get_html($html);
//        $cour = $dom->find(".post__title_link");//ссылка на статью
//        echo $cour[0]->href.'<br>';
//       
//        $link = $cour[0]->href;
//        echo $link;
//        $html1 = get_curl("https://habrahabr.ru/post/348348/");
//        $dom1 = str_get_html($html);
//        $cour1 = $dom1->find('.post__text');//ссылка на статью
//        echo $cour1[0]->plaintext.'<br>';
       /*
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once 'lib/simple_html_dom.php'; // библиотека для более удобного парсинга 1  
        include 'curl_query.php'; 
      class Parser {
        public $name_hub;
        
        public $pages = array(
            'infosecurity' => '',
            'programming' => '',
            'webdev' => '',
            'linux' => '',
            'algorithms' =>'');
        //функция принимает аргумент страницу и тэг(класс), возвращает содержимое тэга
        public function get_element($hub_link,$tag, $type){
        $html = get_curl($hub_link);//получаем html 
        $dom = str_get_html($html);// создает для каждого тэга свой обьект
        $cour = $dom->find($tag);//ссылка на статью
        return $cour[0]->$type.'<br>';            
        }
        public function get1_element($page_link,$tag,$type){

        $html = get_curl($page_link);//получаем html 
        $dom = str_get_html($html);// создает для каждого тэга свой обьект
        $article = $dom->find($tag);//ссылка на статью
        return  $article[0]->$type.'<br>';              
        }
    }
        $hubs = array(
            'infosecurity'=>"https://habrahabr.ru/hub/infosecurity/",
            'programming' =>"https://habrahabr.ru/hub/programming/",
            'webdev'=>"https://habrahabr.ru/hub/webdev/",
            'linux'=>"https://habrahabr.ru/hub/linux/",
            'algorithms'=>"https://habrahabr.ru/hub/algorithms/"
            ); 
        $script = new Parser();
        
        
        //ссылки

        foreach ($hubs as $key =>$value) { 
                //$script->name = $key;         
                $link = $script->get_element($value, ".post__title_link",'href');
                echo "$key : $link <br>";
                switch ($key) {
                case 'infosecurity': $script->pages['infosecurity'] = $link; 
                   break;
                case 'programming': $script->pages['programming'] = $link;  break;
                case 'webdev': $script->pages['webdev'] = $link;  break;
                case 'linux': $script->pages['linux'] = $link;  break;
                case 'algorithms': $script->pages['algorithms'] = $link;  break;
                default : break;
                }
            }
        
//        //заголовок
//        
//        $title =  $script -> get1_element($script->pages['infosecurity'], 'title','plaintext');    
//        $str = strpos($title, "/");
//        $title = substr($title, 0, $str);
//        echo "<br><b>TITLE : </b><br>".$title;
//        
//        //выводим текст статьи 
//        
//        $text = $script ->get1_element("https://habrahabr.ru/post/348348/", '.post__text','plaintext');
//        echo "<br> <b>TEXT OF PAGE:<br></b>".$text;
//        echo '<br>';

        $article2 = new Parser();
          foreach ($hubs as $key =>$value) { 
                //$script->name = $key;         
                $link = $article2->get_element($value, ".post__title_link",'href');
                echo "$key : $link <br>";
                switch ($key) {
                case 'infosecurity':  
                   break;
                case 'programming': $article2->pages['programming'] = $link;  break;
                case 'webdev': $article2->pages['webdev'] = $link;  break;
                case 'linux': $article2->pages['linux'] = $link;  break;
                case 'algorithms': $article2->pages['algorithms'] = $link;  break;
                default : break;
                }
          }
           var_dump($article2->pages);
          foreach ($article2->pages as $value) {
        //заголовок
        $str =$value;
        $title =  $article2 -> get1_element($str, 'title','plaintext');    
        $str = strpos($title, "/");
        $title = substr($title, 0, $str);
        echo "<br><b>TITLE : </b><br>".$title;
        
        //выводим текст статьи 
        
        $text = $article2 ->get1_element("https://habrahabr.ru/company/dbtc/blog/347998/", '.post__text','plaintext');
        echo "<br> <b>TEXT OF PAGE:<br></b>".$text;
        echo '<br>';

          }
       
        ?>
    </body>
</html>
        */
        ?>
    </body>
</html>-->