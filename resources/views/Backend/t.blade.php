<html>

<body>
         <div class="row user-table">

            <div class="col-md-12 col-sm-6 table-data">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Roll</th>
                             <th>Name</th>
                            <th>Subject</th>
                            
                            <th>Exam</th>
                             <th>Tittle</th>
                              <th>Contribution</th>
                               <th>Marks</th>
                                <th>Score</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($v as $vs)
                        <tr>
                            <td>{{$vs->id}}</td>
                            <td>{{$vs->smStudent->roll}}</td>
                            <td>{{$vs->smStudent->name}}</td>
                           <td>{{$vs->sub->sub_name}}</td>
                            <td>{{$vs->smMark->exam}}</td>
                            
                            <td>{{$vs->smMark->title}}</td>
                            <td>{{$vs->smMark->contribution}}</td>
                            <td>{{$vs->smMark->marks}}</td>
                             <td>{{$vs->score}}</td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
                
            </div>

        </div>
        