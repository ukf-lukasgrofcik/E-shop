<style>
    .menu {
        position: fixed;
        top: 60px;
        display: inline-block;
        min-height: calc(100vh - 60px);
        background-color: #dddddd;
        width: 200px;
    }
    .menu-label {
        text-align: center;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 2px;
    }
    .menu-items {
        margin-top: 10px;
    }
    .menu-item {
        padding: 5px 10px;
        transition: background-color .3s ease;
        display: block;
        text-decoration: none;
        color: initial;
    }
    .menu-item:hover {
        background-color: #bbbbbb;
        color: initial;
    }
</style>

<div class="menu">
    <div class="menu-label">E-shop System</div>

    <div class="menu-items">
        <a href="{{ route('dashboard.index') }}" class="menu-item">Dashboard</a>
        <a href="#" class="menu-item">Users</a>
        <a href="#" class="menu-item">Items</a>
    </div>
</div>
