<x-app-layout>
  <div class="mx-auto my-10 max-w-7xl">
    <!-- Create Button -->
    <div class="mb-6 flex justify-end">
      <a href="{{ route('service.create') }}"
        class="rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700">
        Create
      </a>
    </div>
    <!-- Title Input -->
    <form action="{{ route('service.titleStore') }}" method="post">
      @csrf
      <div class="flex items-center space-x-4 mb-10">
        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title') ?? $serviceTitle->title ?? '' }}"
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
          placeholder="Write your title">
        @error('title')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        <!-- Save Button -->
        <button class="mt-6 {{$serviceTitle ? 'bg-orange-500' : 'bg-blue-500'}}  text-white font-bold py-2 px-4 rounded"
          type="submit">{{$serviceTitle ? 'Update': 'Save'}}</button>
      </div>
    </form>
    <!-- Table -->
    <div class="overflow-x-auto rounded-lg bg-white shadow-md">
      <table class="w-full table-auto border-collapse border border-gray-200">
        <thead class="bg-gray-100">
          <tr>
            <th class="border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600">SL</th>
            <th class="text-nowrap border border-gray-300 px-4 py-2 text-center text-sm font-medium text-gray-600">Title
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
              {{ $data->url_title }}
            </td>
            <td class="text-nowrap border border-gray-300 px-4 py-2 text-center text-sm text-gray-700">
              {{ $data->url }}
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