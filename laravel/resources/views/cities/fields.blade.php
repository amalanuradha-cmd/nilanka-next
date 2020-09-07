<!-- District Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('district_id', 'District Id:') !!}
    {!! Form::text('district_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Name En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_en', 'Name En:') !!}
    {!! Form::text('name_en', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Name Si Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_si', 'Name Si:') !!}
    {!! Form::text('name_si', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Name Ta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_ta', 'Name Ta:') !!}
    {!! Form::text('name_ta', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Sub Name En Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sub_name_en', 'Sub Name En:') !!}
    {!! Form::text('sub_name_en', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Sub Name Si Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sub_name_si', 'Sub Name Si:') !!}
    {!! Form::text('sub_name_si', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Sub Name Ta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sub_name_ta', 'Sub Name Ta:') !!}
    {!! Form::text('sub_name_ta', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Postcode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('postcode', 'Postcode:') !!}
    {!! Form::text('postcode', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Latitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('latitude', 'Latitude:') !!}
    {!! Form::text('latitude', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Longitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('longitude', 'Longitude:') !!}
    {!! Form::text('longitude', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('cities.index') }}" class="btn btn-default">Cancel</a>
</div>
