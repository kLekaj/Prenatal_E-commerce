<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--        @vite('resources/css/app.css')--}}
    {{--                swipper js--}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

</head>

<div class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen relative flex flex-col md:flex-row bg-gray-100" data-form-step="MAIN" data-step-endpoint="https://login.prenatal.com/register-analytics">
        <div class="pt-8 md:pt-24 w-full md:w-1/3 bg-gray-100 md:bg-gray-50 flex items-start justify-center md:justify-end md:px-8">
            <div class="md:sticky md:top-8 w-full max-w-md md:max-w-mini px-8 md:px-0">
                <p class="text-2xl">
                    Crea il tuo account
                </p>
                <p class="mt-4 text-sm">
                    Registrati per avere un accesso unico e veloce a un mondo ricco di servizi e vantaggi dedicati alla gravidanza e non solo, per tutta la famiglia
                </p>
                <div class="py-4 md:pt-12 md:pb-16 w-full">
                    <ol class="flex md:flex-col space-x-8 md:space-x-0 md:space-y-3">
                        <li data-label="MAIN" class="whitespace-nowrap"><span class="text-xs font-semibold">1.</span> <span class="text-sm all-small-caps tracking-widest font-semibold">Informazioni personali</span>
                        </li>
                        <li data-label="RESIDENTIAL" class="whitespace-nowrap"><span class="text-xs font-semibold">2.</span> <span class="text-sm all-small-caps tracking-widest font-semibold">Indirizzo di residenza</span>
                        </li>
                        <li data-label="CONTACTS" class="whitespace-nowrap"><span class="text-xs font-semibold">3.</span> <span class="text-sm all-small-caps tracking-widest font-semibold">Informazioni di contatto</span>
                        </li>
                        <li data-label="TELL_US_MORE" class="whitespace-nowrap"><span class="text-xs font-semibold">4.</span> <span class="text-sm all-small-caps tracking-widest font-semibold">Dicci di più</span></li>
                        <li data-label="CONSENTS" class="whitespace-nowrap"><span class="text-xs font-semibold">5.</span> <span class="text-sm all-small-caps tracking-widest font-semibold">Dichiarazione di consenso</span>
                        </li>
                    </ol>
                </div>
                <div class="hidden md:flex">
                    <div class="bg-[#E72B6F] px-4 py-3 rounded-lg">
                        <svg width="397" height="77" class="h-8 w-auto block" data-logo-icon="data-logo-icon" viewBox="0 0 397 77" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full md:w-2/3 flex flex-col justify-start items-center pt-0 md:py-8 bg-gray-100">
            <form method="post" action="/registers" class="block w-full" >
                <div class="mx-auto w-full max-w-md bg-white overflow-hidden rounded-lg relative flex flex-col justify-start" style="min-height: calc(100vh - 4rem);">
                    <div d class="w-full h-full pt-6 pb-8 grow flex-col justify-start">
                        <p class="w-full mt-6 text-lg px-8">1. Informazioni personali</p>
                        <fieldset class="p-8 flex flex-col grow space-y-4 md:space-y-3">

                            <div>
                                <p class="text-sm text-gray-500">Hai una Prénatal Card o una VIP Card?</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-xs">Collegala in un attimo al tuo account</span>
                                    <button type="button" class="flex items-center justify-center text-[#E72B6F]">
                                        <span class="text-xs all-small-caps font-semibold tracking-wider">Aggiungi</span>
                                        <svg class="w-6 h-6 text-[#E72B6F] fill-current" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>Icon/Add/Outline</title>
                                            <g id="Symbols" stroke="none" stroke-width="1" fill-rule="evenodd">
                                                <g id="Icon/Add/Outline">
                                                    <path d="M16.6832,3.76875997 C18.5096,3.97287997 19.9845,5.41152997 20.1994,7.24848998 C20.5686,10.4054 20.5686,13.5946 20.1994,16.7515 C19.9845,18.5885 18.5096,20.0271 16.6832,20.2313 C13.5957,20.5763 10.4043,20.5763 7.31672998,20.2313 C5.49034997,20.0271 4.01544997,18.5885 3.80059997,16.7515 C3.43136996,13.5946 3.43136996,10.4054 3.80059997,7.24848998 C4.01544997,5.41152997 5.49034997,3.97287997 7.31672998,3.76875997 C10.4043,3.42367996 13.5957,3.42367996 16.6832,3.76875997 Z M7.48333998,5.25947997 C6.33890998,5.38737997 5.42285997,6.29062998 5.29044997,7.42273998 C4.93475997,10.4639 4.93475997,13.5361 5.29044997,16.5773 C5.42285997,17.7094 6.33890998,18.6126 7.48333998,18.7405 C10.4602,19.0732 13.5398,19.0732 16.5166,18.7405 C17.6611,18.6126 18.5771,17.7094 18.7095,16.5773 C19.0652,13.5361 19.0652,10.4639 18.7095,7.42273998 C18.5771,6.29062998 17.6611,5.38737997 16.5166,5.25947997 C13.5398,4.92676997 10.4602,4.92676997 7.48333998,5.25947997 Z M12,7.00734998 C12.4142,7.00734998 12.75,7.34313998 12.75,7.75734998 L12.75,11.25 L16.2427,11.25 C16.6569,11.25 16.9927,11.5858 16.9927,12 C16.9927,12.4142 16.6569,12.75 16.2427,12.75 L12.75,12.75 L12.75,16.2426 C12.75,16.6569 12.4142,16.9926 12,16.9926 C11.5858,16.9926 11.25,16.6569 11.25,16.2426 L11.25,12.75 L7.75738998,12.75 C7.34316998,12.75 7.00738998,12.4142 7.00738998,12 C7.00738998,11.5858 7.34316998,11.25 7.75738998,11.25 L11.25,11.25 L11.25,7.75734998 C11.25,7.34313998 11.5858,7.00734998 12,7.00734998 Z" id="Combined-Shape"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            @csrf

                        <!-- Email Address -->
                            <div class="relative z-0 w-full mb-5 ">
                                <input
                                        type="email"
                                        name="email"
                                        placeholder=" "
                                        class="block w-full px-4 pt-3 pb-2 rounded-md bg-transparent border border-gray-300 focus:border-gray-500 ring-transparent ring-1 focus:ring-gray-500 outline-none read-only:opacity-100 "
                                        required=""
                                />
                                <label
                                        for="name"
                                        class="absolute duration-200 top-3 left-4 -z-1 origin-left text-sm text-gray-400">
                                    Email*
                                </label>

                            </div>
{{--                        <!-- Password -->--}}
                            <div class="flex flex-wrap">
                                <div class="flex w-full">
                                    <div class="relative z-0 w-full flex-1">
                                        <input
                                            type="password"
                                            name="password"
                                            placeholder=" "
                                            class="block w-full px-4 pt-3 pb-2 rounded-md bg-transparent border border-gray-300 focus:border-gray-500 ring-transparent ring-1 focus:ring-gray-500 outline-none read-only:opacity-100 "
                                            required=""
                                        />
                                        <label for="name" class="absolute duration-200 top-3 left-4 -z-1 origin-left text-sm text-gray-400">Password*</label>
                                        <span class="text-sm text-red-600 hidden" id="error">Password is required</span>
                                        <button class="absolute top-3 right-0 pr-4 flex items-center" type="button">
                                            <svg  class="hidden w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                <path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"></path>
                                            </svg>
                                            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"></path>
                                                <path d="M12 6c3.79 0 7.17 2.13 8.82 5.5-.59 1.22-1.42 2.27-2.41 3.12l1.41 1.41c1.39-1.23 2.49-2.77 3.18-4.53C21.27 7.11 17 4 12 4c-1.27 0-2.49.2-3.64.57l1.65 1.65C10.66 6.09 11.32 6 12 6zm-1.07 1.14L13 9.21c.57.25 1.03.71 1.28 1.28l2.07 2.07c.08-.34.14-.7.14-1.07C16.5 9.01 14.48 7 12 7c-.37 0-.72.05-1.07.14zM2.01 3.87l2.68 2.68C3.06 7.83 1.77 9.53 1 11.5 2.73 15.89 7 19 12 19c1.52 0 2.98-.29 4.32-.82l3.42 3.42 1.41-1.41L3.42 2.45 2.01 3.87zm7.5 7.5l2.61 2.61c-.04.01-.08.02-.12.02-1.38 0-2.5-1.12-2.5-2.5 0-.05.01-.08.01-.13zm-3.4-3.4l1.75 1.75c-.23.55-.36 1.15-.36 1.78 0 2.48 2.02 4.5 4.5 4.5.63 0 1.23-.13 1.77-.36l.98.98c-.88.24-1.8.38-2.75.38-3.79 0-7.17-2.13-8.82-5.5.7-1.43 1.72-2.61 2.93-3.53z"></path>
                                            </svg>
                                        </button>
                                    </div>

                                </div>

                                <div  class="mt-1 w-full flex-shrink-0 flex">
                                    <p class="px-4 text-xs text-left text-red-800">
                                        La password deve avere almeno 6 caratteri, con lettere maiuscole e minuscole e numeri.
                                    </p>
                                </div>
                            </div>
{{--                            <!-- First Name -->--}}
                            <div class="flex flex-col space-y-4 md:flex-row md:space-y-0 md:space-x-4">
                                <div class="relative z-0  mb-5 ">
                                    <input
                                        type="text"
                                        name="name"
                                        placeholder=" "
                                        class="block w-full px-4 pt-3 pb-2 rounded-md bg-transparent border border-gray-300 focus:border-gray-500 ring-transparent ring-1 focus:ring-gray-500 outline-none read-only:opacity-100 "
                                        required=""
                                    />
                                    <label for="name" class="absolute duration-200 top-3 left-4 -z-1 origin-left text-sm text-gray-400">Nome*</label>
                                    <span class="text-sm text-red-600 hidden" id="error">Nome is required</span>
                                </div>
                                @error('name')
                                <p>{{ $message }}</p>
                            @enderror

{{--                            <!-- Last Name -->--}}

                                <div class="relative z-0  mb-5 ">
                                    <input
                                        type="text"
                                        name="las_name"
                                        placeholder=" "
                                        class="block w-full px-4 pt-3 pb-2 rounded-md bg-transparent border border-gray-300 focus:border-gray-500 ring-transparent ring-1 focus:ring-gray-500 outline-none read-only:opacity-100 "
                                    />
                                    <label for="last_name" class="absolute duration-200 top-3 left-4 -z-1 origin-left text-sm text-gray-400">Cognome*</label>
                                    <span class="text-sm text-red-600 hidden" id="error">Cognome* is required</span>
                                </div>

                            </div>


                            <div class="hidden md:block relative z-0">

                                <div class="relative z-0 w-full mb-5 ">
                                    <input
                                        type="date"
                                        name="date"
                                        placeholder="Data di nascita*"
                                        class="block w-full px-4 pt-3 pb-2 rounded-md bg-transparent border border-gray-300 focus:border-gray-500 ring-transparent ring-1 focus:ring-gray-500 outline-none read-only:opacity-100 "
                                    />
                                    <label for="date" class="absolute duration-200 top-3 left-4 -z-1 origin-left text-sm text-gray-400">Data di nascita*</label>
                                    <span class="text-sm text-red-600 hidden" id="error">Data di nascita is required</span>
                                </div>

                            </div>


                            <div>
                                <div class="md:hidden relative z-0">
                                    <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24" enable-background="new 0 0 24 24">
                                            <g>
                                                <rect fill="none" height="24" width="24"></rect>
                                            </g>
                                            <g>
                                                <path d="M19,4h-1V2h-2v2H8V2H6v2H5C3.89,4,3.01,4.9,3.01,6L3,20c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.1,4,19,4z M19,20 H5V10h14V20z M19,8H5V6h14V8z M9,14H7v-2h2V14z M13,14h-2v-2h2V14z M17,14h-2v-2h2V14z M9,18H7v-2h2V18z M13,18h-2v-2h2V18z M17,18 h-2v-2h2V18z"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <input
                                            class="block w-full px-4 pt-3 pb-2 rounded-md bg-transparent border border-gray-300 focus:border-gray-500 ring-transparent ring-1 focus:ring-gray-500 outline-none read-only:opacity-100"
                                            type="date"
                                            min="1922-10-31"
                                            max="2004-10-30"
                                            id="birthday_mobile"
                                            name="birthday_mobile"
                                            data-forced-fl="Y"
                                            placeholder=""
                                    >
                                    <label
                                            class="absolute duration-200 top-3 left-4 -z-1 origin-left text-sm text-gray-400"
                                            for="birthday_mobile">
                                        Data di nascita*
                                    </label>
                                </div>
                                <div  class="hidden text-xs text-right text-red-800">Obbligatorio.</div>
                                <div  class="hidden text-xs text-right text-red-800">Deve essere una data precedente o uguale al 30/10/2004.</div>
                                <div  class="hidden text-xs text-right text-red-800">Deve essere una data successiva o uguale al 31/10/1922.</div>

                            </div>

                            <div class="">
                                <div class="flex items-center justify-start">
                                    Sesso

                                    <div class="ml-auto flex space-x-8">
                                        <label class="inline-flex items-center py-2">
                                            <input
                                                    type="radio"
                                                    class="rounded-full h-4 w-4 border-2 border-gray-600 bg-white checked:border-gray-900 focus:outline-none transition duration-200 align-top bg-no-repeat bg-center bg-contain cursor-pointer"
                                                    name="sex"
                                                    value="F">

                                            <span class="ml-2 text-gray-700">Femmina</span>
                                        </label>
                                        <label class="inline-flex items-center py-2">
                                            <input
                                                    type="radio"
                                                    class="rounded-full h-4 w-4 border-2 border-gray-600 bg-white checked:border-gray-900 focus:outline-none transition duration-200 align-top bg-no-repeat bg-center bg-contain cursor-pointer"
                                                    name="sex"
                                                    value="M">
                                            <span class="ml-2 text-gray-700">Maschio</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                <div class="mt-1 flex items-start justify-space-between space-x-16">
                                    <label class="inline-flex items-center cursor-pointer">
                                        <input
                                                type="checkbox"
                                                class="text-gray-700 w-5 h-5 outline-0 bg-white focus:outline-none transition duration-200 align-top bg-no-repeat bg-center bg-contain cursor-pointer flex-shrink-0"
                                                name="privacy"
                                                value="1" >
                                        <span class="ml-8 text-gray-700">
                                                Dichiaro di aver letto ed accettato
                                                <a class="text-[#E72B6F] underline hover:no-underline" target="_blank" href="https://storage.googleapis.com/prenatal-italy/2021/09/a570a73c-informativa-privacy-card.pdf">l’informativa sui dati personali</a> e di aver preso visione ed accettato il <a class="text-[#E72B6F] underline hover:no-underline" target="_blank" href="https://storage.googleapis.com/prenatal-italy/2020/10/be20245c-regolamento-pr%C3%89natal-card.pdf">Regolamento della Prenatal Card</a> o il <a class="text-[#E72B6F] underline hover:no-underline" target="_blank" href="https://storage.googleapis.com/prenatal-italy/2020/10/655228fe-regolamento-pr%C3%89natal-vip-card.pdf">
                                                    Regolamento della Prenatal VIP Card
                                                </a>.
                                                *
                                            </span>


                                    </label>
                                </div>
                            </div>
                            <div class="space-y-4 py-4">
                                <input type="hidden" name="primary_button" value="FULL">
                                <div>
                                    <button
                                            type="submit"
                                            class="flex w-full items-center justify-center px-4 py-3 bg-[#E72B6F] border border-[#E72B6F] rounded-lg font-semibold text-sm text-white uppercase tracking-wide hover:bg-white hover:text-[#E72B6F] active:bg-white cursor-pointer focus:bg-opacity-75 disabled:bg-[#E72B6F] disabled:text-white transition ease-in-out duration-150 outline-none" >
                                        Registrati senza dirci di più
                                    </button>
                                </div>
                                <div>
                                    <button
                                            type="button"
                                            class="flex w-full items-center justify-center px-4 py-3 border rounded-lg font-semibold text-sm text-gray-700 uppercase tracking-wide cursor-pointer focus:bg-gray-100 disabled:cursor-default disabled:opacity-25 transition ease-in-out duration-150 outline-none"
                                            disabled=""
                                    >
                                        Personalizza la tua esperienza
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<style>

    input:focus ~ label,
    input:not(:placeholder-shown) ~ label,
    textarea:focus ~ label,
    textarea:not(:placeholder-shown) ~ label,
    select:focus ~ label,
    select:not([value='']):valid ~ label {
        /* @apply transform; scale-75; -translate-y-6; */
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate))
        skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        --tw-scale-y: 0.75;
        --tw-translate-y: -0.9rem;
    }

</style>

{{--<form method="post" action="/registers">--}}
{{--    @csrf--}}
{{--        <input type="text" id="title" name="name" class="form-control" placeholder="name" required="">--}}
{{--    <br>--}}
{{--    @error('name')--}}
{{--        <p>{{ $message }}</p>--}}
{{--    @enderror--}}
{{--        <input type="text" id="title" name="username" class="form-control" placeholder="username" required="">--}}
{{--    <br>--}}
{{--    @error('username')--}}
{{--    <p>{{ $message }}</p>--}}
{{--    @enderror--}}
{{--        <input type="email" id="title" name="email" class="form-control" placeholder="email" required="">--}}
{{--    <br>--}}
{{--    @error('email')--}}
{{--    <p>{{ $message }}</p>--}}
{{--    @enderror--}}
{{--        <input type="password" id="title" name="password" class="form-control" placeholder="pass" required="">--}}
{{--    <br>--}}
{{--    @error('password')--}}
{{--    <p>{{ $message }}</p>--}}
{{--    @enderror--}}

{{--    <button type="submit" >Submit</button>--}}
{{--</form>--}}

