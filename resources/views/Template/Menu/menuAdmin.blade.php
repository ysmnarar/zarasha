<li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">Admin</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.index.category') }}">Category
                    Product</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.index.product') }}">Product</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('index.chart')}}">Chart</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.index.data.customer')}}">Data Customer</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Transaction</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ asset('pages/ui-features/typography.html') }}">Admin</a>
            </li>
        </ul>
    </div>
</li>
