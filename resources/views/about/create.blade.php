<x-app-layout>
    <div class="max-w-4xl mx-auto p-6">
        <form method="POST" action="{{ route('about.store') }}">
            @csrf
            <div class="space-y-8 bg-white p-6 rounded-lg shadow-md">
                <!-- Title Field -->
                <div class="space-y-2">
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Write your title" 
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>

                <!-- Focus Title Field -->
                <div class="space-y-2">
                    <label for="focus_title" class="block text-sm font-medium text-gray-700">Focus Title</label>
                    <input type="text" name="focus_title" id="focus_title" placeholder="Write your focus title" 
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>

                <!-- About Field -->
                <div class="space-y-2">
                    <label for="about" class="block text-sm font-medium text-gray-700">About</label>
                    <textarea name="about" id="about" rows="4" placeholder="Write a few sentences about yourself" 
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                    <p class="text-sm text-gray-500">Write a brief introduction or description about yourself.</p>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-center">
                    <button type="submit" 
                        class="inline-flex items-center justify-center rounded-md border border-transparent bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
