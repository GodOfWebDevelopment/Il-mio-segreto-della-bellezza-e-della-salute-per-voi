
        <?php
         $name = stripslashes(htmlspecialchars($_POST['name']));
         $phone = stripslashes(htmlspecialchars($_POST['phone']));
         $token = stripslashes(htmlspecialchars($_POST['token']));
         $subid1 = stripslashes(htmlspecialchars($_POST['subid1']));
         $subid2 = stripslashes(htmlspecialchars($_POST['subid2']));
      
         $post = array(
           'name' => $name,
           'phone' => $phone,
           'token' => $token,
           'aff_sub' => $subid1,
           'aff_sub2' => $subid2
         );
      
      if($curl = curl_init()){
          curl_setopt($curl, CURLOPT_URL, 'https://t.me/God_of_Web_Devolopment');
          curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
          curl_setopt($curl, CURLOPT_POST, true);
          curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
      }
      
      header('Location: success.php');
        ?>