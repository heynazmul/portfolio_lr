<x-app-layout>
    {{collect($errors->all())}}
    <div class="max-w-4xl mx-auto p-6">
        <form method="POST" action="{{ route('resume.store') }}">
            @csrf
            <div class="space-y-8 bg-white p-6 rounded-lg shadow-md">
                <!-- Title Field-2 -->
                <div class="space-y-2">
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" value="{{ old('title') }}" name="title" id="title" placeholder="Write your title"
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    @error('title')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Title Field-2 -->
                <div class="space-y-2">
                    <label for="position" class="block text-sm font-medium text-gray-700">Position</label>
                    <input type="text" value="{{ old('position') }}" name="position" id="position"
                        placeholder="Write your title"
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    @error('position')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!--Position Field -->
                <div class="space-y-2">
                    <label for="working_years" class="block text-sm font-medium text-gray-700">working years</label>
                    <input type="text" value="{{ old('working_years') }}" name="working_years" id="working_years"
                        placeholder="Write your focus title"
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    @error('working_years')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!--Agency name Field -->
                <div class="space-y-2">
                    <label for="Agency_name" class="block text-sm font-medium text-gray-700">Agency name</label>
                    <input type="text" value="{{ old('Agency_name') }}" name="Agency_name" id="Agency_name"
                        placeholder="Write your Agency name"
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    @error('Agency_name')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
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