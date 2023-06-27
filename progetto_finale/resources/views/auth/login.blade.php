<x-main>
    @if ($errors->any()) 
    		<div class="alert alert-danger"> 
        		<ul> 
        		@foreach ($errors->all() as $error) 
                	<li>{{ $error }}</li> 
            	@endforeach 
        		</ul> 
    		</div> 
    @endif 
<div class="container">
    <form action="{{route('login')}}" method="POST"> 
        @method('POST') 
        @csrf 
            <div class="input-group mb-3"> 
                <span class="input-group-text">Email && Password</span> 
                <input type="email" aria-label="Emai" class="form-control" name="email"> 
                <input type="password" aria-label="Password" class="form-control" name="password"> 
            </div> 
            <button type="submit" class="btn btn-outline-success my-3">Accedi</button> 
            <a href="{{ route('register') }}">Non sei ancora registrato?</a> 
       </form> 
</div>
</x-main>