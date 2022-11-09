<table class="table table-striped text-center" id="my-table">
    <thead>
        <tr>
            <th>Serial No</th>
            <th>Roll</th>
            <th>Name</th>
            <th>Session</th>
            <th>Class</th>
            <th>Status</th>
            <th colspan="2">Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach($user as $key=>$item)


        @if($item->status=='valid')
        <tr>
            <td>{{$key + 1}}
                <input id="id" type="hidden" value="{{$item->id}}">
            </td>
            <td class="roll">{{$item->actStudent->roll}}</td>
            <td>{{$item->actStudent->name}}</td>
            <td>{{$item->actSession->session_name}}</td>
            <td>{{$item->actClass->class_name}}</td>
            <td>{{$item->status}}</td>
            <td><button id="cancel" class="btn btn-danger"><i class="fa-solid fa-remove"></i></button></td>

        </tr>
        @endif

        @endforeach

    </tbody>
</table>