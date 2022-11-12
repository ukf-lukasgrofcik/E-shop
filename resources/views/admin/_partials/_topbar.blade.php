<style>
    .topbar {
        position: fixed;
        height: 60px;
        width: 100%;
        display: flex;
    }
    .topbar-right {
        box-shadow: 0 2px 4px 0 #e8e8e8;
        width: max-content;
        margin-left: auto;
        flex: 1;
    }
    .topbar-logo {
        height: 100%;
        width: 200px;
        background-color: #dddddd;
    }
    .topbar-user {
        position: relative;
        display: flex;
        margin-left: auto;
        width: max-content;
        padding: 14px;
    }
    .topbar-usericon {
        width: 30px;
        height: 30px;
        background-color: #dddddd;
        clip-path: path('M0,30 C5,20 15,20 10,15 C5,0 15,5 23,3 C15,5 25,0 20,15 C15,20 25,20 30,30 Z');
    }
    .topbar-username {
        padding: 4px;
    }
    .topbar-usermenu {
        overflow: hidden;
        width: 100%;
        max-height: 0;
        position: absolute;
        top: 60px;
        left: 0;
        background-color: #fff;
        box-shadow: -2px 2px 4px 0 #e8e8e8;
        transition: max-height .3s ease;
    }
    .topbar-user:hover .topbar-usermenu {
        max-height: 150px;
    }
    .topbar-usermenu-item {
        display: block;
        padding: 5px 10px;
        text-decoration: none;
        color: initial;
        transition: background-color .3s ease;
    }
    .topbar-usermenu-item:hover {
        background-color: #e8e8e8;
        color: initial;
    }
    .topbar-usermenu-item-logout {
        display: block;
        padding: 5px 10px;
        text-decoration: none;
        color: initial;
        background-color: initial;
        transition: background-color .3s ease;
        border: none;
        width: 100%;
        text-align: left;
    }
    .topbar-usermenu-item-logout:hover {
        background-color: #e8e8e8;
        color: initial;
    }

    .logo {
        width: 50px;
        height: 50px;
        margin: 5px auto;
        position: relative;
        background: conic-gradient(#ff0000 0deg, #00ff00 120deg, #0000ff 240deg, #ff0000 360deg);
        animation: logo 2s infinite linear;
    }
    .logo::after {
        content: '';
        position: absolute;
        width: 8px;
        height: 8px;
        top: 16px;
        left: 16px;
        border: 9px solid transparent;
        background-color: #fff;
        animation: logo-after 2s infinite linear;
    }
    @keyframes logo {
        0% { clip-path: path('M0 0 L0 50 L50 50 L50 0 Z'); }
        50% { clip-path: path('M25 15 L25 35 L25 50 L25 0 Z'); }
        100% { clip-path: path('M50 0 L50 50 L0 50 L0 0 Z'); }
    }
    @keyframes logo-after {
        0% { clip-path: path('M18 0 L18 18 L0 18 L0 0 Z'); }
        50% { clip-path: path('M9 5.4 L9 12.6 L9 18 L9 0 Z'); }
        100% { clip-path: path('M0 0 L0 18 L18 18 L18 0 Z'); }
    }
</style>

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
                <form action="{{ route('auth.logout') }}" method="post">
                    @csrf
                    <button class="topbar-usermenu-item-logout text-danger" type="submit">Log Out</button>
                </form>
            </div>
        </div>
    </div>

</div>
