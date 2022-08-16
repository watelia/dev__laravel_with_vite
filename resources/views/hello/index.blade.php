@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです</p>
    <p>これは、<middleware>google.com</middleware>へのリンクです。</p>
    <p>これは、<middleware>github.com</middleware>へのリンクです。</p>
@endsection

@section('footer')
    Copyright 2022 Watelia.
@endsection
