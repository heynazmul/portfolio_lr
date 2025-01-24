<x-app-layout>
  <div class="mx-auto my-10 max-w-7xl">
    <!-- Create Button -->
    <div class="mb-6 flex justify-end">
      <a href="{{ route('service.create') }}"
        class="rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700">
        Create
      </a>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto rounded-lg bg-white shadow-md">
      <table class="w-full table-auto border-collapse border border-gray-200">
        <thead class="bg-gray-100">
          <tr>
            <th class="border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600">SL</th>
            <th class="text-nowrap border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600">Title
            </th>
            <th class="text-nowrap border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600">
              Subtitle
            </th>
            <th class="text-nowrap border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600">
              url title</th>
            <th class="text-nowrap border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600">
              url subtitle</th>

            <th class="border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600">Description</th>
            <th class="border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($services as $data)
          <tr class="hover:bg-gray-50">
            <td class="border border-gray-300 px-4 py-2 text-center text-sm text-gray-700">
              {{ $loop->iteration }}
            </td>
            <td class="text-nowrap border border-gray-300 px-4 py-2 text-center text-sm text-gray-700">
              {{ $data->title }}
            </td>
            <td class="text-nowrap border border-gray-300 px-4 py-2 text-center text-sm text-gray-700">
              {{ $data->subtitle }}
            </td>
            <td class="text-nowrap border border-gray-300 px-4 py-2 text-center text-sm text-gray-700">
              {{ $data->url }}
            </td>
            <td class="text-nowrap border border-gray-300 px-4 py-2 text-center text-sm text-gray-700">
              {{ $data->url_title }}
            </td>
            <td class="border border-gray-300 px-4 py-2 text-start text-sm text-gray-700">
              {{ $data->description }}
            </td>
            <td class="border border-gray-300 px-4 py-2 text-center text-sm text-gray-700">
              <a href="{{ route('service.edit', $data->id) }}"
                class="hover:hover-indigo-900 rounded-md bg-blue-600 p-2 font-medium text-white">
                Edit
              </a>
              <div class="mt-5">
                <a href="{{ route('service.delete', $data->id) }}" onclick="return confirm('Are you sure?')"
                  class="mt-10 rounded-md bg-red-600 p-2 font-medium text-white hover:bg-red-800">
                  Delete
                </a>
              </div>
              <div class="mt-5">
                <a href="{{ route('service.status', $data->id) }}" onclick="return confirm('Are you sure?')"
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