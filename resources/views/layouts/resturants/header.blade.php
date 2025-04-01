@php
    use Illuminate\Support\Facades\Route;
@endphp
<div class="row bg-white margin-0">
    <div class="col-12">
        <div class="d-flex justify-content-between  p-3">
            <div class="w-100">
                {{-- <div class=" px-2 d-flex justify-content-between border border-2 rounded-0 border-dark" data-bs-toggle="modal" data-bs-target="#myModal">
                    <div class="" style="width: 15%">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="form-group t-small" style="width: 75%">
                        全国 ラーメン
                    </div>
                    <div class="" style="width: 10%">
                        <small class="t-red t-small  ">検索</small>
                    </div> 

                    
                </div>--}}
                <div class="d-flex justify-content-between border border-2 rounded-0 border-dark px-2" data-bs-toggle="modal" data-bs-target="#myModal">
                    <div class="">
                        <i class="fa-solid fa-magnifying-glass "></i>
                    </div>
                    <div class="text-muted t-small opacity-50 py-1" style="min-width: 180px;">
                        全国 ラーメン
                    </div>
                    <div class="text-end t-red t-small py-1">
                        検索
                    </div>
                </div>
            </div>
            <div class="ps-3 d-flex align-items-center ">
                <i class="fa-solid fa-bars js-menu-toggle fa-lg"></i>
            </div>
        </div>
    </div>

    <div class="col-12 mt-6">
        <div class="w-100 px-2 py-1 bg-red text-white t-small">
            @if (request()->routeIs('restaurant.detail'))
                レストラン詳細
            @else
                現在地近くのレストラン
            @endif
        </div>
    </div>

</div>


<div class='right-side-menu js-right-side-menu'>
    <div class="mt-4 me-3 pt-2">
        <i class="fa-solid fa-xmark fa-xl float-end js-menu-close"></i>
    </div>
    <div class='right-menu-content '>
        
        <ul class='menu__nav text-dark-1'>
            <li class='{{ request()->routeIs('home') ? 'active' : '' }}'>
                <a href='{{ locale_route('home') }}'>ホーム</a>
            </li>
            <li
                class='{{ request()->is('restaurant/search', 'search-price', 'search-checkbox', 'restaurant-lists') ? 'active' : '' }}'>
                <a href='{{ locale_route('restaurant.search') }}'>レストラン</a>
            </li>
            <li class='{{ request()->routeIs('about') ? 'active' : '' }}'>
                <a href='{{ locale_route('about') }}'>私たちについて</a>
            </li>
            <li class='{{ request()->routeIs('support.page') ? 'active' : '' }}'>
                <a href='{{ locale_route('support.page') }}'>サポート</a>
            </li>
            @auth
                @php
                    $user = auth()->user();
                    $role = $user->roles()->first()->id ?? null;
                    $dashboardRoute = '/home';

                    if ($role == 1) {
                        $dashboardRoute = route('admin.dashboard');
                        $logoutRoute = route('admin.logout');
                    } elseif ($role == 2) {
                        $dashboardRoute = route('vendor.dashboard');
                        $logoutRoute = route('vendor.logout');
                    } elseif ($role == 3) {
                        $dashboardRoute = route('user.dashboard');
                        $logoutRoute = route('logout');
                    }
                @endphp
                <li>
                    <a href='{{ $dashboardRoute }}'>ダッシュボード</a>
                </li>
                <li>
                    <form action='{{ $logoutRoute }}' method='POST'>
                        @csrf
                        @method($role == 1 || $role == 2 ? 'POST' : 'GET')
                        <button type='submit'
                            style='background: none; border: none; color: #333; font-size: 16px; cursor: pointer; padding: 0; text-align: left; width: 100%;'>
                            ログアウト
                        </button>
                    </form>
                </li>
            @else
                <li class='{{ request()->routeIs('login') ? 'active' : '' }}'>
                    <a href='{{ locale_route('login') }}'>ログイン</a>
                </li>
                <li class='{{ request()->routeIs('signup') ? 'active' : '' }}'>
                    <a href='{{ locale_route('signup') }}'>登録</a>
                </li>
            @endauth
        </ul>
    </div>
</div>

<!-- Menu Overlay - covers only the 450px frame -->
<div class='menu-overlay js-menu-overlay'></div>
