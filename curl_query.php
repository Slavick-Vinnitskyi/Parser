<?php

function get_curl($url, $referer = 'http://www.google.com') {
   $ch = curl_init();//возвращает обьект где хранятся все настройки
   //опции
   curl_setopt($ch, CURLOPT_URL, $url);//отукда пойдет обращение
   curl_setopt($ch, CURLOPT_HEADER, 0);// не интересуют заголовки
   curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13");//притворяемся Мозиллой)) 
   curl_setopt($ch, CURLOPT_REFERER, $referer);//
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   $data = curl_exec($ch);//
   curl_close($ch);//закрыть соединение
   return $data;
   
}
