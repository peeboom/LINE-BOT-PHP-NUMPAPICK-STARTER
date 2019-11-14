 <?php
  

function send_LINE($msg){
 $access_token = 'J9t6irRu7QOSX8hXxLnqBQUth9K7KEllTQuhOBfysOpDriMaC6FrgRgyzOPPIc331YtbHjdRIxJAxNSXYJmDSDVfsi4jGFphjMiuvoA1mqu+4522JCsOg6MoGhI8F6LKxQyEcm57OmGMavGbBbo8AwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ufd62ae19f5f79db09f1566d5074c94dd',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
