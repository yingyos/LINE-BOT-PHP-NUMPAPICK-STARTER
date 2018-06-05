 <?php
  

function send_LINE($msg){
 $access_token = 'JhcXXi7LxCZ0Hvo3TfYGa/qJJ8ZKg7VCnpNwyioIYa8T/OJ6jAb1oi6EMBI9k8alKX2JcuAKzdcP5/M7DuFrk4s6hIadjt3xw49iIBuQg4OftizwaPswK/kdpTJ6iZTuNTH3FJg0duUrIPcR6q9XLgdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

       'to' => 'U355c4f1740a17cfada466441f800c974',
       
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
