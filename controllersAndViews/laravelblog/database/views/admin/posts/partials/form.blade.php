<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese el slug del post',
        'readonly',
    ]) !!}
    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('category_id', 'Categoria') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>
    @foreach ($tags as $tag)
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->name }}
        </label>
    @endforeach
    <br>
    @error('tags')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label class="">
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label class="">
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>
    @error('status')
        <small class="text-danger">{{ $message }}</small>
    @enderror
    <div class="row mb-3">
        <div class="col">
            <div class="image-wrapper">
                @isset ($post->image)
                    <img src="{{ asset($post->image->url)}}" alt="" id="picture" accept="image/*">
                @else
                    <img id="picture" src="https://cdn.pixabay.com/photo/2020/03/27/13/02/venice-4973502_1280.jpg" alt="">
                @endif
            </div>
        </div>
        <div class="col">
            <div class="form-group">
               {!! Form::label('file', 'Imagen que se mostrara en el post') !!}
               {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            </div>
            @error('file')
                <span class="text-danger" >{{ $message }}</span>
            @enderror
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae, officiis incidunt commodi numquam quas esse alias, dolor ipsum dignissimos eius hic a. Aliquam eveniet minima incidunt amet temporibus, commodi quisquam?</p>
        </div>
    </div>
</div>
<div class="form-group">
    {!! Form::label('extract', 'Extracto:') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
</div>
@error('extract')
    <small class="text-danger">{{ $message }}</small>
@enderror
<div class="form-group">
    {!! Form::label('body', 'Cuerpo del post:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>
@error('body')
    <small class="text-danger">{{ $message }}</small>
@enderror