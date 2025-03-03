<nav class="navbar navbar-expand-lg center-nav navbar-dark navbar-bg-dark">
    <div class="container flex-lg-row flex-nowrap align-items-center">
        <div class="navbar-brand">
            <a href="/">
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('assets/img/logo.png') }}" srcset="{{ asset('assets/img/logo.png') }}"
                            alt="Logo" style="border-radius: auto; height: 50px;" />
                    </div>
                    <div class="col">
                        <h3 class="text-white fs-25 mt-2 mb-5 text-center">ConnecThink Space</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#studio">List Studio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="navbar-other d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <li class="nav-item d-lg-none">
                    <button class="hamburger offcanvas-nav-btn"><span></span></button>
                </li>
            </ul>
        </div>
    </div>
</nav>
