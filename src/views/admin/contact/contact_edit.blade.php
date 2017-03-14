<div class="admin-content">
    <div class="main">
    <h3> Home Page - Update Contact</h3>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Mail</th>
                <th>Operations</th>
            </tr>
            {!! Form::open(['route'=>['admin_contact.post', 'id' => @$contacts_edit->contact_id],  'files'=>true, 'method' => 'post'])  !!}
                <tr>
                    <td>{!! $contacts_edit->contact_id !!}</td>
                    <td>
                        {!! Form::text('contact_mail', $contacts_edit->contact_mail) !!}
                    </td>
                    <td>
                        {!! Form::submit('Update', ['class' => 'btn btn-info']) !!}
                        <a href="{{ URL::route('admin.contact') }}">{!! Form::button('Cancel', ['class' => 'btn btn-danger']) !!}</a>
                    </td>
                </tr>
            {!! Form::close() !!}
        </table>
    </div>
</div>