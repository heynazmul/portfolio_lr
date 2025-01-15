<x-app-layout>
    <div class="max-w-7xl mx-auto my-10">
        <!-- Create Button -->
        <div class="flex justify-end mb-6">
            <a href="{{ route('about.create') }}" 
               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Create
            </a>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="table-auto w-full border-collapse border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600">SL</th>
                        <th class="border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600 ">Title</th>
                        <th class="border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600">Focus Title</th>
                        <th class="border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600">Description</th>
                        <th class="border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rows as $data)
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2 text-center text-sm text-gray-700">
                                {{ $loop->iteration }}
                            </td>
                            <td class="border border-gray-300 px-4 py-2 text-center text-sm text-gray-700 text-nowrap">
                                {{ $data->title }}
                            </td>
                            <td class="border border-gray-300 px-4 py-2 text-center text-sm text-gray-700 text-nowrap">
                                {{ $data->focus_title }}
                            </td>
                            <td class="border border-gray-300 px-4 py-2 text-center text-sm text-gray-700">
                                {{ $data->description }}
                            </td>
                            <td class="border border-gray-300 px-4 py-2 text-center text-sm text-gray-700">
                                <a href="{{ route('about.edit', $data->id) }}" 
                                   class="text-white p-2  bg-blue-600 rounded-md hover:hover-indigo-800 font-medium">
                                    Edit
                                </a>
                                <div class="mt-5">
                                <a href="{{ route('about.delete', $data->id) }}" 
                                   onclick="return confirm('Are you sure?')" 
                                   class="bg-red-600 text-white p-2 mt-10 rounded-md hover:bg-red-800 font-medium">
                                    Delete
                                </a>
                                </div>                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
