<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Item
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form method="POST" action="{{ route('items.update', $item->id) }}">
                    @csrf
                    @method('PUT')
                    
                    <div class="grid grid-cols-1 gap-6">
                        <!-- Same fields as create form with existing values -->
                        <div>
                            <label>Item Name</label>
                            <input type="text" name="item_name" value="{{ $item->item_name }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                        </div>
                        
                        <!-- Repeat for other fields (tax_per, hsn_code, rate) -->
                        
                        <div>
                            <label>Unit of Measurement</label>
                            <select name="uom" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                @foreach($uomOptions as $option)
                                    <option value="{{ $option }}" {{ $item->uom == $option ? 'selected' : '' }}>{{ $option }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>