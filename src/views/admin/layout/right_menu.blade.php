
<div class="right-menu">

    {!! Form::open(['route' => 'admin.sample','method' => 'get']) !!}
    {!! Form::label('sample_name', 'Search') !!}
    {!! Form::text('sample_name', @$params['sample_name'], ['class' => 'form-control', 'placeholder' => 'Sample name']) !!}
    {!! Form::submit('Search', ["class" => "fa-search"]) !!}	    
    {!! Form::close() !!}

</div>









