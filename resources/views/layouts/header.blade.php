<div class="flex h-20 items-center bg-white">
  <div class="mx-5 lg:hidden">
    <!-- Hamburger Toggle BTN -->
    <button
      class="z-99999 border-stroke dark:border-strokedark dark:bg-boxdark block rounded-sm border bg-white p-1.5 shadow-sm lg:hidden"
      @click.stop="sidebarToggle = !sidebarToggle"
    >
      <svg
        class="h-8 w-8"
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M4 6h16M4 12h16M4 18h16"
        />
      </svg>
    </button>
    <!-- Hamburger Toggle BTN -->
  </div>
  <div class="relative w-full max-w-md sm:-ml-2">
    <svg
      aria-hidden="true"
      viewBox="0 0 20 20"
      fill="currentColor"
      class="absolute ml-2 mt-2.5 h-6 w-6 text-gray-400"
    >
      <path
        fill-rule="evenodd"
        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
        clip-rule="evenodd"
      />
    </svg>
    <input
      type="text"
      role="search"
      placeholder="Search percel by tracking number"
      class="w-full rounded-lg border-4 border-transparent py-2 pl-10 pr-4 placeholder-gray-400 focus:bg-gray-50"
    />
  </div>
  <div class="ml-auto flex flex-shrink-0 items-center">
    <button
      class="relative rounded-full p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600"
    >
      <span class="absolute right-0 top-0 mr-2 mt-1 h-2 w-2 rounded-full bg-red-500"></span>
      <span class="absolute right-0 top-0 mr-2 mt-1 h-2 w-2 animate-ping rounded-full bg-red-500"></span>
      <svg
        aria-hidden="true"
        fill="currentcolor"
        viewBox="0 0 24 24"
        stroke="currentColor"
        class="h-6 w-6"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
        />
      </svg>
    </button>
    <button
      class="relative inline-flex items-center gap-x-2 rounded-lg p-2 hover:bg-gray-100 focus:bg-gray-100"
      @click="panel = !panel"
      @click.away="panel = false"
    >
      <span class="ml-2 mr-2 h-12 w-12 overflow-hidden rounded-full bg-gray-100 sm:ml-3">
        <img
          src="assets/avater.png"
          alt="user profile photo"
          class="h-full w-full object-cover"
        >
      </span>
      <div class="hidden md:flex md:flex-col md:items-end md:leading-tight">
        <span class="font-semibold">{{ Auth::user()?->name }}</span>
      </div>
      <svg
        aria-hidden="true"
        viewBox="0 0 20 20"
        fill="currentColor"
        class="hidden h-6 w-6 text-gray-300 sm:block"
      >
        <path
          fill-rule="evenodd"
          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
          clip-rule="evenodd"
        />
      </svg>
    </button>
    <div
      class="absolute top-20 w-56 rounded-md border bg-white p-2"
      x-show="panel"
      style="display:none"
    >
      <a
        href="{{ route('profile.edit') }}"
        class="cursor-pointer p-2 hover:bg-blue-100"
      >Profile</a>
      <div class="cursor-pointer p-2 hover:bg-blue-100">Messages</div>
      <div class="cursor-pointer p-2 hover:bg-blue-100">To-Do's</div>
    </div>
  </div>
</div>
