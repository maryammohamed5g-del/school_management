<?php
include_once "../Conect.php";
$Conect = new Conect();

$requst= $_SERVER['REQUEST_METHOD'];


if($requst=="GET") // بيعرض بيانات
{
    $teachers = $Conect->select('teachers');   
    
    if(count($teachers)>0){
        print json_encode($teachers);
    }else{
        print json_encode(['message'=>"error"]);
    }
}
if($requst == "POST") // بيستقبل بيانات
    {
        if($Conect->insert($_POST,'teachers'))
            {
                print json_encode(['message'=>"teacher add success"]);
        }else{
                print json_encode(['message'=>"error"]);

        }
    }

    if($requst == "DELETE") // ده بتاكد من الحذف من الداتا بيز
        {
            $data= json_decode(file_get_contents("php://input"),true);
            $id = $data['id'] ?? ($_GET['id'] ?? null);

            
            if($Conect->delete('teachers',$id))
                {
                    print json_encode(['message'=> "teacher delete"]);
            }else{
                    print json_encode(['message'=> "error"]);

            }
    }