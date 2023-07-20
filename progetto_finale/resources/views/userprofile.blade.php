<x-main>
<section class="container rounded" style="background-color: #eeeeee49;">
  <div class="container userprofile-container py-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center text-white" style="background-color: #323C50;">
            <img src="{{empty(Auth::user()->avatar) ? Storage::url('/images/default-img.gif') : Storage::url(Auth::user()->avatar)}}" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">{{Auth::user()->name.' '.Auth::user()->surname}}</h5>
            <p class="mb-1">{{Auth::user()->description ? Auth::user()->description : N/D}}</p>
            <p class="mb-4">{{Auth::user()->city ? Auth::user()->city : N/D}}</p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body text-white" style="background-color: #323C50;">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="mb-0">{{Auth::user()->name.' '.Auth::user()->surname}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="mb-0">{{Auth::user()->email}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="mb-0">{{Auth::user()->number ? Auth::user()->number : N/D}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="mb-0">{{Auth::user()->city ? Auth::user()->city : N/D}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <table class="container table-container">
          <thead>
            <tr>
              <th><h1>Id Articolo</h1></th>
              <th><h1>Nome</h1></th>
              <th><h1>Prezzo</h1></th>
              <th><h1>Creato il</h1></th>
              <th><h1>Azioni</h1></th>
            </tr>
          </thead>
          <tbody>
            @foreach($articles as $article)
              <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>{{$article->price}}</td>
                <td>{{$article->created_at}}</td>
                <td><a href="{{ route('articles.show', $article) }}"
                  class="btn btn-sm btn-outline-danger">{{ __('messages.detailsBtn') }}</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
</x-main>