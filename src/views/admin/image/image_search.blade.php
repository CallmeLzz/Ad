<div class="right-menu">
    {!! Form::open(['route' => 'admin.image','method' => 'get']) !!}
    
        {!! Form::label('img_name', 'Search Image') !!}
        {!! Form::text('img_name', @$params['img_name'], ['class' => 'form-control', 'placeholder' => 'Img name']) !!}
        {!! Form::submit('Search', ["class" => "fa-search"]) !!}        
   {!! Form::close() !!}
</div>









