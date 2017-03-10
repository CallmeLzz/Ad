<div class="right-menu">
    {!! Form::open(['route' => 'admin.sample_category','method' => 'get']) !!}
    
        {!! Form::label('sample_category_name', 'Search Sample Category') !!}
        {!! Form::text('sample_category_name', @$params['sample_category_name'], ['class' => 'form-control', 'placeholder' => 'Sample Category name']) !!}
        {!! Form::submit('Search', ["class" => "fa-search"]) !!}        
   {!! Form::close() !!}
</div>









