<select name="{{ lcfirst($self['name']) }}">
    <option>&mdash;</option>
    @foreach ($entries as $entry)
        <option value="{{ $entry['key'] }}" {{ ($entry['key'] == $value) ? 'selected' : '' }}>
            {{ $entry[$self->get('foreignLabel')] }}
        </option>
    @endforeach
</select>
