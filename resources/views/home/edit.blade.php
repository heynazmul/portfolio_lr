<x-app-layout>
    <div class="max-w-4xl mx-auto p-6">
        <form method="POST" action="{{route('home.update', $home->id)}}">
            @csrf
            @method('PUT')
            <div class="space-y-8 bg-white p-6 rounded-lg shadow-md">
                <!-- Title Field -->
                <div class="space-y-2">
                    <label for="title_1" class="block text-sm font-medium text-gray-700">Title-1</label>
                    <input type="text" name="title_1" value="{{old('title_1') ?? $home->title_1 }}" id="title_1" placeholder="Write your title" 
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        @error('title_1')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                </div>
                <!-- Title Field -->
                <div class="space-y-2">
                    <label for="title_2" class="block text-sm font-medium text-gray-700">Title-2</label>
                    <input type="text" name="title_2" value="{{old('title_2') ?? $home->title_2 }}" id="title_2" placeholder="Write your title" 
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        @error('title_2')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                </div>

                <!-- Focus Title Field -->
                <div class="space-y-2">
                    <label for="focus_title" class="block text-sm font-medium text-gray-700">Focus Title</label>
                    <input type="text" name="focus_title" id="focus_title" value="{{old('focus_title') ?? $home->focus_title }}" placeholder="Write your focus title" 
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        @error('focus_title')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                </div>

                <!-- home Field -->
                <div class="space-y-2">
                    <label for="description" class="block text-sm font-medium text-gray-700">home</label>
                    <textarea name="description"  id="description" rows="4" placeholder="Write a few sentences home yourself" 
                        class="block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{old('description')?? $home->description ?? ''}}</textarea>
                    <p class="text-sm text-gray-500">Write a brief introduction or description about yourself.</p>
                    @error('description')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="flex justify-center">
                    <button type="submit" 
                        class="inline-flex items-center justify-center rounded-md border border-transparent bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Update
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
