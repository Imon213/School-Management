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


                    <tr>
                        <td>{{$key + 1}}
                            <input id="s_id" type="hidden" value="{{$item->id}}">
                        </td>
                        <td class="roll">{{$item->roll}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->sSession->session_name}}</td>
                        <td>{{$item->sClass->class_name}}</td>
                        <td>{{$item->reg->status}}</td>
                        <td><button id="add" class="btn btn-primary"><i class="fa-solid fa-check"></i></button></td>
                        <td><button class="btn btn-danger"><i class="fa-solid fa-remove"></i></button></td>

                    </tr>

                    @endforeach

                </tbody>
            </table>