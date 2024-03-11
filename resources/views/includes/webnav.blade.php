<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-0">
        <a href="" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Safety</span>First
            </h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav m-auto py-4">
               
                <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>

                @foreach(getMenuPages() as $page)
                    <a href="{{ route('page', $page->url_key) }}" class="nav-item nav-link">{{ $page->title }}</a>
                @endforeach
    
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>

              
            </div>
        </div>
    </nav>
</div>
