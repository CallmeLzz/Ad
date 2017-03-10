<div class="admin-content">
    <div class="main">
    <h3> Home Page - Update Menu </h3>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Level</th>
                <th>Operations</th>
            </tr>
            @if(isset($menu))
                @foreach($menu as $value)
                {!! Form::open(['route' => 'editMenu', 'method' => 'GET']) !!}
                    <tr>
                        <td> {{ $value->menu_id }}</td>
                        {!! Form::text('menu_id', $value->menu_id, array('hidden')) !!}
                        <td>{!! Form::text('menu_title', $value->menu_title) !!}</td>
                        <td>{!! Form::text('menu_level', $value->menu_level) !!}</td>
                        <td>{!! Form::submit('Update') !!}</td>
                    </tr>
                {!! Form::close() !!}
                @endforeach
            @endif
        </table>
    </div>
</div>