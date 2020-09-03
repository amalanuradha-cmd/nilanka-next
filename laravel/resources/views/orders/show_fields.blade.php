<!-- Customer Field -->
<div class="form-group">
    {!! Form::label('customer', 'Customer:') !!}
    <p>{{ $order->customer }}</p>
</div>

<!-- Barcode Field -->
<div class="form-group">
    {!! Form::label('barcode', 'Barcode:') !!}
    <p>{{ $order->barcode }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $order->type }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $order->address }}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $order->date }}</p>
</div>

<!-- Time Field -->
<div class="form-group">
    {!! Form::label('time', 'Time:') !!}
    <p>{{ $order->time }}</p>
</div>

<!-- Recipient Mobile Field -->
<div class="form-group">
    {!! Form::label('recipient_mobile', 'Recipient Mobile:') !!}
    <p>{{ $order->recipient_mobile }}</p>
</div>

<!-- Recipient Name Field -->
<div class="form-group">
    {!! Form::label('recipient_name', 'Recipient Name:') !!}
    <p>{{ $order->recipient_name }}</p>
</div>

<!-- Delivery Street Field -->
<div class="form-group">
    {!! Form::label('delivery_street', 'Delivery Street:') !!}
    <p>{{ $order->delivery_street }}</p>
</div>

<!-- Delivery City Field -->
<div class="form-group">
    {!! Form::label('delivery_city', 'Delivery City:') !!}
    <p>{{ $order->delivery_city }}</p>
</div>

<!-- Deliver Zip Field -->
<div class="form-group">
    {!! Form::label('deliver_zip', 'Deliver Zip:') !!}
    <p>{{ $order->deliver_zip }}</p>
</div>

<!-- Item Description Field -->
<div class="form-group">
    {!! Form::label('item_description', 'Item Description:') !!}
    <p>{{ $order->item_description }}</p>
</div>

<!-- Quantity Field -->
<div class="form-group">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $order->quantity }}</p>
</div>

<!-- Total Weight Field -->
<div class="form-group">
    {!! Form::label('total_weight', 'Total Weight:') !!}
    <p>{{ $order->total_weight }}</p>
</div>

<!-- Dimension Field -->
<div class="form-group">
    {!! Form::label('dimension', 'Dimension:') !!}
    <p>{{ $order->dimension }}</p>
</div>

<!-- Payment Type Field -->
<div class="form-group">
    {!! Form::label('payment_type', 'Payment Type:') !!}
    <p>{{ $order->payment_type }}</p>
</div>

<!-- Cod Amount Field -->
<div class="form-group">
    {!! Form::label('cod_amount', 'Cod Amount:') !!}
    <p>{{ $order->cod_amount }}</p>
</div>

<!-- Sender Name Field -->
<div class="form-group">
    {!! Form::label('sender_name', 'Sender Name:') !!}
    <p>{{ $order->sender_name }}</p>
</div>

<!-- Sender Phone Field -->
<div class="form-group">
    {!! Form::label('sender_phone', 'Sender Phone:') !!}
    <p>{{ $order->sender_phone }}</p>
</div>

<!-- Sender Message Field -->
<div class="form-group">
    {!! Form::label('sender_message', 'Sender Message:') !!}
    <p>{{ $order->sender_message }}</p>
</div>

