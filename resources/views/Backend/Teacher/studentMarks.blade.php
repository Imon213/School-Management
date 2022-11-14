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
                <td>{{$item->actStudent->roll}}</td>
                <td>{{$item->actStudent->name}}</td>
                <td>{{$mark->marks}}</td>
                <td><input require class="form-control" placeholder="Marks" type="number"></td>
                <td><button class="btn btn-primary">Submit</button></td>
            </tr>
            @endif
            @endforeach
            <tbody>

            </tbody>
        </table>
    </div>
</body>

</html>