<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $booking->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $booking->name !!}</p>
</div>

<!-- Room Field -->
<div class="form-group">
    {!! Form::label('room', 'Room:') !!}
    <p>{!! $booking->room !!}</p>
</div>

<!-- Phone Number Field -->
<div class="form-group">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    <p>{!! $booking->phone_number !!}</p>
</div>

<!-- Nights Field -->
<div class="form-group">
    {!! Form::label('nights', 'Nights:') !!}
    <p>{!! $booking->nights !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $booking->status !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $booking->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $booking->updated_at !!}</p>
</div>

