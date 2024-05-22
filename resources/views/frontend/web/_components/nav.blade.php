<nav class="mainmenu_wrapper">
    <ul class="mainmenu nav sf-menu">
        <li class="{{Request::is('/')?'active':''}}">
            <a href="{{ route('index') }}">Home</a>
        </li>

        <!-- <li>
            <a href="#">Services</a>
        </li> -->
        <!-- eof pages -->

        <li class="{{Request::is('workforce')?'active':''}}">
            <a href="{{ route('workforce.index') }}">Workforce</a>
        </li>

        <!-- blog -->
        <li class="{{Request::is('jobs')?'active':''}}">
            <a href="{{ route('jobs.index') }}">Jobs</a>
        </li>
        <!-- eof blog -->

        
        <!-- shop -->
        <!-- <li>
            <a href="shop-right.html">Shop</a>
            <ul>
                <li>
                    <a href="shop-right.html">Shop</a>
                </li>
                <li>
                    <a href="product-right.html">Single Product</a>
                </li>
            </ul>
        </li> -->
        <!-- eof shop -->
        
    </ul>
</nav>