<html>

<body>
    <div>
        <table class="table table-striped" id="my-table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Roll</th>
                    <th>Name</th>
                    <th>Attendance</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($record as $users)
                <tr>
                    <td>{{$users->date}}</td>
                    <td>{{$users->aStudent->roll}}</td>
                    <td>{{$users->aStudent->name}}</td>
                    <td>{{$users->attendance}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>