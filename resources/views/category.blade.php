@extends('layouts.master')

@section('title', 'Категория ' . $category->name)

@section('content')

    <div class="glass p-2">
    <h1>
        {{$category->name}} {{ $category->products->count() }}
    </h1>
        {{ $category->description }}
    </div>
    <div class="row">
        @foreach($category->products as $product)
            @include('layouts.card', compact('product'))
        @endforeach
    </div>
@endsection
