<x-app-layout>
    <div class="max-w-7xl mx-auto my-10">
        <!-- Create Button -->
        <div class="flex justify-end mb-6">
            <a href="{{ route('home.create') }}" 
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
                        <th class="border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600  text-nowrap">Title -1</th>
                        <th class="border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600  text-nowrap">Title -2</th>
                        <th class="border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600 text-nowrap">Focus Title</th>
                        <th class="border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600">Description</th>
                        <th class="border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($homes as $data)
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2 text-center text-sm text-gray-700">
                                {{ $loop->iteration }}
                            </td>
                            <td class="border border-gray-300 px-4 py-2 text-center text-sm text-gray-700 text-nowrap">
                                {{ $data->title_1 }}
                            </td>
                            <td class="border border-gray-300 px-4 py-2 text-center text-sm text-gray-700 text-nowrap">
                                {{ $data->title_2 }}
                            </td>
                            <td class="border border-gray-300 px-4 py-2 text-center text-sm text-gray-700 text-nowrap">
                                {{ $data->focus_title }}
                            </td>
                            <td class="border border-gray-300 px-4 py-2 text-start text-sm text-gray-700">
                                {{ $data->description }}
                            </td>
                            <td class="border border-gray-300 px-4 py-2 text-center text-sm text-gray-700">
                                <a href="{{ route('home.edit', $data->id) }}" 
                                   class="text-white p-2  bg-blue-600 rounded-md hover:hover-indigo-900 font-medium">
                                    Edit
                                </a>
                                <div class="mt-5">
                                <a href="{{ route('home.delete', $data->id) }}" 
                                   onclick="return confirm('Are you sure?')" 
                                   class="bg-red-600 text-white p-2 mt-10 rounded-md hover:bg-red-800 font-medium">
                                    Delete
                                </a>
                                </div>
                                <div class="mt-5">
                                <a href="{{ route('home.status', $data->id) }}" 
                                   onclick="return confirm('Are you sure?')" 
                                   class=" text-white p-2 mt-10 rounded-md hover:bg-green-800 font-medium {{$data->status == '1' ? 'bg-green-600' : 'bg-blue-600'}}">
                                    {{ $data->status == '1' ? 'Published' : 'Unpublished' }}
                                </a>
               {{--                 
                <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" value="" class="sr-only peer">
                <div class="group peer ring-0 [box-shadow:1px_3px_0px_0px_#000]  bg-gradient-to-r from-rose-400 to-red-900  rounded-full outline-none duration-1000 after:duration-300 w-24 h-12  shadow-md  peer-focus:outline-none  after:content-[''] after:rounded-full after:absolute after:[background:#0D2B39]   peer-checked:after:rotate-180 after:[background:conic-gradient(from_135deg,_#b2a9a9,_#b2a8a8,_#ffffff,_#d7dbd9_,_#ffffff,_#b2a8a8)]  after:outline-none  after:h-10 after:w-10 after:top-1 after:left-1 peer-checked:after:translate-x-12 peer-hover:after:scale-95 peer-checked:bg-gradient-to-r peer-checked:from-emerald-500 peer-checked:to-emerald-900">
                </div>
                </label>
                --}}
                                </div>                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
