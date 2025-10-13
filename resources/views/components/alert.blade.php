<div 
    x-data="{ show: true }" 
    x-show="show"
    x-init="setTimeout(() => show = false, 3000)"
    x-transition
    class="p-4 mb-4 rounded 
    @if($type === 'success') bg-green-100 border border-green-500 text-green-700
    @elseif($type === 'error') bg-red-100 border border-red-500 text-red-700
    @else bg-blue-100 border border-blue-500 text-blue-700
    @endif"
>
    {{ $message }}
</div>
