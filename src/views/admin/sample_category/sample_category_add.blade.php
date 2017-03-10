<div class="admin-content">
    <div class="main">
    <h3> Home Page - Add Categories </h3>
    @if(isset($message))
        <label><font color="red"><?php echo $message; ?></font></label>
    @endif
        <table style="width: 100%">
            {!! Form::open(['route'=> 'admin_sample_category.post', 'files'=>true, 'method' => 'post'])  !!}
                <tr>
                    <th> {!! Form::label('Name') !!} </th>
                    <td> {!! Form::text('sample_category_name', null, array('autofocus' => 'autofocus')) !!} </td>
                </tr>
                <tr>
                    <th>Operations</th>
                    <td>{!! Form::submit('Add', ['class' => 'btn btn-info']) !!}</td>
                </tr>
            {!! Form::close() !!}
        </table>
    </div>
</div>