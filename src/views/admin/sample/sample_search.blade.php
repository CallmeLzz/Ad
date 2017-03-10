<div class="admin-content">
    <div class="main">
        <!-- <div>
            <a href="addView" class="btn btn-danger pull left" style="margin-right:3px;">Add</a>
        </div> -->
        <h3> Result Search Menu Page </h3>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Level</th>
                <th>Operations</th>
            </tr>
            @if(isset($searchMenu))
                @if(is_string($searchMenu))
                    <label><font color="red"><?php echo $searchMenu; ?></font></label>
                @else
                    @foreach($searchMenu as $value)
                    <tr>
                        <td>{{ $value['menu_id'] }}</td>
                        <td>{{ $value['menu_title'] }}</td>
                        <td>{{ $value['menu_level'] }}</td>
                        <td>
                            <a href="{{ route('editMenu') }}?id={{ $value['menu_id'] }}" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                            <a href="{{ route('deleteMenu') }}?id={{ $value['menu_id'] }}" class="btn btn-danger pull left submitDelete" style="margin-right:3px;" source="{{ route('deleteMenu') }}?id={{ $value['menu_id'] }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                @endif
            @endif
        </table>
    </div>
</div>