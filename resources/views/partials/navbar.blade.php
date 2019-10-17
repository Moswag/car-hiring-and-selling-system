<div class="topbar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="logo"><a href="index-2.html" title=""><img src="images/car.png" height="100" alt=""></a></div>
            </div>
            <div class="col-lg-9">
                <ul class="notify-area">
                    <li>
                        <div class="nav-icon3"> <span></span> <span></span> <span></span> <span></span> </div>
                        <i class="fa fa-navicon nav-icon3"></i>
                    </li>



                </ul>
                <div class="t-search">
                    <form>
                        <input type="text" placeholder="Enter Your Keyword">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>

            </div>
            <div class="col-lg-1">
                <div class="user-head">
                    <div class="admin">
                        <div class="admin-avatar"><img src="images/user.png" height="50" width="50" alt=""> <i class="online"></i> </div>
                    </div>
                    <div class="drop setting"> <span class="drop-head">{{auth()->user()->name}}</span>
                        <ul class="drop-meta">
                            <li> <a href="#" title=""><i class="fa fa-eyedropper"></i>Change Password</a> </li>
                        </ul>
                        <span class="drop-bottom"><a href="{{route('logout')}}" title=""><i class="fa fa-sign-out"></i>log Out</a></span> </div>
                </div>
            </div>
        </div>
    </div>
</div>
