<?php

include('session.php');

if (isset($_POST['ok'])) {
    if (!empty($_POST['id'])&&!empty($_POST['floor'])&&!empty($_POST['type'])&&!empty($_POST['pricepd'])) {

        $room=new Room($_POST['id'],$_POST['floor'],$_POST['type'],$_POST['pricepd']);
        $box->listroom[]=$room;
        
    }
}

if (isset($_POST['addclient'])) {

$_SESSION['names']=$_POST['name'];

        if (!empty($_POST['name'])&&!empty($_POST['email'])) {
            
        $client= new Client($_POST['name'],$_POST['email']);

        $box->listclient[]=$client;

        
    }
    
}

   
    if (isset($_POST['viewres'])){
        if(!empty($_POST['nbdays']) && !empty($_POST['date'])){
       
            $box->listres[$_SESSION['names']][]=array('roomId'=>$_POST['ido'],'nbOfDays'=>$_POST['nbdays'],'date'=>$_POST['date']);
               
    }
}




#print_r($box);

?>