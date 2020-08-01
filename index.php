<?php

require_once './env.php';


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $base_url."?rest_route=%2Fwp%2Fv2%2Fposts",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_COOKIE => "wordpress_test_cookie=WP%2BCookie%2Bcheck",
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {



$page_content = file_get_contents(json_decode($response)[0]->link);

$dom_obj = new DOMDocument();
$dom_obj->loadHTML($page_content);
$meta_val = null;

foreach($dom_obj->getElementsByTagName('meta') as $meta) {

if($meta->getAttribute('property')=='og:image'){ 

    $meta_image = $meta->getAttribute('content');
}
if($meta->getAttribute('property')=='og:description'){ 

    $meta_description = $meta->getAttribute('content');
}
}


}
$message = "*".json_decode($response)[0]->title->rendered."*\n\n".
           "_".htmlspecialchars_decode($meta_description)."_\n\n".
           "📝[Saiba mais](".json_decode($response)[0]->link.")📝";
$tmessage = json_decode($response)[0]->title->rendered."\n\n".
           "Saiba mais: ".json_decode($response)[0]->link;

           echo $message;

           $curl = curl_init();

           $curl = curl_init();

           curl_setopt_array($curl, array(
             CURLOPT_URL => "https://api.telegram.org/bot".$telegram_token."/sendPhoto",
             CURLOPT_RETURNTRANSFER => true,
             CURLOPT_ENCODING => "",
             CURLOPT_MAXREDIRS => 10,
             CURLOPT_TIMEOUT => 30,
             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
             CURLOPT_CUSTOMREQUEST => "GET",
             CURLOPT_POSTFIELDS => "{\n\t\"chat_id\":\"-1001168464133\",\n\"photo\":\"".$meta_image."\",\n\t\"parse_mode\":\"Markdown\",\n\t\"caption\":\"".$message."\"\n}",
             CURLOPT_HTTPHEADER => array(
               "content-type: application/json"
             ),
           ));
           
           $response = curl_exec($curl);
           $err = curl_error($curl);
           
           curl_close($curl);
           
           if ($err) {
             echo "cURL Error #:" . $err;
           } else {
             echo $response;
           }
                    
          use DG\Twitter\Twitter;

          require_once './src/twitter.class.php';

          // ENTER HERE YOUR CREDENTIALS (see readme.txt)
          $twitter = new Twitter($twitter_token1, $twitter_token2, $twitter_token3, $twitter_token4);

          try {
            $tweet = $twitter->send($tmessage); // you can add $imagePath or array of image paths as second argument

          } catch (DG\Twitter\TwitterException $e) {
            echo 'Error: ' . $e->getMessage();
          }

?>