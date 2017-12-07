<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Room Field -->
<div class="form-group">
    {!! Form::label('room', 'Room:') !!}
    {!! Form::number('room', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Number Field -->
<div class="form-group">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Nights Field -->
<div class="form-group">
    {!! Form::label('nights', 'Nights:') !!}
    {!! Form::number('nights', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}

    <select id="status" name="status" class="form-control" style="width: 100%">
        <option value="1">Occupied</option>
        <option value="0">Vacated</option>
    </select>
</div>

