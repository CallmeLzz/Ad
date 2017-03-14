<div class="admin-content">
    <div class="main">
    <h3 style="color:red;font-weight:bold;">CATEGORIES</h3>
       <!--  <label> FEATURE: </label> -->
        <a href="{{ URL::route('admin_sample_category.edit') }}" 
            class="btn btn-info pull left" style="margin-right:6px;margin-bottom: 20px;float:right;">Add New Sample Category</a>
        <a href="{{ URL::route('admin_sample_category.export') }}" 
            class="btn btn-info pull left" style="margin-right:6px;margin-bottom: 20px;float:right;">Export to Excel</a>
        <table style="width: 100%;">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Operations</th>
            </tr>
            
        @if(isset($samples_category))
            @foreach($samples_category as $value)
            <tr>
                <td>{{ $value['sample_category_id'] }}</td>
                <td>{{ $value['sample_category_name'] }}</td>
                <td>
                    <a href="{{ URL::route('admin_sample_category.edit', ['id' => $value->sample_category_id]) }}" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                    <a href="{!! URL::route('admin_sample_category.delete',['id' =>  $value->sample_category_id, '_token' => csrf_token()]) !!}" class="btn btn-danger pull left submitDelete" source="">Delete</a>
                </td>
            </tr>
            @endforeach
        @endif
        </table>
    </div>
</div>