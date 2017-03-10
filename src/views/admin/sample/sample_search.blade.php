<div class="admin-content">
    <div class="main">
        <!-- <div>
            <a href="addView" class="btn btn-danger pull left" style="margin-right:3px;">Add</a>
        </div> -->
        <h3> Result Search Menu Page </h3>
        <table style="width: 100%">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Operations</th>
            </tr>
            @if(isset($samples))
                @if(is_string($samples))
                    <label><font color="red"><?php echo $samples; ?></font></label>
                @else
                    @foreach($samples as $value)
                    <tr>
                        <td>{{ $value['sample_id'] }}</td>
                        <td>{{ $value['sample_name'] }}</td>                     
                        <td>
                            <a href="" class="btn btn-info pull left" style="margin-right:3px;">Edit</a>
                            <a href="" class="btn btn-danger pull left submitDelete" style="margin-right:3px;" source="">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                @endif
            @endif
        </table>
    </div>
</div>