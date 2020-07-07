@extends('layouts.app')

@section('top-menu')
    @include('layouts.includes.top_menu')
@endsection

@section('content')
    <div class="container">

        <loader :is-visible="isLoading"></loader>

        <router-view></router-view>

        <vue-progress-bar></vue-progress-bar>

    </div>
@endsection
