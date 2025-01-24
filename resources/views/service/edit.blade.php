<x-app-layout>
       <div class="max-w-4xl mx-auto p-8">
              <form method="POST" action="{{ route('service.update', $service->id) }}"
                     class="space-y-8 bg-white shadow-md rounded-lg p-6">
                     @csrf
                     <h2 class="text-2xl font-semibold text-gray-700">Edit Service </h2>

                     <!-- Title Input -->
                     <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="title" id="title" value="{{old('title', $service->title) }}"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                   placeholder="Write your title">
                            @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                     </div>
                     <!-- Description Input -->
                     <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="description" rows="4"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                   placeholder="Write your description">{{ old('description', $service->description) }}</textarea>
                            @error('description')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                     </div>

                     <!-- URL Title Input -->
                     <div>
                            <label for="url_title" class="block text-sm font-medium text-gray-700">URL Title</label>
                            <input type="text" name="url_title" id="url_title"
                                   value="{{ old('url_title', $service->url_title) }}"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                   placeholder="Write your URL title">
                            @error('url_title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                     </div>

                     <!-- URL Input -->
                     <div>
                            <label for="url" class="block text-sm font-medium text-gray-700">URL</label>
                            <input type="text" name="url" id="url" value="{{ old('url', $service->url) }}"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                   placeholder="Write your URL">
                            @error('url')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                     </div>

                     <!-- Icon Input -->
                     {{-- <div>
                            <label for="icon" class="block text-sm font-medium text-gray-700">Icon</label>
                            <input type="file" name="icon" id="icon" value="{{ old('icon', $service->icon) }}"
                                   class="mt-1 block w-full text-gray-700 rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @error('icon')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                     </div> --}}

                     <!-- Submit Button -->
                     <div class="flex justify-center">
                            <button type="submit"
                                   class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                   Submit
                            </button>
                     </div>
              </form>
       </div>
</x-app-layout>