<select name="class_name" id="sub" class="form-select" aria-label="Default select example">
    <option class="bg-primary">Select Subject</option>
    @foreach($class as $item)
    <option id="add_sub" value="{{$item->id}}" selected>{{$item->sub_name}}</option>
    @endforeach
</select>