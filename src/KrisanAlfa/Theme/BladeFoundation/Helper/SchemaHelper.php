<?php namespace KrisanAlfa\Theme\BladeFoundation\Helper;

use Norm\Cursor;

class SchemaHelper
{
    public static function getReferenceValue($entry, $schema)
    {
        if ($entry instanceof Cursor) {
            $entry = $entry->toArray();
        }

        return ($entry[$self->get('foreignKey')]) ?: $entry['$id'];
    }
}
