<section class="relative lg:block w-full h-auto py-6 leading-10 text-center text-blue-500 md:py-2 hidden">

        <div class="flex items-center w-full h-full px-4 mx-auto leading-10 text-center md:h-24 md:px-4 lg:px-6 max-w-7xl">
            <div class="flex flex-col items-center justify-between w-full h-full text-blue-500 md:flex-row">
                <div class="relative left-0 z-0 flex items-center justify-center w-full h-full px-4 my-5 space-x-5 text-lg font-medium leading-10 md:space-x-1 md:text-base lg:text-lg md:space-x-6 md:my-0 lg:w-full md:mt-0 md:absolute lg:space-x-12 md:text-left lg:text-center">
                    <a href="#mes_diplomes" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block font-semibold text-center text-gray-600 no-underline bg-transparent cursor-pointer hover:text-blue-500 focus:no-underline">
                        <span class="block">Mes Diplômes</span>
                        <span class="absolute bottom-0 left-0 inline-block w-full h-1 mt-0.5 overflow-hidden rounded-full">
                            <span x-show="hover" class="absolute inset-0 inline-block w-full h-full transform bg-blue-500" x-transition:enter="transition origin-center ease-out duration-200" x-transition:enter-start="scale-0" x-transition:enter-end="scale-100" x-transition:leave="transition ease-out origin-center duration-200" x-transition:leave-start="scale-100" x-transition:leave-end="scale-0" style="display: none;"></span>
                        </span>
                    </a>
                    <a href="#mes_competences" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block font-semibold text-center text-gray-600 no-underline bg-transparent cursor-pointer hover:text-blue-500 focus:no-underline">
                        <span class="block">Mes Compétences</span>
                        <span class="absolute bottom-0 left-0 inline-block w-full h-1 mt-0.5 overflow-hidden rounded-full">
                            <span x-show="hover" class="absolute inset-0 inline-block w-full h-full transform bg-blue-500" x-transition:enter="transition origin-center ease-out duration-200" x-transition:enter-start="scale-0" x-transition:enter-end="scale-100" x-transition:leave="transition ease-out origin-center duration-200" x-transition:leave-start="scale-100" x-transition:leave-end="scale-0" style="display: none;"></span>
                        </span>
                    </a>
                    <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block font-semibold text-center text-gray-600 no-underline bg-transparent cursor-pointer hover:text-blue-500 focus:no-underline">
                        <span class="block">Mon Parcours</span>
                        <span class="absolute bottom-0 left-0 inline-block w-full h-1 mt-0.5 overflow-hidden rounded-full">
                            <span x-show="hover" class="absolute inset-0 inline-block w-full h-full transform bg-blue-500" x-transition:enter="transition origin-center ease-out duration-200" x-transition:enter-start="scale-0" x-transition:enter-end="scale-100" x-transition:leave="transition ease-out origin-center duration-200" x-transition:leave-start="scale-100" x-transition:leave-end="scale-0" style="display: none;"></span>
                        </span>
                    </a>
                    <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block font-semibold text-center text-gray-600 no-underline bg-transparent cursor-pointer hover:text-blue-500 focus:no-underline">
                        <span class="block">Mes Projets</span>
                        <span class="absolute bottom-0 left-0 inline-block w-full h-1 mt-0.5 overflow-hidden rounded-full">
                            <span x-show="hover" class="absolute inset-0 inline-block w-full h-full transform bg-blue-500" x-transition:enter="transition origin-center ease-out duration-200" x-transition:enter-start="scale-0" x-transition:enter-end="scale-100" x-transition:leave="transition ease-out origin-center duration-200" x-transition:leave-start="scale-100" x-transition:leave-end="scale-0" style="display: none;"></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>