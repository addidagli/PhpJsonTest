<?php 
        echo "addiiiiiiiiiiii";
if($_POST['type']==1){
    $username = $_POST['username'];
    $password = $_POST['password'];

    

    $data = array();
    $user = array();
    $arr = array();
    
    $arr["username"] = $username;
    $arr["password"] = $password ;

    $json = file_get_contents('user.json');
    $json_data = json_decode($json,true);
    if(!empty($json_data))
    {
        $user = $json_data['user'];
    }
    else
    {
        $user = array();
    }
            
    array_push($user, $arr);

    $data["user"] = $user;
    $json = json_encode($data);

    file_put_contents('user.json', $json);
}

?>