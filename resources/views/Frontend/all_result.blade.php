
    <div class="middle-title bg-primary">
        <h3 class="title">{{$sub->sub_name}}</h3>
        <i>Total marks: 100 </i>
        <i> Passing Marks: 33</i><br>
        <i>Contribution: 100%</i>
    </div>
    <div class="end-result">
        <div class="mid-term">
            <div class="top alert alert-success">
                <div class="item">
                    <span>Mid Term-2022</span>
                    <span> <i>(Total: 100 </i> <i>Pass: 33%</i> <i>Contribution: 50%)</i></span>
                </div>
                <div class="marks">
                    <h2>-(-)</h2>
                </div>
            </div>
            <div class="end">
                @foreach($mark->where('exam','mid') as $mark)
                <div class="distributed-marks">
                    <div class="left-end">
                        <span> {{$mark->title}}</span>
                        <span> <i>(Total: {{$mark->marks}} </i> <i>Contribution:
                                {{$mark->contribution}}%)</i></span>
                    </div>
                    <div class="right-end">
                        <h2>-(-)</h2>
                    </div>

                </div>
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
                    <h2>-(-)</h2>
                </div>
            </div>
            <div class="end">
                @foreach($mark->where('exam','final') as $mark)
                <div class="distributed-marks">
                    <div class="left-end">
                        <span> {{$mark->title}}</span>
                        <span> <i>(Total: {{$mark->marks}} </i> <i>Contribution:
                                {{$mark->contribution}}%)</i></span>
                    </div>
                    <div class="right-end">
                        <h2>-(-)</h2>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
