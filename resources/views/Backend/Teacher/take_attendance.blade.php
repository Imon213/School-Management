<html>

<body>
    <div>
        <table class="table table-striped" id="my-table">
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Roll</th>
                    <th>Name</th>
                    <th>Action</th>
                    <th colspan="2">Result</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($takeatten as $users)
                
                  @foreach($users->ssClass->sStudent as $key=>$item)
                   <tr>
                    <td>{{$key + 1}}</td>
                    <td class="roll">{{$item->roll}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                        <input id="atten" class="atten form-check-input" type="radio" name="gender" value="P"> P
                    <input  class="atten form-check-input " type="radio" name="gender" value="A"> A
                    </td>
                    <td class="marks"></td>
                    <td>
                    <input id="stu_id" type="hidden" value="{{$item->id}}">
                    <input id="sub_id" type="hidden" value="{{$users->id}}">
                        <button id="record" class="btn btn-primary">Check Record</button>
                    </td>
                   
                </tr>
                @endforeach
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>