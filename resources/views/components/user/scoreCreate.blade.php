<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Card -->
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="bg-white border border-gray-200 rounded-xl shadow-2xs overflow-hidden dark:bg-neutral-900 dark:border-neutral-700">
          <!-- Header -->
          <form action="/score" method="POST">
              @csrf
              <input type="hidden" name="user" value="{{ Auth::user()->id }}">
              <input type="hidden" name="mata" value="{{ $mata }}">
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
            <!-- Input -->
            <div class="sm:col-span-1">
              <label for="hs-as-table-product-review-search" class="sr-only">Search</label>
              <div class="relative">
                <input type="date" id="hs-as-table-product-review-search" name="tanggal" class="@error('tanggal') border-red-500 bg-pink-100 @enderror py-2 px-3 ps-11 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="date">
              </div>
              @error('tanggal')
                  <div class="text-xs text-red-500 my-1">{{ $message }}</div>
              @enderror
            </div>
            <!-- End Input -->

            <div class="sm:col-span-2 md:grow">
              <div class="flex justify-end gap-x-2">
                <div class="hs-dropdown [--placement:bottom-right] relative inline-block">
                  <button id="hs-as-table-table-export-dropdown" type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                    <svg fill="#000000" width="16" height="16" viewBox="0 0 24 24" id="up" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color"><path id="primary" d="M19.71,9.29l-7-7a1,1,0,0,0-1.42,0l-7,7a1,1,0,0,0,1.42,1.42L11,5.41V21a1,1,0,0,0,2,0V5.41l5.29,5.3a1,1,0,0,0,1.42,0A1,1,0,0,0,19.71,9.29Z" style="fill: rgb(0, 0, 0);"></path></svg>
                    Upload
                </div>
              </div>
            </div>
          </div>
          <!-- End Header -->
          <!-- Table Section -->
          <div class="max-w-[85rem]">
            <!-- Card -->
            <div class="flex flex-col">
              <div class="overflow-x-auto [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                <div class="min-w-full inline-block align-middle">
                  <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                    <thead class="bg-gray-50 dark:bg-neutral-800">
                      <tr>
                        <th scope="col" class="ps-6 py-3 text-start"></th>
                        <th scope="col" class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3 text-start">
                          <div class="flex items-center gap-x-2">
                            <span class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                              Name
                            </span>
                          </div>
                        </th>
                        <th scope="col" class="px-6 py-3 text-start">
                          <div class="flex items-center gap-x-2">
                            <span class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                              Score
                            </span>
                          </div>
                        </th>
                        <th scope="col" class="px-6 py-3 text-start">
                          <div class="flex items-center gap-x-2">
                            <span class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                              NIS
                            </span>
                          </div>
                        </th>
                        <th scope="col" class="px-6 py-3 text-start">
                          <div class="flex items-center gap-x-2">
                            <span class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                              Note
                            </span>
                          </div>
                        </th>
                        <th scope="col" class="px-6 py-3 text-start">
                          <div class="flex items-center gap-x-2">
                            <span class="text-xs font-semibold uppercase text-gray-800 dark:text-neutral-200">
                              School
                            </span>
                          </div>
                        </th>
                      </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                      @forelse ($siswas as $siswa)
                      <input type="hidden" name="all[{{ $siswa['id'] }}]" value="{{ $siswa['id'] }}">
                        <tr>
                        <td class="size-px whitespace-nowrap">
                          <div class="ps-6 py-3">
                            <label for="hs-at-with-checkboxes-1" class="flex">
                              <input type="checkbox" name="siswa[{{ $siswa['id'] }}]" value="{{ $siswa['id'] }}" {{ in_array($siswa->id, old('siswa', [])) ? 'checked' : '' }}
                                class="shrink-0 border-gray-300 rounded-sm text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                id="hs-at-with-checkboxes-1">
                              <span class="sr-only">Checkbox</span>
                            </label>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                            <div class="flex items-center gap-x-3">
                              <div class="grow">
                                <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $siswa['nama'] }}</span>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="px-6 py-3">
                            <input type="number" name="score[{{ $siswa['id'] }}]" id="score" value="{{ old("score.$siswa->id") }}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-20 sm:w-24 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                              placeholder="Score">
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="px-6 py-3">
                            <span
                              class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                              <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                  d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                              </svg>
                              {{ $siswa['nis'] }}
                            </span>
                          </div>
                        </td>
                        <td class="h-px whitespace-nowrap min-w-[200px] sm:w-72">
                          <div class="px-6 py-3">
                            <textarea name="catatan[{{ $siswa['id'] }}]"
                              rows="3"
                              class="@error("catatan.$siswa->id") border-red-500 bg-pink-100 @enderror w-full min-h-[40px] text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 
                                    focus:ring-primary-500 focus:border-primary-500 
                                    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                              placeholder="Write note here">{{ old("catatan.$siswa->id") }}</textarea>
                              @error("catatan.$siswa->id")
                                  <div class="text-xs text-red-500 my-1">{{ $message }}</div>
                              @enderror
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="px-6 py-3">
                            <span class="text-sm text-gray-500 dark:text-neutral-500">{{ $siswa['sekolah'] }}</span>
                          </div>
                        </td>
                      </tr>
                      @empty
                        <div class="w-full p-5">
                          <h1 class="text-center font-medium text-red-500">Saat ini siswa belum terdaftar!</h1>
                        </div>
                      @endforelse
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- End Card -->
          </div>
          </form>
          <!-- End Table Section -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Card -->
</div>
<!-- End Table Section -->