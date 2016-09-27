<!DOCTYPE html>

<html>

      <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
          <title>TRAMASS</title>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="apple-touch-icon" href="apple-touch-icon.png">
          <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
  <!--        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>-->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
          <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
          <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
          <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
          <style>
              html,body{
                  font-family: "Montserrat", sans-serif;
              }
          </style>
      </head>
    <body>

        <section id="scroll_navbar">
          <div class="container-fluid">
             <div class="container">
                  <div class="row">
                    <nav class="navbar">
                          <div class="container-fluid">
                                <div class="navbar-header col-md-3 col-sm-12 col-xs-12 ">
                                    <a class="navbar-brand" href="{{ url('/') }}"><span>TRA</span>MASS</a>
                                </div>
                                <ul class="nav navbar-nav navbar-right">
                                      @if (Auth::guest())

                                              <li class="active"><a href="{{ url('/') }}">HOME</a></li>
                                              <li><a href="{{ url('/about') }}">ABOUT US</a></li>
                                              <li><a href="{{ url('/login') }}">LOG IN</a></li>
                                              <li><a href="{{ url('/register') }}">SIGN UP</a></li>

                                      @else
                                          <li class="dropdown">
                                              <a href="/profile-id/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                  {{ Auth::user()->name }} <span class="caret"></span>
                                              </a>

                                              <ul class="dropdown-menu" role="menu">
                                                  <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                              </ul>
                                          </li>
                                      @endif
                                </ul>
                          </div>
                    </nav>
                </div>
              </div>
          </div>

        </section>

        <!-- header start -->

        <section id="header">
              <div class="col-md-12">
                  <div class="row">
                    <nav class="navbar">
                          <div class="container-fluid">
                                <div class="navbar-header">

                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                        <a class="navbar-brand" href="{{ url('/') }}"><span>T</span></a>
                                    </button>

                                    <a class="hidden-xs  navbar-brand" href="{{ url('/')}}"><span>TRA</span>MASS</a>

                                </div>

                                <div class="collapse navbar-collapse" id="myNavbar">

                                  <ul class="nav navbar-nav navbar-right">
                                      <li class="active"><a href="{{ url('/') }}">HOME</a></li>
                                      <li><a href="{{ url('/about') }}">ABOUT US</a></li>
                                      <li><a href="{{ url('/login') }}">LOG IN</a></li>
                                      <li><a href="{{ url('/register') }}">SIGN UP</a></li>
                                  </ul>

                                </div>
                          </div>
                    </nav>
                   </div>
                       @yield('header')
              </div>
        </section>

        <!-- header ending -->

       @yield('content')

       <!-- footer start -->

        <section id="footer">
          <div class="container">


                  <div class="col-md-7">

                      <div class="row">
                        <h1> 8901 Marmora road,
                            <br> Glasgow, D04 89GR <br>
                            +1 (800) 2345 6789</h1>
                            <div class="line">

                            </div>
                      </div>

                    <div class="row">
                       <h2>CONTACT US</h2>

                    </div>
                    <div class="row">
                      <input type="text" name="name" value="" placeholder="Your name"><br>
                      <input type="text" name="name" value="" placeholder="Your email"><br>
                      <textarea name="textarea" rows="1" cols="40" placeholder="Your message"></textarea><br>
                    </div>

                    <div class="row">
                      <button>SEND</button>
                    </div>
                    <div class="row">
                      <span>Tramass © 2016 • Privacy Policy</span>
                    </div>

               </div>

               <div class="col-md-5">
                 <div class="row plan">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26081603.294420466!2d-95.677068!3d37.06250000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1473521487781" width="370" height="420" frameborder="2" style="border:0" allowfullscreen></iframe>

                 </div>
                 <ul>
                   <li><a href="www.facebook.com">Facebook</a></li>
                   <li><a href="www.twitter.com">Twitter</a></li>
                   <li><a href="www.youtube.com">YouTube</a></li>
                   <li><a href="www.google.com">Google +</a></li>
                   <li><a href="www.pinterest.com">Pinterest</a></li>

                 </ul>

               </div>

          </div>
         </section>

        <!-- footer ending -->

<!--        <script src="/ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
        <script src="/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="/js/vendor/bootstrap.min.js"></script>
<!--        <script src="/ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
        <script src="/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="/js/vendor/bootstrap.min.js"></script>
<!--        <script src="/js/main.js"></script>-->

        <script>
            $(document).scroll(function(){
                var wScroll = $(this).scrollTop();

                if(wScroll > $('#header').offset().top * 1.5){

                    $( "#scroll_navbar" ).slideDown( "fast", function() {
                        // Animation complete.
                    });

                };
                if(wScroll <= $('#header').offset().top * 1.5){
                    $( "#scroll_navbar" ).slideUp( "fast", function() {
                        // Animation complete.
                    });

                };

            })
        </script>

        @yield('script')

    </body>
</html>
