<html>

<body>
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Roll</th>
                    <th>Name</th>
                    <th>Action</th>
                    <th>Marks</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($takeatten as $users)
                
                  @foreach($users->ssClass->sStudent as $key=>$item)
                   <tr>
                    <td>{{$key + 1}}</td>
                    <td><input class="roll" type="number" value="{{$item->roll}}"></td>
                    <td>{{$item->name}}</td>
                    <td>
                        <input id="atten" class="atten form-check-input" type="radio" name="gender" value="{{$item->roll}}"> P
                    <input  class="atten form-check-input " type="radio" name="gender" value="{{$item->roll}}"> A
                    </td>
                    
                    
                </tr>
                @endforeach
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>