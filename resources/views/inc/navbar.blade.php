<nav class="navbar navbar-inverse navbar-fixed-top">
 <div class="container">
   <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
     <a class="navbar-brand" href="/">Master Hmong</a>
   </div>
   <div id="navbar" class="collapse navbar-collapse">
     <ul class="nav navbar-nav">
       <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
       <li class="{{Request::is('gallery') ? 'active' : ''}}"><a href="/gallery">Gallery</a></li>
       <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="/contact">Contact</a></li>
     </ul>
     <div class="collapse navbar-collapse" id="app-navbar-collapse">
                       <!-- Left Side Of Navbar -->
                       <ul class="nav navbar-nav">
                           &nbsp;
                       </ul>

                       <!-- Right Side Of Navbar -->
                       <ul class="nav navbar-nav navbar-right">
                           <!-- Authentication Links -->
                           @if (Auth::guest())
                               <li><a href="{{ route('login') }}">Login</a></li>
                               <li><a href="{{ route('register') }}">Register</a></li>
                           @else
                               <li class="dropdown">
                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                       {{ Auth::user()->name }} <span class="caret"></span>
                                   </a>

                                   <ul class="dropdown-menu" role="menu">
                                       <li>
                                           <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                               Logout
                                           </a>

                                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                               {{ csrf_field() }}
                                           </form>
                                       </li>
                                   </ul>
                               </li>
                           @endif
                       </ul>
                   </div>

   </div>
 </div>
</nav>


              <!-- <ul class="nav navbar-nav navbar-right">
                <li class="{{Request::is('login') ? 'active' : ''}}"><a href="/login">login</a></li>
                <li class="{{Request::is('register') ? 'active' : ''}}"><a href="/register">register</a></li>
              </ul> -->
