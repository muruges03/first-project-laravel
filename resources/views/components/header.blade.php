<header class="bg-red-600 pb-24">
    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
      <div class="relative flex items-center justify-center py-5 lg:justify-between">
        <!-- Logo -->
        <div class="absolute left-0 shrink-0 lg:static">
          <a href="#">
            <span class="sr-only">Modo mine</span>
            <img class="h-8 w-auto" src="{{asset('/storage/onemodo.png')}}" alt="Your Company">
          </a>
        </div>
        <!-- Right section on desktop -->
        <div class="hidden lg:ml-4 lg:flex lg:items-center lg:pr-0.5">
          <button type="button" class="relative shrink-0 rounded-full p-1 text-red-200 hover:bg-white/10 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
            </svg>
          </button>

          <!-- Profile dropdown -->
          <div class="relative ml-4 shrink-0 group">
            <div>
              <div class="relative ml-4 shrink-0 ">
                  <div>
                      <button type="button" class="relative dropdown-menu flex rounded-full bg-white text-sm ring-2 ring-white/20 focus:outline-none focus:ring-white" id="user-menu-button" aria-expanded="true" aria-haspopup="true">
                          <span class="absolute -inset-1.5"></span>
                          <span class="sr-only">Open user menu</span>
                          <img class="size-8 dropdown-menu rounded-full" src="{{ asset('/storage/minetruck.jpg') }}" alt="">
                      </button>
                  </div>

                  <!-- Dropdown will be shown on hover -->
                  <div class="absolute hidden dropdown-container group-hover:w-48 bg-white shadow-lg rounded-md z-10">
                  </div>
              </div>

            </div>
          </div>
        </div>

        <!-- Search -->
        <div class="min-w-0 flex-1 px-12 lg:hidden">
          <div class="mx-auto grid w-full max-w-xs grid-cols-1">
            <input type="search" name="search" aria-label="Search" class="peer col-start-1 row-start-1 block w-full rounded-md bg-white/20 py-1.5 pl-10 pr-3 text-base text-white outline-none placeholder:text-white focus:bg-white focus:text-gray-900 focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-white/40 focus:placeholder:text-gray-400 sm:text-sm/6" placeholder="Search">
            <svg class="pointer-events-none col-start-1 row-start-1 ml-3 size-5 self-center text-white peer-focus:text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z" clip-rule="evenodd" />
            </svg>
          </div>
        </div>

        <!-- Menu button -->
        <div class="absolute right-0 shrink-0 lg:hidden">
          <!-- Mobile menu button -->
          <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-transparent p-2 text-red-200 hover:bg-white/10 hover:text-white focus:outline-none focus:ring-2 focus:ring-white" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
      <div class="hidden border-t border-white/20 py-5 lg:block">
        <div class="grid grid-cols-3 items-center gap-8">
          <div class="col-span-2">
            <nav class="flex space-x-4">
              <!-- Current: "text-white", Default: "text-red-100" -->
              <a href="day1-7" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/10" aria-current="page">Day 1-7</a>
              <a href="day8-15" class="rounded-md px-3 py-2 text-sm font-medium text-red-100 hover:bg-white/10">Day 8-15</a>
              <a href="day16-19" class="rounded-md px-3 py-2 text-sm font-medium text-red-100 hover:bg-white/10">Day 16-19</a>
              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-red-100 hover:bg-white/10">Company Directory</a>
              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-red-100 hover:bg-white/10">Openings</a>
            </nav>
          </div>
          <div class="mx-auto grid w-full max-w-md grid-cols-1">
            <input type="search" name="search" aria-label="Search" class="peer col-start-1 row-start-1 block w-full rounded-md bg-white/20 py-1.5 pl-10 pr-3 text-sm/6 text-white outline-none placeholder:text-white focus:bg-white focus:text-gray-900 focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-white/40 focus:placeholder:text-gray-400" placeholder="Search">
            <svg class="pointer-events-none col-start-1 row-start-1 ml-3 size-5 self-center text-white peer-focus:text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z" clip-rule="evenodd" />
            </svg>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on mobile menu state. -->
    <div class="lg:hidden">

      <div class="absolute inset-x-0 top-0 z-30 mx-auto w-full max-w-3xl origin-top transform p-2 transition">
        <div class="divide-y divide-gray-200 rounded-lg bg-white shadow-lg ring-1 ring-black/5">
          <div class="pb-2 pt-3">
            <div class="flex items-center justify-between px-4">
              <div>
                <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=red&shade=600" alt="Your Company">
              </div>
              <div class="-mr-2">
                <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-500">
                  <span class="absolute -inset-0.5"></span>
                  <span class="sr-only">Close menu</span>
                  <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="mt-3 space-y-1 px-2">
              <a href="Day1" class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-gray-100 hover:text-gray-800">Day 1-5</a>
              <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-gray-100 hover:text-gray-800">Profile</a>
              <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-gray-100 hover:text-gray-800">Resources</a>
              <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-gray-100 hover:text-gray-800">Company Directory</a>
              <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-900 hover:bg-gray-100 hover:text-gray-800">Openings</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </header>
