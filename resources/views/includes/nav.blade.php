<nav class="navbar navbar-expand-lg  mynavecolor">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Bright C Web Developer</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        @if(Session::has('user'))
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('logout')}}">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('profile')}}">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">{{Session::get('user')['name']}}</a>
        </li>

        @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Registration and login
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        @endif
        @if(Session::has('adminuser'))
        <li class="nav-item">
          <a class="nav-link" href="#">{{Session::get('adminuser')['name']}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('adminhome')}}">Admin Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('adminlogout')}}">Logout</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('adminlogin')}}">Admin Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('adminregister')}}">Admin Register</a>
        </li>
        @endif
        </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Select Category
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            </li>
          @forelse ($cat as $cat)
          <li class="nav-item">
            <a class="nav-link" href="blogcategory/{{$cat->id}}">
               {{$cat->catname}}
            </a>
          </li>
          @empty

          @endforelse
          </ul>
          </li>



       </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
