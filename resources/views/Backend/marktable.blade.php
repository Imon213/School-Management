<html>

<body>
         <div class="row user-table">

            <div class="col-md-12 col-sm-6 table-data">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>{{$v}}</th>
                            <th>Subject</th>
                            <th>Class</th>
                            <th>Exam</th>
                             <th>Tittle</th>
                              <th>Contribution</th>
                               <th>Marks</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($v as $vs)
                        <tr>
                            <td>{{$vs->id}}</td>
                            <td>{{$vs->session}}</td>
                            <td>{{$vs->subject}}</td>
                            <td>{{$vs->class}}</td>
                            <td>{{$vs->exam}}</td>
                            <td>{{$vs->title}}</td>
                            <td>{{$vs->contribution}}</td>
                            <td>{{$vs->marks}}</td>
                            
                        </tr>

                        @endforeach
                    </tbody>
                </table>
                
            </div>

        </div>
        