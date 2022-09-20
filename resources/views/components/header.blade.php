<div class="w-full h-12flex justify-between items-center lg:bg-white lg:hidden bg-[#E72B6F] md:h-16">

<div class="w-[90%] mx-5 mx-auto md:w-[85%]">

    <div class="  mx-auto flex items-center  ">
    {{--        hamburger logo and location logo--}}
        <div class="-mx-2  lg:hidden flex flex-grow flex-shrink flex-1"  x-data="{showMenu : false}">
            <!--burger menu for categories-->
            <button @click.prevent="showMenu = !showMenu " class="px-2 py-4 flex justify-between ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24.001" height="17" viewBox="0 0 24.001 17" class="text-white lg:fill-current w-6 h-6">
                    <g data-name="Group 593">
                        <path data-name="Path 683" d="M1.5 14h21a1.5 1.5 0 110 3h-21a1.5 1.5 0 010-3zm21-11h-21a1.5 1.5 0 010-3h21a1.5 1.5 0 110 3zm0 7h-21a1.5 1.5 0 010-3h21a1.5 1.5 0 110 3z" fill="currentColor" fill-rule="evenodd"></path>
                    </g>
                </svg>
            </button>
            <div x-show="showMenu" class="fixed w-full top-0 left-0 bottom-px z-50 pointer-events-auto opacity-100" >
                <div class="absolute inset-0 bg-black bg-opacity-50 transition delay-75 duration-200"></div>
                <div   class="absolute bottom-0 top-0 left-0 bg-white max-w-2xl w-11/12 transform transition duration-300 ease-in ">
                    <div class="absolute top-0  transform  right-0 translate-x-full">
                        <button @click.prevent="showMenu = !showMenu" class="js-menu-trigger inline-flex items-center justify-center py-2 px-1 md:px-2 text-white focus:text-white focus:outline-none">
                            <span class="sr-only">Close Menu</span>
                            <svg height="24" x-show="open" viewBox="0 0 24 24" width="24" fill="white" class="w-6 h-6">
                                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                                <path d="M0 0h24v24H0z" fill="none"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="absolute inset-0  ">
                        <div  class="flex flex-col justify-between h-full">
                            <!--             top of the menu-->
                            <div class="block">
                                <div class="block p-6">
                                    <div class="flex items-center border-b border-gray-700">
                                        <div class="flex-1 pr-2">
                                            <button class="js-mobile-search-open-btn text-left block  border-none w-full text-base text-black placeholder-black h-10 leading-tight focus:outline-none" type="button">
                                                <span>Che prodotto stai cercando?</span>
                                                <span class="sr-only">Cerca</span>
                                            </button>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button title="Cerca" class="js-mobile-search-open-btn block  border-transparent py-2 px-2 rounded focus:bg-transparent focus:outline-none" type="button">
                                                <span class="sr-only">Cerca</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22.747" height="23.312" viewBox="0 0 22.747 23.312" class="w-6 h-6">
                                                    <g data-name="Group 597">
                                                        <path data-name="Path 686" d="M9.33 16.32a6.995 6.995 0 117-7 7 7 0 01-7 7zm5.57.49a9.381 9.381 0 111.68-1.62l5.85 6.15a1.171 1.171 0 01-1.7 1.61z" fill-rule="evenodd"></path>
                                                    </g>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--                    body of the menu-->
                            <div class="flex-grow flex-shrink overflow-y-auto">
                                <div class="block">
                                    <div class="border-t border-gray-200 flex items-center justify-between">
                                        <a  class="bg-white flex-1 py-5 px-6 font-normal  ">
                                            <span>Mamma</span>
                                        </a>
                                        <div class=" bg-red-100 h-[100%] " x-data="{showMenu : false}">
                                            <button @click.prevent="showMenu = !showMenu " class="py-5 px-6 bg-white focus:outline-none" aria-label="Open Submenu">
                                                <span class="sr-only">Apri  Mamma</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="24" width="24" stroke="currentColor" class="w-6 h-6 text-[#E72B6F]">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                </svg>
                                            </button>
                                            <!--                                        2nd menu-->
                                            <div x-show="showMenu" class="fixed w-full top-0 left-0 bottom-px z-50 pointer-events-auto opacity-100" >
                                                <div class="absolute inset-0 bg-black bg-opacity-50 transition delay-75 duration-200 " ></div>
                                                <div   class="absolute bottom-0 top-0 left-0 bg-white max-w-2xl w-full transform transition duration-300 ease-in ">
                                                    <div class="absolute inset-0  ">
                                                        <div  class="flex flex-col justify-between h-full">
                                                            <!--                                                        top of the menu-->
                                                            <div class="block ">
                                                                <div class="flex items-center justify-between">
                                                                    <button @click.prevent="showMenu = !showMenu" class="py-5 px-5 focus:outline-none" aria-label="Chiudi " >
                                                                        <span class="sr-only">Chiudi Mamma</span>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="24" width="24" stroke="currentColor" class="w-6 h-6 text-[#E72B6F] stroke-2">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                                                        </svg>
                                                                    </button>
                                                                    <a  class="font-bold text-lg text-[#E72B6F] uppercase m-auto py-5 px-6" title="Mamma" aria-label="Mamma">
                                                                        <span class="m-auto">Mamma</span>
                                                                    </a>
                                                                    <div class="w-12"></div>
                                                                </div>
                                                            </div>
                                                            <!--                                                       menu of the menu-->
                                                            <div class="flex-grow flex-shrink overflow-y-auto">
                                                                <div class="block">
                                                                    <div class="border-t border-gray-200 flex items-center justify-between">
                                                                        <a  class="bg-white flex-1 py-5 px-6 font-normal  ">
                                                                            <span>Abbigliamento</span>
                                                                        </a>
                                                                        <div class=" bg-red-100 h-[100%] " x-data="{showMenu : false}">
                                                                            <button @click.prevent="showMenu = !showMenu " class="py-5 px-6 bg-white focus:outline-none" aria-label="Open Submenu">
                                                                                <span class="sr-only">Apri  Mamma</span>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="24" width="24" stroke="currentColor" class="w-6 h-6 text-[#E72B6F]">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                                                </svg>
                                                                            </button>
                                                                            <!--                                        3 menu-->
                                                                            <div x-show="showMenu" class="fixed w-full top-0 left-0 bottom-px z-50 pointer-events-auto opacity-100" >
                                                                                <div class="absolute inset-0 bg-black bg-opacity-50 transition delay-75 duration-200 " ></div>
                                                                                <div   class="absolute bottom-0 top-0 left-0 bg-white max-w-2xl w-full transform transition duration-300 ease-in ">
                                                                                    <div class="absolute inset-0  ">
                                                                                        <div  class="flex flex-col justify-between h-full">
                                                                                            <!--                                                        top of the menu-->
                                                                                            <div class="block ">
                                                                                                <div class="flex items-center justify-between">
                                                                                                    <button @click.prevent="showMenu = !showMenu" class="py-5 px-5 focus:outline-none" aria-label="Chiudi " >
                                                                                                        <span class="sr-only">Chiudi Mamma</span>
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="24" width="24" stroke="currentColor" class="w-6 h-6 text-[#E72B6F] stroke-2">
                                                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                                                                                        </svg>
                                                                                                    </button>
                                                                                                    <a  class="font-bold text-lg text-[#E72B6F] uppercase m-auto py-5 px-6" title="Mamma" aria-label="Mamma">
                                                                                                        <span class="m-auto">Abbigliamento</span>
                                                                                                    </a>
                                                                                                    <div class="w-12"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--                                                        menu of the menu-->
                                                                                            <div class="flex-grow flex-shrink overflow-y-auto">
                                                                                                <div class="block">
                                                                                                    <div class="border-t border-gray-200 flex items-center justify-between">
                                                                                                        <a aria-label="Abbigliamento" data-submenu-open-id="menu-645174" class="bg-white flex-1 py-5 px-6 font-normal  ">
                                                                                                            <span>Abbigliamento</span>
                                                                                                        </a>
                                                                                                        <div class=" bg-red-100 h-[100%] " x-data="{showMenu : false}">
                                                                                                            <button @click.prevent="showMenu = !showMenu " class="py-5 px-6 bg-white focus:outline-none" data-submenu-open-id="menu-645174" aria-label="Open Submenu">
                                                                                                                <span class="sr-only">Apri  Abbigliamento</span>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--        location svg-->
            <a  class="inline-flex items-center justify-center px-2 md:px-4 py-2 focus:outline-none">
                <span class="uppercase font-normal text-xxs text-right leading-3 mr-1 hidden lg:block">Trova il negozio <br> Prénatal più vicino a te</span>
                <svg class="w-6 h-6 text-white " width="22" height="26" viewBox="0 0 22 26" fill="none">
                    <path d="M18.071 18.73l-5.304 5.51a2.492 2.492 0 01-.81.562 2.417 2.417 0 01-1.913 0 2.493 2.493 0 01-.81-.563l-5.305-5.508a10.517 10.517 0 01-2.737-5.318 10.76 10.76 0 01.57-6.001A10.312 10.312 0 015.443 2.75 9.737 9.737 0 0111 1c1.978 0 3.911.61 5.556 1.75a10.311 10.311 0 013.683 4.662 10.76 10.76 0 01.569 6 10.516 10.516 0 01-2.737 5.319z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M14.333 11.286a3.48 3.48 0 01-.976 2.424A3.287 3.287 0 0111 14.714a3.287 3.287 0 01-2.357-1.004 3.479 3.479 0 01-.976-2.424c0-.91.35-1.782.976-2.425A3.287 3.287 0 0111 7.857c.884 0 1.732.361 2.357 1.004.625.643.976 1.515.976 2.425z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
        </div>

        <!--        prenatal logo-->
        <a class="block  lg:hidden" >
            <span class="sr-only">Prenatal</span>
            <svg width="397" height="77" data-logo-icon="data-logo-icon" class="h-6 w-auto block sm:h-8 hidden lg:block" viewBox="0 0 397 77" fill="none" >
                <path d="M17.0625 38.5508H27.9023C30.5586 38.5508 32.2539 37.9102 33.4062 36.7461C34.4766 35.6562 35.1445 34.1641 35.1445 32.5156C35.1445 27.9883 29.918 25.6914 28.0664 27.543C29.918 25.6914 27.6211 20.4727 23.0938 20.4727C21.4453 20.4727 19.9531 21.1367 18.8633 22.207C17.7031 23.3633 17.0586 25.0586 17.0586 27.7109" fill="white"></path>
                <path d="M138.414 15.0586C138.414 13.2578 136.949 11.7969 135.152 11.7969C133.352 11.7969 131.891 13.2578 131.891 15.0586C131.891 16.8594 133.352 18.3242 135.152 18.3242C136.949 18.3242 138.414 16.8594 138.414 15.0586Z" fill="white"></path>
                <path d="M27.9766 0.00390989C20.2578 3.63967e-06 13.0078 3.14063 7.91407 8.15625C1.64454 14.3164 -0.00389933 21.0547 6.92108e-06 30.0391V76.3672C4.31251 76.332 7.86719 75.1719 10.3164 72.6133C12.9649 69.8477 14.0313 66.3906 14.0313 60.9844V29.6523C14.0313 24.0156 14.7813 20.7031 17.9219 17.5742C20.5234 15.0078 24.1172 13.6953 27.9766 13.6914C31.8477 13.6953 35.4492 15.168 38.0547 17.7188C40.6406 20.2773 41.918 23.7617 41.9258 27.6328C41.918 31.5039 40.4492 34.9961 37.9024 37.5547C34.9766 40.4648 31.5078 41.5703 26.3594 41.5742H17.082C17.1211 44.2734 18.1641 47.5078 19.9922 49.6719C22.168 52.2617 25.4297 53.8633 29.8984 53.8633C37.7891 53.8633 43.0703 51.5938 47.6445 47.5273C52.9883 42.7695 56.0899 35.957 56.0938 27.6328C56.0859 11.5781 43.8906 0.00781614 27.9766 0.00390989Z" fill="white"></path>
                <path d="M244.441 20.6328C252.168 20.6289 259.547 23.5625 264.68 28.625C271.004 34.832 272.43 41.6875 272.426 50.6719V76.3711C268.109 76.3359 264.562 75.1758 262.109 72.6211C259.457 69.8516 258.395 66.4023 258.395 60.9922V50.7305C258.395 44.9414 257.57 41.582 254.449 38.3867C251.859 35.7578 248.313 34.332 244.441 34.3281C240.566 34.332 237.012 35.9219 234.426 38.5273C231.855 41.1445 230.496 44.6836 230.492 48.6641C230.496 52.6445 231.816 56.418 234.395 59.1172C237.348 62.1836 240.906 63.1914 246.066 63.1953H255.34C255.34 71.2969 250.555 75.7852 242.949 75.7852C235.055 75.7852 229.109 73.3789 224.555 69.1133C219.379 64.2617 216.465 57.2227 216.461 48.6641C216.469 32.7773 228.527 20.6328 244.441 20.6328Z" fill="white"></path>
                <path d="M114.125 48.1875C114.309 43.7421 115.965 40.039 118.985 37.1796C123.137 33.25 129.567 32.332 133.715 34.6054C131.711 36.4882 120.606 46.8164 114.547 52.4531C114.219 51.1015 114.067 49.6836 114.125 48.1875ZM139.809 58.0312C134.527 62.7968 131.485 63.6367 127.078 63.4023C125.676 63.3242 124.27 62.9687 122.934 62.3984C131.36 54.7968 152.285 35.9257 152.887 35.3867C147.391 25.5976 138.602 21.2421 129.379 20.7265C122.246 20.3203 114.645 23.1992 109.531 27.8476C103.93 32.914 100.75 39.7265 100.344 46.9921C99.9025 54.8046 102.406 62.1796 107.098 67.3906C112.254 73.1132 119.36 76.0781 126.453 76.4726C133.492 76.875 141.516 73.8632 146.457 68.375C150.828 63.2929 151.754 56.8476 147.395 51.1484" fill="white"></path>
                <path d="M170.246 60.9883C170.246 66.3906 169.188 69.8477 166.531 72.6172C164.082 75.1719 160.527 76.3359 156.211 76.3711L156.207 49.707C156.203 40.9297 158.363 34.207 164.176 28.6953C169.242 23.8633 176.379 20.7109 184.023 20.7148C191.66 20.7109 198.926 23.6563 204.035 28.5195C209.758 33.9453 211.84 41.0156 211.832 49.707L211.84 74.832H197.805V49.832C197.801 44.1836 196.914 41.2422 194.047 38.3711C191.469 35.8125 187.867 34.4023 184.023 34.3984C180.18 34.4023 176.574 35.8125 174 38.3711C170.992 41.3789 170.246 44.6445 170.242 49.832" fill="white"></path>
                <path d="M85.5117 20.6328C77.793 20.6289 70.543 23.7344 65.4336 28.7891C59.0117 35.1328 57.5312 41.9258 57.5312 51.2305V76.3672C61.8516 76.3359 65.4062 75.1719 67.8594 72.6133C70.5078 69.8477 71.5742 66.3906 71.5742 60.9883L71.5664 48.9727C71.5742 45.0781 72.5078 41.2461 75.3281 38.4492C77.918 35.9063 81.3008 34.3203 85.5117 34.3164C88.8008 34.3203 91.8867 35.457 94.3359 37.3906L104.277 27.4492C99.1836 22.9375 92.5469 20.6289 85.5117 20.6328Z" fill="white"></path>
                <path d="M305.238 34.9414V21.4727H291.328V21.1641C291.328 15.7617 290.266 12.3047 287.613 9.54297C285.164 6.98437 281.609 5.82812 277.293 5.78906V46.4648C277.289 57.207 280.129 63.2539 285.34 68.4141C290.387 73.4297 297.469 76.3672 305.105 76.3633V62.5664C301.609 62.5664 297.715 61.2461 295.164 58.6875C292.563 56.0547 291.328 52.9805 291.324 47.582V34.9414" fill="white"></path>
                <path d="M336.191 20.6328C343.91 20.6289 351.285 23.5625 356.422 28.625C362.742 34.832 364.176 41.6875 364.172 50.6719V76.3711C359.855 76.3359 356.301 75.1758 353.852 72.6211C351.203 69.8516 350.137 66.4023 350.137 60.9922V50.7305C350.133 44.9414 349.309 41.582 346.191 38.3867C343.598 35.7578 340.047 34.332 336.191 34.3281C332.316 34.332 328.762 35.9219 326.18 38.5273C323.605 41.1445 322.246 44.6836 322.246 48.6641C322.246 52.6445 323.566 56.418 326.145 59.1172C329.102 62.1836 332.656 63.1914 337.809 63.1953H347.082C347.082 71.2969 342.297 75.7852 334.699 75.7852C326.809 75.7852 320.855 73.3789 316.305 69.1133C311.129 64.2617 308.211 57.2227 308.211 48.6641C308.215 32.7773 320.277 20.6328 336.191 20.6328Z" fill="white"></path>
                <path d="M386.902 58.6875C384.305 56.0547 383.07 52.9805 383.066 47.582L383.07 21.1719C383.07 15.7617 382.004 12.3047 379.355 9.54297C376.906 6.98437 373.352 5.82812 369.035 5.78906L369.031 46.4648C369.027 57.207 371.871 63.2539 377.078 68.4141C382.129 73.4297 389.207 76.3672 396.852 76.3633V62.5664C393.352 62.5664 389.453 61.2461 386.902 58.6875Z" fill="white"></path>
            </svg>
            <svg width="1034" height="232" data-logo-icon="data-logo-icon" class="h-6 w-auto block sm:h-8 lg:hidden" viewBox="0 0 1034 232" fill="none" >
                <rect width="1034" height="232" fill="#E72B6F"></rect>
                <path d="M70.0486 117H96.7677C103.303 117 107.491 115.42 110.323 112.553C112.966 109.866 114.608 106.186 114.608 102.131C114.608 90.969 101.731 85.3078 97.1596 89.8797C101.731 85.3078 96.0704 72.4496 84.9174 72.4496C80.8536 72.4496 77.175 74.0829 74.4871 76.7268C71.6206 79.5667 70.0393 83.7452 70.0393 90.2823L70.0486 117Z" fill="white"></path>
                <path d="M369.113 59.1047C369.113 54.6674 365.505 51.0674 361.066 51.0674C356.629 51.0674 353.029 54.6674 353.029 59.1047C353.029 63.5434 356.629 67.1514 361.066 67.1514C365.505 67.1514 369.113 63.5434 369.113 59.1047Z" fill="white"></path>
                <path d="M96.9482 21.9999C77.9182 21.9905 60.0495 29.7329 47.5033 42.1018C32.0545 57.2826 27.992 73.8833 28 96.0198V210.189C38.6263 210.109 47.3873 207.252 53.4244 200.947C59.9508 194.132 62.5681 185.605 62.5681 172.29V95.0639C62.5774 81.179 64.416 73.0167 72.1584 65.3103C78.5702 58.9785 87.4378 55.7466 96.9482 55.7373C106.485 55.7466 115.362 59.3718 121.774 65.6583C128.158 71.9634 131.302 80.5537 131.319 90.1C131.302 99.637 127.684 108.237 121.398 114.55C114.192 121.711 105.646 124.444 92.9563 124.453H70.0958C70.1945 131.097 72.7664 139.072 77.2582 144.402C82.634 150.787 90.671 154.734 101.672 154.734C121.13 154.734 134.141 149.145 145.42 139.116C158.582 127.391 166.227 110.603 166.235 90.1C166.218 50.5228 136.16 22.0172 96.9482 21.9999Z" fill="white"></path>
                <path d="M630.403 72.8423C649.441 72.833 667.623 80.0674 680.285 92.5323C695.859 107.838 699.387 124.726 699.368 146.872V210.203C688.733 210.123 679.981 207.256 673.945 200.97C667.408 194.138 664.783 185.637 664.783 172.313V147.014C664.783 132.753 662.756 124.466 655.067 116.599C648.682 110.116 639.94 106.606 630.403 106.597C620.856 106.606 612.097 110.518 605.721 116.938C599.38 123.395 596.031 132.111 596.023 141.924C596.031 151.73 599.291 161.034 605.64 167.687C612.927 175.243 621.687 177.725 634.412 177.733H657.264C657.264 197.7 645.468 208.764 626.723 208.764C607.274 208.764 592.62 202.835 581.395 192.315C568.634 180.358 561.455 163.008 561.445 141.924C561.464 102.767 591.191 72.8423 630.403 72.8423Z" fill="white"></path>
                <path d="M309.246 140.752C309.702 129.794 313.782 120.66 321.222 113.623C331.455 103.934 347.297 101.684 357.522 107.273C352.583 111.917 325.222 137.367 310.291 151.262C309.478 147.932 309.113 144.431 309.246 140.752ZM372.541 165.005C359.531 176.758 352.038 178.829 341.18 178.24C337.714 178.052 334.251 177.178 330.955 175.766C351.726 157.04 403.296 110.533 404.769 109.203C391.231 85.0836 369.568 74.34 346.841 73.072C329.267 72.0721 310.533 79.1625 297.923 90.6287C284.118 103.112 276.286 119.901 275.286 137.806C274.197 157.058 280.375 175.231 291.931 188.072C304.638 202.181 322.14 209.476 339.634 210.459C356.976 211.44 376.748 204.021 388.929 190.501C399.698 177.98 401.975 162.094 391.241 148.039L372.541 165.005Z" fill="white"></path>
                <path d="M447.555 172.29C447.555 185.604 444.94 194.124 438.402 200.947C432.365 207.252 423.606 210.117 412.961 210.198V144.491C412.943 122.863 418.266 106.298 432.597 92.7159C445.082 80.803 462.674 73.034 481.508 73.0433C500.331 73.034 518.226 80.295 530.818 92.2879C544.928 105.646 550.053 123.077 550.036 144.491L550.053 206.412H515.468V144.805C515.458 130.882 513.27 123.631 506.207 116.559C499.858 110.254 490.973 106.781 481.508 106.771C472.032 106.781 463.156 110.254 456.807 116.559C449.395 123.971 447.555 132.025 447.546 144.805L447.555 172.29Z" fill="white"></path>
                <path d="M238.736 72.8424C219.716 72.8331 201.847 80.4781 189.256 92.9443C173.423 108.58 169.78 125.315 169.78 148.246V210.193C180.424 210.123 189.193 207.247 195.23 200.951C201.758 194.129 204.383 185.61 204.383 172.287L204.366 142.684C204.383 133.092 206.687 123.645 213.644 116.751C220.02 110.482 228.359 106.58 238.736 106.561C246.845 106.58 254.444 109.384 260.481 114.144L284.984 89.6405C272.429 78.5222 256.069 72.8331 238.736 72.8424Z" fill="white"></path>
                <path d="M780.231 108.103V74.9198H745.958V74.1598C745.958 60.8456 743.333 52.3259 736.796 45.5128C730.76 39.1997 721.999 36.3598 711.363 36.2612V136.5C711.355 162.977 718.347 177.881 731.188 190.589C743.627 202.956 761.076 210.189 779.91 210.189V176.184C771.293 176.184 761.692 172.925 755.398 166.63C748.995 160.138 745.958 152.556 745.941 139.259V108.103H780.231Z" fill="white"></path>
                <path d="M856.513 72.8423C875.533 72.833 893.715 80.0674 906.368 92.5323C921.942 107.838 925.478 124.726 925.469 146.872V210.203C914.825 210.123 906.073 207.256 900.028 200.97C893.51 194.138 890.883 185.637 890.883 172.313V147.014C890.866 132.753 888.839 124.466 881.16 116.599C874.765 110.116 866.014 106.606 856.513 106.597C846.966 106.606 838.197 110.518 831.839 116.938C825.499 123.395 822.142 132.111 822.142 141.924C822.142 151.73 825.4 161.034 831.749 167.687C839.037 175.243 847.806 177.725 860.504 177.733H883.348C883.348 197.7 871.56 208.764 852.834 208.764C833.393 208.764 818.721 202.835 807.505 192.315C794.744 180.358 787.556 163.008 787.556 141.924C787.574 102.767 817.301 72.8423 856.513 72.8423Z" fill="white"></path>
                <path d="M981.487 166.627C975.085 160.135 972.048 152.553 972.04 139.257L972.048 74.1676C972.048 60.8441 969.405 52.3244 962.887 45.5114C956.85 39.2063 948.098 36.3584 937.454 36.2584L937.445 136.497C937.436 162.975 944.437 177.878 957.279 190.595C969.717 202.955 987.167 210.196 1006 210.188V176.183C997.383 176.183 987.774 172.932 981.487 166.627Z" fill="white"></path>
            </svg>
        </a>

        <!--    bag -->
        <div class="-mx-2 lg:hidden flex-grow flex-shrink flex justify-end flex-1">
            <span>
                <div class="relative z-5 " >
                    <span class="relative z-10 ">
                        <button  class="inline-flex items-center justify-center p-2 text-gray-700">
                            <svg width="22.844" height="26.308" viewBox="0 0 22.844 26.308" fill="white" class="w-6 h-6 lg:text-gray-700">
                                <g >
                                    <path data-name="Path 684" d="M1.949 24.595L3.094 8.386l16.638.068 1.112 16.209zm20.864.665L21.452 7.329a.822.822 0 00-.82-.759H2.195a.821.821 0 00-.82.76L.002 25.424a.822.822 0 00.82.884h21.2a.823.823 0 00.822-.823.8.8 0 00-.031-.225z"></path>
                                    <path data-name="Path 685" d="M11.413 0a6.588 6.588 0 00-6.579 6.581v3.278a.823.823 0 101.645 0V6.581a4.935 4.935 0 119.869 0v3.278a.823.823 0 101.645 0V6.581A6.588 6.588 0 0011.413 0z"></path>
                                </g>
                            </svg>
                        </button>
                    </span>
                </div>
            </span>
        </div>
    </div>
</div>
</div>
