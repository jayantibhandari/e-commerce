<!-- topnav section -->

<header class="topnav_section">
    <nav>
        <div class="topnav">
            <ul class="nav">
                <li>
                   <i class="fa fa-envelope" aria-hidden="true"></i>
                    <a  aria-current="page" href="#">&nbsp;treasureTrove1234@gmail.com</a>
                </li>
                <li>
                <i class="fa fa-phone" aria-hidden="true"></i>
                    <a  href="#">&nbsp;+977 9876548907 </a>
                </li>

                @if (Route::has('login'))

                @auth
                <li >
                <x-app-layout> </x-app-layout>
                </li>

                @else
                <li class="login_nav">
                 <button> <a class="login "href="{{route('login')}}">LogIn</a></button>
                 &nbsp;
                 <button> <a class="register "href="{{route('register')}}">Sign-Up</a></button>
                </li>
                @endauth

                @endif

            </ul>
        </div>
    </nav>
</header>

<!-- end  -->

<header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.html"><img width="250" src="images/logo.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="about.html">About</a></li>
                              <li><a href="testimonial.html">Testimonial</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="product.html">Products</a>
                        </li>

                        <li class="nav-item">
                           <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>



                     </ul>
                  </div>
               </nav>
            </div>
         </header>
