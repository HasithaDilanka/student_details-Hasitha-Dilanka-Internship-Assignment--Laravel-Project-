<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary" >
    <img src="https://cdn.icon-icons.com/icons2/2474/PNG/512/education_cap_graduate_award_icon_149711.png" width="40" height="40"class="d-inline-block align-top" style="margin-left: 10px"
        alt=""> &nbsp;
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="{{ route('home') }}">Home 
            <a class="nav-item nav-link" href="{{ route('student') }}" style="color: white">Registration</a>
            <a class="nav-item nav-link" href="{{ route('edit') }}" style="color: white">Student</a>

        </div>

            
        <form style="margin-left: 72%" >
   
                @if (Auth::user())
                <form method="POST" action="{{ route('logout') }}" x-data style="text-decoration: none">
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();" style="text-decoration: none;color: white">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            @else
                <span><a href="{{ route('login') }}" style="text-decoration: none;color: white">Login</a></span> &nbsp;&nbsp; <span><a
                        href="{{ route('register') }}"style="text-decoration: none;color: white">Register</a></span>
            @endif

            </form>  
            

    </div>
</nav>
