<?php

namespace App\Models;

use Base\Model\Model;

class BaseModel extends Model
{
    public function lista()
    {
        return $this->all("usuario");
    }
}
