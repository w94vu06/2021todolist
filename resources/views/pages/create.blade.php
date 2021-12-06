@extends('layouts.master')
@section('content')
    <form action="{{route('store')}}">
        @csrf
        <label>標題</label>
        <input name="title">
        <label>內容</label>
        <input name="content">
        <label>備註</label>
        <input name="remark">
        <button type="submit" class="btn btn-outline-primary">submit</button>
    </form>

@endsection
