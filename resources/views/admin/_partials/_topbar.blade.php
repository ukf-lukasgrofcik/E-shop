<div class="topbar">

    <div class="topbar-logo">
        <a href="{{ route('web.home') }}">
            <div class="logo"></div>
        </a>
    </div>

    <div class="topbar-right">
        <div class="topbar-user">
            <div class="topbar-username">
                {{ auth()->user()->full_name }}
            </div>

            <div class="topbar-usericon"></div>

            <div class="topbar-usermenu">
                <a href="#" class="topbar-usermenu-item">Profile</a>
                <a href="#" class="topbar-usermenu-item">Password</a>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="topbar-usermenu-item-logout text-danger" type="submit">Log Out</button>
                </form>
            </div>
        </div>
    </div>

</div>
