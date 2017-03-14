<div class="admin-content">
    <div class="main">
    <h3 style="color:red;font-weight:bold;">CONTACTS</h3>
      <!--   <label> FEATURE: </label> -->
        <a href="{{ URL::route('admin_contact.edit') }}" 
            class="btn btn-info pull left" style="margin-right:6px;margin-bottom: 20px;float:right;">Add New Contacts</a>
        <a href="{{ URL::route('admin_contact.export') }}" 
            class="btn btn-info pull left" style="margin-right:6px;margin-bottom: 20px;float:right;">Export to Excel</a>

        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Operations</th>
            </tr>
            
        @if(isset($contacts))
            @foreach($contacts as $value)
            <tr>
                <td>{{ $value['contact_id'] }}</td>
                <td>{{ $value['contact_mail'] }}</td>
                <td>
                    <a href="{{ URL::route('admin_contact.edit', ['id' => $value->contact_id]) }}" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                    <a href="{!! URL::route('admin_contact.delete',['id' =>  $value->contact_id, '_token' => csrf_token()]) !!}" class="btn btn-danger pull left submitDelete" source="">Delete</a>
                </td>
            </tr>
            @endforeach
        @endif
        </table>
    </div>
</div>