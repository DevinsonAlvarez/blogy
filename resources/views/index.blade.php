@extends('layout')

@section('content')
    <div class="">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold mb-4">Posts</h2>
            <div>
                <a href="{{ route('create') }}"
                    class="bg-white text-black font-medium rounded hover:bg-neutral-200 px-2 py-1 flex justify-center items-center">New
                    Post</a>
            </div>
        </div>
        @if (session('success'))
            <x-alert type="success" :message="session('success')" />
        @endif
        @if (session('error'))
            <x-alert type="error" :message="session('error')" />
        @endif
        <div class="space-y-4">
            @foreach ($posts as $post)
                <x-post :title="$post->title" :content="$post->content" :image="$post->image" />
            @endforeach
        </div>
    </div>
@endsection
