

<h1>hello admin</h1>
<a href="#" onclick="event.preventDefault(); document.getElementById('admin-logout-form').submit();">Logout</a>

<form id="admin-logout-form" method="POST" action="{{ route('admin.logout') }}" style="display: none;">
    @csrf
</form>
