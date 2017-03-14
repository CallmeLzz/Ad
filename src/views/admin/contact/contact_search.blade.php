<div class="right-menu">
    {!! Form::open(['route' => 'admin.contact','method' => 'get']) !!}
    
        {!! Form::label('contact_mail', 'Search Contact') !!}
        {!! Form::text('contact_mail', @$params['contact_mail'], ['class' => 'form-control', 'placeholder' => 'Mail']) !!}
        {!! Form::submit('Search', ["class" => "fa-search"]) !!}        
   {!! Form::close() !!}
</div>









