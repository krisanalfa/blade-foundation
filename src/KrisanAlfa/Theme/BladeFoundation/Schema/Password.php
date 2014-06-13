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

    public function formatReadonly($value, $entry = null)
    {
        return App::getInstance()->theme->partial('_schema/string', array(
            'label' => $this['label'],
            'name' => $this['name'],
            'value' => '*hidden*',
            'readonly' => true
        ));
    }

    public function label($plain = false)
    {
        return ($plain) ? $plain : '<label>'.
            $this['label'] . (($this['filter-required']) ? ' <span class="mandatory-marker">*<span> ' : '').
        '</label>';
    }
}
