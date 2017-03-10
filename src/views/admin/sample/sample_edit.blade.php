<div class="admin-content">
    <div class="main">
    <h3> Home Page - Update Menu </h3>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Operations</th>
            </tr>
            {!! Form::open(['route'=>['admin_sample.post', 'id' => @$samples_edit->sample_id],  'files'=>true, 'method' => 'post'])  !!}
                <tr>
                    <td>{!! $samples_edit->sample_id !!}</td>
                    <td>
                        {!! Form::text('sample_name', $samples_edit->sample_name) !!}
                    </td>
                    <td>
                        {!! Form::submit('Update', ['class' => 'btn btn-info']) !!}
                        <a href="{{ URL::route('admin.sample') }}">{!! Form::button('Cancel', ['class' => 'btn btn-danger']) !!}</a>
                    </td>
                </tr>
            {!! Form::close() !!}
        </table>
    </div>
</div>