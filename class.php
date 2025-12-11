<?php
 class Room{

 public $id;
 public $floor;
 public $type;
 public $pricepd;

public function __construct($id,$floor,$type,$pricepd)
{
    $this->id=$id;
    $this->floor=$floor;
    $this->type=$type;
    $this->pricepd=$pricepd;
}

 }

 class Client{
    
    public $name;
    public $email; 


    public function __construct($name,$email)
    {
        $this->name=$name;
        $this->email=$email;
    
    }
}


class RoomList{
    public $listroom;
    public $listclient;
    public $listres;

}



?>