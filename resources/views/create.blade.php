@extends('layout')

@section('content')
    <div class="">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold mb-4">New Post</h2>
        </div>
        @if ($errors->any())
            <x-alert type="error" :message="$errors->first()" />
        @endif
        <div class="">
            <form action="{{ route('store') }}" method="post">
            @csrf
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-300">Title</label>
                    <input type="text" name="title" id="title" class="mt-1 block w-full border border-neutral-700 rounded-md bg-neutral-800 text-white p-2">
                </div>
                <div class="mb-4">
                    <label for="content" class="block text-sm font-medium text-gray-300">Content</label>
                    <textarea name="content" id="content" rows="4" class="mt-1 block w-full border border-neutral-700 rounded-md bg-neutral-800 text-white p-2"></textarea>
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-300">Image URL (optional)</label>
                    <input type="text" name="image" id="image" class="mt-1 block w-full border border-neutral-700 rounded-md bg-neutral-800 text-white p-2">
                </div>
                <button type="submit"
                    class="bg-white text-black font-medium rounded hover:bg-neutral-200 px-4 py-2 cursor-pointer">Create Post</button>
            </form>
        </div>
    </div>
@endsection
