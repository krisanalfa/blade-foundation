<?php namespace KrisanAlfa\Theme\BladeFoundation\Schema;

use Bono\App;
use Norm\Schema\Password as NormPassword;

class Password extends NormPassword
{
    public function formatInput($value, $entry = null)
    {
        return App::getInstance()->theme->partial('_schema/password', array(
            'self' => $this
        ));
    }
}
