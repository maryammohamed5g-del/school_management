<?php
class Conect{
    private const host_name= 'localhost';
     private const user_name = "root";
    private const  password = "";
    private const db ="school_mangment";


    private $conn;

    public function __construct()
    {
        // جملة الاتصال بالداتا بيز
        $this->conn = mysqli_connect(self::host_name, self::user_name,self::password,self::db);
    }
    public function insert(array $post,$tableName):bool 
    {
        $colms= []; 
        $values= []; 
    
         foreach($post as $key=>$value){
     $colms[] = $key;
    $values[] = "'".$value."'"; // جعل القيم داخل علامات تصحيح
         }
    $colmsString= implode(',',$colms);
    $valuesString= implode(',', $values);
    
       if($this->conn->query("insert into $tableName($colmsString) VALUES ($valuesString)")){
        return true;
       }
       return false;
    }
    public function select(string $tableName):array
    {
       // "select * from ";
        $s = "SELECT * FROM $tableName";
         $rows = $this->conn->query($s); // بترجع sql
         
         if($rows->num_rows>0){
            $data= $rows->fetch_all(MYSQLI_ASSOC); // تعمل للجدول كله
        //     print "<pre>";
        //  var_dump($data);
        //  exit;
            return $data;
         }
         return[];
    }
    public function selectOne($tableName,$id):array{
        $s= "select * from $tableName where id=$id limit 1" ;
        $row= $this->conn->query($s);
        if($row->num_rows >0){
            $data= $row->fetch_assoc();
            return $data;
        }
        return [];
    }
    public function update(array $post,string $tableName, $id):bool
    {
        // تعمل تحديث
        $fieldValue= [];
        foreach ($post as $key => $value) {
            $fieldValue[] = "$key='$value'";
        }
       
        $fieldValueString = implode(',',$fieldValue);
        $s= "UPDATE $tableName set $fieldValueString where id = $id ";
        if($this->conn->query($s)){
            return true;
        }
        return false;
    }
    public function login(string $userName,string $password):array
    {
        //هذه الفانكشين تقوم بمراجعة تسجيل الدخول للمستخدم ومطابقة مع الداتا بيز
        $s= "select * from users where user_name= '$userName' and password= '$password' limit 1";
         $row= $this->conn->query($s);
        if($row->num_rows >0){
            $data= $row->fetch_assoc();
            return $data;
        }
        return [];
    }


    public function delete(string $tableName,$id)
    {
        // هذه تقوم بالحذف
        $s= "DELETE FROM $tableName WHERE id=$id"; //query in database
       if( $this->conn->query($s)){
        return true;
       }
       return false;
    }
   
}

?>