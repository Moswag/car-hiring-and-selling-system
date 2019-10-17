<nav class="slide-menu">
@if(auth()->user()->role=\App\MyConstants::USER_ADMIN)
    <ul class="parent-menu">
        <li class="menu-item-has-children"> <a title=""><i class="fa fa-laptop"></i><span>Admin</span></a>
            <ul class="mega">
                <li><a href="{{route('add_admin')}}" title="">Add Admin</a></li>
                <li><a href="{{route('view_admins')}}">View Admins</a></li>
            </ul>
        </li>
        <li class="menu-item-has-children"> <a title=""><i class="fa fa-shopping-cart"></i><span>Companies</span></a>
            <ul class="mega">
                <li><a href="{{route('add_company')}}" title="">Add Company</a></li>
                <li><a href="{{route('view_companies')}}">View Companies</a></li>
            </ul>
        </li>

        <li class="menu-item-has-children">
            <a title=""><i class="fa fa-flag"></i><span>Tokens</span></a>
            <ul>
                <li><a href="{{route('add_token')}}">Add Token</a></li>
                <li><a href="{{route('view_tokens')}}">View Tokens</a></li>
            </ul>
        </li>

    </ul>
    @elseif(auth()->user()->role==\App\MyConstants::USER_COMPANY_ADMIN)
        <nav class="slide-menu">

            <ul class="parent-menu">

                <li class="menu-item-has-children"> <a title=""><i class="fa fa-laptop"></i><span>Cars</span></a>
                    <ul class="mega">
                        <li><a href="{{route('add_car')}}" title="">Add Car</a></li>
                        <li><a href="{{route('view_admins')}}">View Cars</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"> <a title=""><i class="fa fa-shopping-cart"></i><span>Hiring</span></a>
                    <ul class="mega">
                        <li><a href="{{route('add_hiring')}}" title="">Add Car Hiring</a></li>
                        <li><a href="{{route('view_hirings')}}">View Car Hiring</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children">
                    <a title=""><i class="fa fa-flag"></i><span>Booked</span></a>
                    <ul>
                        <li><a href="{{route('add_booking')}}">Add Token</a></li>
                        <li><a href="{{route('view_bookings')}}">View Tokens</a></li>
                    </ul>
                </li>

            </ul>


        </nav>

    @else
        <nav class="slide-menu">

            <ul class="parent-menu">

                <li class="menu-item-has-children"> <a title=""><i class="fa fa-laptop"></i><span>Cars</span></a>
                    <ul class="mega">
                        <li><a href="{{route('add_car')}}" title="">Add Car</a></li>
                        <li><a href="{{route('view_admins')}}">View Cars</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"> <a title=""><i class="fa fa-shopping-cart"></i><span>Hiring</span></a>
                    <ul class="mega">
                        <li><a href="{{route('add_hiring')}}" title="">Add Car Hiring</a></li>
                        <li><a href="{{route('view_hirings')}}">View Car Hiring</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children">
                    <a title=""><i class="fa fa-flag"></i><span>Booked</span></a>
                    <ul>
                        <li><a href="{{route('add_booking')}}">Add Token</a></li>
                        <li><a href="{{route('view_bookings')}}">View Tokens</a></li>
                    </ul>
                </li>

            </ul>


        </nav>

    @endif
</nav>
