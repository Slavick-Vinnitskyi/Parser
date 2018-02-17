<?php
 include_once 'lib/simple_html_dom.php'; // библиотека для более удобного парсинга
        include_once 'curl_query.php'; 
        include_once 'class.php';
        //екземпляр класса для парсинга Хабра
        $Habr = new Parser();     
       
        //ссылки
        foreach ($Habr->hubs as $key => $value) { 
              //получаем ссылку    
                $link = $Habr->get_article_link($value, ".post__title_link",'href');
                echo "$key : $link <br>";
                switch ($key) {
                case 'infosecurity': $Habr->links['infosecurity'] = $link; 
                    break;
                case 'programming': $Habr->links['programming'] = $link;  
                    break;
                case 'webdev': $Habr->links['webdev'] = $link; 
                    break;
                case 'linux': $Habr->links['linux'] = $link;  
                    break;
                case 'algorithms': $Habr->links['algorithms'] = $link;  
                    break;
                default :
                    break;
                }
            }   
                        
      
        foreach ($Habr->links as $key => $value) {
       //заголовок    
       // Обрезаем содержимое до первого "/" чтобы получить заголовок
        
        $title =  $Habr ->get_content($value, 'title', 'plaintext');    
        $str = strpos($title, "/");
        $title = substr($title, 0, $str);
        $Habr->headers[$key] = $title;
        //Выводим заголовок 
        echo "<br><b>TITLE : </b><br>".$title."<br>";
             
        //выводим текст статьи 
                  
        $text = $Habr ->get_content($value, '.post__text', 'plaintext');
        $Habr->texts[$key] = $text;
        echo "<b>TEXT OF PAGE:<br></b>".$Habr->texts[$key]."<br>";         
        }
       
       