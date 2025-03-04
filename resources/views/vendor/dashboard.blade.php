

<h1>Vendor admin</h1>
<a href="#" onclick="event.preventDefault(); document.getElementById('admin-logout-form').submit();">Logout</a>

<form id="admin-logout-form" method="POST" action="{{ route('vendor.logout') }}" style="display: none;">
    @csrf
</form>
