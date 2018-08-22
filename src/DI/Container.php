<?php

namespace Base\DI;

use Base\Database\Database;

class Container
{

	// função estática por carregar a Model na Controller.
    public static function getModel($model)
    {
        $class = "\\App\\Models\\".ucfirst($model);
        return new $class(Database::getDb());
    }

}
