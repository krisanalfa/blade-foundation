<?php namespace KrisanAlfa\Theme\BladeFoundation\Schema;

use Bono\App;
use Norm\Schema\Password as NormPassword;

class Password extends NormPassword
{
    public function formatInput($value, $entry = null)
    {
        return App::getInstance()->theme->partial((is_null($this->get('partial'))) ? '_schema/password' : $this->get('partial'), array(
            'label' => $this['label'],
            'name'  => $this['name'],
            'entry' => $entry,
            'value' => $value,
        ));
    }

    public function formatReadonly($value, $entry = null)
    {
        // Let's use String template to render readonly.
        // RW+ Password template has two columns (the 'password_confirmation' field).
        return App::getInstance()->theme->partial((is_null($this->get('partial'))) ? '_schema/string' : $this->get('partial'), array(
            'label' => $this['label'],
            'name' => $this['name'],
            'value' => '*hidden*',
            'readonly' => true,
        ));
    }

    public function label($plain = false)
    {
        return ($plain) ? $plain : '<label>'.
            $this['label'] . (($this['filter-required']) ? ' <span class="mandatory-marker">*<span> ' : '').
        '</label>';
    }
}
