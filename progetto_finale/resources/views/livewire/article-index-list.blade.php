<div class="row">
  <div class="col-3">
    <select class="mb-3 form-select shadow" id="select_category" name="select_category" aria-label="Default select example">
      <option selected>Tutte le categorie</option>
      @foreach ($categories as $category)
        <option value="{{$category->id}}">>{{$category->name}}</option>
      @endforeach
    </select>
  </div>
      
  <div class="col">
    <button type="submit" class="btn btn-outline-success btn-sm">Sort</button>
  </div>
</form>
    
</div>

<div class="row">
  <table class="table table-striped shadow">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
        <th scope="col">Category</th>
        <th scope="col">Created at</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->price}}</td>
            <td>{{$article->description}}</td>
            <td>{{$article->category->name}}</td>
            <td>{{$article->created_at}}</td>
            <td>
                <a href="{{route('articles.show', $article)}}" class="btn btn-sm btn-outline-info">See Details</a>
                <a href="{{route('articles.edit', $article)}}" class="btn btn-sm btn-outline-warning">Edit</a>
                <livewire:article-delete-form :article="$article"/>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>
</div>

