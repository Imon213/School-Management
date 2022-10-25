<html>

<body>
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Roll</th>
                    <th>Name</th>
                    <th>Attendence</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($atten as $key=>$users)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$users->astudent->roll}}</td>
                    <td>{{$users->astudent->name}}</td>
                    <td>{{$users->attendance}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
        
    </div>


</body>

</html>