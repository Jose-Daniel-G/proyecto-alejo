<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el Nombre de la etiqueta ...']) !!}
    @error('name')
        <small class="error-message">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el Nombre de la etiqueta ...', 'readonly']) !!}
    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('color', 'Color') !!}
    {!! Form::select('color', $colors, null, ['class'=>'form-control']) !!}
    @error('color')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>