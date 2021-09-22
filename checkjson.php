<?php
    if($_POST['type']==2)
    {
        $username = $_POST['username'];
        $postpassword = $_POST['password'];
        
        $json = file_get_contents('user.json');
        $json_data = json_decode($json,true);

        $key = array_search($username, array_column($json_data['user'], 'username'));
        if($key)
        {
            $username = $json_data['user'][$key]['username'];
            $password = $json_data['user'][$key]['password'];
            
            if($password == $postpassword)
            {
                echo json_encode(array("statusCode"=>"200"));
            }
            else
            {
                echo json_encode(array("statusCode"=>"201"));
            }
        }
        else
        {
            echo json_encode(array("statusCode"=>"201"));
        }
      
    }
?>
