<x-app-layout>



  <div class="p-6">
    <P class="py-6 text-3xl font-semibold">Dashboard</P>
    <div class="grid grid-cols-12 gap-5">
      <div class="col-span-full space-y-5 lg:col-span-8 lg:pl-8">
        <div class="space-y-5 rounded-lg bg-white lg:p-6">
          <div class="flex flex-col items-center md:flex-row md:justify-between">
            <p class="py-4 font-medium md:p-0">Track Your Shipment</p>
            <div class="relative flex items-center overflow-hidden rounded-md text-left md:max-w-md md:text-center">
              <input
                type="text"
                name="email"
                placeholder="NP16587987"
                class="h-12 w-full px-4 py-2 font-medium text-gray-800 focus:outline-none"
              >
              <span class="relative right-0 top-0 block">
                <button
                  type="button"
                  class="inline-flex h-12 w-32 items-center bg-indigo px-8 text-base font-bold text-white transition focus:outline-none"
                  data-primary="gray-600"
                >
                  Find
                </button>
              </span>
            </div>
          </div>
          <p class="py-2 text-gray-400">Your Delivery Laptop from the store is arriving today you just take the
            laptop from store</p>
          <div class="overflow-x-auto">
            <div class="inline-block min-w-full">
              <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-neutral-200">
                  <thead>
                    <tr>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-neutral-200">
                    <tr class="text-neutral-800">
                      <td class="whitespace-nowrap">
                        <div>
                          <p class="text-gray-400">Product</p>
                          <p class="font-medium">Laptop</p>
                        </div>
                      </td>
                      <td></td>
                      <td class="whitespace-nowrap">
                        <div>
                          <p class="text-gray-400">Product</p>
                          <p class="font-medium">Laptop</p>
                        </div>
                      </td>
                      <td></td>
                      <td class="whitespace-nowrap">
                        <div>
                          <p class="text-gray-400">Product</p>
                          <p class="font-medium">Laptop</p>
                        </div>
                      </td>
                      <td class="">
                      </td>
                      <td class="">
                      </td>
                      <td class="whitespace-nowrap">
                        <div class="flex items-center gap-x-3">
                          <img
                            class="h-16 w-16 rounded-full"
                            src="{{ asset('assets/avater-2.png') }}"
                            alt=""
                          >
                          <div>
                            <P class="text-gray-400">Contact for detail</P>
                            <p class="font-medium">Allie Gothic</p>
                          </div>
                          <div class="flex gap-3">
                            <div class="border-r-2 border-gray-600">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="mr-3 h-6 w-6"
                              >
                                <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"
                                />
                              </svg>
                            </div>
                            <div>
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
                                  d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"
                                />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div>
                          <p class="text-gray-400">Weight</p>
                          <p class="font-medium">6 kg</p>
                        </div>
                      </td>
                      <td></td>
                      <td>
                        <div>
                          <p class="text-gray-400">price</p>
                          <p class="font-medium">150$</p>
                        </div>
                      </td>
                      <td></td>
                      <td class="whitespace-nowrap">
                        <div>
                          <p class="text-gray-400">Ordered Date</p>
                          <p class="font-medium">13 May 2025</p>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-col gap-x-5 md:flex-row">
          <div class="space-y-5 rounded-lg bg-white p-5">
            <div class="flex gap-x-4">
              <p class="text-xl font-medium">Order Details</p>
              <p class="border-b-2 border-indigo font-semibold text-indigo">Tracking</p>
            </div>
            <div class="relative space-y-4">
              <div
                class="flex w-full before:absolute before:top-3 before:h-[2px] before:w-[15%] before:bg-indigo before:content-['']"
              >
                <span class="after:absolute after:top-[9px] after:rounded-full after:bg-indigo after:p-1"></span>
                <div class="mt-3 flex justify-around border-t-2 border-dashed border-gray-400">
                  <p class="px-5 pt-2 text-gray-400">Destination</p>
                  <span class="after:absolute after:top-[9px] after:rounded-full after:bg-indigo after:p-1"></span>
                  <p class="px-5 pt-2 text-gray-400">Picked-up <br> Order</p>
                  <span class="after:absolute after:top-[9px] after:rounded-full after:bg-indigo after:p-1"></span>
                  <p class="px-5 pt-2 text-gray-400">Arrived at<br> Pickup</p>
                  <span class="after:absolute after:top-[9px] after:rounded-full after:bg-indigo after:p-1"></span>
                  <p class="px-5 pt-2 text-gray-400">Carrier<br>Accepted Order</p>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full rounded-lg bg-white p-5">
            <div class="relative">
              <div class="before:absolute before:h-full before:w-[1px] before:bg-indigo before:content-['']">
                <span class="after:absolute after:-left-[4px] after:rounded-full after:bg-indigo after:p-1"></span>
                <div class="ml-4">
                  <div>
                    <p class="text-gray-500">Departure Date.</p>
                    <p class="font-medium">14 May 2023. 3:35PM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="relative">
              <span
                class="after:absolute after:-left-[4px] after:top-5 after:rounded-full after:bg-gray-400 after:p-1"></span>
              <div class="border-l border-gray-400 pt-5">
                <div class="ml-4">
                  <div>
                    <p class="text-gray-500">Departure Date.</p>
                    <p class="font-medium">14 May 2023. 3:35PM</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <img
            class="h-96 w-full rounded-lg"
            src="{{ asset('assets/map.png') }}"
            alt="map"
          >
        </div>
      </div>
      <div class="col-span-full space-y-5 lg:col-span-4">
        <div class="space-y-5 rounded-lg bg-white p-5">
          <div class="flex justify-between">
            <p class="text-2xl font-semibold">Notification</p>
            <p class="font-medium">See all</p>
          </div>
          <div class="flex gap-x-2">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="h-6 w-6 text-indigo"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"
              />
            </svg>
            <div>
              <p class="text-xl font-medium">Package Arrived</p>
              <p class="text-gray-400">Parcel (ID 1234 8765) has bee...<br>10 minutes ago</p>
              <p class="text-yellow-400">Recorder</p>
            </div>
          </div>
          <div class="flex gap-x-2 border-y border-gray-300 py-2">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="h-6 w-6 text-indigo"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"
              />
            </svg>
            <div>
              <p class="text-xl font-medium">Package Arrived</p>
              <p class="text-gray-400">Parcel (ID 1234 8765) has bee...<br>10 minutes ago</p>
              <p class="text-yellow-400">Recorder</p>
            </div>
          </div>
          <div class="flex gap-x-2">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="h-6 w-6 text-indigo"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"
              />
            </svg>
            <div>
              <p class="text-xl font-medium">Package Arrived</p>
              <p class="text-gray-400">Parcel (ID 1234 8765) has bee...<br>10 minutes ago</p>
              <p class="text-red-500">Cancalled</p>
            </div>
          </div>
        </div>
        <div class="space-y-5 rounded-lg bg-white p-5">
          <p class="text-2xl font-semibold">Add New Package</p>
          <img
            src="{{ asset('assets/scooter.png') }}"
            alt=""
          >
          <p>You can add new package by click below</p>
          <div class="mt-4 flex justify-between">
            <a
              class="rounded-lg bg-indigo px-5 py-3 text-xl text-white"
              href=""
            >Add</a>
            <p class="text-xl font-medium text-indigo">See Packages</p>
          </div>
        </div>
      </div>
    </div>
  </div>



</x-app-layout>
