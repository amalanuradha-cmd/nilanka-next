<!-- Customer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer', 'Customer:') !!}
    {!! Form::text('customer', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Barcode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('barcode', 'Barcode:') !!}
    {!! Form::text('barcode', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::text('date', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time', 'Time:') !!}
    {!! Form::text('time', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Recipient Mobile Field -->
<div class="form-group col-sm-6">
    {!! Form::label('recipient_mobile', 'Recipient Mobile:') !!}
    {!! Form::text('recipient_mobile', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Recipient Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('recipient_name', 'Recipient Name:') !!}
    {!! Form::text('recipient_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Delivery Street Field -->
<div class="form-group col-sm-6">
    {!! Form::label('delivery_street', 'Delivery Street:') !!}
    {!! Form::text('delivery_street', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Delivery City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('delivery_city', 'Delivery City:') !!}
    {!! Form::text('delivery_city', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Deliver Zip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deliver_zip', 'Deliver Zip:') !!}
    {!! Form::text('deliver_zip', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Item Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('item_description', 'Item Description:') !!}
    {!! Form::text('item_description', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::text('quantity', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Total Weight Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_weight', 'Total Weight:') !!}
    {!! Form::text('total_weight', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Dimension Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dimension', 'Dimension:') !!}
    {!! Form::text('dimension', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Payment Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_type', 'Payment Type:') !!}
    {!! Form::text('payment_type', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cod Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cod_amount', 'Cod Amount:') !!}
    {!! Form::text('cod_amount', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Sender Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sender_name', 'Sender Name:') !!}
    {!! Form::text('sender_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Sender Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sender_phone', 'Sender Phone:') !!}
    {!! Form::text('sender_phone', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Sender Message Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sender_message', 'Sender Message:') !!}
    {!! Form::text('sender_message', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('orders.index') }}" class="btn btn-default">Cancel</a>
</div>
