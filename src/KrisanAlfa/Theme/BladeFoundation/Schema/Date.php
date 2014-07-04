<?php namespace KrisanAlfa\Theme\BladeFoundation\Schema;

use Bono\App;
use Norm\Schema\DateTime;
use Norm\Type\DateTime as TypeDateTime;

class Date extends DateTime
{
    public function label($plain = false)
    {
        return ($plain) ? $this['label'] : '<label>'.
            $this['label'] . (($this['filter-required']) ? ' <span class="mandatory-marker">*<span> ' : '').
        '</label>';
    }

    public function formatPlain($value, $entry = null)
    {
        return $value->format('d-M-Y');
    }

    public function formatReadonly($value, $entry = null)
    {
        return App::getInstance()->theme->partial('_schema.string', array(
            'label'    => $this['label'],
            'name'     => $this['name'],
            'value'    => $this->formatPlain($value),
            'readonly' => true,
            'entry'    => $entry,
        ));
    }

    public function formatInput($value, $entry = null)
    {
        $app = App::getInstance();

        if ($value instanceof TypeDateTime) {
            $value = date("d-m-Y", strtotime($value->__toString()));
        }

        if ($this['readonly']) {
            return '<span class="field">'.$value.'</span>';
        }

        return $app->theme->partial('_schema.date', array(
            'id' => uniqid('date_'),
            'value' => $value,
            'entry' => $entry,
            'self' => $this
        ));
    }
}
