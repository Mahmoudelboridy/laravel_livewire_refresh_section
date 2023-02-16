<div wire:poll.5000ms>
    <nav class="navbar bg-info navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-bell"></i><sup>{{ $count }}</sup>                </a>
                <ul class="dropdown-menu">
                    @foreach ($types as $type)
                    <li><a class="dropdown-item" href="#">{{ $type->name }}</a></li>
                    @endforeach
                </ul>
              </li>
            </ul>
          
          </div>
        </div>
      </nav>
        <h1 style="text-align:center">{{ $count }}</h1>    
    </div>
    

