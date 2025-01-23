<x-app-layout>e
  <div class="mx-auto my-10 max-w-7xl">
    <!-- Create Button -->
    <div class="mb-6 flex justify-end">
      <a href="{{ route('home.create') }}" class="rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700">
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
              -1</th>
            <th class="text-nowrap border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600">Title
              -2</th>
            <th class="text-nowrap border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600">Focus
              Title</th>
            <th class="border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600">Description</th>
            <th class="border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($homes as $data)
          <tr class="hover:bg-gray-50">
            <td class="border border-gray-300 px-4 py-2 text-center text-sm text-gray-700">
              {{ $loop->iteration }}
            </td>
            <td class="text-nowrap border border-gray-300 px-4 py-2 text-center text-sm text-gray-700">
              {{ $data->title_1 }}
            </td>
            <td class="text-nowrap border border-gray-300 px-4 py-2 text-center text-sm text-gray-700">
              {{ $data->title_2 }}
            </td>
            <td class="text-nowrap border border-gray-300 px-4 py-2 text-center text-sm text-gray-700">
              {{ $data->focus_title }}
            </td>
            <td class="border border-gray-300 px-4 py-2 text-start text-sm text-gray-700">
              {{ $data->description }}
            </td>
            <td class="border border-gray-300 px-4 py-2 text-center text-sm text-gray-700">
              <a href="{{ route('home.edit', $data->id) }}"
                class="hover:hover-indigo-900 rounded-md bg-blue-600 p-2 font-medium text-white">
                Edit
              </a>
              <div class="mt-5">
                <a href="{{ route('home.delete', $data->id) }}" onclick="return confirm('Are you sure?')"
                  class="mt-10 rounded-md bg-red-600 p-2 font-medium text-white hover:bg-red-800">
                  Delete
                </a>
              </div>
              <div class="mt-5">
                <a href="{{ route('home.status', $data->id) }}" onclick="return confirm('Are you sure?')"
                  class="{{ $data->status == '1' ? 'bg-green-600' : 'bg-blue-600' }} mt-10 rounded-md p-2 font-medium text-white hover:bg-green-800">
                  {{ $data->status == '1' ? 'Published' : 'Unpublished' }}
                </a>
                {{--
                <x-text-input id="status" name="status" value="{{ $data->status }}" />
                <x-primary-button class="mt-10 rounded-md p-2 font-medium text-white bg-green-600 hover:bg-green-800">
                  Hire Me!
                </x-primary-button>
                <label class="relative inline-flex cursor-pointer items-center">
                  <input type="checkbox" value="" class="peer sr-only">
                  <div
                    class="group peer h-12 w-24 rounded-full bg-gradient-to-r from-rose-400 to-red-900 shadow-md outline-none ring-0 duration-1000 [box-shadow:1px_3px_0px_0px_#000] after:absolute after:left-1 after:top-1 after:h-10 after:w-10 after:rounded-full after:outline-none after:duration-300 after:content-[''] after:[background:#0D2B39] peer-checked:bg-gradient-to-r peer-checked:from-emerald-500 peer-checked:to-emerald-900 peer-checked:after:translate-x-12 peer-checked:after:rotate-180 peer-hover:after:scale-95 peer-focus:outline-none">
                  </div>
                </label> --}}
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</x-app-layout>