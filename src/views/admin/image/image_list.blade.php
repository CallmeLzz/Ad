<div class="admin-content">
    <div class="main">
    <h3 style="color:red;font-weight:bold;">IMAGE</h3>
      <!--   <label> FEATURE: </label> -->
        <a href="{{ URL::route('admin_image.edit') }}" 
            class="btn btn-info pull left" style="margin-right:6px;margin-bottom: 20px;float:right;">Add New Image</a>
        <a href="" 
            class="btn btn-info pull left" style="margin-right:6px;margin-bottom: 20px;float:right;">Export to Excel</a>

        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>IMAGE</th>
                <th>Operations</th>
            </tr>
            
        @if(isset($images))
            @foreach($images as $value)
            <tr>
                <td>{{ $value['img_id'] }}</td>
                <td><img src='{{ asset("images/$value->img_name") }}' style="width:100%;">{{ $value->img_name}} </td>
                <td>
                    <a href="{{ URL::route('admin_image.edit', ['id' => $value->img_id]) }}" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                    <a href="{!! URL::route('admin_image.delete',['id' =>  $value->img_id, '_token' => csrf_token()]) !!}" class="btn btn-danger pull left submitDelete" source="">Delete</a>
                </td>
            </tr>
            @endforeach
        @endif
        </table>
    </div>
</div>

