<!-- Item Description Field -->
<div class="form-group">
    {!! Form::label('item_description', 'Item Description:') !!}
    <p>{{ $orderItem->item_description }}</p>
</div>

<!-- Quantity Field -->
<div class="form-group">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $orderItem->quantity }}</p>
</div>

<!-- Order Id Field -->
<div class="form-group">
    {!! Form::label('order_id', 'Order Id:') !!}
    <p>{{ $orderItem->order_id }}</p>
</div>

