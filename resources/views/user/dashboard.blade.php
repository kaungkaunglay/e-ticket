@extends('includes.layout')

@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
<style>
    .profile-avatar {
        width: 502px;
        height: 189px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #fff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    /* .profile-info {
        background: #f9fafb;
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px;
    }

    .profile-info .info-item {
        margin-bottom: 15px;
    }

    .profile-info .info-label {
        font-size: 14px;
        color: #6b7280;
        margin-bottom: 5px;
    }

    .profile-info .info-value {
        font-size: 16px;
        color: #111827;
        font-weight: 500;
    } */

    .profile-actions {
        margin-top: 30px;
        text-align: center;
    }

    .profile-actions .btn {
        margin: 5px;
    }
</style>
@endsection

@section('contents')

<div class="">
    <div class="">
        <div class="">
            <!-- <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">
                <div class="col-auto">
                    <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">個人情報</button>
                </div>
                <div class="col-auto">
                    <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button" data-tab-target=".-tab-item-2">予約履歴</button>
                </div>
                <div class="col-auto">
                    <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button" data-tab-target=".-tab-item-4">お気に入りの注文</button>
                </div>
                <div class="col-auto">
                    <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button" data-tab-target=".-tab-item-3">パスワードを変更</button>
                </div>
            </div> -->

                <div class="tabs__content pt-1 js-tabs-content" style="background-color: white;">
                    @include('user.personal-info', ['user' => $user]) 
                    @include('user.location-info', ['bookings' => $bookings]) 
                    @include('user.change-password', ['user' => $user]) 
                    @include('user.favorite-orders', ['favorites' => $favorites]) 
                </div>
        </div>
    </div>
    <br>
</div>
@endsection