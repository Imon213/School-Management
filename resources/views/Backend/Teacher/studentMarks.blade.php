<html>

<body>
    <div>
        <table class="table table-striped" id="my-table">
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Roll</th>
                    <th>Name</th>
                    <th>Marks</th>
                    <th>Input Marks</th>

                </tr>
            </thead>
            @foreach($class->actstudent as $key=>$item)
            @if($item->status=='valid')
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$item->actStudent->roll}}
                    <input id="stu_id" value="{{$item->actStudent->id}}" type="hidden">
                </td>
                <td>{{$item->actStudent->name}}</td>
                <td>{{$mark->marks}}
                    <input id="mark_id" type="hidden" value="{{$mark->id}}">
                </td>
                <td><input id="score" require class="form-control" @if($exist) value="{{$exist->score}}" @endif placeholder="Marks" type="number"></td>
                <td><button id="upload_marks" class="btn btn-primary">Submit</button></td>
            </tr>
            @endif
            @endforeach
            <tbody>

            </tbody>
        </table>
    </div>
</body>

</html>