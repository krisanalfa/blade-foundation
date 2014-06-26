<?php namespace KrisanAlfa\Theme\BladeFoundation\Schema;

use Norm\Schema\Reference;
use Norm\Norm;
use Bono\App;

class SysParamReference extends Reference
{
    public function by($group, $sysParamSchemaName = 'Sysparam', $keyWord = 'key', $value = 'value')
    {
        $this->set('foreignGroup', $group);
        $this->set('foreign', $sysParamSchemaName);
        $this->set('foreignKey', $keyWord);
        $this->set('foreignLabel', $value);

        return $this;
    }

    public function toJSON($value)
    {
        $foreign  = Norm::factory($this->get('foreign'));
        $criteria = array('groups' => $this->get('foreignGroup'), $this->get('foreignKey') => $value);
        $entry    = $foreign->findOne($criteria);

        return (is_null($entry)) ? null : $entry->get($this->get('foreignLabel'));
    }

    public function formatInput($value, $entry = null)
    {
        if ($format = $this['inputFormat'] and is_callable($format)) {
            return $format($value, $entry, $this);
        }

        $foreign = Norm::factory($this['foreign']);

        if ($this['readonly']) {
            $criteria = array('groups' => $this->get('foreignGroup'), $this->get('foreignKey') => $value);
            $entry    = $foreign->findOne($criteria);
            $label    = (is_null($entry)) ? null : $entry->get($this->get('foreignLabel'));

            return '<span class="field">'.$label.'</span>';
        }

        $entries = $foreign->find(array('groups' => $this->get('foreignGroup')));

        return App::getInstance()->theme->partial('_schema.sysparam', array(
            'self'    => $this,
            'value'   => $value,
            'entries' => $entries,
        ));
    }

    public function formatPlain($value, $entry = null)
    {
        return $this->toJSON($value);
    }

    public function formatReadonly($value, $entry = null)
    {
        return App::getInstance()->theme->partial('_schema.string', array(
            'label'    => $this['label'],
            'name'     => $this['name'],
            'value'    => $this->toJSON($value),
            'readonly' => true,
            'entry'    => $entry,
        ));
    }

    public function label($plain = false)
    {
        return ($plain) ? $this['label'] : '<label>'.
            $this['label'] . (($this['filter-required']) ? ' <span class="mandatory-marker">*<span> ' : '').
        '</label>';
    }

    public function prepare($value)
    {
        return (int) $value;
    }
}