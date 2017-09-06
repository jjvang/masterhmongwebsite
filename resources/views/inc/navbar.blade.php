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
       <li class="{{Request::is('/gallery') ? 'active' : ''}}"><a href="/gallery">Gallery</a></li>
       <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="/contact">Contact</a></li>
     </ul>
   </div>
 </div>
</nav>
