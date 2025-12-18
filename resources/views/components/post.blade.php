@props(['title', 'content', 'image' => null])

<div class="border border-neutral-700 mb-4 overflow-y-auto flex">
    @if ($image)
        <div class="">
            <img src="{{ asset('storage/' . $image) }}" alt="Post Image"
                class="w-full h-auto max-h-[400px] object-contain rounded">
        </div>
    @endif
    <div class="p-4">
        <h3 class="text-lg font-semibold mb-2">{{ $title }}</h3>
        <p class="text-gray-300">{{ $content }}</p>
    </div>
</div>
