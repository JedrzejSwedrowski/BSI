<?php
 
    define('GOOGLE_ID','455560549832-bid5188l5uni5noi03msldi21o7e60r4.apps.googleusercontent.com');
    define('GOOGLE_SECRET','68eyWS5Ur9z51hOsXr6OOlWQ');
    define('GOOGLE_REDIRECT_URL','http://localhost/project/index.php');

    if(!empty($_REQUEST['code'])){
        $url = 'https://accounts.google.com/o/oauth2/token';			
        $curlPost = 'client_id='.GOOGLE_ID.'&redirect_uri='.urlencode(GOOGLE_REDIRECT_URL).'&client_secret='.GOOGLE_SECRET.'&code='.$_REQUEST['code'].'&grant_type=authorization_code';
        $ch = curl_init();		
        curl_setopt($ch, CURLOPT_URL, $url);		
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);		
        curl_setopt($ch, CURLOPT_POST, 1);		
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);	
        $data = json_decode(curl_exec($ch), true);
        if(!empty($data['access_token'])){
          $url = 'https://www.googleapis.com/oauth2/v2/userinfo?fields=email,verified_email,given_name';	
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
          curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer '.$data['access_token']]);
          $data2 = json_decode(curl_exec($ch), true);
          if(!empty($data2['email']) and !empty($data2['verified_email']) and !empty($data2['given_name'])){
            $_SESSION['logged_in'] = true;
            $_SESSION['email'] = $data2['email'];
            $_SESSION['given_name'] = $data2['given_name'];
          }
        }
      }
      
      if(empty($_SESSION['logged_in'])){
        $google_login_url = 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/plus.me') . '&redirect_uri=' . urlencode(GOOGLE_REDIRECT_URL) . '&response_type=code&client_id=' . GOOGLE_ID . '&access_type=online';
      }
 
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_base = 'appbase';
    
    $con = mysqli_connect($db_host, $db_user, $db_pass);
    mysqli_select_db($con, $db_base);
    
    if (isset($_SESSION['user_id'])) {
        $user_id     = $_SESSION['user_id'];
        $user_name   = $_SESSION['user_name'];
        $user_email  = $_SESSION['user_email'];
        $user_rights = $_SESSION['user_rights'];
        $user_date   = $_SESSION['user_date'];
    }
 
?>