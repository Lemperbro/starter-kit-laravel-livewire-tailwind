@props(['index' => 0, 'colspan' => 100])

<tr 
    x-show="expanded[{{ $index }}]" 
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 transform scale-95"
    x-transition:enter-end="opacity-100 transform scale-100"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100 transform scale-100"
    x-transition:leave-end="opacity-0 transform scale-95"
    class="bg-gray-50">
    <td colspan="{{ $colspan }}" class="p-0">
        <div class="p-4 border-t border-gray-200">
            {{ $slot }}
        </div>
    </td>
</tr>