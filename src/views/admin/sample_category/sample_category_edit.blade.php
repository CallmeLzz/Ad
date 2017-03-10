<div class="admin-content">
    <div class="main">
    <h3> Home Page - Update Categories </h3>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Operations</th>
            </tr>
            {!! Form::open(['route'=>['admin_sample_category.post', 'id' => @$samples_category_edit->sample_category_id],  'files'=>true, 'method' => 'post'])  !!}
                <tr>
                    <td>{!! $samples_category_edit->sample_category_id !!}</td>
                    <td>
                        {!! Form::text('sample_category_name', $samples_category_edit->sample_category_name) !!}
                    </td>
                    <td>
                        {!! Form::submit('Update', ['class' => 'btn btn-info']) !!}
                        <a href="{{ URL::route('admin.sample_category') }}">{!! Form::button('Cancel', ['class' => 'btn btn-danger']) !!}</a>
                    </td>
                </tr>
            {!! Form::close() !!}
        </table>
    </div>
</div>