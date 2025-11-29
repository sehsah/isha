<!--  Start navbar  -->
<nav class="navbar navbar-expand-lg tc-navbar-st1 navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand me-lg-5" href="{{ route('home') }}">
            <img src="{{ asset('assets/img/logo.png') }}" width="100px" alt="" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-lg-5 ps-lg-5 me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About Us</a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link" href="#services">Our Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('projects') }}">Our Works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">How To</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
            <div class="nav-side d-flex align-items-center">
               {{--  <a href="#" class="contact-item d-flex align-items-center">
                    <span class="icon fsz-30 me-20 shrink-0 op-8 mt-1"> <i class="fas fa-phone"></i> </span>
                    <div class="cont">
                        <div class="text fsz-16 op-8 fw-200"> Call us Phone </div>
                        <h6 class="fsz-20 fw-300"> +44 54224 849203 </h6>
                    </div>
                </a>--}}
                <a href="#" class="sidemenu-toggle menu-toggle-btn"> <i class="fas fa-bars"></i> </a>
            </div> 
        </div>
    </div>
</nav>
<!--  End navbar  -->
