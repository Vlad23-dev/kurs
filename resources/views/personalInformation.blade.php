@extends('layouts.tmplt')

@section('title-block')
    All Personal Information
@endsection

@section('content')
    <h1>All Personal Information</h1>
    @include('inc.messages')
    @foreach ($data as $item)
        <div class="alert alert-info">
            <h3>{{ $item->name }}</h3>
            <h7>{{ $item->email }}</h7>
            <p>{{ $item->comment }}</p>
        </div>
    @endforeach
@endsection

