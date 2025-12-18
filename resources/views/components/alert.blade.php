@props(['type' => 'info', 'message'])

<div @class([
    'p-4 mb-4',
    'bg-red-100 text-red-800' => $type === 'error',
    'bg-green-100 text-green-800' => $type === 'success',
    'bg-blue-100 text-blue-800' => $type === 'info',
])>
    {{ $message }}
</div>
