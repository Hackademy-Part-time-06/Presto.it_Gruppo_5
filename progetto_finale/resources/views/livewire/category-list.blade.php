<ul class="my-5">
    @foreach ($categories as $category)
         <li><a href="{{route('category.show', $category)}}">{{$category->name}}</a></li>
    @endforeach
</ul>
    
