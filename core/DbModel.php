<?php 

namespace App\core;

abstract class DbModel extends Model
{

    abstract public function tableName() : string;

    abstract public function attributes() : array;

    public function save(){
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn($attr)=>":$attr",$attributes);
        
        $sql = self::prepare("INSERT INTO $tableName (".implode(',',$attributes).") values (".implode(',',$params).")");
        foreach($attributes as $attribute){
            $sql->bindValue(":$attribute",$this->{$attribute});
        }
        $sql->execute();
        return true;
        
    }

    public static function prepare($sql)
    {
        return Application::$app->db->pdo->prepare($sql); 
    }
}