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

    .profile-info {
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
    }

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

<div class="dashboard__content bg-light-2">
    <div class="py-30 px-30 rounded-4 bg-white shadow-3">
        <div class="tabs -underline-2 js-tabs">
            <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">
                <div class="col-auto">
                    <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">Personal Information</button>
                </div>
                <div class="col-auto">
                    <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button" data-tab-target=".-tab-item-2">Location Information</button>
                </div>
                <div class="col-auto">
                    <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button" data-tab-target=".-tab-item-3">Change Password</button>
                </div>
            </div>

            <div class="tabs__content pt-30 js-tabs-content">
                <div class="tabs__pane -tab-item-1 is-tab-el-active">
                    <div class="row y-gap-30 items-center">
                        <div class="col-auto">
                            <div class="d-flex ratio ratio-1:1 w-200">
                                <img src="{{ asset('img/misc/avatar-1.png') }}"  class="profile-avatar">
                                <div class="d-flex justify-end px-10 py-10 h-100 w-1/1 absolute">
                                    <div class="size-40 bg-white rounded-4">
                                        <i class="icon-trash text-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <h4 class="text-22 fw-500">Name: {{ $user->first_name }} </h4>
                          
                            <div class="d-inline-block mt-15">
                                <button class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                                    <i class="icon-upload-file text-20 mr-10"></i>
                                    Upload New Photo
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="border-top-light mt-30 mb-30"></div>

                    <div class="profile-info">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-12 info-item">
                                <div class="info-label">First Name</div>
                                <div class="info-value">{{ $user->first_name }}</div>
                            </div>

                            <div class="col-12 info-item">
                                <div class="info-label">Last Name</div>
                                <div class="info-value">{{ $user->last_name }}</div>
                            </div>

                            <div class="col-12 info-item">
                                <div class="info-label">Email</div>
                                <div class="info-value">{{ $user->email }}</div>
                            </div>

                            <div class="col-12 info-item">
                                <div class="info-label">Phone Number</div>
                                <div class="info-value">{{ $user->phone }}</div>
                            </div>

                            <!-- <div class="col-12 info-item">
                                <div class="info-label">Role</div>
                                <div class="info-value">{{ $user->role }}</div>
                            </div> -->

                            <div class="col-12 info-item">
                                <div class="info-label">Created At</div>
                                <div class="info-value">{{ $user->created_at->format('Y-m-d H:i:s') }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="profile-actions">
                        <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                            Save Changes <div class="icon-arrow-top-right ml-15"></div>
                        </a>
                    </div>
                </div>

                <div class="tabs__pane -tab-item-2">
                    <div class="col-xl-9">
                       
                    </div>
                </div>

                <div class="tabs__pane -tab-item-3">
                    <div class="col-xl-9">
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
@endsection