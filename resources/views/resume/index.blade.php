<x-app-layout>
    <div class="max-w-7xl mx-auto my-10">
        <!-- Create Button -->
        <div class="flex justify-end mb-6">
            <a href="{{ route('resume.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Create
            </a>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="table-auto w-full border-collapse border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600">SL
                        </th>
                        <th
                            class="border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600  text-nowrap">
                            Title</th>
                        <th
                            class="border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600 text-nowrap">
                            Working Years</th>
                        <th class="border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600">
                            position</th>
                        <th class="border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600">
                            Agency Name</th>
                        <th class="border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600">
                            Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($resumes as $data)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2 text-center text-sm text-gray-700">
                            {{ $loop->iteration }}
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center text-sm text-gray-700 text-nowrap">
                            {{ $data->title }}
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center text-sm text-gray-700 text-nowrap">
                            {{ $data->working_years }}
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-start text-sm text-gray-700">
                            {{ $data->position }}
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-start text-sm text-gray-700">
                            {{ $data->Agency_name }}
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center text-sm text-gray-700">
                            <a href="{{ route('resume.edit', $data->id) }}"
                                class="text-white p-2  bg-blue-600 rounded-md hover:hover-indigo-900 font-medium">
                                Edit
                            </a>
                            <div class="mt-5">
                                <a href="{{ route('resume.delete', $data->id) }}"
                                    onclick="return confirm('Are you sure?')"
                                    class="bg-red-600 text-white p-2 mt-10 rounded-md hover:bg-red-800 font-medium">
                                    Delete
                                </a>
                            </div>
                            <div class="mt-5">
                                <a href="{{ route('resume.status', $data->id) }}"
                                    onclick="return confirm('Are you sure?')"
                                    class="{{ $data->status == '1' ? 'bg-green-600' : 'bg-blue-600' }} mt-10 rounded-md p-2 font-medium text-white hover:bg-green-800">
                                    {{ $data->status == '1' ? 'Published' : 'Unpublished' }}
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