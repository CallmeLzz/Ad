<div class="admin-content">
    <div class="main">
    <h3 style="color:red;font-weight:bold;">SAMPLES</h3>
      <!--   <label> FEATURE: </label> -->
        <a href="{{ URL::route('admin_sample.edit') }}" 
            class="btn btn-info pull left" style="margin-right:6px;margin-bottom: 20px;float:right;">Add New Sample</a>
        <a href="" 
            class="btn btn-info pull left" style="margin-right:6px;margin-bottom: 20px;float:right;">Export to Excel</a>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Operations</th>
            </tr>
            
        @if(isset($samples))
            @foreach($samples as $value)
            <tr>
                <td>{{ $value['sample_id'] }}</td>
                <td>{{ $value['sample_name'] }}</td>
                <td>
                    <a href="{{ URL::route('admin_sample.edit', ['id' => $value->sample_id]) }}" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                    <a href="{!! URL::route('admin_sample.delete',['id' =>  $value->sample_id, '_token' => csrf_token()]) !!}" class="btn btn-danger pull left submitDelete" source="">Delete</a>
                </td>
            </tr>
            @endforeach
        @endif
        </table>
    </div>
</div>