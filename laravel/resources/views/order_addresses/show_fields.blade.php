<!-- Street Field -->
<div class="form-group">
    {!! Form::label('street', 'Street:') !!}
    <p>{{ $orderAddress->street }}</p>
</div>

<!-- City Field -->
<div class="form-group">
    {!! Form::label('city', 'City:') !!}
    <p>{{ $orderAddress->city }}</p>
</div>

<!-- Postal Code Field -->
<div class="form-group">
    {!! Form::label('postal_code', 'Postal Code:') !!}
    <p>{{ $orderAddress->postal_code }}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $orderAddress->date }}</p>
</div>

<!-- Time Field -->
<div class="form-group">
    {!! Form::label('time', 'Time:') !!}
    <p>{{ $orderAddress->time }}</p>
</div>

<!-- Order Uuid Field -->
<div class="form-group">
    {!! Form::label('order_uuid', 'Order Uuid:') !!}
    <p>{{ $orderAddress->order_uuid }}</p>
</div>

