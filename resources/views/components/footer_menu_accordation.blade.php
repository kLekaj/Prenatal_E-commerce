 <div class="container md:hidden mx-5 mx-auto">

     <div
         x-data="{ openedIndex: 1 }"
         class="flex items-center justify-center" id="ac-3">
         <div
             @click="openedIndex == 2 ? openedIndex = -1 : openedIndex = 2"
             class="uppercase text-gray-900 text-sm font-bold  p-2 mx-auto w-full"
             x-data="{ show: false }"
         >
             <button
                 @click="show = !show"
                 :class="{ 'active': show }"
                 class="w-full mx-auto flex justify-center items-center px-4 relative fixed bg-white w-full"
             >
                 <p class=" font-bold text-sm uppercase leading-5 flex   px-2">CATEGORIE </p>
                 <span
                     @click="show = !show"
                     :class="{ 'hide': show }"
                     class="text-[#E72B6F] font-bold text-sm uppercase leading-5 flex justify-between items-center p-4"
                 >
                     <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#E72B6F] flex-shrink-0 open">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                     </svg>
                 </span>
                 <span
                     @click="show = !show"
                     :class="{ 'show': show }"
                     class="hidden text-[#E72B6F] font-bold text-sm uppercase leading-5 flex justify-between items-center p-4">
                     <svg
                         x-show.transition.in.duration.800ms="openedIndex == 2"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-[#E72B6F] flex-shrink-0 close">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                     </svg>
                 </span>
             </button>
         </div>
     </div>
     <div x-show.transition.in.duration.800ms="openedIndex == 2" class="bg-white">
         <div class="">
             <div class="text-center md:text-left">
                 <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                     <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/mamma/">MAMMA
                     </a>
                 </p>
             </div>
             <div class="text-center md:text-left">
                 <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                     <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/moda-bambina/">BAMBINA
                     </a>
                 </p>
             </div>
             <div class="text-center md:text-left">
                 <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                     <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/moda-bambino/">BAMBINO
                     </a>
                 </p>
             </div>
             <div class="text-center md:text-left">
                 <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                     <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/casa/">CASA
                     </a>
                 </p>
             </div>
             <div class="text-center md:text-left">
                 <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                     <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/passeggini/">PASSEGGIO
                     </a>
                 </p>
             </div>
             <div class="text-center md:text-left">
                 <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                     <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/auto-viaggio/">AUTO &amp; VIAGGIO
                     </a>
                 </p>
             </div>
             <div class="text-center md:text-left">
                 <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                     <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/gioco/">GIOCO
                     </a>
                 </p>
             </div>
             <div class="text-center md:text-left">
                 <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                     <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/baby-food/">BABY FOOD
                     </a>
                 </p>
             </div>
             <div class="text-center md:text-left">
                 <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                     <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/pappa/">PAPPA
                     </a>
                 </p>
             </div>
             <div class="text-center md:text-left">
                 <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                     <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/igiene/">IGIENE
                     </a>
                 </p>
             </div>
         </div>
     </div>
     <div
         x-data="{ openedIndex: 1 }"
         class="flex items-center justify-center" id="ac-3">
         <div
             @click="openedIndex == 2 ? openedIndex = -1 : openedIndex = 2"
             class="uppercase text-gray-900 text-sm font-bold mx-auto w-full"
             x-data="{ show: false }"
         >
             <button
                 @click="show = !show"
                 :class="{ 'active': show }"
                 class="w-full mx-auto flex justify-center items-center px-4 relative fixed bg-white w-full"
             >
                 <p class=" font-bold text-sm uppercase leading-5 flex   px-2">TU E PRENATAL </p>
                 <span
                     @click="show = !show"
                     :class="{ 'hide': show }"
                     class="text-[#E72B6F] font-bold text-sm uppercase leading-5 flex justify-between items-center p-4"
                 >
                     <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#E72B6F] flex-shrink-0 open">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                     </svg>
                 </span>

                 <span
                     @click="show = !show"
                     :class="{ 'show': show }"
                     class="hidden text-[#E72B6F] font-bold text-sm uppercase leading-5 flex justify-between items-center p-4">
                     <svg
                         x-show.transition.in.duration.800ms="openedIndex == 2"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-[#E72B6F] flex-shrink-0 close">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                     </svg>
                 </span>
             </button>
         </div>
     </div>
     <di x-show.transition.in.duration.800ms="openedIndex == 2" class="bg-white">
         <div class="">
             <div class="text-center md:text-left">
                 <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                     <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/mamma/">MAMMA
                     </a>
                 </p>
             </div>
             <div class="text-center md:text-left">
                 <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                     <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/moda-bambina/">BAMBINA
                     </a>
                 </p>
             </div>
             <div class="text-center md:text-left">
                 <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                     <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/moda-bambino/">BAMBINO
                     </a>
                 </p>
             </div>
             <div class="text-center md:text-left">
                 <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                     <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/casa/">CASA
                     </a>
                 </p>
             </div>
             <div class="text-center md:text-left">
                 <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                     <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/passeggini/">PASSEGGIO
                     </a>
                 </p>
             </div>
             <div class="text-center md:text-left">
                 <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                     <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/auto-viaggio/">AUTO &amp; VIAGGIO
                     </a>
                 </p>
             </div>
             <div class="text-center md:text-left">
                 <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                     <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/gioco/">GIOCO
                     </a>
                 </p>
             </div>
             <div class="text-center md:text-left">
                 <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                     <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/baby-food/">BABY FOOD
                     </a>
                 </p>
             </div>
             <div class="text-center md:text-left">
                 <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                     <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/pappa/">PAPPA
                     </a>
                 </p>
             </div>
             <div class="text-center md:text-left">
                 <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                     <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/igiene/">IGIENE
                     </a>
                 </p>
             </div>
         </div>
     </di>
     <div
         x-data="{ openedIndex: 1 }"
         class="flex items-center justify-center" id="ac-3">
         <div
             @click="openedIndex == 2 ? openedIndex = -1 : openedIndex = 2"
             class="uppercase text-gray-900 text-sm font-bold   mx-auto w-full"
             x-data="{ show: false }"
         >
             <button
                 @click="show = !show"
                 :class="{ 'active': show }"
                 class="w-full mx-auto flex justify-center items-center px-4 relative fixed bg-white w-full"
             >
                 <p class=" font-bold text-sm uppercase leading-5 flex   px-2">AZIEND </p>
                 <span
                     @click="show = !show"
                     :class="{ 'hide': show }"
                     class="text-[#E72B6F] font-bold text-sm uppercase leading-5 flex justify-between items-center p-4"
                 >
                     <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#E72B6F] flex-shrink-0 open"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                     </svg>
                 </span>
                 <span
                                @click="show = !show"
                                :class="{ 'show': show }"
                                class="hidden text-[#E72B6F] font-bold text-sm uppercase leading-5 flex justify-between items-center p-4">
                                        <svg
                                            x-show.transition.in.duration.800ms="openedIndex == 2"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-[#E72B6F] flex-shrink-0 close">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                                        </svg>
                                    </span>

                        </button>
                    </div>
                </div>
     <div x-show.transition.in.duration.800ms="openedIndex == 2" class="bg-white">
                    <div class="">
                        <div class="text-center md:text-left">
                            <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                                <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/mamma/">MAMMA
                                </a>
                            </p>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                                <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/moda-bambina/">BAMBINA
                                </a>
                            </p>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                                <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/moda-bambino/">BAMBINO
                                </a>
                            </p>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                                <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/casa/">CASA
                                </a>
                            </p>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                                <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/passeggini/">PASSEGGIO
                                </a>
                            </p>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                                <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/auto-viaggio/">AUTO &amp; VIAGGIO
                                </a>
                            </p>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                                <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/gioco/">GIOCO
                                </a>
                            </p>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                                <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/baby-food/">BABY FOOD
                                </a>
                            </p>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                                <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/pappa/">PAPPA
                                </a>
                            </p>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                                <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/igiene/">IGIENE
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

     <div
                    x-data="{ openedIndex: 1 }"
                    class="flex items-center justify-center" id="ac-3">

                    <div
                        @click="openedIndex == 2 ? openedIndex = -1 : openedIndex = 2"
                        class="uppercase text-gray-900 text-sm font-bold   mx-auto w-full"
                        x-data="{ show: false }"
                    >
                        <button
                            @click="show = !show"
                            :class="{ 'active': show }"
                            class="w-full mx-auto flex justify-center items-center px-4 relative fixed bg-white w-full"
                        >
                            <p class=" font-bold text-sm uppercase leading-5 flex   px-2">SUPPORTO </p>
                            <span
                                @click="show = !show"
                                :class="{ 'hide': show }"
                                class="text-[#E72B6F] font-bold text-sm uppercase leading-5 flex justify-between items-center p-4"
                            >
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#E72B6F] flex-shrink-0 open">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </span>

                            <span
                                @click="show = !show"
                                :class="{ 'show': show }"
                                class="hidden text-[#E72B6F] font-bold text-sm uppercase leading-5 flex justify-between items-center p-4">
                                        <svg
                                            x-show.transition.in.duration.800ms="openedIndex == 2"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-[#E72B6F] flex-shrink-0 close">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                                        </svg>
                                    </span>

                        </button>
                    </div>
                </div>
     <div x-show.transition.in.duration.800ms="openedIndex == 2" class="bg-white">
                    <div class="">
                        <div class="text-center md:text-left">
                            <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                                <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/mamma/">MAMMA
                                </a>
                            </p>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                                <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/moda-bambina/">BAMBINA
                                </a>
                            </p>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                                <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/moda-bambino/">BAMBINO
                                </a>
                            </p>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                                <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/casa/">CASA
                                </a>
                            </p>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                                <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/passeggini/">PASSEGGIO
                                </a>
                            </p>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                                <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/auto-viaggio/">AUTO &amp; VIAGGIO
                                </a>
                            </p>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                                <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/gioco/">GIOCO
                                </a>
                            </p>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                                <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/baby-food/">BABY FOOD
                                </a>
                            </p>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                                <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/pappa/">PAPPA
                                </a>
                            </p>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="uppercase text-gray-600 text-xs font-normal leading-6">
                                <a class="border-b border-transparent hover:border-primary hover:border-b-2 transition ease-in-out duration-200 hover:text-gray-900" href="https://www.prenatal.com/categoria-prodotto/igiene/">IGIENE
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

</div>


<style>
    .active {
        border-width: 2px;
        border-color: #E72B6F;
    }
    .hide{
        display: none;
    }
    .show{
        display: block;
    }
</style>
