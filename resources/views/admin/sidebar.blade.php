<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="{{ asset('adminCSS/img/avatar-6.jpg') }}" alt="..."
                    class="img-fluid rounded-circle"></div>
            <div class="title">
                <h1 class="h5">Mark Stephen</h1>
                <p>Web Designer</p>
            </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
            <li class=" {{ Request::is('admin/dashboard') ? 'active' : ''}} " ><a href=" {{ url('admin/dashboard') }} "> <i class="icon-home"></i>Home </a></li>
            <li class="{{ Request::is('view_category') ? 'active' : ''}}"><a href="{{ url('view_category')}}"> <i class="icon-grid"></i>Category </a></li>

            <li class="{{ Request::is('add_product') || Request::is('view_product') ? 'active' : ''}}"><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i
                        class="icon-windows"></i>Products </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{ url('add_product')}}">Add Product</a></li>
                    <li><a href="{{ url('view_product')}}">View Product</a></li>
                    
                </ul>
            </li>
            <li class="{{ Request::is('view_order') ? 'active' : ''}}"><a href="{{ url('view_order')}}"> <i class="icon-grid"></i>View Orders</a></li>
             {{-- see customer view page  --}}
             <li class="{{ Request::is('dashboard') ? 'active' : ''}}"><a href="{{ url('/dashboard')}}"> <i class="icon-grid"></i>View Customers page</a></li>

        </ul>
    </nav>
