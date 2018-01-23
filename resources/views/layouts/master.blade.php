
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to MAJ shopping centre - #{pagetitle}</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"/>
        <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    </head>


    <body>

    <div class="container-fluid" style="background-color: #373a48">

        <div class="row">
            <div class="col-sm-3">
           <a href="{{ route('layouts.index') }}"><img src="{{ URL::asset('images/MAJ.png') }}" style="margin-top: 10px;" alt="company logo" width=auto height="100px"/></a>
            </div>

        <div class="col-sm-8" style="margin-top:25px;">
            <div class="input-group">
                <input class="form-control rounded-0 py-2" type="search" id="example-search-input"  placeholder="search!">
                <span class="input-group-btn">
        <button class="btn btn-outline-secondary" type="button">
            <i class="fa fa-search"></i>
        </button>
      </span>
            </div>
        </div>
        <div class="col-sm-2">

        </div>
        </div>



        <div class="row">
            <div class="col-sm-12">
                <nav class="nav nav-tabs nav-fill" style="padding:5px">
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle"  data-toggle="dropdown"  role="button" href="#"
                           aria-haspopup="true" aria-expanded="false">Shop by department</a>
                        <div class="dropdown-menu" aria-labelledby="Shop by department">
                            <a class="dropdown-item" href="{{ route('ProductDetails.clothingproducts') }}">Clothes</a>
                            <a class="dropdown-item" href="{{ route('ProductDetails.electronicproducts') }}">Electronics</a>
                            <a class="dropdown-item" href="#">Books</a>
                            <a class="dropdown-item" href="#">Home,Kitchen and Pets</a>
                            <a class="dropdown-item" href="#">Jewelry</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        @if(!Auth::check())
                        <a class="nav-link" href="#">Welcome </a></li>
                    @else
                        <a class="nav-link" href="#">{{ Auth::user()->name }}'s Store</a>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ProductDetails.deals') }}">Deals</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('User.giftcards') }}">Gift cards</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8090/MAJ_VENDOR/public/index.php">Sell</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Help</a>
                    </li>
                    @if(!Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ route('login') }}"
                           role="button" aria-haspopup="true" aria-expanded="false">Sign in to Your Account</a>
                        <div class="dropdown-menu" aria-labelledby="Sign in to Your Account">
                            <a href="{{ route('login') }}" class="btn btn-primary" style="width:150px;margin-right: 15px; margin-left: 15px; background-color:palegoldenrod; color: black; border: black" >Sign in</a>
                            <p style="margin-left:25px;font-size:10px;">New Customer?<a href="{{ route('register') }}" style="color:black">Start here</a></p>
                        </div>
                    </li>
                            @else
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                   role="button" aria-haspopup="true" aria-expanded="false">Hello {{ Auth::user()->name }}</a>
                                <div class="dropdown-menu" aria-labelledby={{ Auth::user()->name }}>
                            <a class="dropdown-item" href="{{ route('layouts.user') }}">Your Account</a>
                            <a class="dropdown-item" href="{{ route('Orders.orders') }}">Your Orders</a>
                            <a class="dropdown-item" href="#">Your Wishlist</a>
                            <a class="dropdown-item" href="#">Your Recommendations</a>
                            <a class="dropdown-item" href="#">Your Membership</a>
                            <a class="dropdown-item"href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Not {{ Auth::user()->name }}, Sign Out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                        </li>
                    @endif
                    <li class="nav-item">

                        <a href="{{ route('checkout.getcart') }}" class="twitter"><i class="fa fa-shopping-cart fa-3x"></i>
                        <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQuantity: '' }}</span>
                        </a>
                    </li>
                </nav>
            </div>
        </div>
        </div>

    <br/>


    @yield('content')



    <footer id="myFooter">
        <div class="container">

            <div class="row">
                <div class="col-sm-3 myCols">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 myCols">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="{{ route('help.about') }}">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 myCols">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 myCols">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="social-networks">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
        </div>
        <div class="footer-copyright">
            <p>© 2016 Copyright M.A.J </p>
        </div>


    </footer >
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
            integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
            crossorigin="anonymous"></script>
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
    <script src="{{ URL::asset('js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
</html>
