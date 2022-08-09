@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです</p>
    <p>必要なだけ記述できます</p>

    {{-- @component('components.message')
        @slot('msg_title')
            CAUTION!
        @endslot

        @slot('msg_content')
            これはメッセージの表示
        @endslot
    @endcomponent --}}

    @include('components.message', ['msg_title' => 'OK', 'msg_content' => 'サブビューです'])

@endsection

@section('footer')
    Copyright 2022 Watelia.
@endsection
