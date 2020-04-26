 <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
     <div class="container">
         <a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="lozad" src="assets/img/logo.png" /></a><button
             class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
             data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
             aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>

         <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav text-uppercase ml-auto">

             <button class="btn btn-dark" onclick="darktoggle()">🌚/🌞</button>
                 
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#resume">Resume</a></li>
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                 <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
             </ul>
         </div>
     </div>
 </nav>
 <script>
                     function darktoggle() {
                         var element = document.body;

                         element.classList.toggle("dark-mode");

                     }
                 </script>
             