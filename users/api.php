<?php
include_once "../Conect.php";
$Conect = new Conect();

$requst= $_SERVER['REQUEST_METHOD'];


if($requst=="GET") // بيعرض بيانات
{
    $users = $Conect->select('users');   
    
    if(count($users)>0){
        print json_encode($users);
    }else{
        print json_encode(['message'=>"error"]);
    }
}
if($requst == "POST") // بيستقبل بيانات
    {
        if($Conect->insert($_POST,'users'))
            {
                print json_encode(['message'=>"user add success"]);
        }else{
                print json_encode(['message'=>"error"]);

        }
    }

    if($requst == "DELETE") // ده بتاكد من الحذف من الداتا بيز
        {
            $data= json_decode(file_get_contents("php://input"),true);
            $id = $data['id'] ?? ($_GET['id'] ?? null);

            
            if($Conect->delete('users',$id))
                {
                    print json_encode(['message'=> "user delete"]);
            }else{
                    print json_encode(['message'=> "error"]);

            }
    }