<div class="flex grow flex-col gap-y-5 overflow-y-auto bg-pink-600 h-full px-6">
    <div class="flex h-16 shrink-0 items-center justify-center">
      <img class="h-8 aspect-[3/1] rounded" src="{{asset('/storage/onemodo.png')}}" alt="Your Company">
    </div>
    <nav class="flex flex-1 flex-col">
      <ul role="list" class="flex flex-1 flex-col gap-y-7">
        <li>
          <ul role="list" class="-mx-2 space-y-1">
            <li>
              <!-- Current: "bg-pink-700 text-white", Default: "text-pink-200 hover:text-white hover:bg-pink-700" -->
              <a href="#" class="group flex  gap-x-3 rounded-md bg-pink-700 p-2 text-sm/6 font-semibold text-white">
           Our Pages
              </a>
            </li>
            <li>
              <a href="/home" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-pink-200 hover:bg-pink-700 hover:text-white">
                <svg class="size-6 shrink-0 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                  </svg>
                Home
              </a>
            </li>
            <li>
              <a href="/contact" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-pink-200 hover:bg-pink-700 hover:text-white">
                <svg class="size-6 shrink-0 text-pink-200 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                </svg>
                Contact us
              </a>
            </li>

            <li>
              <a href="/about" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-pink-200 hover:bg-pink-700 hover:text-white">
                <svg class="size-6 shrink-0 text-pink-200 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                </svg>
                About Us
              </a>
            </li>
          </ul>
        </li>
        {{-- <li>
          <div class="text-xs/6 font-semibold bg-pink-700 rounded-lg text-white p-2">My Teams</div>
          <ul role="list" class="-mx-2 mt-2 space-y-1">
            <li>
              <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-pink-200 hover:bg-pink-700 hover:text-white">
                <span class="flex size-6 shrink-0 items-center justify-center rounded-lg border border-pink-400 bg-pink-500 text-[0.625rem] font-medium text-white">S</span>
                <span class="truncate">Sales</span>
              </a>
            </li>
            <li>
              <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-pink-200 hover:bg-pink-700 hover:text-white">
                <span class="flex size-6 shrink-0 items-center justify-center rounded-lg border border-pink-400 bg-pink-500 text-[0.625rem] font-medium text-white">D</span>
                <span class="truncate">Development</span>
              </a>
            </li>
            <li>
              <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-pink-200 hover:bg-pink-700 hover:text-white">
                <span class="flex size-6 shrink-0 items-center justify-center rounded-lg border border-pink-400 bg-pink-500 text-[0.625rem] font-medium text-white">M</span>
                <span class="truncate">Marketing</span>
              </a>
            </li>
          </ul>
        </li> --}}
        <li class="-mx-6 mt-auto">
          <a href="#" class="flex items-center gap-x-4 px-6 py-3 text-sm/6 font-semibold text-white hover:bg-pink-700">
                <span class="sr-only">One modo IT services</span>
            <span aria-hidden="true"></span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
