<?php namespace KrisanAlfa\Theme\BladeFoundation\Helper;

class SchemaHelper
{
    public static function getReferenceValue($entry, $self)
    {
        if (is_string($entry)) {
            $entryValue = $key;
        } else {
            $entryValue = $entry[$self['foreignKey']];
        }

        return $entryValue;
    }

    public static function getLabel($entry, $self)
    {
        if (is_string($entry)) {
            $label = $entry;
        } elseif (is_callable($self['foreignLabel'])) {
            $getLabel = $self['foreignLabel'];
            $label = $getLabel($entry);
        } else {
            $label = $entry[$self['foreignLabel']];
        }

        return $label;
    }
}
