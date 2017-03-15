
<div class="admin-content">
    <div class="main">
    <h3> Home Page - Add Image </h3>
    @if(isset($message))
        <label><font color="red"><?php echo $message; ?></font></label>
    @endif
        <table style="width: 100%">
            {!! Form::open(['route'=> 'admin_image.post', 'files'=>true, 'method' => 'post'])  !!}
                <tr>
                    <th> {!! Form::label('Name') !!} </th>
                    <td> {!! Form::file('img_name',array('class' => 'form-control')) !!} </td>
                </tr>
                <tr>
                    <th>Operations</th>
                    <td>{!! Form::submit('Add', ['class' => 'btn btn-info']) !!}</td>
                </tr>
            {!! Form::close() !!}
        </table>
    </div>
</div>