@props(['title', 'content', 'image' => null])

<div class="border border-neutral-700 p-4 mb-4 max-h-60 overflow-y-auto">
    @if ($image)
        <div class="mb-4">
            <img src="{{ $image }}" alt="Post Image" class="w-full h-auto rounded">
        </div>
    @endif
    <h3 class="text-lg font-semibold mb-2">{{ $title }}</h3>
    <p class="text-gray-300">{{ $content }}</p>
</div>
