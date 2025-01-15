<x-app-layout>
    <div>
        <form method="POST" action="{{ route('about.store') }}">
            @csrf
            <div class="space-y-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <label for="username" class="block text-sm/6 font-medium text-gray-900">Title</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <input type="text" name="title" id="title" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6 w-full" placeholder="Write your title">
                        </div>
                    </div>
                    <div class="col-span-full">
                    <label for="focus_title" class="block text-sm/6 font-medium text-gray-900">Focus title</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">    
                        <input type="text" name="focus_title" id="focus_title" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6 w-full" placeholder="Write your description">
                        </div>
                    </div>
                    </div>
                    <div class="col-span-full">
                    <label for="about" class="block text-sm/6 font-medium text-gray-900">About</label>
                    <div class="mt-2">
                        <textarea name="about" id="about" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                    </div>
                    <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about yourself.</p>
                    </div>
                    <button class="bg-blue-500 hover:bg-green-500 font-bold py-2 px-4 rounded" type="submit" >submit</button>  
                </div>
            </div>
        </form>
    </div>
</x-app-layout>