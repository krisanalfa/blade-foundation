<?php use KrisanAlfa\Theme\BladeFoundation\Helper\SchemaHelper; ?>
<select name="{{ $self['name'] }}" data-value="{{ @$value }}">
    <option value="">&mdash; Select {{ $self['name'] }} &mdash;</option>
    @foreach ($self->findOptions() as $key => $entry)
        <?php $entryValue = ShemaHelper::getReferenceValue($entry, $self); ?>
        <option value="{{ $entryValue }}" {{ ($entryValue == $value ? 'selected' : '') }}>
            {{ SchemaHelper::getLabel($entry, $self) }}
        </option>
    @endforeach
</select>
