<x-main>
    <div class="container">
        @if ($errors->any()) 
    	<div class="alert alert-danger"> 
      		<ul> 
            @foreach ($errors->all() as $error) 
                <li>{{ $error }}</li> 
            @endforeach 
        	</ul> 
    	</div> 
    @endif 

    <form action="{{route('register')}}" method="POST"> 
      @method('POST') 
      @csrf 
        <div class="input-group mb-3"> 
            <span class="input-group-text">First name && Last name</span> 
            <input type="text" aria-label="First name" class="form-control" name="name"> 
        </div> 

        <div class="input-group mb-3"> 
            <span class="input-group-text">EmaiL && Password</span> 
            <input type="email" aria-label="Emai" class="form-control" name="email"> 
            <input type="password" aria-label="Password" class="form-control" name="password"> 
        </div> 

        <div class="input-group mb-3"> 
            <span class="input-group-text">Password confirmation</span> 
            <input type="password" aria-label="" class="form-control" name="password_confirmation"> 
        </div> 

        <button type="submit" class="btn btn-outline-success my-3">Registrati</button> 
        <a class="btn btn-outline-info" href="{{ route('login') }}">Hai già un account?</a> 

   </form> 
    </div>
</x-main>