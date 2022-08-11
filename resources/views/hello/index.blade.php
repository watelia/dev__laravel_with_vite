@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです</p>
    <ul>
        @each('components.item', $data, 'item')
    </ul>

    @component('components.message')
        @slot('msg_title')
            CAUTION!
        @endslot

        @slot('msg_content')
            これはメッセージの表示
        @endslot
    @endcomponent
@endsection

@section('footer')
    Copyright 2022 Watelia.
@endsection
