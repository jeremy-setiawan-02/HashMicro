<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body >
<div class="header">
    <nav style="background-color: #1E90FF;" class="navbar navbar-expand-sm">
	  	<!-- Links -->
	  	<ul class="navbar-nav mr-auto">
		    <li class="nav-item">
		      <a class="nav-link" href="/Dashboard" style="color : black">HashMicro Test</a>
		    </li>
           
	  	</ul>
        <ul class="navbar-nav ml-auto">
            @if(!Session::has('userEmail'))
                <li class="nav-item" style="margin : 0 10px 0 10px">
                    <a href="/Login"><div style="color : black"  >Login</div></a>
                </li>
                <li class="nav-item" style="margin : 0 10px 0 10px">
                    <a href="/Register"><div style="color : black" >Register</div></a>
                </li>
            @else
                <li class="nav-item" style="margin : 0 10px 0 10px">
                    <a href="/Quiz"><div style="color : black" >Quiz</div></a>
                </li>
                <li class="nav-item" style="margin : 0 10px 0 10px">
                    <a href="/Profile"><div style="color : black" >Profile</div></a>
                </li>
                <li class="nav-item" >
                    <a href="/Logout"><div style="color : black"  >Logout</div></a>
                </li>
            @endif
	  	</ul>
	</nav>

    <!-- @if(Session::has('role') && Session::get('role')=='Member')
        <a href="/Cart"><div class="nav">Cart</div></a>


        <a href="/Transaction"><div class="nav">Transaction</div></a>

    @elseif(Session::has('role') && Session::get('role')=='Admin')
        <div class="hov">
            <div class="nav">Manage</div>
            <div class="drop">
                <a href="/AddProduct">Add Product</a>
                <a href="/AddProductType">Add Product Type</a>
                <a href="/AddSideProduct">Add Side Product</a>
                <a href="/ManageUser">Manage User</a>
            </div>
        </div>
    @endif -->

   
</div>
<div class="content">
    @yield('content')
</div>
<script>
</script>
</body>

</html>