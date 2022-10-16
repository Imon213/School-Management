<table class="table table-striped">
    <thead>
        <tr>
            <th>Serial No</th>
            <th>Email</th>
            <th>NID/BCN</th>
            <th>Type</th>
            <th>Status</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $key=>$users)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$users->email}}</td>
            <td>{{$users->bcn}}</td>
            <td>{{$users->type}}</td>
            
            @if($users->status =='incomplete')
            <td class="text-danger">{{$users->status}}</td>
            <td><a class="btn btn-success" href="#"><i class="fa-solid fa-address-card"></i></a></td>
            <td><a class="btn btn-danger" href="#"><i class="fa-solid fa-trash"></i></a></td>
            @else
            <td class="text-primary">{{$users->status}}</td>
            <td><a class="btn btn-primary" href="#"><i class="fa-solid fa-user-pen"></i></a></td>
            <td><a class="btn btn-danger" href="#"><i class="fa-solid fa-trash"></i></a></td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
{!!$user->links()!!}