<x-app-layout>
    <div>
        <form method="POST" action="{{ route('specializations.store') }}">
            @csrf
            <div class="space-y-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                    <label for="username" class="block text-sm/6 font-medium text-gray-900">Title</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <input type="text" name="title" id="title" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6 w-full" placeholder="Write your title">
                        @error('title')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                        </div>
                    </div>
                    </div>

                    <div class="col-span-full">
                    <label for="about" class="block text-sm/6 font-medium text-gray-900">Description</label>
                    <div class="mt-2">
                        <textarea name="description" id="description" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                        @error('description')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    
                    <label for="username" class="mt-10 block text-sm/6 font-medium text-gray-900">URL title</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <input type="text" name="url_title" id="title" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6 w-full" placeholder="Write your url">
                        @error('url_title')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                       </div>
                    <label for="username" class="mt-10 block text-sm/6 font-medium text-gray-900">URL</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <input type="text" name="url" id="title" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6 w-full" placeholder="Write your url">
                        @error('url')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                       </div>
                    <label for="icon" class="mt-10 block text-sm/6 font-medium text-gray-900">icon</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <input type="file" name="icon" id="icon" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6 w-full">
                        @error('icon')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                       </div>
                    <button class="bg-blue-500 hover:bg-green-500 font-bold py-2 my-10 px-4 rounded" type="submit" >submit</button>  
                </div>
            </div>
        </form>
    </div>
</x-app-layout>