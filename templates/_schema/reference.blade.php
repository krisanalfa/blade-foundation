<select name="{{ $self['name'] }}" data-value="{{ @$value }}">
    <option value="">&mdash; Select {{ $self['name'] }} &mdash;</option>
    @foreach ($self->findOptions() as $key => $entry)
        <?php

        if (is_string($entry)):
            $label = $entry;
        elseif (is_callable($self['foreignLabel'])):
            $getLabel = $self['foreignLabel'];
            $label = $getLabel($entry);
        else:
            $label = $entry[$self['foreignLabel']];
        endif;

        if (is_string($entry)):
            $entryValue = $key;
        else:
            $entryValue = $entry[$self['foreignKey']];
        endif;
        ?>
        <option value="{{ $entryValue }}" {{ ($entryValue == $value ? 'selected' : '') }}>
            {{ $label }}
        </option>
    @endforeach
</select>
