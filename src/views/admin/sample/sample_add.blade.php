<div class="admin-content">
    <div class="main">
    <h3> Home Page - Add Menu </h3>
    @if(isset($message))
        <label><font color="red"><?php echo $message; ?></font></label>
    @endif
        <table style="width: 100%">
            {!! Form::open(['route' => 'addMenu', 'method' => 'GET']) !!}
                <tr> 
                    <th> {!! Form::label('Title') !!} </th>
                    <td> {!! Form::text('title', null, array('autofocus' => 'autofocus')) !!} </td>
                </tr>
                <tr>
                    <th> {!! Form::label('Level') !!}</th>
                    <td> 
                        {!! 
                            Form::select('level', [
                                '1' => '1', 
                                '2' => '2', 
                                '3' => '3'
                                ]) 
                        !!}
                    </td>
                </tr>
                <tr>
                    <th>Parents</th>
                    <td>
                        {!! Form::select('parents', array('' => '') + $menuID) !!}
                    </td>
                </tr>
                <tr>
                    <th>Operations</th>
                    <td>{!! Form::submit('Add') !!}</td>
                </tr>
            {!! Form::close() !!}
        </table>
    </div>
</div>