<html>

<body>
    <div>
        <table class="table table-striped" id="my-table">
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Roll</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Marks</th>
                    <th>Input Marks</th>
                    
                </tr>
            </thead>
            @foreach($marks as $key=>$item)
                   @if($item->status=='valid')
                   <tr>
                    <td>{{$key + 1}}</td>
                    <td class="roll">{{$item->actStudent->roll}}</td>
                    <td>{{$item->actStudent->name}}</td>

                    <td class="marks"></td>
                    <td>
                    <input id="stu_id" type="hidden" value="{{$item->actStudent->id}}">
                    <input id="sub_id" type="hidden" value="{{$item->id}}">
                       
                    </td>
                   
                </tr>
                   @endif
                @endforeach
            <tbody>

            </tbody>
        </table>
    </div>
</body>

</html>