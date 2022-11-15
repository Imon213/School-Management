
    <div class="middle-title bg-primary">
        <div class="middle-left">
        <h3 class="title">{{$sub->sub_name}}</h3>
        <i>Total marks: 100 </i>
        <i> Passing Marks: 33</i><br>
        <i>Contribution: 100%</i>
        </div>
        <div class="middle-right">
            <h5>{{$grade}}({{$grand_total}})</h5>
        </div>
    </div>
    <div class="end-result">
        <div class="mid-term">
            <div class="top alert alert-success">
                <div class="item">
                    <span>Mid Term-2022</span>
                    <span> <i>(Total: 100 </i> <i>Pass: 33%</i> <i>Contribution: 50%)</i></span>
                </div>
                <div class="marks">
                    <h2>{{$mid_total_score}}</h2>
                </div>
            </div>
            <div class="end">
            @foreach($result as $mark)
                @if($mark->smMark->exam == 'mid')
                <div class="distributed-marks">
                    <div class="left-end">
                        <span> {{$mark->smMark->title}}</span>
                        <span> <i>(Total: {{$mark->smMark->marks}} </i> <i>Contribution:
                                {{$mark->smMark->contribution}}%)</i></span>
                    </div>
                    <div class="right-end">
                        <h2>{{$mark->score}}</h2>
                    </div>

                </div>
                @endif
                @endforeach
            </div>

        </div>

        <div class="final-term">
            <div class="top alert alert-success">
                <div class="item">
                    <span>Final Term</span>
                    <span> <i>(Total: 100 </i> <i>Pass: 33%</i> <i>Contribution: 50%)</i></span>
                </div>
                <div class="marks">
                    <h2>{{$final_total_score}}</h2>
                </div>
            </div>
            <div class="end">
            @foreach($result as $mark)
                @if($mark->smMark->exam == 'final')
                <div class="distributed-marks">
                    <div class="left-end">
                        <span> {{$mark->smMark->title}}</span>
                        <span> <i>(Total: {{$mark->smMark->marks}} </i> <i>Contribution:
                                {{$mark->smMark->contribution}}%)</i></span>
                    </div>
                    <div class="right-end">
                    <h2>{{$mark->score}}</h2>
                    </div>

                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
