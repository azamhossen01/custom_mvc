<?php 

namespace App\core\form;

use App\core\Model;

class Field 
{
    public const TYPE_TEXT="text";
    public const TYPE_PASSWORD="password";
    public const TYPE_NUMBER="number";
    public const TYPE_EMAIL="email";
    public Model $model;
    public string $attribute;
    public $type;

    public function __construct($model, $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
        $this->type = self::TYPE_TEXT;
    }

    public function __toString()
    {
        return sprintf('
        <div class="form-group py-2">
            <label class="py-1">%s</label>
            <input type="%s" name="%s" value="%s"  class="form-control%s">
            <div class="invalid-feedback">%s</div>
        </div>',
            $this->model->getLabels($this->attribute),
            $this->type,
            $this->attribute,
            $this->model->{$this->attribute},
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->model->getFirstError($this->attribute)
        );
    }

    public function getPassword()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    public function getEmail()
    {
        $this->type = self::TYPE_EMAIL;
        return $this;
    }
}