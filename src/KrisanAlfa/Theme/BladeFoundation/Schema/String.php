<?php namespace KrisanAlfa\Theme\BladeFoundation\Schema;

use Bono\App;
use Norm\Schema\String as NormString;

class String extends NormString
{
    public function formatInput($value, $entry = null)
    {
        return App::getInstance()->theme->partial((is_null($this->get('partial'))) ? '_schema/string' : $this->get('partial'), array(
            'label'    => $this['label'],
            'name'     => $this['name'],
            'value'    => htmlentities($value),
            'readonly' => false,
            'entry'    => $entry,
        ));
    }

    public function formatReadonly($value, $entry = null)
    {
        return App::getInstance()->theme->partial((is_null($this->get('partial'))) ? '_schema/string' : $this->get('partial'), array(
            'label'    => $this['label'],
            'name'     => $this['name'],
            'value'    => htmlentities($value),
            'readonly' => true,
            'entry'    => $entry,
        ));
    }

    public function label($plain = false)
    {
        return ($plain) ? $plain : '<label>'.
            $this['label'] . (($this['filter-required']) ? ' <span class="mandatory-marker">*<span> ' : '').
        '</label>';
    }
}
