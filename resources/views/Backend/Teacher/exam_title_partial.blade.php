<select name="class_name"  class="form-select" aria-label="Default select example">
    <option class="bg-primary">Select Title</option>
    @foreach($title as $item)
    <option id="filter"   value="{{$item->id}}" selected>{{$item->title}}</option>
    @endforeach
</select>