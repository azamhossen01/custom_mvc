<?php 

namespace App\Models;

use App\core\Model;

class RegisterModel extends Model
{
    public string $first_name="";
    public string $last_name="";
    public string $email="";
    public string $password="";
    public string $password_confirmation="";

    public function register()
    {
        return true;
    }

    public function rules():array
    {
        return [
            'first_name' => [ self::RULE_REQUIRED ],
            'last_name' => [ self::RULE_REQUIRED ],
            'email' => [ self::RULE_REQUIRED, self::RULE_EMAIL ],
            'password' => [ self::RULE_REQUIRED, [ self::RULE_MIN, 'min' => 6 ], [ self::RULE_MAX, 'max' => 24] ],
            'password_confirmation' => [ self::RULE_REQUIRED, [ self::RULE_MATCH, 'match' => 'password' ] ],
        ];
    }
}