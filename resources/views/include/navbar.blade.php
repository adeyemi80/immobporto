 <!-- Navigation Section-->
 <nav id="nav" class="container-fluid navbar navbar-default navbar-fixed-top">
        <div class="container">
	      <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#toggle">
                    <span class="sr-only"> Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
	      	    <a class="navbar-brand page-scroll" href="#page-top"><span>IMMOBPORTO</span></a>
	      </div>
	      <div class="collapse navbar-collapse" id="toggle">
		      	<ul class="nav navbar-nav">
		      		<li class="lBorder"><a class="page-scroll" href="#intro">ACCUEIL</a></li>
		      		<li class="lBorder"><a class="page-scroll" href="#selling">A VENDRE</a></li>
		      		<li class="lBorder"><a class="page-scroll" href="#renting">A LOUER</a></li>
		      		<li class="lBorder"><a class="page-scroll" href="#contact">CONTACTS</a></li>
                    <li class="lBorder"><a class="page-scroll" href="#about">A PROPOS</a></li>
                    <li class="lBorder">
                    @if(Route::has('login'))
                        @auth
                        <a href="{{ url('/dashboard') }}" class="page-scroll">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="page-scroll">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="page-scroll">Register</a>
                        @endif
                        @endauth
                    @endif
                    
                    
                    
                    </li>
                    
		      	</ul>
	      </div>							
        </div>
	   <!-- Search - start -->
        <div class="search-field">
            <a id="search-field-btn" class="search-field-btn" href="#"><i class="fa fa-search"></i></a>
            <form class="search-field-form">
                <input type="text" placeholder="Enter your search term...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <!-- Search - end -->
    </nav>
  <!-- End of Navigation section-->