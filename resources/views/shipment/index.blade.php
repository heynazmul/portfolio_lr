<x-app-layout>

  <div class="md:p-8">
    <p class="mb-2 text-3xl font-semibold">Add shipment</p>
    <div class="grid gap-5 lg:grid-cols-2">
      <div class="rounded-lg bg-white p-8">
        <form>
          <div class="space-y-5">
            <div class="space-y-5">
              <p class="py-3 text-2xl font-semibold">Contact Details</p>
              <div class="flex gap-x-10">
                <div class="relative w-full max-w-md sm:-ml-2">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentcolor"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="absolute ml-6 mt-2.5 h-6 w-6 text-gray-500"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"
                    />
                  </svg>
                  <input
                    type="text"
                    name="First Name"
                    class="block w-full rounded-md border-2 border-black p-2.5 pl-14 text-black shadow-sm placeholder:left-8"
                    placeholder="First Name"
                  >
                </div>
                <div class="relative w-full max-w-md sm:-ml-2">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentcolor"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="absolute ml-6 mt-2.5 h-6 w-6 text-gray-500"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"
                    />
                  </svg>

                  <input
                    type="text"
                    name="city"
                    id="city"
                    class="block w-full rounded-md border-2 border-black p-2.5 pl-14 text-black shadow-sm placeholder:left-8"
                    placeholder="Last Name"
                  >
                </div>
              </div>
              <div class="flex gap-x-10">
                <div class="relative w-full max-w-md sm:-ml-2">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="absolute ml-6 mt-2.5 h-6 w-6 text-gray-500"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"
                    />
                  </svg>
                  <input
                    type="text"
                    name="city"
                    class="block w-full rounded-md border-2 border-black p-2.5 pl-14 text-black shadow-sm placeholder:left-8"
                    placeholder="First Name"
                  >
                </div>
                <div class="relative w-full max-w-md sm:-ml-2">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentcolor"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="absolute ml-6 mt-2.5 h-6 w-6 text-gray-500"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"
                    />
                  </svg>
                  <input
                    type="text"
                    name="contact"
                    class="block w-full rounded-md border-2 border-black p-2.5 pl-14 text-black shadow-sm placeholder:left-8"
                    placeholder="Last Name"
                  >
                </div>
              </div>
            </div>
            <div class="space-y-5">
              <p class="py-4 text-2xl font-semibold">Shipment Details</p>
              <p class="py-4 text-2xl font-semibold">{{collect($studentName)}}</p>
              <div class="flex gap-x-10">
                <div class="relative w-full max-w-md sm:-ml-2">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentcolor"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="absolute ml-6 mt-2.5 h-6 w-6 text-gray-500"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"
                    />
                  </svg>
                  <input
                    type="text"
                    name="First Name"
                    class="block w-full rounded-md border-2 border-black p-2.5 pl-14 text-black shadow-sm placeholder:left-8"
                    placeholder="First Name"
                  >
                </div>
                <div class="relative w-full max-w-md sm:-ml-2">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentcolor"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="absolute ml-6 mt-2.5 h-6 w-6 text-gray-500"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"
                    />
                  </svg>

                  <input
                    type="text"
                    name="city"
                    id="city"
                    class="block w-full rounded-md border-2 border-black p-2.5 pl-14 text-black shadow-sm placeholder:left-8"
                    placeholder="Last Name"
                  >
                </div>
              </div>
              <div class="flex gap-x-10">
                <div class="relative w-full max-w-md sm:-ml-2">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="absolute ml-6 mt-2.5 h-6 w-6 text-gray-500"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"
                    />
                  </svg>
                  <input
                    type="text"
                    name="city"
                    class="block w-full rounded-md border-2 border-black p-2.5 pl-14 text-black shadow-sm placeholder:left-8"
                    placeholder="First Name"
                  >
                </div>
                <div class="relative w-full max-w-md sm:-ml-2">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentcolor"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="absolute ml-6 mt-2.5 h-6 w-6 text-gray-500"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"
                    />
                  </svg>
                  <input
                    type="text"
                    name="contact"
                    class="block w-full rounded-md border-2 border-black p-2.5 pl-14 text-black shadow-sm placeholder:left-8 focus:outline-none"
                    placeholder="Last Name"
                  >
                </div>
              </div>
            </div>
            <div class="space-y-5">
              <p class="py-3 text-2xl font-semibold">Shipping Type</p>
              <div class="flex flex-col justify-center gap-8 lg:flex-row">
                <div class="">
                  <div
                    x-data="{
                        open: false,
                        toggle() {
                            if (this.open) {
                                return this.close()
                            }
                    
                            this.$refs.button.focus()
                    
                            this.open = true
                        },
                        close(focusAfter) {
                            if (!this.open) return
                    
                            this.open = false
                    
                            focusAfter && focusAfter.focus()
                        }
                    }"
                    x-on:keydown.escape.prevent.stop="close($refs.button)"
                    x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                    x-id="['dropdown-button']"
                    class="relative z-50"
                  >
                    <!-- Button -->
                    <button
                      x-ref="button"
                      x-on:click="toggle()"
                      :aria-expanded="open"
                      :aria-controls="$id('dropdown-button')"
                      type="button"
                      class="flex w-52 items-center justify-between gap-5 rounded-md border-2 border-gray-500 bg-white px-5 py-3"
                    >
                      <div class="flex gap-x-2">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="h-6 w-6"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"
                          />
                        </svg>

                        <span>Type</span>
                      </div>
                      <!-- Heroicon: chevron-down -->
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 text-gray-400"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"
                        />
                      </svg>
                    </button>

                    <!-- Panel -->
                    <div
                      x-ref="panel"
                      x-show="open"
                      x-transition.origin.top.left
                      x-on:click.outside="close($refs.button)"
                      :id="$id('dropdown-button')"
                      style="display: none;"
                      class="absolute left-0 mt-2 w-full rounded-md bg-white shadow-md"
                    >
                      <a
                        href="#"
                        class="flex w-full items-center gap-2 px-4 py-2.5 text-left text-sm first-of-type:rounded-t-md last-of-type:rounded-b-md hover:bg-gray-50 disabled:text-gray-500"
                      >
                        Option- 01
                      </a>

                      <a
                        href="#"
                        class="flex w-full items-center gap-2 px-4 py-2.5 text-left text-sm first-of-type:rounded-t-md last-of-type:rounded-b-md hover:bg-gray-50 disabled:text-gray-500"
                      >
                        Option- 02
                      </a>

                      <a
                        href="#"
                        class="flex w-full items-center gap-2 px-4 py-2.5 text-left text-sm first-of-type:rounded-t-md last-of-type:rounded-b-md hover:bg-gray-50 disabled:text-gray-500"
                      >
                        <span class="text-red-600">Option- 03</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="">
                  <div
                    x-data="{
                        open: false,
                        toggle() {
                            if (this.open) {
                                return this.close()
                            }
                    
                            this.$refs.button.focus()
                    
                            this.open = true
                        },
                        close(focusAfter) {
                            if (!this.open) return
                    
                            this.open = false
                    
                            focusAfter && focusAfter.focus()
                        }
                    }"
                    x-on:keydown.escape.prevent.stop="close($refs.button)"
                    x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                    x-id="['dropdown-button']"
                    class="relative"
                  >
                    <!-- Button -->
                    <button
                      x-ref="button"
                      x-on:click="toggle()"
                      :aria-expanded="open"
                      :aria-controls="$id('dropdown-button')"
                      type="button"
                      class="flex w-52 items-center gap-2 rounded-md border-2 border-gray-500 bg-white px-5 py-3"
                    >
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M3.26934 15.084C3.9629 13.6266 4.30968 12.8978 4.91395 12.4765C4.96276 12.4425 5.01259 12.4101 5.06338 12.3795C5.69228 12 6.46152 12 8 12C9.53848 12 10.3077 12 10.9366 12.3795C10.9874 12.4101 11.0372 12.4425 11.086 12.4765C11.6903 12.8978 12.0371 13.6266 12.7307 15.084C13.7648 17.2572 14.2819 18.3438 13.8433 19.1425C13.8268 19.1724 13.8095 19.2018 13.7914 19.2306C13.3077 20 12.1613 20 9.86867 20H6.13133C3.83865 20 2.69231 20 2.20859 19.2306C2.19046 19.2018 2.17317 19.1724 2.15674 19.1425C1.71814 18.3438 2.23521 17.2572 3.26934 15.084Z"
                          stroke="#141B34"
                          stroke-width="1.5"
                        />
                        <path
                          d="M14.5469 12.0207C14.9432 12 15.4158 12 15.9989 12C17.5374 12 18.3067 12 18.9356 12.3795C18.9863 12.4101 19.0362 12.4425 19.085 12.4765C19.6893 12.8978 20.036 13.6266 20.7296 15.084C21.7637 17.2572 22.2808 18.3438 21.8422 19.1425C21.8258 19.1724 21.8085 19.2018 21.7904 19.2306C21.3066 20 20.1603 20 17.8676 20H16.7391"
                          stroke="#141B34"
                          stroke-width="1.5"
                          stroke-linecap="round"
                        />
                        <path
                          d="M17.6073 9C17.3908 8.47153 17.0923 7.84427 16.7306 7.08405C16.037 5.62657 15.6902 4.89783 15.086 4.4765C15.0372 4.44247 14.9873 4.41011 14.9365 4.37946C14.3076 4 13.5384 4 11.9999 4C10.4614 4 9.69221 4 9.06331 4.37946C9.01251 4.41011 8.96268 4.44247 8.91388 4.4765C8.30961 4.89783 7.96282 5.62657 7.26926 7.08405C6.9075 7.84427 6.60901 8.47153 6.39258 9"
                          stroke="#141B34"
                          stroke-width="1.5"
                          stroke-linecap="round"
                        />
                      </svg>
                      <!-- Heroicon: chevron-down -->
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 text-gray-400"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"
                        />
                      </svg>
                    </button>

                    <!-- Panel -->
                    <div
                      x-ref="panel"
                      x-show="open"
                      x-transition.origin.top.left
                      x-on:click.outside="close($refs.button)"
                      :id="$id('dropdown-button')"
                      style="display: none;"
                      class="absolute left-0 mt-2 w-full rounded-md bg-white shadow-md"
                    >
                      <a
                        href="#"
                        class="flex w-full items-center gap-2 px-4 py-2.5 text-left text-sm first-of-type:rounded-t-md last-of-type:rounded-b-md hover:bg-gray-50 disabled:text-gray-500"
                      >
                        Option- 01
                      </a>

                      <a
                        href="#"
                        class="flex w-full items-center gap-2 px-4 py-2.5 text-left text-sm first-of-type:rounded-t-md last-of-type:rounded-b-md hover:bg-gray-50 disabled:text-gray-500"
                      >
                        Option- 02
                      </a>

                      <a
                        href="#"
                        class="flex w-full items-center gap-2 px-4 py-2.5 text-left text-sm first-of-type:rounded-t-md last-of-type:rounded-b-md hover:bg-gray-50 disabled:text-gray-500"
                      >
                        <span class="text-red-600">Option- 02</span>
                      </a>
                    </div>
                  </div>
                </div>

              </div>

            </div>
            <button class="w-full rounded-lg bg-indigo py-3 text-white">Add</button>
          </div>
        </form>
      </div>
      <div class="space-y-5">
        <div class="space-y-3 rounded-lg bg-white p-5">
          <div>
            <div class="flex justify-between">
              <div class="flex gap-x-3">
                <svg
                  width="20"
                  height="25"
                  viewBox="0 0 24 25"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <ellipse
                    cx="12"
                    cy="12.5002"
                    rx="10"
                    ry="10.4167"
                    stroke="#011665"
                    stroke-width="3.5"
                    stroke-linejoin="round"
                  />
                </svg>
                <div>
                  <p class="text-xl font-semibold">Free Shipping</p>
                  <p class="text-gray-400">8-10 Working Days</p>
                </div>
              </div>
              <p class="text-xl font-semibold">Free</p>
            </div>
          </div>
          <div>
            <div class="flex justify-between">
              <div class="flex gap-x-3">
                <svg
                  width="20"
                  height="25"
                  viewBox="0 0 24 25"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <ellipse
                    cx="12"
                    cy="12.5002"
                    rx="10"
                    ry="10.4167"
                    stroke="#011665"
                    stroke-width="3.5"
                    stroke-linejoin="round"
                  />
                </svg>
                <div>
                  <p class="text-xl font-semibold">Free Shipping</p>
                  <p class="text-gray-400">8-10 Working Days</p>
                </div>
              </div>
              <p class="text-xl font-semibold">Rs 50</p>
            </div>
          </div>
        </div>
        <div class="space-y-5 rounded-lg bg-gradient-to-tr from-[#EFC3F1] to-[#C2E9FA] p-5">
          <p class="text-xl font-semibold">Pyment Details</p>
          <div class="flex items-center gap-x-5">
            <div>
              <img
                class="h-20 w-28 rounded-lg bg-white bg-opacity-20 py-2"
                src="assets/visa.png"
                alt=""
              >
            </div>
            <div>
              <img
                class="h-20 w-28 rounded-lg bg-white bg-opacity-20 py-2"
                src="assets/mastercard.png"
                alt=""
              >
            </div>
            <div>
              <img
                class="h-20 w-28 rounded-lg bg-white bg-opacity-20 py-2"
                src="assets/rupay.png"
                alt=""
              >
            </div>
            <div>
              <a
                class="rounded-md bg-[#90B5DF] px-4 py-3 font-bold text-white"
                href="#"
              >See All</a>
            </div>
          </div>
          <div class="w-full">
            <input
              type="text"
              class="block w-full rounded-lg border-2 border-black p-2.5 pl-8 text-black shadow-sm placeholder:left-8"
              placeholder="Last Name"
            >
          </div>
          <div class="w-full">
            <input
              type="text"
              class="block w-full rounded-lg border-2 border-black p-2.5 pl-8 text-black shadow-sm placeholder:left-8"
              placeholder="Last Name"
            >
          </div>
          <div class="flex gap-x-5">
            <input
              type="text"
              class="block w-full rounded-lg border-2 border-black p-2.5 pl-8 text-black shadow-sm placeholder:left-8"
              placeholder="Last Name"
            >
            <input
              type="text"
              class="block w-full rounded-lg border-2 border-black p-2.5 pl-8 text-black shadow-sm placeholder:left-8"
              placeholder="Last Name"
            >
          </div>
          <div class="space-y-5 rounded-lg bg-white p-5">
            <div class="flex justify-between">
              <p class="font-semibold text-gray-400">Subtotal</p>
              <p class="text-xl font-bold text-indigo">Rs. 1499/-</p>
            </div>
            <div class="flex justify-between">
              <div>
                <p class="font-semibold text-gray-400">Shipping</p>
                <P class="font-semibold text-blue-500">Free shipping (3-5 Working Days)</P>
              </div>
              <p class="text-xl font-bold">FREE</p>
            </div>
            <div class="flex justify-between">
              <p class="text-xl font-semibold text-gray-400">Total(Tax incl.)</p>
              <p class="text-xl font-bold">Rs. 1499/-</p>
            </div>
          </div>
          <button class="w-full rounded-lg bg-indigo py-3 text-white">Pay ₹1499</button>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
