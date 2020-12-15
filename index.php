<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Generic</title>

  

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Styles -->
    <link href="app.css" rel="stylesheet">
</head>
<body id="app-wrapper" class="">
   
       
<header id="mainmenu" class="">
        <a class="navbar-brand">
            <div class="logo"><img src="./assets/weblogo.png" alt="logo"></div>
        </a>
     <nav class="navbar navbar-expand-lg navbar-light">
                
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav"> -->
                
                <ul class=" navbar-nav">
                    <li class="nav-item has-dropdown">
                        <a class="nav-link " aria-current="page" href="#">Products</a>
                        <ul class="drop">
                            <li class="nav-item">
                                <a class="nav-link" href="#">ATV</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">LCV</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">UTV</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Gallery</a>
                    </li>
                </ul>
    
            
        
    </nav>
    <div class="sidebar-wrapper">
        <div class="sign-in-btn"><a href="#">Sign In</a></div>
        <!-- <div class="dropdown sidebar-btn">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li><button class="dropdown-item" type="button">Profile</button></li>
    
            <li>
            <a class="dropdown-item" href="#" method="post" as="button">Logout</a>
                
                </li>
        </ul>
        </div> -->
        <div class="menu-btn">
            <a class="menu-logo" href="#">
                <svg class="hambsvg" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 13H8M1 1H17H1ZM1 7H17H1Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
        <div class="menu-close-btn">
            <a class="menu-logo" href="#">X</a>
        </div>
        <ul class="navbar-nav main-menu-side-embd">
                    <li class="nav-item has-dropdown">
                        <a class="nav-link " aria-current="page" href="#">Products</a>
                        <span class="iconify menu-arrow-down" data-icon="ant-design:caret-down-filled" data-inline="false"></span>
                        <ul class="drop">
                            <li class="nav-item">
                                <a class="nav-link" href="#">ATV</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">LCV</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">UTV</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Gallery</a>
                    </li>
        </ul>
        <hr class="menu-divider-mob">
        <ul class="menu-list">
        <li>
          <a href="#!" title="descriptive title">
            Sign in
          </a>
        </li>
        <li>
          <a href="#!" title="descriptive title">
            Register
          </a>
        </li>
        <li>
          <a href="#!" title="descriptive title">
           My Account
          </a>
        </li>
        <li>
          <a href="#!" title="descriptive title">
            Preorder
          </a>
        </li>
        <li>
          <a href="#!" title="descriptive title">
            Privacy Policy
          </a>
        </li>
        <li>
          <a href="#!" title="descriptive title">
            Help
          </a>
        </li>
      </ul>
    </div>
</div>
</header>

        <main class="main-content">



        <div class="container">
    <div class="row justify-content-center">
        <!-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div> -->
        <!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide slide1" style="background-image:url('./assets/beach.jpg')" >
            <div id="slide1cont" class="slidecontent">
                <div class="slide-write-up">
                    <span class="line line1">The Future is Electric</span>
                    <span class="line line2">with the ATV 900E</span>
                </div>
                <div class="slide-call-to-action">
                    <div class="learn-more">
                        <a href="#" class="call">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide slide2" style="background-image:url('./assets/retrowave.jpg')">
    
        </div>
        <!-- <div class="swiper-slide">Slide 3</div> -->
       
    </div>
    <div class="opaque-tint"></div>
    <!-- If we need pagination -->
    <!-- <div class="swiper-pagination"></div> -->

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar
    <div class="swiper-scrollbar"></div> -->
</div>
        <!-- <div class="slides">
            <div class="slide slide1" ></div>
            <div class="slide slide2" ></div>
        </div> -->
        <div class="scroll-down-more">
            <span></span>
            <span></span>
            <span></span>
        </div>
        </div>
        
        <div class="row">    
        <section class="whyus">
        <div class="bg-primary">hello</div>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur error mollitia quam accusamus? Enim ullam, id iure, quaerat vero facere laboriosam culpa nemo ratione veniam, possimus ab facilis dolore dolores expedita quam. Nulla obcaecati quas commodi excepturi harum ipsam quae ab ad, voluptas a tenetur nihil sint corrupti aspernatur, nesciunt labore magnam quibusdam dignissimos facilis laborum! Aperiam libero asperiores officia consectetur vitae dignissimos neque, debitis quaerat perferendis, soluta deleniti, fugit hic inventore eaque officiis ut suscipit enim vel cumque voluptatem repellat. Laudantium vero, esse praesentium, earum veritatis odit vel dolorum repudiandae dolorem mollitia ea explicabo. Repudiandae quisquam animi sit architecto!</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem dolorum ipsam eum, voluptatum impedit, sit quod maxime sint vero totam, excepturi nihil doloremque sapiente eveniet magnam enim! Nisi tempore, culpa quae facere nulla similique eveniet. Sapiente, eum consequatur. Perferendis cupiditate temporibus rem quae deserunt et perspiciatis quis sed suscipit dolore soluta pariatur aliquid tenetur odit iusto maiores accusantium, repellat possimus minus hic dolorem? Debitis accusamus officiis fuga, omnis saepe dignissimos, nobis, numquam autem rem aliquid quae officia consequuntur repellat voluptates. Provident, nobis consequuntur iste commodi officia, suscipit quidem dignissimos blanditiis quia, officiis reprehenderit maiores eum sit itaque. Optio, impedit? Debitis quos illum aspernatur reiciendis praesentium exercitationem. Praesentium autem, temporibus illo sequi ex officia voluptatibus vitae veniam quisquam distinctio. Maxime totam nulla natus hic voluptatibus, quod unde numquam mollitia ipsum cupiditate, asperiores facere quo? Corporis ea illo minus sunt omnis, quae hic veritatis. Quia eaque eveniet tempore debitis, culpa dolorem optio adipisci maiores ipsam officia ipsa, quae distinctio illum similique! Quo quas sunt aspernatur, impedit excepturi quasi molestiae libero adipisci iure eos voluptatibus eaque hic assumenda? Ab alias tenetur nostrum aspernatur repellat molestiae temporibus quidem non eaque qui similique, nihil minima quos sapiente impedit labore voluptates, fuga assumenda quasi odit. Numquam.</p>
        </section>
        <section class="sec-two">

        </section>
        <section class="sec-three some-post">
            
        </section>
        <section class="sec-four">
            
        </section>
    </div> <!-- row -->
</div> <!-- container -->



        </main>
        <footer>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" /> -->
    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script> -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

      <!-- Scripts -->
      <script src="app.js" defer></script>
</footer>
</body>
</html>