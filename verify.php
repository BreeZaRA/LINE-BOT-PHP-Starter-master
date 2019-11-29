<?php 
  $access_token = 'C+8IIYep0Mtvq7TE7Ubo3aR6A3hZsXXnY9GDH37347aFaLRIjplTAvzpp32QK+mT56zbBhpkxT2nngdmAvUcPhYhF7Unve25RRohyRjyTBS1dbOqY87c6TcPRGW/2Z91hjFY/mm+FCB01Ykh10atewdB04t89/1O/w1cDnyilFU=';
  $url = 'https://api.line.me/v1/oauth/verify';
  $headers = array('Authorization: Bearer ' . $access_token);
  $ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $result = curl_exec($ch);curl_close($ch);
  echo $result;
