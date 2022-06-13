<div>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container-logo">
            <a class="navbar-brand" href="#">
                <h2><span id="b">B</span>
                    <span id="book">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                            class="bi bi-book-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                        </svg>
                    </span>
                    <!-- <span> </span> -->
                    <span id="logo-text"> kazine</span>
                </h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <!-- Content -->
        <div class="collapse navbar-collapse col-7 justify-content-center" id="navbarTogglerDemo03">
            <ul class="navbar-nav my-2 my-lg-0" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active h4" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link h4" href="{{ route('dennis.index') }}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link h4" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link h4" href="#">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link h4" href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- Content End-->

        <div class="icons-container">
            <!-- Icons -->
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll col-9" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link h4" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                                height="25" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                            </svg></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link h4" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                                height="25" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link h4" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                                height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg></a>
                    </li>
                </ul>
            </div>
            <!-- Icons End-->
        </div>
    </nav>
</div>
