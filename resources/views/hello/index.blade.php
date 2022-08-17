@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>{{ $msg }}</p>
    @if (count($errors) > 0)
        <p>入力に問題があります。</p>
    @endif
    <form action="/hello" method="post">
        <table>
            @csrf
            @error('name')
                <tr>
                    <th style="color: red">ERROR!</th>
                    <td>{{ $errors->first('name') }}</td>
                </tr>
            @enderror
            <tr>
                <th>name: </th>
                <td><input type="text" name="name" value="{{ old('name') }}"></td>
            </tr>
            @error('mail')
                <tr>
                    <th style="color: red">ERROR!</th>
                    <td>{{ $errors->first('mail') }}</td>
                </tr>
            @enderror

            <tr>
                <th>mail: </th>
                <td><input type="email" name="mail" value="{{ old('mail') }}"></td>
            </tr>
            @error('age')
                <tr>
                    <th style="color: red">ERROR!</th>
                    <td>{{ $errors->first('age') }}</td>
                </tr>
            @enderror
            <tr>
                <th>age: </th>
                <td><input type="number" name="age" value="{{ old('age') }}"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="send"></td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')
    Copyright 2022 Watelia.
@endsection
