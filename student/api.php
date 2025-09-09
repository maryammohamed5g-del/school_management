<?php
include_once "../Conect.php";
$Conect = new Conect();

$requst= $_SERVER['REQUEST_METHOD'];


if($requst=="GET") // بيعرض بيانات
{
    $students = $Conect->select('students_info');   
    
    if(count($students)>0){
        print json_encode($students);
    }else{
        print json_encode(['message'=>"error"]);
    }
}
if($requst == "POST") // بيستقبل بيانات
    {
        if($Conect->insert($_POST,'students_info'))
            {
                print json_encode(['message'=>"student add success"]);
        }else{
                print json_encode(['message'=>"error"]);

        }
    }

    if($requst == "DELETE") // ده بتاكد من الحذف من الداتا بيز
        {
            $data= json_decode(file_get_contents("php://input"),true);
            $id = $data['id'] ?? ($_GET['id'] ?? null);

            
            if($Conect->delete('students_info',$id))
                {
                    print json_encode(['message'=> "student delete"]);
            }else{
                    print json_encode(['message'=> "error"]);

            }
    }