
<nav class="bg-white shadow dark:bg-green-800">
    <div x-data="{open: false}" class="container px-6 py-3 mx-auto">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex items-center justify-between">
                <div class="text-xl font-semibold text-gray-700">
                    <a class="text-xl font-bold text-gray-800 dark:text-yellow-300 md:text-2xl hover:text-gray-700 dark:hover:text-red-300" href="#">Mazin's</a>
                </div>

                <div class="md:hidden">
                    <button id="switch" class=" mx-4 text-gray-600 md:block dark:text-gray-200 hover:text-gray-700 dark:hover:text-gray-400 focus:text-gray-700 dark:focus:text-gray-400 focus:outline-none" aria-label="Color Theme">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                          <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                        </svg>
                      </button>
                </div>
                <!-- Mobile menu button -->
                <div class="flex md:hidden">
                    <button type="button" class="text-blue-500 dark:text-yellow-500 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" @click="open = true" aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div  :class="open ? 'show' : 'hidden'"
            @click.away="open = false" class="flex-1 md:flex md:items-center md:justify-between">
                <div class="flex flex-col -mx-4 md:flex-row md:items-center md:mx-8">
                    <a href="#" class="px-2 py-1 mx-2 mt-2 text-sm font-medium text-gray-700 transition-colors duration-200 transform rounded-md md:mt-0 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700">Home</a>
                </div>

                <div class="flex items-center mt-4 md:mt-0">
                    <button id="switch" class=" mx-4 text-gray-600 md:block dark:text-gray-200 hover:text-gray-700 dark:hover:text-gray-400 focus:text-gray-700 dark:focus:text-gray-400 focus:outline-none" aria-label="Color Theme">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                      </svg>
                    </button>

                    <button type="button" class="flex items-center focus:outline-none" aria-label="toggle profile dropdown">
                        <div class="w-8 h-8 overflow-hidden border-2 border-gray-400 rounded-full">
                            <img src="/img/me.jfif" class="object-cover w-full h-full" alt="avatar">
                        </div>

                        <h3 class="mx-2 text-sm font-medium text-gray-700 dark:text-gray-200 md:hidden">Mazin Hafiz</h3>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>