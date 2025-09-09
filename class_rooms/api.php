<?php
include_once "../Conect.php";
$Conect = new Conect();

$requst= $_SERVER['REQUEST_METHOD'];


if($requst=="GET") // بيعرض بيانات
{
    $classRoom = $Conect->select('class_rooms');   
    
    if(count($classRoom)>0){
        print json_encode($classRoom);
    }else{
        print json_encode(['message'=>"error"]);
    }
}
if($requst == "POST") // بيستقبل بيانات
    {
        if($Conect->insert($_POST,'class_rooms'))
            {
                print json_encode(['message'=>"class add success"]);
        }else{
                print json_encode(['message'=>"error"]);

        }
    }

    if($requst == "DELETE") // ده بتاكد من الحذف من الداتا بيز
        {
            $data= json_decode(file_get_contents("php://input"),true);
            $id = $data['id'] ?? ($_GET['id'] ?? null);

            
            if($Conect->delete('class_rooms',$id))
                {
                    print json_encode(['message'=> "class delete"]);
            }else{
                    print json_encode(['message'=> "error"]);

            }
    }