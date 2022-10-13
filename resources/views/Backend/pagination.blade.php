
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>Email</th>
                            <th>NID/BCN</th>
                            <th>Type</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($user as $users)
                       <tr>
                        <td>{{$users->email}}</td>
                        <td>{{$users->bcn}}</td>
                        <td>{{$users->type}}</td>
                        <td>{{$users->status}}</td>
                       </tr>
                       @endforeach
                    </tbody>
                </table>
                {!!$user->links()!!}
               
       