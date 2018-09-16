<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Supplier List</title>
        
        <!-- CSS と JavaScript -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
    </head>
    
    
    <style>
            .nav-item{
                margin :1em;
            }
    </style>
        
        <div class="container">
            <nav class="breadcrumb">
                <!-- ナビバーの内容 -->
                <a class="navbar-brand" href="/">TOP</a>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="/supplier_index">サプライヤー登録</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/contract_store">契約登録</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/order_store">注文登録</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/development_store">開発登録</a>
                      </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                          <li><a href="{{ url('/login') }}">Login</a></li>
                          <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                          <li class="dropdown">

                          <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                     </ul>
                </li>
             @endif
        </ul>
                  </div>
            </nav>
        </div>
        

        @yield('content')
    </body>
</html>
