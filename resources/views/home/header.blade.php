<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ route('home') }}" class="active">Home</a></li>
                        <li><a href="{{ url('explore') }}">Explore</a></li>
                        @if (Route::has('login'))
                           
                                @auth
                                <li>
                                    <a href="{{ url('book_history') }}">My History</a>
                                </li>
                                
                                  <x-app-layout>
                                  </x-app-layout>
                                
                                @else
                                <li><a href="{{ route('login') }}">login</a></li>

                                    @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                    @endif
                                @endauth
                            
                        @endif
                        







                        
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
