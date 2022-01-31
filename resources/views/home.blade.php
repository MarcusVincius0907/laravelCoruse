@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/images/fotoPerfil.png" class="col-12 rounded-circle" style="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{$user->username}}</div>

                    {{-- <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button> --}}
                </div>

                {{--  @can('update', $user->profile)
                        <a href="/p/create">Add New Post</a>
                    @endcan
 --}}
            </div>

            {{-- @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan --}}

            <div class="d-flex">
                <div class="pe-5"><strong>10</strong> posts</div>
                <div class="pe-5"><strong>133</strong> followers</div>
                <div class="pe-5"><strong>200</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">Marcus Dev</div>
            <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</div>
            <div><a href="#">mvleite0908@gmail.com</a></div>
        </div>
    </div>

    <div class="row pt-5">
            <div class="col-4 pb-4">
                <a href="">
                    <img src="/images/fotoPerfil.png" class="w-100">
                </a>
            </div>
            <div class="col-4 pb-4">
                <a href="">
                    <img src="/images/fotoPerfil.png" class="w-100">
                </a>
            </div>
            <div class="col-4 pb-4">
                <a href="">
                    <img src="/images/fotoPerfil.png" class="w-100">
                </a>
            </div>
    </div>
</div>
@endsection
