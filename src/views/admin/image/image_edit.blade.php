<div class="admin-content">
    <div class="main">
    <h3> Home Page - Update Menu </h3>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Operations</th>
            </tr>
            {!! Form::open(['route'=>['admin_image.post', 'id' => @$images_edit->img_id],  'files'=>true, 'method' => 'post'])  !!}
                <tr>
                    <td>{!! $images_edit->img_id !!}</td>
                    <td>
                        {!! Form::text('img_name', $images_edit->img_name) !!}
                    </td>
                    <td>
                        {!! Form::submit('Update', ['class' => 'btn btn-info']) !!}
                        <a href="{{ URL::route('admin.image') }}">{!! Form::button('Cancel', ['class' => 'btn btn-danger']) !!}</a>
                    </td>
                </tr>
            {!! Form::close() !!}
        </table>
    </div>
</div>