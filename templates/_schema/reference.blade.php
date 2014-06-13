<?php  use KrisanAlfa\Theme\BladeFoundation\Helper\SchemaHelper; ?>
<select name="{{ lcfirst($self->get('foreign')) }}">
    <option>&mdash; Select {{ ucfirst($self->get('foreign')) }} &mdash;</option>
    @foreach ($entries as $entry)
        <option value="{{ $v }}" {{ (SchemaHelper::getReferenceValue($entry, $self) == $value) ? 'selected' : '' }} >
            {{ $entry[$self->get('foreignLabel')] }}
        </option>
    @endforeach
</select>
