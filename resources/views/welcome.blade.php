<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">

    <!-- Primary Meta Tags -->
    <title>{{ __('Zetta Technologies | Home Page') }}</title>
    <meta name="title" content="{{ __('Zetta Technologies | Home Page') }}" />
    <meta name="description"
        content="{{ __('Zetta Technologies is a Device as a Service (DaaS) provider with a unique business model. With us you get a complete service that enables sustainability, increases your flexibility, simplifies your operations, gives financial control, and decreases the total cost of ownership.') }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://coderans.pro/" />
    <meta property="og:title" content="{{ __('Zetta Technologies | Home Page') }}" />
    <meta property="og:description"
        content="{{ __('Zetta Technologies is a Device as a Service (DaaS) provider with a unique business model. With us you get a complete service that enables sustainability, increases your flexibility, simplifies your operations, gives financial control, and decreases the total cost of ownership.') }}" />
    <meta property="og:image"
        content="https://coderans.pro/assets/img/android-chrome-512x512.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://coderans.pro/" />
    <meta property="twitter:title" content="{{ __('Zetta Technologies | Home Page') }}" />
    <meta property="twitter:description"
        content="{{ __('Zetta Technologies is a Device as a Service (DaaS) provider with a unique business model. With us you get a complete service that enables sustainability, increases your flexibility, simplifies your operations, gives financial control, and decreases the total cost of ownership.') }}" />
    <meta property="twitter:image"
        content="https://coderans.pro/assets/img/android-chrome-512x512.png" />


   

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1TB5CD4G9C"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1TB5CD4G9C');
</script>

</head>

<body class="overflow-x-hidden" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
    <div class="min-h-screen flex flex-col">
        <x-nav2 />
        <main class="flex-1  ">
            <section  style="background-image: url({{ asset('assets/img/1338694.jpg') }})"
                class="relative md:container  rounded-md  mt-[3vh]d bg-cover bg-left md:bg-center bg-no-repeat">
                <div
                    class="absolute inset-0 rounded-sm bg-gray-900/55 sm:bg-transparentd sm:from-white/95 sm:to-white/25 ">
                </div>
                <div data-aos="fade-up"
                    class="relative mx-auto max-w-screen-xl px-4 py-32 pb-8 md:pb-32  sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
                    <div class="max-w-xl text-centerd ltr:sm:text-left rtl:sm:text-right">
                        <h1 id="transform-anim"
                            class="bg-heading-gradient bg-clip-text  text-centerd font-heading font-semibold  text-4xl tracking-tight text-transparent md:text-6xl md:leading-snug"
                            style="opacity: 1; transform: none;">
                            <span
                                class="bg-primary-gradient bg-clip-text text-transparent">{{ __('messages.zetta') }}</span>
                            {{ __('messages.technologies') }} <br class="md:block">
                            {{ __('messages.slogan') }}
                        </h1>
                        <p
                            class="max-w-2xl mb-6 font-light text-gray-400 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-200">
                            {{ __('messages.des') }}
                        </p>

                        <div class="flex flex-wrap justify-center md:justify-start  items-center gap-4">
                            <x-button2 text="{{ __('messages.get_started') }}" link="#" />
                            <x-read-more-btn text="{{ __('messages.contact_us') }}" />
                        </div>
                    </div>
                </div>
            </section>
            {{-- About us Section --}}
            <section class=" mt-[10vh] container" data-aos="fade-up">
                <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 grid-cols-6">
                    <div class="ltr:mr-auto place-self-center col-span-6 md:col-span-3  lg:col-span-7s row-span-12k ">
                        <h1 id="transform-anim"
                            class="bg-heading-gradient bg-clip-text  text-centerd font-heading font-semibold  text-4xl tracking-tight text-transparent md:text-6xl md:leading-snug"
                            style="opacity: 1; transform: none;">
                            <span
                                class="bg-primary-gradient bg-clip-text text-transparent">{{ __('messages.about_us') }}</span>

                        </h1>
                        <p
                            class="max-w-2xl mb-6 font-light text-gray-200 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-200">
                            {{ __('content.about') }}
                        </p>
                        <div class="flex items-center gap-4">
                            <x-read-more-btn text="{{ __('messages.read_more') }}" />
                        </div>
                    </div>
                    <div class="mr-auto place-self-center bg row-span-12s  col-span-6 md:col-span-3 lg:mt-0 lg:col-span-52 lg:flex">
                        <lottie-player src="{{ asset('assets/animatin.json') }}" background="transparent"
                            speed="1" loop autoplay></lottie-player>
                    </div>
                </div>
            </section>

            {{-- <section class="mt-[10vh]">
                <div class="relative flex flex-col items-center justify-center gap-y-24">
                    <div class="flex flex-col items-center justify-center">
                        <h1 id="transform-anim"
                            class="bg-heading-gradient bg-clip-text  text-center font-heading font-semibold  text-4xl tracking-tight text-transparent md:text-6xl md:leading-snug"
                            style="opacity: 1; transform: none;">
                            <span class="bg-primary-gradient bg-clip-text text-transparent">Zetta</span>
                            Technologies <br class="md:block">
                            Transforming Today, Shaping Tomorrow
                        </h1>
                        <p id="transform-anim"
                            class="my-4 max-w-md text-center text-muted-foreground lg:max-w-xl lg:text-lg 2xl:text-xl"
                            style="opacity: 1; transform: none;">
                            Our DaaS platform can help you save money on device hardware, software, and maintenance.
                        </p>
                        <x-button text="get started" link="#" />
                    </div>
                </div>
            </section> --}}


            {{-- <section class="container mx-auto flex flex-col items-center px-8 py-36 sm:flex-row-reverse sm:px-12">
                <div class="mb-8 w-full sm:mb-0 sm:w-1/2 sm:pl-4 md:pl-16 ">
                    <img alt="Hanging out with friends"
                        class="shadow-lg shadow-cyan-500/20 rounded-lg sm:rounded-br-[80px] sm:rounded-tl-[120px]"
                        src="{{ asset('assets/img/android-chrome-512x512.png') }}" />
                </div>
                <div class="mr-4 w-full text-center sm:w-1/2 sm:text-left ">
                    <div class="">
                        <h2 id="transform-anim"
                            class="bg-heading-gradient bg-clip-text  text-start font-heading font-semibold  text-4xl tracking-tight text-transparent md:text-6xl md:leading-snug"
                            style="opacity: 1; transform: none;">
                            <span class="bg-primary-gradient bg-clip-text text-transparent">About US</span>
                        </h2>
                    </div>
                    <p class="mb-2 leading-relaxed text-slate-700 dark:text-slate-400 mt-5">
                        Zetta Technologies is a Device as a Service (DaaS) provider with a unique business model. With
                        us you get a complete service that enables sustainability, increases your flexibility,
                        simplifies your operations, gives financial control, and decreases the total cost of ownership.
                    </p>
                    <div class="flex flex-col space-y-3 md:flex-row md:space-x-2 mt-5 md:space-y-0">
                        <a class="inline-flex items-center py-3 justify-center text-sm font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-primary-gradient hover:bg-primary-gradient-2 hover:shadow-[0px_4px_30px] hover:shadow-[rgb(247_176_253_/_50%)] transition-shadow duration-300 [&amp;_.highlight]:ml-2 h-10 rounded-full px-4"
                            href="/sign-in">Read More</a>
                    </div>
                </div>
            </section>
             --}}

             {{-- Clients Section start --}}

            <section class="mt-[13vh] container" data-aos="fade-up" >
                <x-h2>{{ __('messages.Our_Partners') }}</x-h2>
                <x-partners/>
            </section>
            {{-- Clients Section End --}}

          {{-- Services Section Start --}}
            <section class="mt-[13vh] container">
                <x-h2>{{ __('messages.Our_services') }}</x-h2>
                <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 py-16">
                    <x-service-card title="{{ __('Readiness Assessment') }}"
                        text="{{ __('to understand you better, we provide you with Zetta\'s DaaS Readiness Assessment.') }}"
                        image="{{ asset('assets/img/WhatsApp-Image-2023-08-23-at-1.32.27-PM.jpeg') }}">
                        <svg class="w-5 h-5"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.67041 10.909L10.5446 12.7832C10.6105 12.8499 10.689 12.9029 10.7755 12.939C10.8621 12.9752 10.955 12.9938 11.0488 12.9938C11.1426 12.9938 11.2354 12.9752 11.322 12.939C11.4085 12.9029 11.487 12.8499 11.553 12.7832L15.3298 9.00635" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20.6721 11.8898V6.60938C20.6724 6.20418 20.5451 5.80917 20.3081 5.4805C20.0711 5.15183 19.7365 4.90622 19.352 4.77858L14.4377 3.1405C12.8542 2.61983 11.1455 2.61983 9.56199 3.1405L4.64774 4.77858C4.26317 4.90622 3.92861 5.15183 3.69162 5.4805C3.45463 5.80917 3.32727 6.20418 3.32764 6.60938V11.8898C3.32787 13.1931 3.65856 14.4751 4.2888 15.616C4.91904 16.7568 5.82824 17.7192 6.93142 18.4132L10.9785 20.9571C11.2847 21.1485 11.6387 21.25 11.9998 21.25C12.361 21.25 12.715 21.1485 13.0212 20.9571L17.0683 18.4132C18.1715 17.7192 19.0807 16.7568 19.7109 15.616C20.3411 14.4751 20.6718 13.1931 20.6721 11.8898Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                            
                    </x-service-card>
                    <x-service-card title="{{ __('Maintenance and Support') }}"
                        text="{{ __('We deliver high quality maintenance and support services with the help of our certified experts from Zetta Care.') }}"
                        image="{{ asset('assets/img/WhatsApp-Image-2023-08-23-at-13.32.59-2.jpg') }}">
                        <svg class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.2517 14.4068C18.4113 15.2458 17.3667 15.8508 16.2211 16.1623C15.0756 16.4737 13.8686 16.4807 12.7196 16.1826C12.3803 16.0863 12.0217 16.0807 11.6796 16.1663C11.3375 16.2519 11.0238 16.4257 10.7697 16.6704L6.48964 20.9636C6.39901 21.0551 6.29118 21.1277 6.17237 21.1772C6.05356 21.2267 5.92613 21.2522 5.79743 21.2522C5.66873 21.2522 5.54129 21.2267 5.42249 21.1772C5.30368 21.1277 5.19585 21.0551 5.10522 20.9636L3.03833 18.8951C2.94695 18.8044 2.87441 18.6965 2.82492 18.5776C2.77542 18.4587 2.74994 18.3311 2.74994 18.2023C2.74994 18.0735 2.77542 17.946 2.82492 17.8271C2.87441 17.7082 2.94695 17.6003 3.03833 17.5096L7.31835 13.2261C7.56899 12.9758 7.74679 12.6619 7.83268 12.3181C7.91856 11.9743 7.90927 11.6136 7.80582 11.2747C7.50379 10.0962 7.52179 8.85836 7.85795 7.68915C8.19411 6.51994 8.83623 5.46182 9.71792 4.6242C10.5996 3.78657 11.6889 3.19985 12.873 2.9247C14.0572 2.64955 15.2933 2.69596 16.4536 3.05912L13.5288 5.98629C12.7781 6.73759 12.4173 8.32802 13.1875 9.08909L14.9034 10.8161C15.6639 11.5772 17.2531 11.2259 18.0135 10.4649L20.9384 7.53769C21.3105 8.72766 21.3501 9.99689 21.0528 11.2078C20.7554 12.4186 20.1326 13.525 19.2517 14.4068Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            
                    </x-service-card>
                    <x-service-card title="{{ __('Device selection') }}"
                        text="{{ __('We asists you in choosing the appropriate devices according to your needs and usage.') }}"
                        image="{{ asset('assets/img/zertta-service3.webp') }}">
                        <svg class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.7506 16.1625V6.21161C19.7506 5.91837 19.6341 5.63714 19.4268 5.42979C19.2194 5.22244 18.9382 5.10596 18.645 5.10596H5.37716C5.23196 5.10596 5.08819 5.13456 4.95404 5.19012C4.8199 5.24568 4.69801 5.32713 4.59534 5.42979C4.49268 5.53246 4.41123 5.65435 4.35567 5.78849C4.30011 5.92264 4.27151 6.06641 4.27151 6.21161V16.1625" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2.5 16.1625H21.5V17.5283C21.5 17.8905 21.3332 18.2379 21.0363 18.494C20.7393 18.7502 20.3366 18.8941 19.9167 18.8941H4.08333C3.66341 18.8941 3.26068 18.7502 2.96375 18.494C2.66682 18.2379 2.5 17.8905 2.5 17.5283V16.1625Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            
                       
                    </x-service-card>
                    <x-service-card title="{{ __('Deployment') }}"
                        text="{{ __('Zetta Care ensures timely delivery of the appropriate gadgets to the desired place.') }}"
                        image="{{ asset('assets/img/zetta-service-4.jpg') }}">
                        <svg class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5837 21.25H9.33374C7.74244 21.25 6.21632 20.6179 5.0911 19.4926C3.96588 18.3674 3.33374 16.8413 3.33374 15.25V8.75C3.33374 7.1587 3.96588 5.63258 5.0911 4.50736C6.21632 3.38214 7.74244 2.75 9.33374 2.75H15.8337C17.425 2.75 18.9512 3.38214 20.0764 4.50736C21.2016 5.63258 21.8337 7.1587 21.8337 8.75V10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M16.5501 16.8641L16.0396 19.8225C15.9734 20.0591 15.834 20.2687 15.6414 20.4212C15.4489 20.5738 15.213 20.6615 14.9675 20.6719C14.722 20.6822 14.4796 20.6147 14.2749 20.4789C14.0701 20.3431 13.9136 20.146 13.8276 19.9159L11.0393 12.0339C10.9633 11.8255 10.9483 11.5997 10.9963 11.3832C11.0441 11.1666 11.1529 10.9682 11.3098 10.8114C11.4666 10.6546 11.665 10.5457 11.8816 10.4979C12.0982 10.4499 12.3239 10.4648 12.5323 10.5409L20.568 13.3293C20.8064 13.4118 21.0116 13.5696 21.1526 13.7789C21.2937 13.9881 21.3629 14.2375 21.3499 14.4895C21.3369 14.7416 21.2424 14.9825 21.0805 15.1762C20.9187 15.3698 20.6984 15.5056 20.4527 15.5632L17.3405 16.0736C17.1531 16.1285 16.9824 16.2297 16.8442 16.3678C16.7061 16.5059 16.605 16.6766 16.5501 16.8641Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            
                    </x-service-card>
                    <x-service-card title="{{ __('Recovery & Refresh') }}"
                        text="{{ __('When it comes to retiring gadgets, you can rely on us to handle the logistics') }}"
                        image="{{ asset('assets/img/zetta-service5.jpeg') }}">
                        <svg class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.2497 4.52692C21.2498 4.29084 21.2028 4.05711 21.1114 3.8394C21.0201 3.62169 20.8863 3.42437 20.7179 3.25896C20.5494 3.09355 20.3497 2.96337 20.1303 2.87604C19.911 2.7887 19.6765 2.74596 19.4404 2.7503C18.445 2.74435 17.4599 2.95251 16.552 3.36067C16.0152 3.59357 15.5186 3.90993 15.0806 4.29803L7.38553 12.004C6.77319 12.6171 6.42924 13.4482 6.42924 14.3147C6.42924 15.1812 6.77319 16.0123 7.38553 16.6254C7.99863 17.2377 8.82971 17.5817 9.69623 17.5817C10.5627 17.5817 11.3938 17.2377 12.0069 16.6254L19.7129 8.91943C20.1039 8.47152 20.4204 7.96367 20.6503 7.4153C21.055 6.50667 21.2594 5.52157 21.2497 4.52692Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.7754 4.60321C16.0211 6.42741 17.6046 7.99614 19.4404 9.22461" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.69623 9.69329L7.26564 9.20281C6.82484 9.11824 6.37007 9.14253 5.9408 9.2736C5.51152 9.40466 5.12073 9.63852 4.80234 9.95488L2.91673 11.8405C2.8383 11.9161 2.78432 12.0134 2.76176 12.12C2.7392 12.2266 2.74908 12.3374 2.79014 12.4383C2.8312 12.5392 2.90155 12.6255 2.99211 12.686C3.08267 12.7465 3.18929 12.7785 3.29821 12.7779H6.56807" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.3176 14.3147L14.7972 16.7344C14.887 17.1743 14.8664 17.6295 14.737 18.0594C14.6077 18.4893 14.3737 18.8804 14.056 19.1977L12.1595 21.0942C12.0827 21.1695 11.9853 21.2204 11.8796 21.2405C11.7739 21.2605 11.6646 21.2488 11.5655 21.2068C11.4664 21.1649 11.382 21.0945 11.3228 21.0047C11.2637 20.9148 11.2324 20.8094 11.2331 20.7018V17.432" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M5.06393 18.9361L12.0069 12.004" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                    </x-service-card>
                    <x-service-card title="{{ __('Choose your outcome') }}"
                        text="{{ __('After the contract ends, you have the option of deciding how to handle the assets at the end.') }}"
                        image="{{ asset('assets/img/zetta-service-5.webp') }}" >
                        <svg class="w-5 h-5" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.2518 12.4903C16.9677 14.855 15.4187 15.7991 14.7496 16.4865C14.0806 17.1739 14.1997 17.3114 14.2455 18.3196C14.253 18.4445 14.2349 18.5696 14.1922 18.6872C14.1495 18.8049 14.0832 18.9125 13.9973 19.0035C13.9115 19.0945 13.8079 19.167 13.6929 19.2165C13.578 19.2659 13.4541 19.2913 13.329 19.2911H10.671C10.5459 19.2913 10.422 19.2659 10.3071 19.2165C10.1921 19.167 10.0885 19.0945 10.0027 19.0035C9.9168 18.9125 9.85048 18.8049 9.80779 18.6872C9.7651 18.5696 9.74695 18.4445 9.75446 18.3196C9.75446 17.3297 9.84612 17.1006 9.25036 16.4865C8.48963 15.7258 6.70236 14.6534 6.70236 11.7021C6.6977 10.9691 6.84495 10.243 7.13485 9.5697C7.42475 8.89639 7.851 8.29045 8.38672 7.79008C8.92245 7.2897 9.55604 6.90574 10.2475 6.66241C10.939 6.41908 11.6734 6.32166 12.4045 6.37628C13.1355 6.4309 13.8473 6.63638 14.4949 6.97977C15.1426 7.32316 15.7121 7.79701 16.1675 8.37144C16.6229 8.94587 16.9544 9.60843 17.141 10.3173C17.3276 11.0262 17.3654 11.7661 17.2518 12.4903Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.4602 19.2361V20.7484C10.4602 21.1609 10.6893 21.5 10.9735 21.5H13.0265C13.3107 21.5 13.5398 21.1609 13.5398 20.7484V19.2361" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.2209 8.69585C10.6302 8.69585 10.0637 8.9305 9.64606 9.34818C9.22838 9.76586 8.99373 10.3324 8.99373 10.9231" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M19.3324 11.9037H21.1655" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.4859 5.89209L18.7874 4.59059" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18.4859 16.9992L19.7874 18.3007" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.9995 2.37708L12 3.85899" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M5.23993 4.59059L6.53226 5.89209" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.23993 18.3007L5.53226 16.9992" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.66763 11.9037H2.83453" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            
                    </x-service-card>


                </div>


            </section>
            {{-- Services Section End --}}
 
            {{-- Why Zetta Section Start --}}
            <section class="mt-[10vh] [perspective:2000px] container">
                <!-- Approach -->
                <div class="border-transparent-white relative rounded-lg border bg-opacity-[0.01] bg-hero-gradient animate-image-rotate before:absolute before:left-0 before:top-0 before:h-full before:w-full before:bg-hero-glows  before:opacity-0 before:[filter:blur(120px)] before:animate-image-glow    ">
                    <!-- Approach -->
                    <div class="max-w-5xl px-4 xl:px-0 py-10 lg:pt-20 lg:pb-20 mx-auto ">
                        <!-- Title -->
                        <div class="max-w-3xl mb-10 lg:mb-14 rtl:text-right">
                            <x-h2 class="text-left rtl:text-right">
                                {{ __("Why your business needs Zetta?") }}
                            </x-h2>
                            <p class="mt-1 text-neutral-400">
                               {{ __('Empower Your Business with Zetta: Simplify Device Management and Boost Efficiency.') }}
                            </p>
                        </div>
                        <!-- End Title -->

                        <!-- Grid -->
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 place-content-center lg:gap-16 lg:items-center">
                            <div data-aos="flip-up"  class="aspect-w-16 flex justify-center aspect-h-9 lg:aspect-none place-content-center">
                                    <svg class=" lg:w-full max-w-96 flex justify-center mr-autof place-content-center object-cover rounded-xl"
                                    data-aos="fade-up-left" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 491.85 500">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #b1b4c4;
                                            }
            
                                            .cls-2 {
                                                fill: #e4e7f2;
                                            }
            
                                            .cls-15,
                                            .cls-3,
                                            .cls-6 {
                                                fill: #d6d8e5;
                                            }
            
                                            .cls-4 {
                                                fill: #fff;
                                            }
            
                                            .cls-5 {
                                                opacity: 0.5;
                                                fill: url(#Безымянный_градиент_15);
                                            }
            
                                            .cls-6 {
                                                opacity: 0.4;
                                            }
            
                                            .cls-7 {
                                                fill: #2b303f;
                                            }
            
                                            .cls-8 {
                                                fill: #c3c6d1;
                                            }
            
                                            .cls-9 {
                                                fill: #e9eaf2;
                                            }
            
                                            .cls-10 {
                                                fill: #8c50ff;
                                            }
            
                                            .cls-11 {
                                                fill: #f5f6ff;
                                            }
            
                                            .cls-12,
                                            .cls-13 {
                                                fill: none;
                                                stroke: #e9eaf2;
                                                stroke-miterlimit: 10;
                                            }
            
                                            .cls-12 {
                                                stroke-width: 0.22px;
                                            }
            
                                            .cls-13 {
                                                stroke-width: 1.09px;
                                            }
            
                                            .cls-14 {
                                                fill: #fafbff;
                                            }
            
                                            .cls-15 {
                                                opacity: 0.3;
                                            }
            
                                            .cls-16,
                                            .cls-30 {
                                                opacity: 0.1;
                                            }
            
                                            .cls-17 {
                                                opacity: 0.15;
                                            }
            
                                            .cls-18 {
                                                fill: #2b2a30;
                                            }
            
                                            .cls-19 {
                                                fill: #ffcea9;
                                            }
            
                                            .cls-20 {
                                                fill: #f4f4f4;
                                            }
            
                                            .cls-21 {
                                                fill: #bf4b4b;
                                            }
            
                                            .cls-22 {
                                                fill: #e26161;
                                            }
            
                                            .cls-23 {
                                                fill: #ededed;
                                            }
            
                                            .cls-24 {
                                                fill: #3a2c6d;
                                            }
            
                                            .cls-25 {
                                                fill: #bfbfbf;
                                            }
            
                                            .cls-26 {
                                                fill: #e5e5e5;
                                            }
            
                                            .cls-27 {
                                                fill: #38226d;
                                            }
            
                                            .cls-28 {
                                                fill: #9c73ff;
                                            }
            
                                            .cls-29 {
                                                fill: #a1a5b5;
                                            }
            
                                            .cls-30 {
                                                fill: #3e7eff;
                                            }
                                        </style>
                                        <linearGradient id="Безымянный_градиент_15" x1="-275.98" y1="2331.78" x2="-275.98"
                                            y2="2193.53" gradientTransform="matrix(0.87, 0.5, 0, 1.15, 511.49, -2300.61)"
                                            gradientUnits="userSpaceOnUse">
                                            <stop offset="0.21" stop-color="#fff" stop-opacity="0" />
                                            <stop offset="1" stop-color="#fff" stop-opacity="0.2" />
                                        </linearGradient>
                                    </defs>
                                    <title>Business_SVG</title>
                                    <g id="Слой_2" data-name="Слой 2">
                                        <g id="Слой_1-2" data-name="Слой 1">
                                            <g id="Laptop">
                                                <path class="cls-1"
                                                    d="M378.18,323.54,171.46,204.19c-2.9-1.67-5.25-6.16-5.25-10V34.25c0-3.86,2.35-5.64,5.25-4L378.18,149.64c2.9,1.67,5.25,6.16,5.25,10v159.9C383.43,323.44,381.08,325.22,378.18,323.54Z" />
                                                <polygon class="cls-1"
                                                    points="379.24 325.19 381.54 323.87 380.54 317.08 379.24 325.19" />
                                                <path class="cls-1"
                                                    d="M165.84,31.27l2.25-1.3,3.24,1.85s-3.45.52-3.53.5S165.84,31.27,165.84,31.27Z" />
                                                <path class="cls-2"
                                                    d="M376.29,324.64,169.56,205.29c-2.9-1.68-5.25-6.17-5.25-10V35.35c0-3.87,2.35-5.64,5.25-4L376.29,150.73c2.9,1.67,5.25,6.17,5.25,10V320.67C381.54,324.53,379.19,326.31,376.29,324.64Z" />
                                                <path class="cls-3"
                                                    d="M375.92,324.85,169.2,205.49c-2.9-1.67-5.25-6.16-5.25-10V35.56c0-3.87,2.35-5.65,5.25-4L375.92,150.94c2.9,1.67,5.25,6.16,5.25,10V320.88C381.17,324.74,378.82,326.52,375.92,324.85Z" />
                                                <path class="cls-4"
                                                    d="M378.33,315.12,166.57,192.86l.11-156.66c0-1.61,1.13-2.26,2.52-1.46L375.92,154.1a5.55,5.55,0,0,1,2.52,4.35Z" />
                                                <path class="cls-5"
                                                    d="M378.31,315,166.55,192.75l.11-156.67c0-1.6,1.13-2.25,2.52-1.45L375.9,154a5.56,5.56,0,0,1,2.52,4.36Z" />
                                                <path class="cls-6"
                                                    d="M220,417.77,13.28,298.41c-2.9-1.67-2.53-4.59.82-6.53l138.48-79.95c3.35-1.93,8.41-2.14,11.31-.47L370.61,330.81c2.9,1.68,2.54,4.6-.81,6.53l-138.48,80C228,419.23,222.91,419.44,220,417.77Z" />
                                                <path class="cls-1"
                                                    d="M224.52,415.06,17.8,295.7c-2.9-1.67-2.54-4.59.81-6.53l138.49-80c3.34-1.93,8.41-2.14,11.31-.47L375.13,328.1c2.9,1.68,2.54,4.6-.81,6.53l-138.48,80C232.49,416.52,227.42,416.73,224.52,415.06Z" />
                                                <polygon class="cls-1" points="15.84 293 15.84 289.11 20.22 290.94 15.84 293" />
                                                <polygon class="cls-1"
                                                    points="377.09 331.02 377.09 327.21 373.85 328.32 376 331.48 377.09 331.02" />
                                                <path class="cls-2"
                                                    d="M224.52,411.77,17.8,292.42c-2.9-1.67-2.54-4.6.81-6.53L157.1,205.94c3.34-1.94,8.41-2.15,11.31-.47L375.13,324.82c2.9,1.67,2.54,4.6-.81,6.53L235.84,411.3C232.49,413.24,227.42,413.45,224.52,411.77Z" />
                                                <path class="cls-3"
                                                    d="M224.52,411.27,17.8,291.91c-2.9-1.67-2.54-4.59.81-6.53L157.1,205.43c3.34-1.93,8.41-2.14,11.31-.47L375.13,324.31c2.9,1.68,2.54,4.6-.81,6.53l-138.48,80C232.49,412.73,227.42,412.94,224.52,411.27Z" />
                                                <path class="cls-7"
                                                    d="M153.26,232.4l-9.63-5.56c-.78-.45-.68-1.24.22-1.77l9.19-5.3a3.42,3.42,0,0,1,3.06-.13l9.63,5.56c.78.45.69,1.25-.22,1.77l-9.19,5.3A3.39,3.39,0,0,1,153.26,232.4Z" />
                                                <path class="cls-7"
                                                    d="M166.89,240.27l-9.63-5.56c-.78-.45-.69-1.25.22-1.77l9.19-5.3a3.39,3.39,0,0,1,3.06-.13l9.62,5.56c.79.45.69,1.24-.22,1.77l-9.18,5.3A3.42,3.42,0,0,1,166.89,240.27Z" />
                                                <path class="cls-7"
                                                    d="M180.67,248.22,171,242.67c-.78-.46-.68-1.25.22-1.77l9.19-5.31a3.39,3.39,0,0,1,3.06-.12l9.63,5.55c.78.46.68,1.25-.22,1.77l-9.19,5.31A3.39,3.39,0,0,1,180.67,248.22Z" />
                                                <path class="cls-7"
                                                    d="M194.14,256l-9.63-5.56c-.78-.45-.68-1.24.22-1.77l9.19-5.3a3.42,3.42,0,0,1,3.06-.13l9.63,5.56c.78.45.68,1.25-.22,1.77l-9.19,5.3A3.39,3.39,0,0,1,194.14,256Z" />
                                                <path class="cls-7"
                                                    d="M207.76,263.87l-9.62-5.56c-.79-.45-.69-1.25.22-1.77l9.18-5.3a3.41,3.41,0,0,1,3.07-.13l9.62,5.56c.79.45.69,1.24-.22,1.77l-9.18,5.3A3.44,3.44,0,0,1,207.76,263.87Z" />
                                                <path class="cls-7"
                                                    d="M221.39,271.73l-9.63-5.55c-.78-.46-.68-1.25.22-1.77l9.19-5.31a3.39,3.39,0,0,1,3.06-.12l9.63,5.55c.78.46.68,1.25-.22,1.77l-9.19,5.31A3.39,3.39,0,0,1,221.39,271.73Z" />
                                                <path class="cls-7"
                                                    d="M235,279.6,225.39,274c-.79-.45-.69-1.24.22-1.77l9.18-5.3a3.44,3.44,0,0,1,3.07-.13l9.62,5.56c.79.45.69,1.25-.22,1.77l-9.18,5.3A3.39,3.39,0,0,1,235,279.6Z" />
                                                <path class="cls-7"
                                                    d="M248.64,287.47,239,281.91c-.79-.45-.69-1.25.22-1.77l9.18-5.3a3.39,3.39,0,0,1,3.06-.13l9.63,5.56c.79.45.69,1.24-.22,1.77l-9.19,5.3A3.42,3.42,0,0,1,248.64,287.47Z" />
                                                <path class="cls-7"
                                                    d="M262.27,295.33l-9.63-5.55c-.78-.46-.68-1.25.22-1.77l9.19-5.3a3.36,3.36,0,0,1,3.06-.13l9.63,5.56c.78.45.68,1.24-.22,1.76l-9.19,5.31A3.39,3.39,0,0,1,262.27,295.33Z" />
                                                <path class="cls-7"
                                                    d="M275.89,303.2l-9.62-5.56c-.79-.45-.69-1.24.22-1.77l9.18-5.3a3.41,3.41,0,0,1,3.07-.12l9.62,5.55c.79.46.69,1.25-.22,1.77l-9.18,5.3A3.41,3.41,0,0,1,275.89,303.2Z" />
                                                <path class="cls-7"
                                                    d="M289.52,311.07l-9.63-5.56c-.78-.45-.68-1.24.22-1.77l9.19-5.3a3.42,3.42,0,0,1,3.06-.13l9.63,5.56c.78.45.68,1.24-.22,1.77l-9.19,5.3A3.42,3.42,0,0,1,289.52,311.07Z" />
                                                <path class="cls-7"
                                                    d="M303.14,318.93l-9.62-5.55c-.79-.46-.69-1.25.22-1.77l9.18-5.3a3.41,3.41,0,0,1,3.07-.13l9.62,5.56c.79.45.69,1.24-.22,1.76l-9.18,5.31A3.41,3.41,0,0,1,303.14,318.93Z" />
                                                <path class="cls-7"
                                                    d="M316.77,326.8l-9.62-5.56c-.79-.45-.69-1.24.22-1.76l9.18-5.31a3.39,3.39,0,0,1,3.06-.12l9.63,5.55c.78.46.69,1.25-.22,1.77l-9.19,5.3A3.36,3.36,0,0,1,316.77,326.8Z" />
                                                <path class="cls-7"
                                                    d="M337,338.46l-16.19-9.35c-.78-.45-.69-1.24.22-1.77l9.19-5.3a3.42,3.42,0,0,1,3.06-.13l16.19,9.35c.78.45.68,1.24-.22,1.77l-9.19,5.3A3.42,3.42,0,0,1,337,338.46Z" />
                                                <path class="cls-7"
                                                    d="M160.27,251.69l-9.63-5.55c-.79-.46-.69-1.25.22-1.77l9.18-5.31a3.41,3.41,0,0,1,3.07-.12l9.62,5.55c.79.46.69,1.25-.22,1.77l-9.18,5.31A3.39,3.39,0,0,1,160.27,251.69Z" />
                                                <path class="cls-7"
                                                    d="M173.91,259.57,164.29,254c-.79-.46-.69-1.25.22-1.77l9.18-5.31a3.41,3.41,0,0,1,3.07-.12l9.62,5.55c.79.46.69,1.25-.22,1.77L177,259.45A3.41,3.41,0,0,1,173.91,259.57Z" />
                                                <path class="cls-7"
                                                    d="M187.56,267.45l-9.62-5.55c-.79-.46-.69-1.25.22-1.77l9.18-5.3a3.38,3.38,0,0,1,3.07-.13l9.62,5.56c.79.45.69,1.24-.22,1.76l-9.18,5.31A3.41,3.41,0,0,1,187.56,267.45Z" />
                                                <path class="cls-7"
                                                    d="M201.21,275.33l-9.62-5.55c-.79-.46-.69-1.25.22-1.77l9.18-5.3a3.41,3.41,0,0,1,3.07-.13l9.62,5.56c.79.45.69,1.24-.22,1.76l-9.18,5.31A3.41,3.41,0,0,1,201.21,275.33Z" />
                                                <path class="cls-7"
                                                    d="M214.75,283.15l-9.62-5.56c-.79-.45-.69-1.24.22-1.76l9.18-5.31a3.41,3.41,0,0,1,3.07-.12l9.62,5.55c.79.46.69,1.25-.22,1.77l-9.18,5.3A3.38,3.38,0,0,1,214.75,283.15Z" />
                                                <path class="cls-7"
                                                    d="M228.4,291l-9.62-5.55c-.79-.46-.69-1.25.22-1.77l9.18-5.31a3.41,3.41,0,0,1,3.07-.12l9.62,5.55c.79.46.69,1.25-.22,1.77l-9.18,5.31A3.41,3.41,0,0,1,228.4,291Z" />
                                                <path class="cls-7"
                                                    d="M242.05,298.91l-9.62-5.55c-.79-.46-.69-1.25.22-1.77l9.18-5.31a3.41,3.41,0,0,1,3.07-.12l9.62,5.55c.79.46.69,1.25-.22,1.77l-9.18,5.31A3.41,3.41,0,0,1,242.05,298.91Z" />
                                                <path class="cls-7"
                                                    d="M255.7,306.79l-9.62-5.55c-.79-.46-.69-1.25.22-1.77l9.18-5.31a3.39,3.39,0,0,1,3.06-.12l9.63,5.55c.79.46.69,1.25-.22,1.77l-9.18,5.31A3.41,3.41,0,0,1,255.7,306.79Z" />
                                                <path class="cls-7"
                                                    d="M269.35,314.67l-9.62-5.55c-.79-.46-.69-1.25.22-1.77l9.18-5.31a3.39,3.39,0,0,1,3.06-.12l9.63,5.56c.78.45.69,1.24-.22,1.76l-9.19,5.31A3.39,3.39,0,0,1,269.35,314.67Z" />
                                                <path class="cls-7"
                                                    d="M283,322.55,273.37,317c-.78-.46-.68-1.25.22-1.77l9.19-5.3a3.39,3.39,0,0,1,3.06-.13l9.63,5.56c.78.45.69,1.24-.22,1.76l-9.19,5.31A3.39,3.39,0,0,1,283,322.55Z" />
                                                <path class="cls-7"
                                                    d="M296.65,330.43,287,324.88c-.78-.46-.68-1.25.22-1.77l9.19-5.3a3.39,3.39,0,0,1,3.06-.13l9.63,5.56c.78.45.68,1.24-.22,1.76l-9.19,5.31A3.39,3.39,0,0,1,296.65,330.43Z" />
                                                <path class="cls-7"
                                                    d="M310.3,338.32l-9.63-5.56c-.78-.46-.68-1.25.22-1.77l9.19-5.3a3.39,3.39,0,0,1,3.06-.13l9.63,5.56c.78.45.68,1.24-.22,1.77l-9.19,5.3A3.42,3.42,0,0,1,310.3,338.32Z" />
                                                <path class="cls-7"
                                                    d="M146.62,243.81l-16.19-9.34c-.79-.46-.69-1.25.22-1.77l9.18-5.3a3.38,3.38,0,0,1,3.07-.13l16.18,9.34c.79.46.69,1.25-.22,1.77l-9.18,5.31A3.39,3.39,0,0,1,146.62,243.81Z" />
                                                <path class="cls-7"
                                                    d="M336.3,339l-9.62-5.55a3.17,3.17,0,0,0-2.86,0L314.11,339a.87.87,0,0,0,0,1.65l.77.44a.8.8,0,0,1,0,1.52l-10.26,5.92c-.8.46-.8,1.2,0,1.65l6.13,3.54a3.17,3.17,0,0,0,2.86,0l9.59-5.54,2-1.15,1.43-.82,1.44-.83,8.27-4.78C337.08,340.15,337.09,339.42,336.3,339Z" />
                                                <path class="cls-7"
                                                    d="M100.49,262.93l-9.63-5.56c-.78-.45-.68-1.24.22-1.77l9.19-5.3a3.42,3.42,0,0,1,3.06-.13l9.63,5.56c.78.46.68,1.25-.22,1.77l-9.19,5.3A3.39,3.39,0,0,1,100.49,262.93Z" />
                                                <path class="cls-7"
                                                    d="M114.07,270.78l-9.62-5.56c-.79-.46-.69-1.25.22-1.77l9.18-5.3a3.41,3.41,0,0,1,3.07-.13l9.62,5.56c.79.45.69,1.24-.22,1.77l-9.18,5.3A3.44,3.44,0,0,1,114.07,270.78Z" />
                                                <path class="cls-7"
                                                    d="M127.66,278.62,118,273.06c-.79-.45-.69-1.24.22-1.77l9.18-5.3a3.42,3.42,0,0,1,3.06-.13l9.63,5.56c.79.45.69,1.25-.22,1.77l-9.18,5.3A3.41,3.41,0,0,1,127.66,278.62Z" />
                                                <path class="cls-7"
                                                    d="M243.37,345.42l-9.63-5.55c-.78-.46-.68-1.25.22-1.77l9.19-5.3a3.36,3.36,0,0,1,3.06-.13l9.63,5.56c.78.45.69,1.24-.22,1.76l-9.19,5.31A3.39,3.39,0,0,1,243.37,345.42Z" />
                                                <path class="cls-7"
                                                    d="M257,353.27l-9.63-5.56c-.78-.45-.68-1.24.22-1.77l9.19-5.3a3.42,3.42,0,0,1,3.06-.13l9.63,5.56c.78.45.68,1.25-.22,1.77l-9.19,5.3A3.39,3.39,0,0,1,257,353.27Z" />
                                                <path class="cls-7"
                                                    d="M270.54,361.11l-9.62-5.55c-.79-.46-.69-1.25.22-1.77l9.18-5.31a3.41,3.41,0,0,1,3.07-.12l9.62,5.55c.79.46.69,1.25-.22,1.77L273.61,361A3.41,3.41,0,0,1,270.54,361.11Z" />
                                                <path class="cls-7"
                                                    d="M284.13,369l-9.62-5.56c-.79-.45-.69-1.24.22-1.77l9.18-5.3a3.42,3.42,0,0,1,3.06-.13l9.63,5.56c.79.45.69,1.24-.22,1.77l-9.18,5.3A3.44,3.44,0,0,1,284.13,369Z" />
                                                <path class="cls-7"
                                                    d="M144.75,288.48l-13.13-7.57c-.78-.46-.68-1.25.22-1.77l9.19-5.3a3.36,3.36,0,0,1,3.06-.13l13.13,7.58c.78.45.68,1.24-.22,1.76l-9.19,5.31A3.39,3.39,0,0,1,144.75,288.48Z" />
                                                <path class="cls-7"
                                                    d="M229.78,337.58,216.66,330c-.79-.45-.69-1.24.22-1.77l9.18-5.3a3.44,3.44,0,0,1,3.07-.13l13.12,7.58c.79.45.69,1.25-.22,1.77l-9.18,5.3A3.41,3.41,0,0,1,229.78,337.58Z" />
                                                <path class="cls-7"
                                                    d="M212.7,327.71l-64-36.94c-.78-.45-.69-1.24.22-1.77l9.19-5.3a3.42,3.42,0,0,1,3.06-.13l64,36.95c.79.45.69,1.24-.22,1.76l-9.18,5.31A3.39,3.39,0,0,1,212.7,327.71Z" />
                                                <path class="cls-7"
                                                    d="M150.77,261.46l-9.63-5.56c-.78-.45-.69-1.24.22-1.77l9.19-5.3a3.42,3.42,0,0,1,3.06-.13l9.62,5.56c.79.45.69,1.25-.22,1.77l-9.18,5.3A3.39,3.39,0,0,1,150.77,261.46Z" />
                                                <path class="cls-7"
                                                    d="M164.38,269.32l-9.63-5.56c-.78-.45-.69-1.25.22-1.77l9.19-5.3a3.39,3.39,0,0,1,3.06-.13l9.62,5.56c.79.45.69,1.24-.22,1.77l-9.18,5.3A3.42,3.42,0,0,1,164.38,269.32Z" />
                                                <path class="cls-7"
                                                    d="M178,277.17l-9.63-5.55c-.78-.46-.69-1.25.22-1.77l9.19-5.3a3.39,3.39,0,0,1,3.06-.13l9.63,5.56c.78.45.68,1.24-.22,1.77l-9.19,5.3A3.39,3.39,0,0,1,178,277.17Z" />
                                                <path class="cls-7"
                                                    d="M191.6,285,182,279.48c-.78-.46-.68-1.25.22-1.77l9.19-5.31a3.39,3.39,0,0,1,3.06-.12l9.63,5.55c.78.46.68,1.25-.22,1.77l-9.19,5.31A3.39,3.39,0,0,1,191.6,285Z" />
                                                <path class="cls-7"
                                                    d="M205.21,292.89l-9.63-5.56c-.78-.45-.68-1.24.22-1.76l9.19-5.31a3.39,3.39,0,0,1,3.06-.12l9.63,5.55c.78.46.68,1.25-.22,1.77l-9.19,5.3A3.39,3.39,0,0,1,205.21,292.89Z" />
                                                <path class="cls-7"
                                                    d="M218.82,300.75l-9.63-5.56c-.78-.45-.68-1.24.22-1.77l9.19-5.3a3.42,3.42,0,0,1,3.06-.13l9.63,5.56c.78.45.68,1.25-.22,1.77l-9.19,5.3A3.39,3.39,0,0,1,218.82,300.75Z" />
                                                <path class="cls-7"
                                                    d="M232.43,308.61l-9.63-5.56c-.78-.45-.68-1.25.22-1.77l9.19-5.3a3.39,3.39,0,0,1,3.06-.13l9.63,5.56c.78.45.68,1.24-.22,1.77l-9.19,5.3A3.42,3.42,0,0,1,232.43,308.61Z" />
                                                <path class="cls-7"
                                                    d="M246,316.47l-9.63-5.56c-.78-.46-.68-1.25.22-1.77l9.19-5.3a3.39,3.39,0,0,1,3.06-.13l9.63,5.56c.78.45.69,1.24-.22,1.77l-9.19,5.3A3.42,3.42,0,0,1,246,316.47Z" />
                                                <path class="cls-7"
                                                    d="M259.65,324.32,250,318.77c-.79-.46-.69-1.25.22-1.77l9.18-5.31a3.39,3.39,0,0,1,3.06-.12l9.63,5.55c.78.46.69,1.25-.22,1.77l-9.19,5.31A3.39,3.39,0,0,1,259.65,324.32Z" />
                                                <path class="cls-7"
                                                    d="M273.26,332.18l-9.62-5.56c-.79-.45-.69-1.24.22-1.76l9.18-5.31a3.39,3.39,0,0,1,3.06-.12l9.63,5.55c.79.46.69,1.25-.22,1.77l-9.18,5.3A3.38,3.38,0,0,1,273.26,332.18Z" />
                                                <path class="cls-7"
                                                    d="M286.87,340l-9.62-5.56c-.79-.45-.69-1.24.22-1.77l9.18-5.3a3.44,3.44,0,0,1,3.07-.13l9.62,5.56c.79.45.69,1.25-.22,1.77l-9.18,5.3A3.41,3.41,0,0,1,286.87,340Z" />
                                                <path class="cls-7"
                                                    d="M300.48,347.9l-9.62-5.56c-.79-.45-.69-1.24.22-1.77l9.18-5.3a3.44,3.44,0,0,1,3.07-.13L313,340.7c.79.45.69,1.24-.22,1.77l-9.18,5.3A3.44,3.44,0,0,1,300.48,347.9Z" />
                                                <path class="cls-7"
                                                    d="M137.16,253.6l-19.91-11.49c-.79-.46-.69-1.25.22-1.77l9.18-5.3a3.41,3.41,0,0,1,3.07-.13l19.9,11.49c.79.46.69,1.25-.22,1.77l-9.18,5.3A3.39,3.39,0,0,1,137.16,253.6Z" />
                                                <path class="cls-7"
                                                    d="M130.8,265.18l-9.62-5.55c-.79-.46-.69-1.25.22-1.77l9.18-5.31a3.41,3.41,0,0,1,3.07-.12l9.62,5.55c.79.46.69,1.25-.22,1.77l-9.18,5.31A3.41,3.41,0,0,1,130.8,265.18Z" />
                                                <path class="cls-7"
                                                    d="M144.41,273l-9.62-5.56c-.79-.45-.69-1.24.22-1.77l9.18-5.3a3.42,3.42,0,0,1,3.06-.13l9.63,5.56c.78.45.69,1.25-.22,1.77l-9.19,5.3A3.39,3.39,0,0,1,144.41,273Z" />
                                                <path class="cls-7"
                                                    d="M158,280.9l-9.63-5.56c-.78-.45-.68-1.25.22-1.77l9.19-5.3a3.39,3.39,0,0,1,3.06-.13l9.63,5.56c.78.45.68,1.24-.22,1.77l-9.19,5.3A3.42,3.42,0,0,1,158,280.9Z" />
                                                <path class="cls-7"
                                                    d="M171.63,288.75,162,283.2c-.78-.46-.68-1.25.22-1.77l9.19-5.31a3.39,3.39,0,0,1,3.06-.12l9.63,5.55c.78.46.68,1.25-.22,1.77l-9.19,5.31A3.39,3.39,0,0,1,171.63,288.75Z" />
                                                <path class="cls-7"
                                                    d="M185.24,296.61l-9.63-5.56c-.78-.45-.69-1.24.22-1.77L185,284a3.42,3.42,0,0,1,3.06-.13l9.62,5.56c.79.45.69,1.25-.22,1.77l-9.18,5.3A3.39,3.39,0,0,1,185.24,296.61Z" />
                                                <path class="cls-7"
                                                    d="M198.84,304.47l-9.62-5.56c-.79-.45-.69-1.25.22-1.77l9.18-5.3a3.41,3.41,0,0,1,3.07-.13l9.62,5.56c.79.45.69,1.24-.22,1.77l-9.18,5.3A3.44,3.44,0,0,1,198.84,304.47Z" />
                                                <path class="cls-7"
                                                    d="M212.45,312.32l-9.62-5.55c-.79-.46-.69-1.25.22-1.77l9.18-5.31a3.41,3.41,0,0,1,3.07-.12l9.62,5.55c.79.46.69,1.25-.22,1.77l-9.18,5.31A3.41,3.41,0,0,1,212.45,312.32Z" />
                                                <path class="cls-7"
                                                    d="M226.06,320.18l-9.62-5.56c-.79-.45-.69-1.24.22-1.77l9.18-5.3a3.42,3.42,0,0,1,3.06-.13l9.63,5.56c.78.46.69,1.25-.22,1.77l-9.19,5.3A3.39,3.39,0,0,1,226.06,320.18Z" />
                                                <path class="cls-7"
                                                    d="M239.67,328,230,322.48c-.78-.45-.68-1.25.22-1.77l9.19-5.3a3.39,3.39,0,0,1,3.06-.13l9.63,5.56c.78.45.68,1.24-.22,1.77l-9.19,5.3A3.42,3.42,0,0,1,239.67,328Z" />
                                                <path class="cls-7"
                                                    d="M253.28,335.89l-9.63-5.55c-.78-.46-.68-1.25.22-1.77l9.19-5.3a3.36,3.36,0,0,1,3.06-.13l9.63,5.56c.78.45.68,1.24-.22,1.76l-9.19,5.31A3.39,3.39,0,0,1,253.28,335.89Z" />
                                                <path class="cls-7"
                                                    d="M266.89,343.75l-9.63-5.56c-.78-.45-.69-1.24.22-1.77l9.19-5.3a3.42,3.42,0,0,1,3.06-.13l9.62,5.56c.79.46.69,1.25-.22,1.77l-9.18,5.3A3.39,3.39,0,0,1,266.89,343.75Z" />
                                                <path class="cls-7"
                                                    d="M297.34,361.33l-26.47-15.28c-.79-.45-.69-1.24.22-1.77l9.18-5.3a3.44,3.44,0,0,1,3.07-.13l26.47,15.28c.78.46.68,1.25-.22,1.77l-9.19,5.31A3.39,3.39,0,0,1,297.34,361.33Z" />
                                                <path class="cls-7"
                                                    d="M117.19,257.33l-13.12-7.58c-.79-.45-.69-1.25.22-1.77l9.18-5.3a3.41,3.41,0,0,1,3.07-.13l13.12,7.58c.79.45.69,1.24-.22,1.77l-9.18,5.3A3.44,3.44,0,0,1,117.19,257.33Z" />
                                                <path class="cls-7"
                                                    d="M350.63,330.56,157.36,219c-.78-.45-.69-1.25.22-1.77l4.59-2.65a3.44,3.44,0,0,1,3.07-.13L358.51,326c.78.45.68,1.24-.22,1.77l-4.6,2.65A3.39,3.39,0,0,1,350.63,330.56Z" />
                                                <path class="cls-1"
                                                    d="M230.9,343.25a2.91,2.91,0,0,1-1.33,1.39l-53.19,30.7a6.54,6.54,0,0,1-5.89.25L79.6,323.11a2,2,0,0,1-.92-1c-.33-.8.13-1.74,1.34-2.44L133.21,289a6.57,6.57,0,0,1,5.89-.24L230,341.24A1.58,1.58,0,0,1,230.9,343.25Z" />
                                                <path class="cls-8"
                                                    d="M230.9,343.25a2.91,2.91,0,0,1-1.33,1.39l-53.19,30.7a6.54,6.54,0,0,1-5.89.25L79.6,323.11a2,2,0,0,1-.92-1A2.92,2.92,0,0,1,80,320.77l53.19-30.7a6.54,6.54,0,0,1,5.89-.25L230,342.3A2.05,2.05,0,0,1,230.9,343.25Z" />
                                                <path class="cls-7"
                                                    d="M365.34,322.1,172.07,210.52a3.43,3.43,0,0,1-1.42-2.72v-2.27c0-1.05.64-1.53,1.42-1.08L365.34,316a3.39,3.39,0,0,1,1.42,2.72V321C366.76,322.07,366.13,322.55,365.34,322.1Z" />
                                                <path class="cls-9"
                                                    d="M249.58,103.76l-67-38.66a2.43,2.43,0,0,1-1-1.94V58.49c0-.75.46-1.1,1-.77l67,38.66a2.43,2.43,0,0,1,1,1.94V103C250.6,103.74,250.14,104.09,249.58,103.76Z" />
                                                <path class="cls-9"
                                                    d="M232.38,104.88,182.93,76.33a2.44,2.44,0,0,1-1-2V72.06c0-.75.45-1.1,1-.77l49.45,28.55a2.44,2.44,0,0,1,1,2v2.32C233.4,104.86,233,105.2,232.38,104.88Z" />
                                                <path class="cls-9"
                                                    d="M232.38,113.69,182.93,85.14a2.44,2.44,0,0,1-1-2V80.87c0-.75.45-1.09,1-.77l49.45,28.56a2.4,2.4,0,0,1,1,1.94v2.32C233.4,113.67,233,114,232.38,113.69Z" />
                                                <path class="cls-10"
                                                    d="M223.06,117.12,182.93,94a2.4,2.4,0,0,1-1-1.94V89.68c0-.75.45-1.09,1-.77l40.13,23.17a2.45,2.45,0,0,1,1,2v2.32C224.07,117.1,223.62,117.44,223.06,117.12Z" />
                                                <path class="cls-9"
                                                    d="M249.58,196.28l-67-38.66a2.46,2.46,0,0,1-1-2V151c0-.75.46-1.09,1-.77l67,38.66a2.46,2.46,0,0,1,1,2v4.67C250.6,196.26,250.14,196.6,249.58,196.28Z" />
                                                <path class="cls-9"
                                                    d="M232.38,197.4l-49.45-28.56a2.4,2.4,0,0,1-1-1.94v-2.32c0-.75.45-1.1,1-.77l49.45,28.55a2.42,2.42,0,0,1,1,1.94v2.33C233.4,197.38,233,197.72,232.38,197.4Z" />
                                                <path class="cls-9"
                                                    d="M232.38,206.21l-49.45-28.55a2.44,2.44,0,0,1-1-1.95v-2.32c0-.75.45-1.1,1-.77l49.45,28.55a2.44,2.44,0,0,1,1,2v2.32C233.4,206.19,233,206.53,232.38,206.21Z" />
                                                <path class="cls-10"
                                                    d="M223.06,209.64l-40.13-23.17a2.44,2.44,0,0,1-1-1.95V182.2c0-.75.45-1.09,1-.77l40.13,23.17a2.42,2.42,0,0,1,1,1.94v2.33C224.07,209.62,223.62,210,223.06,209.64Z" />
                                                <path class="cls-11"
                                                    d="M267.5,207.76s7.39,6.2,18.05-2.27c7.62-6.25,14.43-2.68,18.22-.52s9.31,3.45,19.71,22.29a27.9,27.9,0,0,0,9,9.14c5.61,3.23,8.3,1.66,12.71-5s7.29-14,15.39-9.2V289l-93.8-54.15V207.32Z" />
                                                <path class="cls-9"
                                                    d="M247.12,179.44l-64.19-37.06a2.44,2.44,0,0,1-1-1.95v-37c0-.75.45-1.09,1-.77l64.19,37.06a2.45,2.45,0,0,1,1,1.95v37C248.13,179.42,247.68,179.76,247.12,179.44Z" />
                                                <polyline class="cls-12"
                                                    points="266.77 206.2 266.77 234.88 360.57 289.03 360.57 222.22" />
                                                <line class="cls-12" x1="303.64" y1="205.29" x2="303.64"
                                                    y2="256.09" />
                                                <line class="cls-12" x1="332.33" y1="237.42" x2="332.33"
                                                    y2="272.66" />
                                                <path class="cls-13"
                                                    d="M266.77,207.32c16.64,10.32,19-13,37.13-2.54s15.63,24.11,29,31.84,13.7-22.46,27.66-14.4" />
                                                <ellipse class="cls-10" cx="303.64" cy="205.29" rx="1.81"
                                                    ry="3.13" transform="translate(-61.96 179.33) rotate(-30)" />
                                                <ellipse class="cls-10" cx="360.57" cy="222.22" rx="1.81"
                                                    ry="3.13" transform="matrix(0.87, -0.5, 0.5, 0.87, -62.81, 210.07)" />
                                                <ellipse class="cls-10" cx="332.33" cy="236.79" rx="1.81"
                                                    ry="3.13" transform="matrix(0.87, -0.5, 0.5, 0.87, -73.87, 197.9)" />
                                                <ellipse class="cls-10" cx="266.77" cy="207.32" rx="1.81"
                                                    ry="3.13" transform="matrix(0.87, -0.5, 0.5, 0.87, -67.92, 161.17)" />
                                                <path class="cls-9"
                                                    d="M269.42,158.05l-3.84-2.22a2.43,2.43,0,0,1-1-1.94V135.32c0-.75.46-1.09,1-.77l3.84,2.22a2.44,2.44,0,0,1,1,1.94v18.58C270.44,158,270,158.38,269.42,158.05Z" />
                                                <path class="cls-10"
                                                    d="M278.28,163.17,274.43,161a2.46,2.46,0,0,1-1-1.95V121.22c0-.75.46-1.09,1-.77l3.85,2.22a2.45,2.45,0,0,1,1,2V162.4C279.29,163.15,278.84,163.49,278.28,163.17Z" />
                                                <path class="cls-9"
                                                    d="M296,173.39l-3.84-2.22a2.44,2.44,0,0,1-1-1.95V135.11c0-.75.45-1.09,1-.77l3.84,2.22a2.46,2.46,0,0,1,1,1.95v34.11C297,173.37,296.54,173.71,296,173.39Z" />
                                                <path class="cls-10"
                                                    d="M304.83,178.5,301,176.28a2.44,2.44,0,0,1-1-1.94V146.07c0-.75.46-1.09,1-.77l3.84,2.22a2.44,2.44,0,0,1,1,1.95v28.26C305.85,178.48,305.4,178.82,304.83,178.5Z" />
                                                <path class="cls-9"
                                                    d="M322.46,188.68l-3.84-2.22a2.46,2.46,0,0,1-1-2v-14c0-.75.46-1.09,1-.77l3.84,2.22a2.44,2.44,0,0,1,1,1.95v14C323.48,188.66,323,189,322.46,188.68Z" />
                                                <path class="cls-10"
                                                    d="M331.32,193.79l-3.85-2.22a2.46,2.46,0,0,1-1-1.95v-47.5c0-.75.46-1.1,1-.77l3.85,2.22a2.42,2.42,0,0,1,1,1.94V193C332.33,193.77,331.88,194.11,331.32,193.79Z" />
                                                <path class="cls-9"
                                                    d="M352.92,206.26,349.07,204a2.46,2.46,0,0,1-1-1.95v-14c0-.75.46-1.1,1-.77l3.85,2.22a2.42,2.42,0,0,1,1,1.94v14C353.93,206.24,353.48,206.58,352.92,206.26Z" />
                                                <path class="cls-10"
                                                    d="M361.77,211.37l-3.85-2.22a2.42,2.42,0,0,1-1-1.94V188.64c0-.75.45-1.1,1-.77l3.85,2.22a2.43,2.43,0,0,1,1,1.94V210.6C362.79,211.35,362.33,211.69,361.77,211.37Z" />
                                            </g>
                                            <polygon class="cls-6"
                                                points="352.27 486.9 253.29 429.75 389.26 351.25 488.24 408.39 352.27 486.9" />
                                            <polygon class="cls-1"
                                                points="488.59 404.5 392.88 349.23 260.16 425.86 256.9 423.98 256.9 427.74 355.88 484.88 491.85 406.38 491.85 402.62 488.59 404.5" />
                                            <polygon class="cls-14"
                                                points="355.88 481.12 256.9 423.98 392.88 345.47 491.85 402.62 355.88 481.12" />
                                            <polygon class="cls-9"
                                                points="462.63 408.68 383.27 362.86 391.13 358.32 470.5 404.14 462.63 408.68" />
                                            <polygon class="cls-9"
                                                points="454.26 413.52 374.9 367.7 378.83 365.43 458.19 411.25 454.26 413.52" />
                                            <polygon class="cls-9"
                                                points="447.77 417.26 368.41 371.44 372.34 369.17 451.7 414.99 447.77 417.26" />
                                            <polygon class="cls-9"
                                                points="441.29 421.01 361.93 375.19 365.86 372.92 445.22 418.74 441.29 421.01" />
                                            <polygon class="cls-9"
                                                points="393.73 448.47 314.36 402.65 322.23 398.11 401.58 443.93 393.73 448.47" />
                                            <polygon class="cls-9"
                                                points="379.92 450.17 305.99 407.48 309.92 405.21 383.85 447.9 379.92 450.17" />
                                            <polygon class="cls-9"
                                                points="371.96 453.06 299.5 411.23 303.43 408.96 375.89 450.79 371.96 453.06" />
                                            <polygon class="cls-9"
                                                points="354.27 450.34 293.02 414.97 296.95 412.7 358.2 448.07 354.27 450.34" />
                                            <polygon class="cls-9"
                                                points="353.65 405.53 331.51 392.75 353.65 379.97 375.79 392.75 353.65 405.53" />
                                            <polygon class="cls-9"
                                                points="382.26 422.05 360.12 409.27 382.26 396.48 404.4 409.27 382.26 422.05" />
                                            <polygon class="cls-9"
                                                points="410.87 438.57 388.73 425.78 410.87 413 433.01 425.79 410.87 438.57" />
                                            <polygon class="cls-15"
                                                points="43.03 245.01 24.27 234.18 43.03 223.34 61.8 234.18 43.03 245.01" />
                                            <polygon class="cls-15"
                                                points="72.78 227.65 54.01 216.82 72.78 205.98 91.54 216.82 72.78 227.65" />
                                            <polygon class="cls-10"
                                                points="83.92 123.83 65.15 113 83.92 102.17 102.68 113 83.92 123.83" />
                                            <polygon class="cls-10"
                                                points="83.92 221.38 65.15 210.54 65.15 113 83.92 123.84 83.92 221.38" />
                                            <polygon class="cls-16"
                                                points="83.92 221.38 65.15 210.54 65.15 113 83.92 123.84 83.92 221.38" />
                                            <polygon class="cls-10"
                                                points="102.68 210.54 83.92 221.38 83.92 123.84 102.68 113 102.68 210.54" />
                                            <polygon class="cls-17"
                                                points="102.68 210.54 83.92 221.38 83.92 123.84 102.68 113 102.68 210.54" />
                                            <polygon class="cls-9"
                                                points="55.77 172.59 37 161.75 55.77 150.91 74.53 161.75 55.77 172.59" />
                                            <polygon class="cls-9"
                                                points="55.77 237.54 37 226.71 37 161.75 55.77 172.59 55.77 237.54" />
                                            <polygon class="cls-16"
                                                points="55.77 237.54 37 226.71 37 161.75 55.77 172.59 55.77 237.54" />
                                            <polygon class="cls-9"
                                                points="74.53 226.71 55.77 237.54 55.77 172.59 74.53 161.75 74.53 226.71" />
                                            <polygon class="cls-17"
                                                points="74.53 226.71 55.77 237.54 55.77 172.59 74.53 161.75 74.53 226.71" />
                                            <polygon class="cls-15"
                                                points="19 259.21 0.23 248.38 19 237.54 37.76 248.38 19 259.21" />
                                            <polygon class="cls-10"
                                                points="25.8 224.07 7.03 213.23 25.79 202.4 44.56 213.23 25.8 224.07" />
                                            <polygon class="cls-10"
                                                points="25.8 255.13 7.03 244.29 7.03 213.23 25.8 224.07 25.8 255.13" />
                                            <polygon class="cls-16"
                                                points="25.8 255.13 7.03 244.29 7.03 213.23 25.8 224.07 25.8 255.13" />
                                            <polygon class="cls-10"
                                                points="44.56 244.29 25.8 255.13 25.8 224.07 44.56 213.23 44.56 244.29" />
                                            <polygon class="cls-17"
                                                points="44.56 244.29 25.8 255.13 25.8 224.07 44.56 213.23 44.56 244.29" />
                                            <g id="Girl_12">
                                                <path id="_Контур_" data-name="&lt;Контур&gt;" class="cls-18"
                                                    d="M221.65,1.33c.86-1.37,7.4-2.28,9.55,3.27.82,2.1.69,7.47,1.37,10.85s2.3,5.29,2.87,8-.36,7.33-7,8.14S216.8,30.11,215.24,28s-1.59-6.58,0-9,2.85-4.35,2.81-7.48Z" />
                                                <path id="_Контур_2" data-name="&lt;Контур&gt;" class="cls-18"
                                                    d="M226,.38S221-1,218.05,1.62a7.3,7.3,0,0,0-2.1,7.3c.4,1.56,1.19,3.68,2.43,3.8S226,.38,226,.38Z" />
                                                <path id="_Контур_3" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M227.85,13.81s-.32,5.5-.22,5.9,2.15.79,2.73,1.27-3,6.05-4.8,6.88-7.42-1.29-7.81-4.08c-.36-2.56,1.61-4.56,2.37-5.26a10.67,10.67,0,0,1,1.54,0l.17-2.66C224.28,15,227.85,13.81,227.85,13.81Z" />
                                                <path id="_Контур_4" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M211.7,43.12a29.19,29.19,0,0,1-5.47,5.69A27.1,27.1,0,0,0,204.36,51a8.24,8.24,0,0,1-3.68,2.44c-1.24.32-1.76.24-2,0s-.11-.58.43-.8a6.74,6.74,0,0,0,2.41-1.29s-1.15.53-1.88.78a7.46,7.46,0,0,1-2,.4c-.69,0-1.4-.79-.86-1s1-.26,2.1-.65a6.73,6.73,0,0,0,1.59-.82,14.2,14.2,0,0,1-2.26.47,3.47,3.47,0,0,1-1.89-.22c-.32-.14-.6-.72.12-.91a10.71,10.71,0,0,0,2.72-.63c.84-.38,1.37-.78,1.18-.86s-.66.18-1.5.12-1.63-.6-1.62-1,.18-.2,1-.27a18.48,18.48,0,0,1,2.65-.45,8.49,8.49,0,0,0,2.62-.31c.89-.27,2.9-2.68,4.44-4.89a32.4,32.4,0,0,0,3.94-8c.92-3,2-8.73,2.81-10.71s2.14-2.87,3.43-2.91c1.51-.05,2.16,1.94,1.76,3.66C219.17,26.1,215.81,37.72,211.7,43.12Z" />
                                                <path id="_Контур_5" data-name="&lt;Контур&gt;" class="cls-20"
                                                    d="M228.61,20.24c1.54.24,3.3,1.06,3.54,1.91a18.07,18.07,0,0,1-.44,9.16c-1.33,3.54-2.85,9.91-3.61,11.44a18,18,0,0,1-11.5-2.25s-.32-6.14-.34-8.17c-5-4.33-.72-9.68,3.48-13.83a9.67,9.67,0,0,1,1.52,0s-3.75,4.44-1.15,7C225.71,23.75,226.82,21.24,228.61,20.24Z" />
                                                <path id="_Контур_6" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M217.59,7h0c.56-3.53,3.11-6.19,6.75-6a7,7,0,0,1,6.59,7.42,7,7,0,0,1-3.08,5.36,7.13,7.13,0,0,1-.56,1.55c-1.29,1.5-4.71,2.45-5.84,2.46-1,0-1.82-.9-2.74-2.41C216.81,12.25,217.29,8.75,217.59,7Z" />
                                                <path class="cls-18"
                                                    d="M225.46,1.1c2.55.49,4.65,1.21,5.34,3.72.48,1.72,1.1,5,.51,6.4l-.37,1-3.09,1.59s-1.44-1.2-1-4.72a2.49,2.49,0,0,0-.43-1.33A3.64,3.64,0,0,1,226,6.69a4,4,0,0,0-2-2.16,6.9,6.9,0,0,0-6.14.28A6.7,6.7,0,0,1,225.46,1.1Z" />
                                                <path class="cls-18"
                                                    d="M211.41,85.54c-1.29,1-3.3.32-3.4.42a54.13,54.13,0,0,1-4.73,3.61c-.8.63-2.06,1.48-1.83,2.7.41,2.17,3.89,1.5,5.21.84s2.38-1.77,3.63-2.54c.88-.55,1.76-.84,1.89-2C212.27,87.93,211.64,85.51,211.41,85.54Z" />
                                                <path class="cls-21"
                                                    d="M212.17,88.16c-.17,1.07-1,1.37-1.91,1.91-1.27.79-2.38,1.92-3.7,2.59s-4.24,1.22-5.09-.33c.46,2.1,3.88,1.44,5.19.78s2.38-1.77,3.63-2.54c.88-.55,1.76-.84,1.89-2A1.74,1.74,0,0,0,212.17,88.16Z" />
                                                <path class="cls-18"
                                                    d="M205.12,82c-1.18,1-3,.42-3.06.51a49.65,49.65,0,0,1-4.32,3.29c-.74.58-1.89,1.36-1.68,2.47.37,2,3.56,1.38,4.77.77s2.18-1.62,3.32-2.32c.81-.51,1.61-.77,1.74-1.8A6.77,6.77,0,0,0,205.12,82Z" />
                                                <path class="cls-21"
                                                    d="M205.88,84.52c-.16,1-.95,1.25-1.76,1.75C203,87,202,88,200.74,88.64s-3.88,1.12-4.66-.3c.42,1.92,3.55,1.32,4.75.71s2.18-1.62,3.32-2.32c.81-.51,1.61-.77,1.74-1.8A2,2,0,0,0,205.88,84.52Z" />
                                                <path class="cls-19"
                                                    d="M223,44.1a19.07,19.07,0,0,1-10.29-1.49c.06,1.1.12,2.07.12,2.07-4.19,3-12.59,7.94-13.14,11.38.55,10.86,2.2,26.38,2.67,26.6,1.31.63,2.23.53,2.85-.1,0,0,2.64-9.2,1.87-22.7,0,0,14.65-6.49,15.61-10a11.15,11.15,0,0,0,.4-4.42C223.08,45,223.05,44.53,223,44.1Z" />
                                                <path class="cls-19"
                                                    d="M227.86,42.69A15.69,15.69,0,0,1,219,43.88c0,1.45.21,4.18.21,4.18C215,51,206.63,56,206.09,59.44c.54,10.87,1.56,26.6,2,26.8a3.55,3.55,0,0,0,3.47-.41s2.65-9.09,1.88-22.59c0-.25,12.56-6.44,14.15-8.07s1.9-4.07,1.86-6.38A15.6,15.6,0,0,0,227.86,42.69Z" />
                                                <path class="cls-22"
                                                    d="M230.94,45s4.65,8.23-3.09,12.46c-8.17,4.46-13.14,5.5-13.14,5.5l-1.23.29a31.78,31.78,0,0,1,0,8.55s-5.83,2-13.26-4.51l-2.46-7.93-.29-2.1a4.41,4.41,0,0,1,1.24-4c1.78-1.62,7.43-5.76,10.94-8.12S216,40.5,216,40.5l.61-.57s4.17,3.32,11.78,2.21A11.83,11.83,0,0,1,230.94,45Z" />
                                                <path id="_Контур_7" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M226.34,57.2a22,22,0,0,1,2.24-1.77,9.3,9.3,0,0,0,2.27-1.62c.71-.71,1.76-3.7,2.31-6.61a28.87,28.87,0,0,0-.16-9.81,68.56,68.56,0,0,0-3.89-11.3c-1-2.18-.45-3.51.49-4.48,1.11-1.13,2.26-1.1,3.58,1.94a62.5,62.5,0,0,1,4.08,13.3,29.43,29.43,0,0,1-.14,10,36.5,36.5,0,0,1-2.66,8.4c-.34.79-.4,1.45-.87,3a10.15,10.15,0,0,1-2.4,4.21c-1,.94-1.52,1.12-1.79,1s-.33-.52.08-1A8.4,8.4,0,0,0,231.17,60s-.85,1.09-1.41,1.7a7.88,7.88,0,0,1-1.7,1.42c-.61.37-1.58-.07-1.18-.56s.85-.77,1.67-1.69a8,8,0,0,0,1.13-1.59,15.08,15.08,0,0,1-1.88,1.59,3.53,3.53,0,0,1-1.81.75c-.34,0-.82-.4-.24-.95a12.21,12.21,0,0,0,2.24-2c.62-.79.94-1.44.74-1.42s-.53.5-1.32.87-1.72.24-1.88-.2S225.61,57.68,226.34,57.2Z" />
                                                <path class="cls-23"
                                                    d="M235.2,27.66s-2.81,2.5-5.94,2L228,24.41s-.83-2.75,1.53-3.8S234.18,22.31,235.2,27.66Z" />
                                                <path class="cls-23"
                                                    d="M219.74,18.5s-3.05-.93-6.28,5.82l1.21.73A51.49,51.49,0,0,1,219.74,18.5Z" />
                                                <g id="_Группа_" data-name="&lt;Группа&gt;">
                                                    <g id="_Группа_2" data-name="&lt;Группа&gt;">
                                                        <path id="_Контур_8" data-name="&lt;Контур&gt;" class="cls-20"
                                                            d="M198.7,47.63l10.86-6.27a.62.62,0,0,1,.62,0l19,11-11.17,6.45Z" />
                                                        <path class="cls-24"
                                                            d="M218.34,56.32l.83.48c.07,0,.06.11,0,.16l-.79.45a.3.3,0,0,1-.26,0l-.83-.48c-.07,0-.06-.11,0-.16l.8-.45A.3.3,0,0,1,218.34,56.32Z" />
                                                        <path class="cls-24"
                                                            d="M217.17,55.65l.83.48c.06,0,.06.1,0,.15l-.79.46a.32.32,0,0,1-.27,0l-.83-.48c-.07,0-.06-.11,0-.16l.79-.45A.29.29,0,0,1,217.17,55.65Z" />
                                                        <path class="cls-24"
                                                            d="M216,55l.83.48c.07,0,.06.11,0,.15l-.79.46a.32.32,0,0,1-.27,0l-.83-.48c-.07,0-.06-.11,0-.15l.79-.46A.32.32,0,0,1,216,55Z" />
                                                        <path class="cls-24"
                                                            d="M214.82,54.29l.83.48c.06,0,0,.11,0,.15l-.8.46a.3.3,0,0,1-.26,0l-.83-.48c-.07,0-.06-.11,0-.15l.79-.46A.29.29,0,0,1,214.82,54.29Z" />
                                                        <path class="cls-24"
                                                            d="M213.64,53.61l.83.48c.07,0,.06.11,0,.15l-.79.46a.32.32,0,0,1-.27,0l-.83-.48c-.06,0-.06-.11,0-.15l.8-.46A.3.3,0,0,1,213.64,53.61Z" />
                                                        <path class="cls-24"
                                                            d="M212.46,52.93l.83.48c.07,0,.06.11,0,.15l-.8.46a.27.27,0,0,1-.26,0l-.83-.48c-.07,0-.06-.1,0-.15l.79-.46A.3.3,0,0,1,212.46,52.93Z" />
                                                        <path class="cls-24"
                                                            d="M211.29,52.25l.83.48c.07,0,.06.11,0,.15l-.79.46a.29.29,0,0,1-.27,0l-.83-.48c-.07,0-.06-.1,0-.15l.79-.46A.32.32,0,0,1,211.29,52.25Z" />
                                                        <path class="cls-24"
                                                            d="M210.11,51.57l.83.48c.07,0,.06.11,0,.16l-.79.45a.27.27,0,0,1-.26,0L209,52.2c-.07,0-.06-.11,0-.16l.79-.46A.3.3,0,0,1,210.11,51.57Z" />
                                                        <path class="cls-24"
                                                            d="M208.94,50.9l.83.47c.07,0,.06.11,0,.16L209,52a.32.32,0,0,1-.27,0l-.83-.48c-.07,0-.06-.11,0-.16l.79-.45A.29.29,0,0,1,208.94,50.9Z" />
                                                        <path class="cls-24"
                                                            d="M207.76,50.22l.83.48c.07,0,.06.1,0,.15l-.79.46a.3.3,0,0,1-.26,0l-.83-.48c-.07,0-.06-.11,0-.15l.79-.46A.27.27,0,0,1,207.76,50.22Z" />
                                                        <path class="cls-24"
                                                            d="M206.59,49.54l.83.48c.06,0,.06.1,0,.15l-.79.46a.32.32,0,0,1-.27,0l-.83-.48c-.07,0-.06-.11,0-.15l.79-.46A.29.29,0,0,1,206.59,49.54Z" />
                                                        <path class="cls-24"
                                                            d="M205.41,48.86l.83.48c.07,0,.06.11,0,.15l-.79.46a.3.3,0,0,1-.26,0l-.84-.48c-.06,0-.05-.11,0-.15l.8-.46A.3.3,0,0,1,205.41,48.86Z" />
                                                        <path class="cls-24"
                                                            d="M204.24,48.18l.83.48c.06,0,.05.11,0,.15l-.8.46a.27.27,0,0,1-.26,0l-.83-.48c-.07,0-.06-.11,0-.15l.79-.46A.32.32,0,0,1,204.24,48.18Z" />
                                                        <path class="cls-24"
                                                            d="M202.49,47.17l1.4.81c.07,0,.06.11,0,.15l-.79.46a.29.29,0,0,1-.27,0l-1.39-.8c-.07,0-.06-.11,0-.16l.79-.45A.3.3,0,0,1,202.49,47.17Z" />
                                                        <path class="cls-24"
                                                            d="M217.74,54.66l.83.48c.07,0,.06.11,0,.15l-.79.46a.29.29,0,0,1-.27,0l-.83-.48c-.07,0-.06-.11,0-.15l.79-.46A.32.32,0,0,1,217.74,54.66Z" />
                                                        <path class="cls-24"
                                                            d="M216.56,54l.83.48c.07,0,.06.11,0,.15l-.79.46a.29.29,0,0,1-.27,0l-.83-.48c-.06,0-.06-.11,0-.15l.8-.46A.3.3,0,0,1,216.56,54Z" />
                                                        <path class="cls-24"
                                                            d="M215.38,53.3l.83.48c.07,0,.06.11,0,.15l-.79.46a.27.27,0,0,1-.26,0l-.83-.48c-.07,0-.06-.11,0-.15l.79-.46A.3.3,0,0,1,215.38,53.3Z" />
                                                        <path class="cls-24"
                                                            d="M214.2,52.62l.84.48c.06,0,.05.11,0,.15l-.8.46a.27.27,0,0,1-.26,0l-.83-.48c-.07,0-.06-.11,0-.15l.79-.46A.3.3,0,0,1,214.2,52.62Z" />
                                                        <path class="cls-24"
                                                            d="M213,52l.83.48c.06,0,.06.1,0,.15l-.79.46a.32.32,0,0,1-.27,0l-.83-.48c-.07,0-.06-.11,0-.16l.79-.45A.29.29,0,0,1,213,52Z" />
                                                        <path class="cls-24"
                                                            d="M211.86,51.27l.83.48c.07,0,.06.1,0,.15l-.79.46a.32.32,0,0,1-.27,0l-.83-.48c-.06,0-.06-.11,0-.16l.79-.45A.29.29,0,0,1,211.86,51.27Z" />
                                                        <path class="cls-24"
                                                            d="M210.68,50.59l.83.48c.07,0,.06.1,0,.15l-.79.46a.3.3,0,0,1-.26,0l-.83-.48c-.07,0-.06-.11,0-.15l.8-.46A.27.27,0,0,1,210.68,50.59Z" />
                                                        <path class="cls-24"
                                                            d="M209.5,49.91l.83.48c.07,0,.06.1,0,.15l-.8.46a.3.3,0,0,1-.26,0l-.83-.48c-.07,0-.06-.11,0-.15l.79-.46A.27.27,0,0,1,209.5,49.91Z" />
                                                        <path class="cls-24"
                                                            d="M208.33,49.23l.83.48c.06,0,.06.1,0,.15l-.79.46a.32.32,0,0,1-.27,0l-.83-.48c-.07,0-.06-.11,0-.15l.79-.46A.29.29,0,0,1,208.33,49.23Z" />
                                                        <path class="cls-24"
                                                            d="M207.15,48.55,208,49c.07,0,.06.1,0,.15l-.79.46a.32.32,0,0,1-.27,0l-.83-.48c-.06,0-.06-.11,0-.15l.79-.46A.29.29,0,0,1,207.15,48.55Z" />
                                                        <path class="cls-24"
                                                            d="M206,47.87l.83.48c.07,0,.06.1,0,.15L206,49a.3.3,0,0,1-.26,0l-.83-.48c-.07,0-.06-.11,0-.15l.8-.46A.27.27,0,0,1,206,47.87Z" />
                                                        <path class="cls-24"
                                                            d="M204.79,47.19l.83.48c.07,0,.06.1,0,.15l-.79.46a.3.3,0,0,1-.26,0l-.83-.48c-.07,0-.06-.11,0-.15l.79-.46A.27.27,0,0,1,204.79,47.19Z" />
                                                        <path class="cls-24"
                                                            d="M218.91,55.34l1.4.81c.07,0,.06.1,0,.15l-.79.46a.3.3,0,0,1-.26,0l-1.4-.81c-.07,0-.06-.11,0-.15l.79-.46A.3.3,0,0,1,218.91,55.34Z" />
                                                        <path class="cls-24"
                                                            d="M202.55,47.13l.83.48a.28.28,0,0,0,.25,0l.83-.48a.08.08,0,0,0,0-.15l-.07,0a.08.08,0,0,1,0-.14l.89-.51a.08.08,0,0,0,0-.14l-.53-.3a.28.28,0,0,0-.25,0l-.83.48-.17.09-.12.08-.13.07-.71.41C202.48,47,202.48,47.09,202.55,47.13Z" />
                                                        <path class="cls-24"
                                                            d="M222.89,53.69l.84.48c.06,0,.05.11,0,.15l-.8.46a.27.27,0,0,1-.26,0l-.83-.48c-.07,0-.06-.11,0-.15l.79-.46A.3.3,0,0,1,222.89,53.69Z" />
                                                        <path class="cls-24"
                                                            d="M221.72,53l.83.48c.07,0,.06.11,0,.16l-.79.45a.27.27,0,0,1-.26,0l-.83-.47c-.07,0-.06-.11,0-.16l.79-.45A.3.3,0,0,1,221.72,53Z" />
                                                        <path class="cls-24"
                                                            d="M220.55,52.34l.83.48c.07,0,.06.1,0,.15l-.79.46a.32.32,0,0,1-.27,0l-.83-.48c-.06,0-.05-.11,0-.15l.8-.46A.27.27,0,0,1,220.55,52.34Z" />
                                                        <path class="cls-24"
                                                            d="M210.57,46.57l.83.48c.07,0,.06.11,0,.16l-.79.45a.29.29,0,0,1-.27,0l-.83-.48c-.07,0-.06-.1,0-.15l.79-.46A.32.32,0,0,1,210.57,46.57Z" />
                                                        <path class="cls-24"
                                                            d="M209.4,45.9l.83.48c.06,0,.06.1,0,.15l-.8.46a.3.3,0,0,1-.26,0l-.83-.48c-.07,0-.06-.11,0-.15l.79-.46A.29.29,0,0,1,209.4,45.9Z" />
                                                        <path class="cls-24"
                                                            d="M208.22,45.22l.83.48c.07,0,.06.11,0,.15l-.79.46a.27.27,0,0,1-.26,0l-.83-.48c-.07,0-.06-.11,0-.15l.79-.46A.3.3,0,0,1,208.22,45.22Z" />
                                                        <path class="cls-24"
                                                            d="M207.05,44.54l.83.48c.07,0,.06.11,0,.16l-.79.45a.27.27,0,0,1-.26,0l-.83-.48c-.07,0-.06-.1,0-.15l.8-.46A.3.3,0,0,1,207.05,44.54Z" />
                                                        <path class="cls-24"
                                                            d="M219.08,51.49l1.13.65c.07,0,.06.11,0,.15l-.79.46a.29.29,0,0,1-.27,0L218,52.11c-.07,0-.06-.11,0-.16l.79-.45A.29.29,0,0,1,219.08,51.49Z" />
                                                        <path class="cls-24"
                                                            d="M211.74,47.25l1.13.65c.07,0,.06.11,0,.16l-.79.45a.3.3,0,0,1-.26,0l-1.14-.66c-.06,0-.06-.11,0-.15l.8-.46A.3.3,0,0,1,211.74,47.25Z" />
                                                        <path class="cls-24"
                                                            d="M213.21,48.1l5.52,3.19c.07,0,.06.11,0,.15l-.8.46a.3.3,0,0,1-.26,0l-5.52-3.19c-.07,0-.06-.1,0-.15l.79-.46A.3.3,0,0,1,213.21,48.1Z" />
                                                        <path class="cls-24"
                                                            d="M218.56,53.82l.83.48c.07,0,.06.1,0,.15l-.79.46a.32.32,0,0,1-.27,0l-.83-.48c-.07,0-.06-.11,0-.15l.79-.46A.29.29,0,0,1,218.56,53.82Z" />
                                                        <path class="cls-24"
                                                            d="M217.38,53.14l.83.48c.07,0,.06.11,0,.15l-.79.46a.3.3,0,0,1-.26,0l-.83-.48c-.07,0-.06-.11,0-.15l.79-.46A.3.3,0,0,1,217.38,53.14Z" />
                                                        <path class="cls-24"
                                                            d="M216.21,52.46l.83.48c.07,0,.06.11,0,.15l-.79.46a.29.29,0,0,1-.27,0l-.83-.48c-.07,0-.06-.1,0-.15l.79-.46A.32.32,0,0,1,216.21,52.46Z" />
                                                        <path class="cls-24"
                                                            d="M215,51.78l.83.48c.07,0,.06.11,0,.16l-.8.45a.27.27,0,0,1-.26,0l-.83-.47c-.07,0-.06-.11,0-.16l.79-.46A.3.3,0,0,1,215,51.78Z" />
                                                        <path class="cls-24"
                                                            d="M213.86,51.11l.83.48c.07,0,.06.1,0,.15l-.79.46a.32.32,0,0,1-.27,0l-.83-.48c-.06,0-.06-.11,0-.16l.8-.45A.27.27,0,0,1,213.86,51.11Z" />
                                                        <path class="cls-24"
                                                            d="M212.69,50.43l.83.48c.06,0,.06.11,0,.15l-.8.46a.3.3,0,0,1-.26,0l-.83-.48c-.07,0-.06-.11,0-.15l.79-.46A.29.29,0,0,1,212.69,50.43Z" />
                                                        <path class="cls-24"
                                                            d="M211.51,49.75l.83.48c.07,0,.06.11,0,.15l-.79.46a.3.3,0,0,1-.26,0l-.83-.48c-.07,0-.06-.11,0-.15l.8-.46A.3.3,0,0,1,211.51,49.75Z" />
                                                        <path class="cls-24"
                                                            d="M210.34,49.07l.83.48c.07,0,.06.11,0,.15l-.79.46a.29.29,0,0,1-.27,0l-.83-.48c-.07,0-.06-.1,0-.15l.79-.46A.32.32,0,0,1,210.34,49.07Z" />
                                                        <path class="cls-24"
                                                            d="M209.16,48.39l.83.48c.07,0,.06.11,0,.16l-.79.45a.27.27,0,0,1-.26,0l-.83-.47c-.07,0-.06-.11,0-.16l.79-.45A.3.3,0,0,1,209.16,48.39Z" />
                                                        <path class="cls-24"
                                                            d="M208,47.72l.83.48c.07,0,.06.1,0,.15l-.79.46a.32.32,0,0,1-.27,0l-.83-.48c-.06,0-.06-.11,0-.16l.79-.45A.29.29,0,0,1,208,47.72Z" />
                                                        <path class="cls-24"
                                                            d="M206.81,47l.83.48c.07,0,.06.11,0,.15l-.8.46a.3.3,0,0,1-.26,0l-.83-.48c-.07,0-.06-.11,0-.15l.79-.46A.27.27,0,0,1,206.81,47Z" />
                                                        <path class="cls-24"
                                                            d="M205.64,46.36l.83.48c.07,0,.06.11,0,.15l-.79.46a.29.29,0,0,1-.27,0l-.83-.48c-.06,0-.05-.11,0-.15l.8-.46A.3.3,0,0,1,205.64,46.36Z" />
                                                        <path class="cls-24"
                                                            d="M219.73,54.5l1.72,1c.07,0,.06.1,0,.15l-.79.46a.32.32,0,0,1-.27,0l-1.71-1c-.07,0-.06-.11,0-.16l.8-.45A.27.27,0,0,1,219.73,54.5Z" />
                                                        <path class="cls-24"
                                                            d="M220.28,53.5l.83.48c.07,0,.06.1,0,.15l-.79.46a.32.32,0,0,1-.27,0l-.83-.48c-.06,0-.06-.11,0-.15l.79-.46A.29.29,0,0,1,220.28,53.5Z" />
                                                        <path class="cls-24"
                                                            d="M219.11,52.82l.83.48c.06,0,.05.11,0,.15l-.8.46a.3.3,0,0,1-.26,0l-.83-.48c-.07,0-.06-.11,0-.15l.79-.46A.29.29,0,0,1,219.11,52.82Z" />
                                                        <path class="cls-24"
                                                            d="M217.93,52.14l.83.48c.07,0,.06.11,0,.15l-.79.46a.27.27,0,0,1-.26,0l-.83-.48c-.07,0-.06-.11,0-.15l.8-.46A.3.3,0,0,1,217.93,52.14Z" />
                                                        <path class="cls-24"
                                                            d="M216.76,51.46l.83.48c.07,0,.06.11,0,.16l-.79.45a.29.29,0,0,1-.27,0l-.83-.48c-.07,0-.06-.1,0-.15l.79-.46A.32.32,0,0,1,216.76,51.46Z" />
                                                        <path class="cls-24"
                                                            d="M215.58,50.79l.83.47c.07,0,.06.11,0,.16l-.79.45a.3.3,0,0,1-.26,0l-.83-.48c-.07,0-.06-.11,0-.16l.79-.45A.27.27,0,0,1,215.58,50.79Z" />
                                                        <path class="cls-24"
                                                            d="M214.41,50.11l.83.48c.07,0,.06.1,0,.15l-.79.46a.32.32,0,0,1-.27,0l-.83-.48c-.06,0-.06-.11,0-.15l.79-.46A.29.29,0,0,1,214.41,50.11Z" />
                                                        <path class="cls-24"
                                                            d="M213.23,49.43l.84.48c.06,0,.05.11,0,.15l-.8.46a.3.3,0,0,1-.26,0l-.83-.48c-.07,0-.06-.11,0-.15l.79-.46A.3.3,0,0,1,213.23,49.43Z" />
                                                        <path class="cls-24"
                                                            d="M212.06,48.75l.83.48c.07,0,.06.11,0,.15l-.79.46a.27.27,0,0,1-.26,0l-.83-.48c-.07,0-.06-.1,0-.15l.8-.46A.3.3,0,0,1,212.06,48.75Z" />
                                                        <path class="cls-24"
                                                            d="M210.89,48.07l.83.48c.07,0,.06.11,0,.16l-.79.45a.29.29,0,0,1-.27,0l-.83-.48c-.07,0-.06-.1,0-.15l.79-.46A.32.32,0,0,1,210.89,48.07Z" />
                                                        <path class="cls-24"
                                                            d="M209.71,47.4l.83.48c.07,0,.06.1,0,.15l-.79.46a.3.3,0,0,1-.26,0l-.83-.48c-.07,0-.06-.11,0-.16l.79-.45A.27.27,0,0,1,209.71,47.4Z" />
                                                        <path class="cls-24"
                                                            d="M208.54,46.72l.83.48c.07,0,.06.11,0,.15l-.79.46a.32.32,0,0,1-.27,0l-.83-.48c-.06,0-.06-.11,0-.15l.79-.46A.29.29,0,0,1,208.54,46.72Z" />
                                                        <path class="cls-24"
                                                            d="M205.91,45.2l2.29,1.32c.06,0,.05.11,0,.15l-.8.46a.27.27,0,0,1-.26,0l-2.28-1.32c-.07,0-.06-.1,0-.15l.8-.46A.3.3,0,0,1,205.91,45.2Z" />
                                                        <path class="cls-24"
                                                            d="M221.45,54.17l1.14.66c.06,0,0,.11,0,.15l-.8.46a.3.3,0,0,1-.26,0l-1.13-.65c-.07,0-.06-.11,0-.16l.79-.45A.3.3,0,0,1,221.45,54.17Z" />
                                                        <path class="cls-24"
                                                            d="M201.31,47.86,218,57.48c.07,0,.06.11,0,.16l-.4.22a.27.27,0,0,1-.26,0l-16.68-9.62c-.06,0,0-.11,0-.15l.4-.23A.27.27,0,0,1,201.31,47.86Z" />
                                                        <polygon id="_Контур_9" data-name="&lt;Контур&gt;" class="cls-25"
                                                            points="221.04 48.49 220.93 48.55 218.06 50.21 212.96 47.26 212.85 47.2 215.83 45.48 221.04 48.49" />
                                                        <polygon id="_Контур_10" data-name="&lt;Контур&gt;" class="cls-26"
                                                            points="220.93 48.55 218.06 50.21 212.96 47.26 215.83 45.6 220.93 48.55" />
                                                        <path id="_Контур_11" data-name="&lt;Контур&gt;" class="cls-26"
                                                            d="M229.23,52.36v.25a1.05,1.05,0,0,1-.52.91l-10.13,5.84a1,1,0,0,1-1,0L199.23,48.79a1,1,0,0,1-.53-.91v-.25L218.06,58.8Z" />
                                                        <path id="_Контур_12" data-name="&lt;Контур&gt;" class="cls-26"
                                                            d="M218.06,58.8v.7a1.07,1.07,0,0,1-.52-.14L199.23,48.79a1,1,0,0,1-.53-.91v-.25Z" />
                                                        <path id="_Контур_13" data-name="&lt;Контур&gt;" class="cls-20"
                                                            d="M217.77,59a1.25,1.25,0,0,1-1.07-.08L198.46,48.35a1.22,1.22,0,0,1-.6-.87l-2-11.9a1.36,1.36,0,0,1,0-.2,1.22,1.22,0,0,1,.37-.88l18.94,10.94a.91.91,0,0,1,.45.64Z" />
                                                        <path id="_Контур_14" data-name="&lt;Контур&gt;" class="cls-26"
                                                            d="M218.06,58.81l-.12.07-.17.08-2.16-12.88a.91.91,0,0,0-.45-.64L196.22,34.5a1.22,1.22,0,0,1,.25-.2l19,11a1,1,0,0,1,.45.65Z" />
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="Men_11">
                                                <path id="_Контур_15" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M57.54,145.14a36.54,36.54,0,0,0,5.19,7.07c.56.65,4.88-1,4-1.46s-3.73-4.41-5.14-7a87.46,87.46,0,0,1-3-9.61c-.89-3.21-1.65-7.93-2.3-10.15a4.35,4.35,0,0,0-3.31-3.36c-1.55-.36-2.56.06-2.28,1.94C51.15,125.84,53.73,138.66,57.54,145.14Z" />
                                                <path class="cls-27"
                                                    d="M55.06,195.35c1.34,1.09,3.32.09,3.42.19a57.34,57.34,0,0,0,4.94,4.12c.83.65,2.13,1.53,1.9,2.79-.42,2.26-4,1.56-5.4.87s-2.47-1.83-3.76-2.63c-.92-.57-1.83-.87-2-2C54.1,198,54.83,195.32,55.06,195.35Z" />
                                                <path class="cls-28"
                                                    d="M54.21,198.19c.17,1.12,1.07,1.42,2,2,1.31.81,2.46,2,3.83,2.68s4.39,1.27,5.28-.34c-.48,2.17-4,1.49-5.38.8s-2.47-1.83-3.76-2.63c-.92-.57-1.83-.87-2-2A2.77,2.77,0,0,1,54.21,198.19Z" />
                                                <path class="cls-27"
                                                    d="M68.64,187.53c1.34,1.09,3.68-.1,3.78,0a50.29,50.29,0,0,0,4.41,4c.84.66,2.14,1.54,1.9,2.8-.42,2.26-4,1.56-5.39.87s-2.48-1.83-3.77-2.63c-.92-.57-1.82-.87-2-2A6.06,6.06,0,0,1,68.64,187.53Z" />
                                                <path class="cls-28"
                                                    d="M67.65,190.21c.17,1.11,1.07,1.42,2,2,1.31.81,2.46,2,3.82,2.67s4.4,1.27,5.29-.34c-.48,2.18-4,1.49-5.38.81s-2.47-1.83-3.76-2.63c-.92-.57-1.83-.87-2-2A2,2,0,0,1,67.65,190.21Z" />
                                                <path id="_Контур_16" data-name="&lt;Контур&gt;" class="cls-10"
                                                    d="M37.17,152.45c-1.48,9.27,2.63,12.72,8,14.7,3.84,1.41,9.35,3.59,9.35,3.59s-.08,2-.12,6.6c0,4,.49,18.69.49,18.69a4.49,4.49,0,0,0,4.1,0s2.16-11.24,2.62-16.31c.62-6.88,1.67-11.38,1.32-12.86-.31-1.3-7.82-5-10.21-7l15.75,5.28A28.16,28.16,0,0,0,68,170.3c.14,5.45.45,17.26.45,17.26s2.16,1.56,4,0c0,0,4-23.38,3.48-26.47-.46-2.94-14.33-8.94-16.78-11a3.9,3.9,0,0,0-3.08-.83Z" />
                                                <g id="_Группа_3" data-name="&lt;Группа&gt;">
                                                    <g id="_Группа_4" data-name="&lt;Группа&gt;">
                                                        <path id="_Контур_17" data-name="&lt;Контур&gt;" class="cls-20"
                                                            d="M74.92,156.31,64.34,150.2a.59.59,0,0,0-.6,0L45.18,160.92l10.88,6.28Z" />
                                                        <path class="cls-24"
                                                            d="M55.57,165l-.81.47c-.06,0-.06.1,0,.15l.77.44a.27.27,0,0,0,.26,0l.8-.46c.07,0,.06-.11,0-.15l-.77-.45A.31.31,0,0,0,55.57,165Z" />
                                                        <path class="cls-24"
                                                            d="M56.71,164.3l-.81.46c-.06,0,0,.11,0,.15l.77.44a.27.27,0,0,0,.26,0l.8-.46c.07,0,.06-.11,0-.15l-.77-.44A.27.27,0,0,0,56.71,164.3Z" />
                                                        <path class="cls-24"
                                                            d="M57.86,163.63l-.8.46c-.07,0-.06.11,0,.15l.77.45a.28.28,0,0,0,.25,0l.81-.47c.06,0,.06-.1,0-.15l-.77-.44A.3.3,0,0,0,57.86,163.63Z" />
                                                        <path class="cls-24"
                                                            d="M59,163l-.8.46c-.07,0-.06.11,0,.15L59,164a.34.34,0,0,0,.26,0l.81-.47c.06,0,.05-.1,0-.15l-.77-.44A.27.27,0,0,0,59,163Z" />
                                                        <path class="cls-24"
                                                            d="M60.13,162.32l-.8.46c-.07,0-.06.11,0,.15l.77.45a.31.31,0,0,0,.25,0l.81-.47c.06,0,.06-.1,0-.15l-.77-.44A.27.27,0,0,0,60.13,162.32Z" />
                                                        <path class="cls-24"
                                                            d="M61.28,161.66l-.81.46c-.07,0-.06.11,0,.15l.77.45a.28.28,0,0,0,.25,0l.81-.47c.07,0,.06-.1,0-.15l-.77-.44A.28.28,0,0,0,61.28,161.66Z" />
                                                        <path class="cls-24"
                                                            d="M62.42,161l-.81.47c-.07,0-.06.1,0,.14l.77.45a.3.3,0,0,0,.26,0l.8-.47c.07,0,.06-.1,0-.15l-.77-.44A.28.28,0,0,0,62.42,161Z" />
                                                        <path class="cls-24"
                                                            d="M63.56,160.34l-.81.47c-.06,0-.06.1,0,.14l.77.45a.3.3,0,0,0,.26,0l.8-.47c.07,0,.06-.1,0-.14l-.76-.45A.3.3,0,0,0,63.56,160.34Z" />
                                                        <path class="cls-24"
                                                            d="M64.7,159.68l-.81.47c-.06,0,0,.1,0,.15l.77.44a.3.3,0,0,0,.26,0l.81-.47c.06,0,0-.1,0-.14l-.77-.45A.3.3,0,0,0,64.7,159.68Z" />
                                                        <path class="cls-24"
                                                            d="M65.84,159l-.8.47c-.07,0-.06.1,0,.15l.77.44a.3.3,0,0,0,.26,0l.81-.46c.06,0,0-.11,0-.15L66.1,159A.3.3,0,0,0,65.84,159Z" />
                                                        <path class="cls-24"
                                                            d="M67,158.36l-.8.47c-.07,0-.06.1,0,.15l.77.44a.25.25,0,0,0,.25,0L68,159c.06,0,.06-.11,0-.15l-.77-.45A.34.34,0,0,0,67,158.36Z" />
                                                        <path class="cls-24"
                                                            d="M68.13,157.7l-.81.47c-.07,0-.06.1,0,.15l.77.44a.25.25,0,0,0,.25,0l.81-.46c.07,0,.06-.11,0-.15l-.77-.45A.31.31,0,0,0,68.13,157.7Z" />
                                                        <path class="cls-24"
                                                            d="M69.27,157.05l-.81.46c-.07,0-.06.11,0,.15l.77.44a.25.25,0,0,0,.25,0l.81-.46c.07,0,.06-.11,0-.15l-.77-.44A.25.25,0,0,0,69.27,157.05Z" />
                                                        <path class="cls-24"
                                                            d="M71,156.07l-1.36.78c-.06,0-.06.11,0,.15l.77.44a.27.27,0,0,0,.26,0l1.35-.78c.07,0,.06-.1,0-.15l-.77-.44A.28.28,0,0,0,71,156.07Z" />
                                                        <path class="cls-24"
                                                            d="M56.15,163.34l-.8.46c-.07,0-.06.11,0,.15l.77.45a.31.31,0,0,0,.25,0l.81-.47c.06,0,.06-.1,0-.15l-.77-.44A.27.27,0,0,0,56.15,163.34Z" />
                                                        <path class="cls-24"
                                                            d="M57.3,162.68l-.81.46c-.06,0-.06.11,0,.15l.77.45a.34.34,0,0,0,.26,0l.8-.47c.07,0,.06-.1,0-.15l-.77-.44A.25.25,0,0,0,57.3,162.68Z" />
                                                        <path class="cls-24"
                                                            d="M58.44,162l-.8.46c-.07,0-.06.11,0,.15l.77.45a.34.34,0,0,0,.26,0l.81-.47c.06,0,0-.1,0-.15L58.7,162A.27.27,0,0,0,58.44,162Z" />
                                                        <path class="cls-24"
                                                            d="M59.59,161.36l-.81.46c-.07,0-.06.11,0,.15l.77.45a.31.31,0,0,0,.25,0l.81-.47c.07,0,.06-.1,0-.15l-.77-.44A.25.25,0,0,0,59.59,161.36Z" />
                                                        <path class="cls-24"
                                                            d="M60.72,160.7l-.81.47c-.06,0,0,.1,0,.15l.77.44a.3.3,0,0,0,.26,0l.8-.46c.07,0,.06-.11,0-.15l-.77-.45A.3.3,0,0,0,60.72,160.7Z" />
                                                        <path class="cls-24"
                                                            d="M61.86,160l-.8.47c-.07,0-.06.1,0,.15l.76.44a.3.3,0,0,0,.26,0l.81-.46c.06,0,.06-.11,0-.15l-.77-.45A.3.3,0,0,0,61.86,160Z" />
                                                        <path class="cls-24"
                                                            d="M63,159.38l-.81.47c-.07,0-.06.1,0,.15l.77.44a.28.28,0,0,0,.25,0l.81-.47c.07,0,.06-.1,0-.14l-.77-.45A.28.28,0,0,0,63,159.38Z" />
                                                        <path class="cls-24"
                                                            d="M64.15,158.72l-.81.47c-.06,0-.05.1,0,.15l.77.44a.3.3,0,0,0,.26,0l.8-.47c.07,0,.06-.1,0-.14l-.77-.45A.3.3,0,0,0,64.15,158.72Z" />
                                                        <path class="cls-24"
                                                            d="M65.29,158.06l-.8.47c-.07,0-.06.1,0,.14l.77.45a.28.28,0,0,0,.25,0l.81-.47c.06,0,.06-.1,0-.14l-.77-.45A.3.3,0,0,0,65.29,158.06Z" />
                                                        <path class="cls-24"
                                                            d="M66.44,157.4l-.81.47c-.06,0-.06.1,0,.14l.77.45a.3.3,0,0,0,.26,0l.8-.47c.07,0,.06-.1,0-.14l-.77-.45A.28.28,0,0,0,66.44,157.4Z" />
                                                        <path class="cls-24"
                                                            d="M67.58,156.74l-.81.47c-.06,0,0,.1,0,.14l.77.45a.3.3,0,0,0,.26,0l.81-.47c.06,0,.05-.1,0-.14l-.77-.45A.3.3,0,0,0,67.58,156.74Z" />
                                                        <path class="cls-24"
                                                            d="M68.72,156.08l-.8.47c-.07,0-.06.1,0,.14l.77.45a.28.28,0,0,0,.25,0l.81-.47c.06,0,.06-.1,0-.14l-.77-.45A.3.3,0,0,0,68.72,156.08Z" />
                                                        <path class="cls-24"
                                                            d="M55,164l-1.36.78c-.06,0,0,.11,0,.15l.77.44a.27.27,0,0,0,.26,0l1.36-.78c.06,0,0-.1,0-.15l-.77-.44A.27.27,0,0,0,55,164Z" />
                                                        <path class="cls-24"
                                                            d="M70.9,156l-.8.46a.25.25,0,0,1-.24,0L69,156a.08.08,0,0,1,0-.14l.07,0c.06,0,.06-.1,0-.13l-.86-.5c-.07,0-.07-.1,0-.14l.51-.29a.25.25,0,0,1,.24,0l.8.46.17.1.12.07.12.07.69.4C71,155.93,71,156,70.9,156Z" />
                                                        <path class="cls-24"
                                                            d="M51.15,162.4l-.81.46c-.07,0-.06.11,0,.15l.77.44a.28.28,0,0,0,.25,0l.81-.47c.07,0,.06-.1,0-.15l-.77-.44A.25.25,0,0,0,51.15,162.4Z" />
                                                        <path class="cls-24"
                                                            d="M52.28,161.74l-.8.46c-.07,0-.06.11,0,.15l.77.45a.28.28,0,0,0,.25,0l.81-.47c.06,0,.06-.1,0-.15l-.77-.44A.3.3,0,0,0,52.28,161.74Z" />
                                                        <path class="cls-24"
                                                            d="M53.42,161.08l-.8.47c-.07,0-.06.1,0,.15l.77.44a.3.3,0,0,0,.26,0l.81-.46c.06,0,.06-.11,0-.15l-.77-.45A.3.3,0,0,0,53.42,161.08Z" />
                                                        <path class="cls-24"
                                                            d="M63.12,155.48l-.81.47c-.07,0-.06.1,0,.15l.77.44a.27.27,0,0,0,.26,0l.8-.46c.07,0,.06-.11,0-.15l-.77-.44A.28.28,0,0,0,63.12,155.48Z" />
                                                        <path class="cls-24"
                                                            d="M64.26,154.83l-.81.46c-.07,0-.06.11,0,.15l.77.45a.31.31,0,0,0,.25,0l.81-.47c.07,0,.06-.1,0-.15l-.77-.44A.25.25,0,0,0,64.26,154.83Z" />
                                                        <path class="cls-24"
                                                            d="M65.39,154.17l-.8.47c-.07,0-.06.1,0,.14l.77.45a.28.28,0,0,0,.25,0l.81-.47c.06,0,.06-.1,0-.14l-.77-.45A.3.3,0,0,0,65.39,154.17Z" />
                                                        <path class="cls-24"
                                                            d="M66.53,153.51l-.8.47c-.07,0-.06.1,0,.15l.77.44a.27.27,0,0,0,.26,0l.81-.46c.06,0,0-.11,0-.15l-.77-.45A.34.34,0,0,0,66.53,153.51Z" />
                                                        <path class="cls-24"
                                                            d="M54.85,160.26l-1.1.63c-.06,0,0,.1,0,.15l.77.44a.27.27,0,0,0,.26,0l1.1-.63c.06,0,.06-.11,0-.15l-.77-.44A.27.27,0,0,0,54.85,160.26Z" />
                                                        <path class="cls-24"
                                                            d="M62,156.14l-1.1.64c-.07,0-.06.1,0,.15l.77.44a.28.28,0,0,0,.25,0l1.1-.63c.07,0,.06-.11,0-.15l-.77-.45A.3.3,0,0,0,62,156.14Z" />
                                                        <path class="cls-24"
                                                            d="M60.55,157l-5.36,3.09c-.07,0-.06.11,0,.15l.77.45a.34.34,0,0,0,.26,0l5.36-3.1c.07,0,.06-.1,0-.15L60.8,157A.28.28,0,0,0,60.55,157Z" />
                                                        <path class="cls-24"
                                                            d="M55.36,162.52l-.81.47c-.06,0-.06.1,0,.14l.77.45a.3.3,0,0,0,.26,0l.8-.47c.07,0,.06-.1,0-.15l-.76-.44A.3.3,0,0,0,55.36,162.52Z" />
                                                        <path class="cls-24"
                                                            d="M56.5,161.86l-.81.47c-.06,0-.06.1,0,.15l.77.44a.3.3,0,0,0,.26,0l.8-.47c.07,0,.06-.1,0-.14l-.77-.45A.3.3,0,0,0,56.5,161.86Z" />
                                                        <path class="cls-24"
                                                            d="M57.64,161.2l-.81.47c-.06,0,0,.1,0,.15l.77.44a.3.3,0,0,0,.26,0l.8-.46c.07,0,.06-.11,0-.15l-.77-.45A.3.3,0,0,0,57.64,161.2Z" />
                                                        <path class="cls-24"
                                                            d="M58.78,160.54,58,161c-.06,0,0,.1,0,.15l.77.44a.27.27,0,0,0,.26,0l.8-.46c.07,0,.06-.11,0-.15l-.77-.44A.3.3,0,0,0,58.78,160.54Z" />
                                                        <path class="cls-24"
                                                            d="M59.92,159.89l-.81.46c-.06,0,0,.11,0,.15l.77.44a.27.27,0,0,0,.26,0l.8-.46c.07,0,.06-.11,0-.15l-.77-.44A.27.27,0,0,0,59.92,159.89Z" />
                                                        <path class="cls-24"
                                                            d="M61.06,159.23l-.81.46c-.06,0,0,.11,0,.15l.77.45a.34.34,0,0,0,.26,0l.8-.47c.07,0,.06-.1,0-.15l-.77-.44A.27.27,0,0,0,61.06,159.23Z" />
                                                        <path class="cls-24"
                                                            d="M62.2,158.57l-.81.47c-.06,0,0,.1,0,.14l.77.45a.3.3,0,0,0,.26,0l.81-.47c.06,0,0-.1,0-.15l-.77-.44A.3.3,0,0,0,62.2,158.57Z" />
                                                        <path class="cls-24"
                                                            d="M63.34,157.91l-.81.47c-.06,0-.05.1,0,.14l.77.45a.3.3,0,0,0,.26,0l.81-.47c.06,0,0-.1,0-.14l-.77-.45A.3.3,0,0,0,63.34,157.91Z" />
                                                        <path class="cls-24"
                                                            d="M64.48,157.25l-.81.47c-.06,0-.05.1,0,.15l.77.44a.3.3,0,0,0,.26,0l.81-.46c.06,0,0-.11,0-.15l-.77-.45A.3.3,0,0,0,64.48,157.25Z" />
                                                        <path class="cls-24"
                                                            d="M65.62,156.59l-.8.47c-.07,0-.06.1,0,.15l.77.44a.27.27,0,0,0,.26,0l.81-.46c.06,0,0-.11,0-.15l-.77-.44A.3.3,0,0,0,65.62,156.59Z" />
                                                        <path class="cls-24"
                                                            d="M66.76,155.94l-.8.46c-.07,0-.06.11,0,.15l.77.44a.27.27,0,0,0,.26,0l.81-.46c.06,0,0-.11,0-.15L67,156A.27.27,0,0,0,66.76,155.94Z" />
                                                        <path class="cls-24"
                                                            d="M67.9,155.28l-.8.46c-.07,0-.06.11,0,.15l.77.45a.34.34,0,0,0,.26,0l.81-.47c.06,0,0-.1,0-.15l-.77-.44A.27.27,0,0,0,67.9,155.28Z" />
                                                        <path class="cls-24"
                                                            d="M54.22,163.18l-1.67,1c-.07,0-.06.11,0,.15l.77.44a.27.27,0,0,0,.26,0l1.66-1c.07,0,.06-.1,0-.15l-.77-.44A.25.25,0,0,0,54.22,163.18Z" />
                                                        <path class="cls-24"
                                                            d="M53.69,162.21l-.81.46c-.07,0-.06.11,0,.15l.77.45a.31.31,0,0,0,.25,0l.81-.47c.07,0,.06-.1,0-.15l-.77-.44A.25.25,0,0,0,53.69,162.21Z" />
                                                        <path class="cls-24"
                                                            d="M54.83,161.55,54,162c-.07,0-.06.11,0,.15l.77.45a.28.28,0,0,0,.25,0l.81-.47c.07,0,.06-.1,0-.15l-.77-.44A.28.28,0,0,0,54.83,161.55Z" />
                                                        <path class="cls-24"
                                                            d="M56,160.89l-.81.47c-.07,0-.06.1,0,.14L56,162a.28.28,0,0,0,.25,0l.81-.47c.07,0,.06-.1,0-.14l-.77-.45A.28.28,0,0,0,56,160.89Z" />
                                                        <path class="cls-24"
                                                            d="M57.11,160.23l-.81.47c-.07,0-.06.1,0,.15l.77.44a.28.28,0,0,0,.25,0l.81-.46c.07,0,.06-.11,0-.15l-.77-.45A.28.28,0,0,0,57.11,160.23Z" />
                                                        <path class="cls-24"
                                                            d="M58.25,159.57l-.81.47c-.07,0-.06.1,0,.15l.77.44a.25.25,0,0,0,.25,0l.81-.46c.07,0,.06-.11,0-.15l-.77-.44A.28.28,0,0,0,58.25,159.57Z" />
                                                        <path class="cls-24"
                                                            d="M59.39,158.92l-.81.46c-.07,0-.06.11,0,.15l.77.44a.28.28,0,0,0,.25,0l.81-.47c.07,0,.06-.1,0-.15l-.77-.44A.25.25,0,0,0,59.39,158.92Z" />
                                                        <path class="cls-24"
                                                            d="M60.53,158.26l-.81.46c-.07,0-.06.11,0,.15l.77.45a.34.34,0,0,0,.26,0l.8-.47c.07,0,.06-.1,0-.15l-.77-.44A.25.25,0,0,0,60.53,158.26Z" />
                                                        <path class="cls-24"
                                                            d="M61.67,157.6l-.81.47c-.07,0-.06.1,0,.14l.77.45a.3.3,0,0,0,.26,0l.8-.47c.07,0,.06-.1,0-.15l-.77-.44A.28.28,0,0,0,61.67,157.6Z" />
                                                        <path class="cls-24"
                                                            d="M62.81,156.94l-.81.47c-.07,0-.06.1,0,.15l.77.44a.3.3,0,0,0,.26,0l.8-.47c.07,0,.06-.1,0-.14l-.77-.45A.28.28,0,0,0,62.81,156.94Z" />
                                                        <path class="cls-24"
                                                            d="M64,156.28l-.81.47c-.07,0-.06.1,0,.15l.77.44a.27.27,0,0,0,.26,0l.8-.46c.07,0,.06-.11,0-.15l-.77-.45A.31.31,0,0,0,64,156.28Z" />
                                                        <path class="cls-24"
                                                            d="M65.09,155.63l-.81.46c-.06,0-.06.11,0,.15l.77.44a.27.27,0,0,0,.26,0l.8-.46c.07,0,.06-.11,0-.15l-.77-.44A.25.25,0,0,0,65.09,155.63Z" />
                                                        <path class="cls-24"
                                                            d="M67.64,154.15l-2.22,1.28c-.06,0-.06.11,0,.15l.77.44a.3.3,0,0,0,.26,0l2.21-1.28c.07,0,.06-.11,0-.15l-.76-.45A.3.3,0,0,0,67.64,154.15Z" />
                                                        <path class="cls-24"
                                                            d="M52.55,162.87l-1.1.63c-.07,0-.06.11,0,.15l.77.44a.27.27,0,0,0,.26,0l1.1-.63c.07,0,.06-.11,0-.15l-.77-.44A.25.25,0,0,0,52.55,162.87Z" />
                                                        <path class="cls-24"
                                                            d="M72.1,156.73l-16.19,9.35c-.06,0-.06.1,0,.15l.38.22a.3.3,0,0,0,.26,0l16.19-9.35c.07,0,.06-.1,0-.15l-.38-.22A.3.3,0,0,0,72.1,156.73Z" />
                                                        <polygon id="_Контур_18" data-name="&lt;Контур&gt;" class="cls-25"
                                                            points="53.16 157.15 53.26 157.21 56.06 158.82 61.03 155.95 61.14 155.89 58.23 154.22 53.16 157.15" />
                                                        <polygon id="_Контур_19" data-name="&lt;Контур&gt;" class="cls-26"
                                                            points="53.26 157.21 56.06 158.82 61.03 155.95 58.23 154.34 53.26 157.21" />
                                                        <path id="_Контур_20" data-name="&lt;Контур&gt;" class="cls-26"
                                                            d="M45.18,160.92v.25a1,1,0,0,0,.51.88l9.86,5.69a.94.94,0,0,0,.51.14,1,1,0,0,0,.51-.14l17.84-10.3a1,1,0,0,0,.51-.88v-.25L56.06,167.2Z" />
                                                        <path id="_Контур_21" data-name="&lt;Контур&gt;" class="cls-20"
                                                            d="M56.35,167.35a1.19,1.19,0,0,0,1-.08L75.15,157a1.19,1.19,0,0,0,.59-.84l2-11.6a1.34,1.34,0,0,0,0-.2,1.21,1.21,0,0,0-.35-.86L58.88,154.17a.91.91,0,0,0-.43.63Z" />
                                                        <path id="_Контур_22" data-name="&lt;Контур&gt;" class="cls-26"
                                                            d="M56.06,167.2l.12.07.17.08,2.1-12.55a.91.91,0,0,1,.43-.63l18.47-10.66a1.44,1.44,0,0,0-.25-.18L58.6,154a.87.87,0,0,0-.43.62Z" />
                                                    </g>
                                                </g>
                                                <path id="_Контур_23" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M42.65,117.56s.23,4.42.13,4.81-2,1.68-2.59,2.15,3.05,4,4.81,4.83,7.32-1.32,7.42-4-1-5-1.81-5.15S42.65,117.56,42.65,117.56Z" />
                                                <path id="_Контур_24" data-name="&lt;Контур&gt;" class="cls-20"
                                                    d="M42.16,123.13s3.2,4.77,7.67,5.22c1.41-1.39,1.53-6.33-.42-7.91,0,0,1.8-1.44,3-1.16a6.3,6.3,0,0,1,2.76,3.52A28.75,28.75,0,0,1,56.77,133c-.08,4.68,0,16.52,0,16.52a10.08,10.08,0,0,1-4.71,6.78,14.53,14.53,0,0,1-10.6,1.46,5.28,5.28,0,0,1-3.89-3.43c.21-3.29,1.51-10,1-14.17s-1.42-7.21-1.65-10.54.44-3.27,2.12-4.46A26.59,26.59,0,0,1,42.16,123.13Z" />
                                                <path id="_Контур_25" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M47.29,161.17a22.45,22.45,0,0,0-2.51-1.44,5.21,5.21,0,0,1-2.14-1.3c-.79-.77-2.07-3.68-3-6.52a28.75,28.75,0,0,1-1.08-9.85c.39-4,1.82-9.55,2.18-11.84s-.37-3.2-1.44-4c-1.25-1-3-.55-3.9,2.66a62.12,62.12,0,0,0-2,13.59,31.11,31.11,0,0,0,1.55,10,36.4,36.4,0,0,0,3.83,7.89c.44.74.58,1.39,1.25,2.9a10.21,10.21,0,0,0,2.93,3.9c1.13.81,1.66.92,1.92.77s.26-.56-.21-1a8.48,8.48,0,0,1-2-2.25s1,1,1.63,1.53a8.41,8.41,0,0,0,1.87,1.19c.66.29,1.57-.27,1.1-.71s-.94-.66-1.87-1.47A7.7,7.7,0,0,1,44,163.8a16.32,16.32,0,0,0,2.08,1.35,3.54,3.54,0,0,0,1.89.51c.35,0,.77-.5.12-1A12.81,12.81,0,0,1,45.64,163c-.72-.72-1.12-1.32-.92-1.33s.59.43,1.43.7,1.74,0,1.85-.44S48.08,161.56,47.29,161.17Z" />
                                                <path id="_Контур_26" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M52.64,111h0c-.53-3.43-3-6-6.53-5.83a6.81,6.81,0,0,0-6.43,7.18,6.73,6.73,0,0,0,3,5.22,6.6,6.6,0,0,0,.55,1.5c1.24,1.46,5,2.37,6.11,2.21a3.23,3.23,0,0,0,2.81-2.3C53.3,116.28,52.93,112.68,52.64,111Z" />
                                                <path class="cls-24"
                                                    d="M42.65,117.56h0l.32-3s-2.44-6.32,3.33-5.1c3.81.8,4.77,1.14,5.93-1.41s-2.93-4.86-7.79-4.22a6.71,6.71,0,0,0-6,6.81C38.57,112.53,39.07,116.34,42.65,117.56Z" />
                                                <path class="cls-23"
                                                    d="M32.77,134.72s3.15,3.13,6.88,2.23c.53-.36,1.81-7.68,1.81-7.68s0-4.06-3.11-4S32.77,134.72,32.77,134.72Z" />
                                                <path class="cls-23"
                                                    d="M56.55,128.65a3.48,3.48,0,0,0,2.33-1c-.13-1.64-2.23-7.87-6.45-8.33a7.73,7.73,0,0,1,2.64,3.18A41,41,0,0,1,56.55,128.65Z" />
                                            </g>
                                            <g id="Girl_8">
                                                <ellipse class="cls-6" cx="455.85" cy="360.19" rx="22.69"
                                                    ry="13.1" />
                                                <path id="_Контур_27" data-name="&lt;Контур&gt;" class="cls-24"
                                                    d="M454.85,237.69c.91-1.46,7.86-2.42,10.15,3.47.86,2.23.73,7.94,1.46,11.52s2.43,5.62,3,8.53-.38,7.78-7.39,8.65-12.4-1.6-14.06-3.84-1.69-7,0-9.53,3-4.63,3-8Z" />
                                                <path class="cls-19"
                                                    d="M446.53,262.33S444.88,274,448,282.21s2.25-2.13,2.25-2.13l-.75-2.46s-.62-9.5-.36-11.83.2-4.33.36-4.52-.61-.56-.94-.61S446.53,262.33,446.53,262.33Z" />
                                                <path id="_Контур_28" data-name="&lt;Контур&gt;" class="cls-24"
                                                    d="M459.44,236.68s-5.23-1.51-8.4,1.32a7.77,7.77,0,0,0-2.24,7.75c.42,1.65,1.27,3.91,2.58,4S459.44,236.68,459.44,236.68Z" />
                                                <path id="_Контур_29" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M461.44,251s-.34,5.83-.23,6.26,2.28.84,2.9,1.35-3.17,6.42-5.1,7.3-7.88-1.36-8.29-4.33c-.38-2.72,1.7-4.84,2.51-5.58a12.41,12.41,0,0,1,1.64,0l.17-2.82C457.65,252.25,461.44,251,461.44,251Z" />
                                                <path id="_Контур_30" data-name="&lt;Контур&gt;" class="cls-20"
                                                    d="M462.24,257.77c1.64.26,3.51,1.13,3.77,2a19.33,19.33,0,0,1-.47,9.73c-1.42,3.75-2.37,6.14-3.19,7.76,0,0-7.09,3-12.8-.51,0,0-.4-4-.42-6.17-5.28-4.6-.77-10.28,3.7-14.69a10.85,10.85,0,0,1,1.61,0s-4,4.72-1.21,7.4C459.16,261.5,460.34,258.84,462.24,257.77Z" />
                                                <path id="_Контур_31" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M450.55,243.72h0c.59-3.75,3.29-6.58,7.16-6.35A7.43,7.43,0,0,1,461.44,251a7.54,7.54,0,0,1-.59,1.63c-1.37,1.6-5,2.61-6.21,2.62-1,0-1.93-.95-2.9-2.56C449.71,249.29,450.23,245.57,450.55,243.72Z" />
                                                <path class="cls-24"
                                                    d="M458.9,237.44c2.71.53,4.94,1.29,5.68,3.95.5,1.84,1.16,5.33.53,6.8l-.38,1.07L461.44,251s-1.53-1.28-1.05-5a2.8,2.8,0,0,0-.46-1.42,4.12,4.12,0,0,1-.46-1.13,4.25,4.25,0,0,0-2.12-2.3c-2.45-1.37-6-.19-6.52.31A7.11,7.11,0,0,1,458.9,237.44Z" />
                                                <path id="_Контур_32" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M466.2,285c.61-3.8,1.75-6.26,1.22-8.35a75.85,75.85,0,0,0-4.62-12.3c-1.2-2.36-.83-4,.41-4.94,1.4-1,2.73-.59,4,2,1.59,3.29,3.37,6.67,4.24,11.57a25.78,25.78,0,0,1-.12,9.57c-.54,3.41-1.62,5.33-2.91,8.53C468.06,292,465.68,288.24,466.2,285Z" />
                                                <path class="cls-27"
                                                    d="M463.83,355.83c-1.37,1.11-3.51.34-3.61.44a55.48,55.48,0,0,1-5,3.84c-.86.67-2.19,1.57-1.95,2.87.43,2.31,4.13,1.6,5.53.89s2.53-1.88,3.85-2.7c.95-.59,1.87-.89,2-2.08C464.74,358.37,464.07,355.8,463.83,355.83Z" />
                                                <path class="cls-28"
                                                    d="M464.63,358.61c-.18,1.14-1.09,1.46-2,2-1.34.83-2.52,2-3.92,2.74s-4.51,1.3-5.41-.35c.49,2.23,4.13,1.53,5.51.83s2.53-1.88,3.85-2.7c.95-.59,1.87-.89,2-2.08A2.88,2.88,0,0,0,464.63,358.61Z" />
                                                <path class="cls-27"
                                                    d="M454.2,353.9c-1.25,1-3.15.45-3.24.55a52.4,52.4,0,0,1-4.59,3.5c-.79.61-2,1.44-1.79,2.62.4,2.12,3.79,1.47,5.07.82s2.32-1.72,3.53-2.47c.86-.54,1.71-.82,1.85-1.91C455.11,356.35,454.43,353.88,454.2,353.9Z" />
                                                <path class="cls-28"
                                                    d="M455,356.57c-.17,1.05-1,1.33-1.86,1.87-1.23.76-2.31,1.86-3.59,2.51s-4.13,1.19-5-.32c.45,2,3.78,1.4,5,.76s2.32-1.72,3.53-2.47c.86-.54,1.71-.82,1.85-1.91A2.41,2.41,0,0,0,455,356.57Z" />
                                                <path class="cls-19"
                                                    d="M446.81,290.1c.61-4.73,2.35-11.6,2.35-11.6a14,14,0,0,0,5.25,1.31,43.54,43.54,0,0,0,7.93-.78,47.67,47.67,0,0,0,2.8,4.33c1.36,1.89,4,6,3.37,13.29-.41,4.73-3.07,24.84-3.07,24.84a37.47,37.47,0,0,1,1.63,10.43,84,84,0,0,1-1.66,12.49l-1.58,11.42s-2.11,1.52-3.61.44l.19-11.17c-.18-2.73-.45-6.76-.63-9.34-.28-4.19-1-10.85-1.25-12.52s-.75-4.57-1-7.83-1.48-19.8-1.48-19.8l-.17,3.1s-.17,5-.89,11.24-1,9-1,9a13.34,13.34,0,0,1,1.42,4c.13,1.34,1.66,12,.74,17.36L454.29,354a3.61,3.61,0,0,1-3.25.43l-1.11-13.84c-.74-5.27-2.31-16.43-2.55-17.88a59.48,59.48,0,0,1-.94-8.85C446.07,307.87,446.21,294.83,446.81,290.1Z" />
                                                <path class="cls-10"
                                                    d="M462.35,277.29l4.07,8.18s6.22,9.1-.22,32.48l1.21,7.21s-12.19,7.83-20.35,0c0,0-2.83-21.61-1.32-31.57a113.26,113.26,0,0,1,3.8-16.93s2,2.21,12.27.75" />
                                                <path class="cls-23"
                                                    d="M469.66,266.05s-2.83,2.82-6.19,2.47L461.86,263s-1-2.87,1.4-4.13S468.25,260.43,469.66,266.05Z" />
                                                <path class="cls-23"
                                                    d="M452.83,255.92s-3.24-1-6.67,6.19l1.28.77A54.66,54.66,0,0,1,452.83,255.92Z" />
                                            </g>
                                            <g id="Girl_4">
                                                <ellipse class="cls-6" cx="85.39" cy="486.9" rx="22.69"
                                                    ry="13.1" />
                                                <path id="_Контур_33" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M98.48,386.23c2,.57,3.12,2.76,4.86,7.45a39.25,39.25,0,0,1,2.09,13.22c-.56,4.42-2.39,7.86-6.81,11.44l-2.11-3.87s4.33-3.82,4.77-8.24c.25-2.48-2.66-10.84-2.66-11.07S98.48,386.23,98.48,386.23Z" />
                                                <path class="cls-27"
                                                    d="M81.17,488.09a4.85,4.85,0,0,1-4-.54c-1.08,0-7.43-2.49-8.23-.38-.7,1.85,1.85,3.57,3.2,3.9,3,.71,5.16,2.19,6.36,2.44a3,3,0,0,0,2.74-.38C82.07,492.29,82,489.19,81.17,488.09Z" />
                                                <path class="cls-28"
                                                    d="M78.48,493c-1.2-.25-3.39-1.73-6.36-2.45-1.13-.27-3.1-1.52-3.29-3-.27,1.7,2,3.21,3.29,3.52,3,.71,5.16,2.19,6.36,2.44a3,3,0,0,0,2.74-.38,1.91,1.91,0,0,0,.39-.71A3.56,3.56,0,0,1,78.48,493Z" />
                                                <path class="cls-27"
                                                    d="M97.29,479.71a3.81,3.81,0,0,1-3.49-.53c-1,0-7.53-2.38-8.3-.35-.67,1.78,1.78,3.42,3.08,3.74,2.86.69,5,2.12,6.12,2.36a2.9,2.9,0,0,0,2.64-.37C98.16,483.75,98.09,480.77,97.29,479.71Z" />
                                                <path class="cls-28"
                                                    d="M94.7,484.44c-1.15-.25-3.26-1.67-6.12-2.36-1.09-.27-3-1.47-3.17-2.9-.25,1.64,2,3.1,3.17,3.39,2.86.69,5,2.12,6.12,2.36a2.9,2.9,0,0,0,2.64-.37,1.67,1.67,0,0,0,.37-.69A3.4,3.4,0,0,1,94.7,484.44Z" />
                                                <path id="_Контур_34" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M99.42,463.6a21.09,21.09,0,0,0-1.24-7.15s.82-9.79,1.45-16.22c.92-9.48,2.38-10.42,2-16.18-.38-5.34-3.42-8.8-4.21-12.42l-15.47,1.22s-1.35,4.39-3.09,13.13S77,445.11,77.14,458.87c0,3.55-.6,6.63-.4,15.47.14,5.94.48,13.22.48,13.22,2.26,1.94,3.83.51,3.83.51s4-17.6,4.55-21.64a12.73,12.73,0,0,0-.54-6.68s1.16-5.53,2-9.88c1-5.31,3.65-16.77,3.65-16.77s-.45,17.61.32,21.08.9,6.49,1.56,11.21c.79,5.7,1.15,14.05,1.15,14.05,2.36,1.5,3.41.35,3.41.35S99.42,468.59,99.42,463.6Z" />
                                                <path class="cls-10"
                                                    d="M97.38,411.63c1.62,1.66,4.3,6.71,4.3,14.35,0,8.6-1.25,6.86-1.85,16.33l-.6,9.47s-12.93,6.17-22.15.45c-.82-1.79.31-21.71,1.93-28.79s2.73-10.55,2.73-10.55S93.63,416.1,97.38,411.63Z" />
                                                <path id="_Контур_35" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M97.57,386.14c-3.3-.2-3.62.35-3.88-.82-.09-.42-.28-3.32-.28-3.32a10.61,10.61,0,0,0,.83-1.22,8.37,8.37,0,0,0,4-6.29,8.47,8.47,0,0,0-7.54-9.3c-4.37-.45-7.59,2.62-8.45,6.84-.46,2.08-.94,6.33.36,9.74.73,1.93,1.41,3.28,3.15,3.21a10.47,10.47,0,0,0,1.72-.3,16.18,16.18,0,0,1,.1,2.41c0,.85.1,1.27-1.56,2.29s2.5,3.1,5.21,2.9,5.75-1.84,6.59-3.59C98.74,386.73,99.12,386.23,97.57,386.14Z" />
                                                <path class="cls-23"
                                                    d="M100,400.75s3.73-.84,5.44-2.5c0,0-2.22-7-3.64-8.74S99,399,99,399Z" />
                                                <path id="_Контур_36" data-name="&lt;Контур&gt;" class="cls-20"
                                                    d="M94.29,386.07c.61.76.68,1.71-1.67,2.31a7.44,7.44,0,0,1-5.15-.4,34.52,34.52,0,0,0-5.32,2.82c-2,6.6-.39,7.45-1.23,12.18.33,2.38.72,8.52.82,9.91,4.49,3.14,13.6,2.07,15.64-1.26a27.55,27.55,0,0,1,.31-3.31c2.14-7.94,3.81-10,3.22-16-.34-3.42-.61-5.14-2.43-6.06A16.1,16.1,0,0,0,94.29,386.07Z" />
                                                <path id="_Контур_37" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M53.07,411.89a23.07,23.07,0,0,1,3,.86,10,10,0,0,0,2.93,1c1.1.17,2.82-.4,5.79-1.8a32,32,0,0,0,8.7-6.54,75.44,75.44,0,0,0,7.6-10.85c1.29-2.35,2.92-2.94,4.34-2.48,1.7.56,1.91,2.25,0,5.41a60.5,60.5,0,0,1-8.7,11.39,32.63,32.63,0,0,1-9.07,6.4,27.87,27.87,0,0,1-7.63,2.65c-.93.2-1.56.59-3.28,1.19a11.36,11.36,0,0,1-5.35.59c-1.49-.29-2-.63-2.06-1s.24-.63.94-.58a9.18,9.18,0,0,0,3.32-.08s-1.54-.05-2.45-.16a8.86,8.86,0,0,1-2.38-.6c-.73-.31-1-1.46-.26-1.42s1.24.26,2.6.4a9,9,0,0,0,2.16,0,16.91,16.91,0,0,1-2.65-.66,3.76,3.76,0,0,1-1.85-1.14c-.25-.29-.18-1,.69-.82a13.89,13.89,0,0,0,3.24.71c1.11,0,1.9-.09,1.76-.26s-.8-.15-1.64-.62-1.34-1.38-1-1.82S52.16,411.55,53.07,411.89Z" />
                                                <path class="cls-23"
                                                    d="M83.64,401.31a12,12,0,0,1-6.84-3.47l4.14-5.74s2.33-2.94,5.41-1.28c0,0,2.32.25,0,5.11A47.84,47.84,0,0,1,83.64,401.31Z" />
                                                <path class="cls-24"
                                                    d="M81.45,369.54a3.83,3.83,0,0,1,4.32-3.16,7.31,7.31,0,0,1,4.92-1.19c3.93.41,6.5,3,7.69,6.9a30.94,30.94,0,0,1,1.16,6c1.18,8.75,4.36,15.69,1.39,18.29S89.82,400.63,86.42,399s2.8-16.71-3.93-25.09C80.91,371.92,80.76,370.53,81.45,369.54Z" />
                                            </g>
                                            <g id="Men_13">
                                                <ellipse class="cls-6" cx="22.69" cy="454.91" rx="22.69"
                                                    ry="13.1" />
                                                <path class="cls-18"
                                                    d="M12,451.62c1.55,1.26,3.83.11,3.94.23a72.22,72.22,0,0,0,5.71,4.75c1,.76,2.47,1.77,2.19,3.23-.48,2.6-4.65,1.8-6.23,1s-2.86-2.11-4.35-3c-1.06-.66-2.1-1-2.27-2.34C10.85,454.64,11.69,451.59,12,451.62Z" />
                                                <path class="cls-21"
                                                    d="M11,454.91c.21,1.28,1.24,1.64,2.29,2.29,1.52.94,2.85,2.3,4.42,3.09s5.08,1.47,6.1-.39c-.55,2.51-4.65,1.72-6.21.93s-2.86-2.11-4.35-3c-1.06-.66-2.1-1-2.27-2.34A3.6,3.6,0,0,1,11,454.91Z" />
                                                <path class="cls-18"
                                                    d="M25.38,446.63c1.55,1.26,4.25-.11,4.37,0a60,60,0,0,0,5.09,4.61c1,.75,2.47,1.77,2.2,3.23-.49,2.6-4.66,1.8-6.23,1s-2.86-2.12-4.35-3c-1.06-.66-2.11-1-2.27-2.34C24.09,449.28,25.11,446.6,25.38,446.63Z" />
                                                <path class="cls-21"
                                                    d="M24.23,449.73c.21,1.28,1.24,1.64,2.29,2.29,1.52.94,2.85,2.3,4.42,3.1s5.08,1.46,6.1-.4c-.55,2.51-4.65,1.73-6.21.94s-2.85-2.12-4.34-3.05c-1.07-.66-2.11-1-2.28-2.34A3.6,3.6,0,0,1,24.23,449.73Z" />
                                                <path id="_Контур_38" data-name="&lt;Контур&gt;" class="cls-22"
                                                    d="M11.87,394.54c.08,2.34.8,12.5,1.13,17.87s.4,12,.4,12-.93,3.91-1.53,8.52,0,19.13,0,19.13a3.67,3.67,0,0,0,4,0s2.48-11.63,3.62-16.87,1.35-8.26,1.94-11.5c.72-3.93,2.27-22.26,2.27-22.26l.62,0,1.66,20.69a23.16,23.16,0,0,0-1.05,4.7c-.45,3.37.48,20.33.48,20.33a4.1,4.1,0,0,0,4.28-.18s4.13-22.46,4.13-25.87c0-2.27-.38-32.07-.38-32.07Z" />
                                                <path id="_Контур_39" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M17.48,349.35s.26,5.1.15,5.55-2.34,1.94-3,2.48S18.16,362,20.19,363s8.46-1.52,8.57-4.68-1.1-5.81-2.08-5.95S17.48,349.35,17.48,349.35Z" />
                                                <path class="cls-19"
                                                    d="M31.44,358.81c.3-2.25-1.18-4.39.25-6.18,5,4.94,4.4,18,5.54,26.35,3.74,3.9,11.25,7.75,13.36,8.7.38.18.72.37.64.78a9.26,9.26,0,0,1-1.75,3.82c-5-2.14-8.55-3.37-14.76-9.27a13.59,13.59,0,0,1-1.57-2.07C31.38,375.62,30.93,362.69,31.44,358.81Z" />
                                                <path id="_Контур_40" data-name="&lt;Контур&gt;" class="cls-20"
                                                    d="M16.91,355.78s3.7,5.51,8.86,6c1.63-1.6,1.77-7.31-.48-9.14,0,0,2.07-1.67,3.49-1.35A7.35,7.35,0,0,1,32,355.39a33.52,33.52,0,0,1,1.82,11.8c-.09,5.41,0,21.94,0,21.94s-.72,3.49-5.39,6.09-8.14,2.86-11.31,2.12c-2.61-.61-4.77-1.53-5.67-3.42.24-3.8,1.93-13.69,1.3-18.46s-1.64-8.32-1.9-12.18.5-3.78,2.44-5.15A29.62,29.62,0,0,1,16.91,355.78Z" />
                                                <path id="_Контур_41" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M29,341.75h0c-.61-4-3.46-7-7.55-6.73a7.85,7.85,0,0,0-4,14.33,7.82,7.82,0,0,0,.63,1.73c1.44,1.69,5.81,2.73,7.06,2.55A3.74,3.74,0,0,0,28.42,351C29.78,347.86,29.35,343.7,29,341.75Z" />
                                                <path class="cls-18"
                                                    d="M17.48,349.35h0l.37-3.46S15,338.59,21.7,340c4.4.93,5.5,1.33,6.84-1.62s-3.38-5.61-9-4.87a7.75,7.75,0,0,0-6.94,7.86C12.76,343.53,13.34,347.93,17.48,349.35Z" />
                                                <path class="cls-19"
                                                    d="M9.67,361c1.93-.55.46-.1,1.93-.55,5,4.93,4.41,13.39,5.55,21.74C19.93,386.8,30.24,393,30.24,393c.13.89-.18,1.15-1.3,3a44.43,44.43,0,0,1-15.33-9.89c-.25-.23-.61-.3-.71-.61C11.13,380.14,9.16,364.89,9.67,361Z" />
                                                <polygon class="cls-20"
                                                    points="55.55 371.31 48.06 396.93 31.61 403.5 37.61 378.54 55.55 371.31" />
                                                <path class="cls-19"
                                                    d="M27.65,393.21c.24-.88.87-.66,1.59-.44a4.13,4.13,0,0,0,2.43.21,7.52,7.52,0,0,0,1.74-1.18,2.15,2.15,0,0,1,1.1-.31c0,.22-.38,1.52-.38,1.52s3.61,0,4,0a.61.61,0,0,1,.57,1l.25,0c.73-.16,1,1,.31,1.14l-.6.09c.48.19.6,1,0,1.1l-.19,0a.78.78,0,0,1-.26,0H38a.63.63,0,0,1-.54.76c-1.76.23-4.35.93-5.94-.52a9.88,9.88,0,0,1-3.19-.86C27.38,395.24,27.35,394.25,27.65,393.21Z" />
                                                <path class="cls-19"
                                                    d="M45.63,391.11l.25,0a.6.6,0,0,1,.35-1.09c.37,0,4.08-.78,4.08-.78l.45-1.52c0-.09.64.3.66.32a2.46,2.46,0,0,1,1.12,1.85,4,4,0,0,1-1.07,2.87A3.66,3.66,0,0,1,49,393.82c-.45,0-.88.05-1.27.09a.65.65,0,0,1-.69-.64l-.12,0a.47.47,0,0,1-.26,0h-.19c-.63,0-.68-.78-.25-1.06l-.61,0C44.81,392.28,44.88,391.1,45.63,391.11Z" />
                                                <path class="cls-23"
                                                    d="M33.54,362.15a4,4,0,0,0,2.68-1.2c-.14-1.9-2.56-9.09-7.44-9.63a9.09,9.09,0,0,1,3,3.68A48.52,48.52,0,0,1,33.54,362.15Z" />
                                                <path class="cls-23"
                                                    d="M8.79,371.65s4.85,1.68,8.27-1.14c.38-.64-2-8.9-2-8.9s-2-4.22-5.22-2.54S8.79,371.65,8.79,371.65Z" />
                                            </g>
                                            <g id="Men_12">
                                                <path id="_Контур_42" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M304.31,86.43a39.89,39.89,0,0,1-5.7,7.75c-.62.72-5.35-1.09-4.36-1.6s4.09-4.84,5.65-7.72a95.18,95.18,0,0,0,3.31-10.53c1-3.53,1.82-8.71,2.53-11.15a4.76,4.76,0,0,1,3.63-3.69c1.7-.39,2.81.07,2.5,2.14C311.32,65.25,308.49,79.31,304.31,86.43Z" />
                                                <path class="cls-27"
                                                    d="M307,141.53c-1.46,1.19-3.63.1-3.74.21a63.19,63.19,0,0,1-5.42,4.51c-.92.72-2.34,1.69-2.09,3.07.47,2.48,4.43,1.72,5.92,1s2.72-2,4.13-2.89c1-.63,2-.95,2.16-2.23C308.08,144.39,307.28,141.5,307,141.53Z" />
                                                <path class="cls-28"
                                                    d="M308,144.65c-.19,1.22-1.17,1.55-2.17,2.18-1.44.89-2.71,2.18-4.2,2.93s-4.83,1.4-5.8-.37c.53,2.39,4.42,1.64,5.9.89s2.72-2,4.13-2.89c1-.63,2-.95,2.16-2.23A1.84,1.84,0,0,0,308,144.65Z" />
                                                <path class="cls-27"
                                                    d="M292.13,133c-1.47,1.19-4-.11-4.15,0a58.9,58.9,0,0,1-4.84,4.37c-.92.72-2.35,1.68-2.09,3.07.46,2.47,4.43,1.71,5.92,1s2.72-2,4.13-2.89c1-.62,2-.95,2.16-2.22C293.36,135.46,292.39,132.92,292.13,133Z" />
                                                <path class="cls-28"
                                                    d="M293.22,135.89c-.2,1.22-1.18,1.55-2.18,2.18-1.44.89-2.7,2.18-4.2,2.93s-4.82,1.4-5.79-.37c.52,2.39,4.42,1.64,5.9.89s2.71-2,4.13-2.89c1-.63,2-.95,2.16-2.23A3.23,3.23,0,0,0,293.22,135.89Z" />
                                                <path id="_Контур_43" data-name="&lt;Контур&gt;" class="cls-10"
                                                    d="M326.66,94.45c1.63,10.17-2.89,14-8.76,16.13-4.21,1.55-10.26,3.94-10.26,3.94s.09,2.23.13,7.24c.05,4.41-.54,20.52-.54,20.52a4.9,4.9,0,0,1-4.49-.05s-2.37-12.34-2.87-17.9c-.68-7.55-1.84-12.49-1.46-14.11.34-1.43,8.59-5.49,11.21-7.66l-17.28,5.79a30.79,30.79,0,0,1,.5,5.68c-.16,6-.49,18.95-.49,18.95s-2.37,1.71-4.39,0c0,0-4.35-25.65-3.82-29,.5-3.22,15.73-9.81,18.41-12.08a4.3,4.3,0,0,1,3.38-.91Z" />
                                                <g id="_Группа_5" data-name="&lt;Группа&gt;">
                                                    <g id="_Группа_6" data-name="&lt;Группа&gt;">
                                                        <path id="_Контур_44" data-name="&lt;Контур&gt;" class="cls-20"
                                                            d="M285.23,98.68,296.84,92a.67.67,0,0,1,.67,0l20.36,11.76-11.94,6.9Z" />
                                                        <path class="cls-24"
                                                            d="M306.47,108.17l.89.51c.07,0,.06.12,0,.16l-.85.49a.28.28,0,0,1-.28,0l-.88-.51c-.08,0-.07-.11,0-.16l.84-.49A.31.31,0,0,1,306.47,108.17Z" />
                                                        <path class="cls-24"
                                                            d="M305.22,107.45l.88.51c.08,0,.07.11,0,.16l-.84.49a.31.31,0,0,1-.28,0l-.89-.51c-.07,0-.06-.11,0-.16l.85-.49A.31.31,0,0,1,305.22,107.45Z" />
                                                        <path class="cls-24"
                                                            d="M304,106.72l.89.51c.07,0,.06.11,0,.16l-.85.49a.31.31,0,0,1-.28,0l-.88-.51c-.08,0-.07-.12,0-.16l.84-.49A.28.28,0,0,1,304,106.72Z" />
                                                        <path class="cls-24"
                                                            d="M302.71,106l.89.51c.07,0,.06.12,0,.16l-.85.49a.28.28,0,0,1-.28,0l-.88-.51c-.07,0-.07-.11,0-.16l.84-.49A.31.31,0,0,1,302.71,106Z" />
                                                        <path class="cls-24"
                                                            d="M301.46,105.28l.89.51c.07,0,.06.11,0,.16l-.85.49a.31.31,0,0,1-.28,0l-.89-.51c-.07,0-.06-.11,0-.16l.85-.49A.31.31,0,0,1,301.46,105.28Z" />
                                                        <path class="cls-24"
                                                            d="M300.21,104.55l.88.52c.08,0,.07.11,0,.16l-.84.49a.34.34,0,0,1-.28,0l-.89-.51c-.07,0-.06-.12,0-.17l.85-.48A.31.31,0,0,1,300.21,104.55Z" />
                                                        <path class="cls-24"
                                                            d="M299,103.83l.88.51c.07,0,.06.12,0,.16L299,105a.3.3,0,0,1-.29,0l-.88-.51c-.07,0-.06-.11,0-.16l.84-.49A.33.33,0,0,1,299,103.83Z" />
                                                        <path class="cls-24"
                                                            d="M297.7,103.11l.89.51c.07,0,.06.11,0,.16l-.85.49a.31.31,0,0,1-.28,0l-.88-.51c-.08,0-.07-.11,0-.16l.84-.49A.31.31,0,0,1,297.7,103.11Z" />
                                                        <path class="cls-24"
                                                            d="M296.45,102.38l.88.52c.08,0,.07.11,0,.16l-.84.49a.34.34,0,0,1-.28,0l-.89-.51c-.07,0-.06-.12,0-.17l.85-.48A.31.31,0,0,1,296.45,102.38Z" />
                                                        <path class="cls-24"
                                                            d="M295.2,101.66l.88.51c.07,0,.07.12,0,.16l-.84.49a.28.28,0,0,1-.28,0l-.89-.51c-.07,0-.06-.11,0-.16l.85-.49A.31.31,0,0,1,295.2,101.66Z" />
                                                        <path class="cls-24"
                                                            d="M293.94,100.94l.89.51c.07,0,.06.11,0,.16l-.85.49a.31.31,0,0,1-.28,0l-.88-.51c-.07,0-.07-.11,0-.16l.84-.49A.31.31,0,0,1,293.94,100.94Z" />
                                                        <path class="cls-24"
                                                            d="M292.69,100.21l.89.52c.07,0,.06.11,0,.16l-.85.49a.34.34,0,0,1-.28,0l-.89-.51c-.07,0-.06-.12,0-.17l.84-.48A.31.31,0,0,1,292.69,100.21Z" />
                                                        <path class="cls-24"
                                                            d="M291.44,99.49l.88.51c.08,0,.07.12,0,.16l-.84.49a.28.28,0,0,1-.28,0l-.89-.51c-.07,0-.06-.11,0-.16l.85-.49A.31.31,0,0,1,291.44,99.49Z" />
                                                        <path class="cls-24"
                                                            d="M289.58,98.42l1.49.86c.07,0,.06.11,0,.16l-.84.49a.33.33,0,0,1-.29,0l-1.48-.86c-.08,0-.07-.11,0-.16l.84-.49A.31.31,0,0,1,289.58,98.42Z" />
                                                        <path class="cls-24"
                                                            d="M305.83,106.4l.88.51c.08,0,.07.11,0,.16l-.84.49a.31.31,0,0,1-.28,0l-.89-.51c-.07,0-.06-.12,0-.16l.85-.49A.31.31,0,0,1,305.83,106.4Z" />
                                                        <path class="cls-24"
                                                            d="M304.57,105.67l.89.51c.07,0,.06.12,0,.17l-.85.48a.31.31,0,0,1-.28,0l-.88-.52c-.08,0-.07-.11,0-.16l.84-.49A.34.34,0,0,1,304.57,105.67Z" />
                                                        <path class="cls-24"
                                                            d="M303.32,105l.88.51c.08,0,.07.11,0,.16l-.84.49a.31.31,0,0,1-.28,0l-.89-.51c-.07,0-.06-.11,0-.16L303,105A.31.31,0,0,1,303.32,105Z" />
                                                        <path class="cls-24"
                                                            d="M302.06,104.22l.89.51c.07,0,.06.12,0,.17l-.85.48a.31.31,0,0,1-.28,0l-.88-.51c-.08,0-.07-.12,0-.17l.84-.48A.31.31,0,0,1,302.06,104.22Z" />
                                                        <path class="cls-24"
                                                            d="M300.82,103.5l.88.52c.08,0,.07.11,0,.16l-.84.49a.34.34,0,0,1-.28,0l-.89-.51c-.07,0-.06-.12,0-.17l.85-.48A.31.31,0,0,1,300.82,103.5Z" />
                                                        <path class="cls-24"
                                                            d="M299.56,102.78l.89.51c.07,0,.06.12,0,.16l-.85.49a.31.31,0,0,1-.28,0l-.88-.51c-.08,0-.07-.11,0-.16l.84-.49A.31.31,0,0,1,299.56,102.78Z" />
                                                        <path class="cls-24"
                                                            d="M298.31,102.06l.88.51c.08,0,.07.11,0,.16l-.84.49a.34.34,0,0,1-.28,0l-.89-.51c-.07,0-.06-.12,0-.17l.85-.48A.28.28,0,0,1,298.31,102.06Z" />
                                                        <path class="cls-24"
                                                            d="M297.05,101.33l.89.51c.07,0,.06.12,0,.16l-.85.49a.28.28,0,0,1-.28,0l-.88-.51c-.08,0-.07-.11,0-.16l.84-.49A.31.31,0,0,1,297.05,101.33Z" />
                                                        <path class="cls-24"
                                                            d="M295.8,100.61l.88.51c.08,0,.07.11,0,.16l-.84.49a.31.31,0,0,1-.28,0l-.89-.51c-.07,0-.06-.12,0-.16l.85-.49A.28.28,0,0,1,295.8,100.61Z" />
                                                        <path class="cls-24"
                                                            d="M294.54,99.88l.89.51c.07,0,.06.12,0,.17l-.85.48a.28.28,0,0,1-.28,0l-.88-.51c-.08,0-.07-.11,0-.16l.84-.49A.34.34,0,0,1,294.54,99.88Z" />
                                                        <path class="cls-24"
                                                            d="M293.29,99.16l.88.51c.08,0,.07.11,0,.16l-.84.49a.31.31,0,0,1-.28,0l-.89-.51c-.07,0-.06-.12,0-.16l.85-.49A.31.31,0,0,1,293.29,99.16Z" />
                                                        <path class="cls-24"
                                                            d="M292,98.43l.89.51c.07,0,.06.12,0,.17l-.85.48a.31.31,0,0,1-.28,0l-.88-.52c-.08,0-.07-.11,0-.16l.84-.49A.34.34,0,0,1,292,98.43Z" />
                                                        <path class="cls-24"
                                                            d="M307.08,107.12l1.49.86c.07,0,.06.12,0,.16l-.84.49a.31.31,0,0,1-.28,0l-1.49-.86c-.08,0-.07-.11,0-.16l.84-.49A.34.34,0,0,1,307.08,107.12Z" />
                                                        <path class="cls-24"
                                                            d="M289.64,98.37l.89.51a.24.24,0,0,0,.26,0l.89-.51c.08,0,.08-.11,0-.15l-.07,0a.08.08,0,0,1,0-.14l.95-.55a.08.08,0,0,0,0-.15L292,97a.29.29,0,0,0-.27,0l-.88.5-.18.11-.13.08-.14.07-.76.44A.08.08,0,0,0,289.64,98.37Z" />
                                                        <path class="cls-24"
                                                            d="M311.32,105.36l.89.51c.07,0,.06.12,0,.17l-.85.49a.34.34,0,0,1-.28,0l-.88-.51c-.07,0-.07-.12,0-.17l.84-.48A.31.31,0,0,1,311.32,105.36Z" />
                                                        <path class="cls-24"
                                                            d="M310.08,104.64l.88.51c.07,0,.06.12,0,.17l-.84.48a.33.33,0,0,1-.29,0l-.88-.52c-.07,0-.06-.11,0-.16l.84-.49A.37.37,0,0,1,310.08,104.64Z" />
                                                        <path class="cls-24"
                                                            d="M308.83,103.92l.88.51c.07,0,.06.12,0,.16l-.84.49a.3.3,0,0,1-.29,0l-.88-.51c-.07,0-.06-.11,0-.16l.84-.49A.33.33,0,0,1,308.83,103.92Z" />
                                                        <path class="cls-24"
                                                            d="M298.19,97.78l.88.51c.07,0,.07.11,0,.16l-.84.49a.31.31,0,0,1-.28,0l-.89-.51c-.07,0-.06-.11,0-.16l.85-.49A.31.31,0,0,1,298.19,97.78Z" />
                                                        <path class="cls-24"
                                                            d="M296.94,97.06l.88.51c.08,0,.07.11,0,.16l-.84.49a.31.31,0,0,1-.28,0l-.89-.51c-.07,0-.06-.11,0-.16l.85-.49A.31.31,0,0,1,296.94,97.06Z" />
                                                        <path class="cls-24"
                                                            d="M295.69,96.34l.88.51c.08,0,.07.11,0,.16l-.84.49a.31.31,0,0,1-.28,0l-.89-.51c-.07,0-.06-.12,0-.16l.85-.49A.28.28,0,0,1,295.69,96.34Z" />
                                                        <path class="cls-24"
                                                            d="M294.44,95.62l.88.51c.08,0,.07.11,0,.16l-.84.49a.34.34,0,0,1-.28,0l-.89-.51c-.07,0-.06-.12,0-.17l.85-.48A.28.28,0,0,1,294.44,95.62Z" />
                                                        <path class="cls-24"
                                                            d="M307.25,103l1.21.7c.07,0,.06.12,0,.16l-.84.49a.31.31,0,0,1-.28,0l-1.21-.69c-.07-.05-.06-.12,0-.17L307,103A.31.31,0,0,1,307.25,103Z" />
                                                        <path class="cls-24"
                                                            d="M299.44,98.5l1.2.7c.08,0,.07.11,0,.16l-.84.49a.31.31,0,0,1-.28,0l-1.21-.7c-.07,0-.06-.11,0-.16l.84-.49A.33.33,0,0,1,299.44,98.5Z" />
                                                        <path class="cls-24"
                                                            d="M301,99.41l5.88,3.39c.07,0,.06.12,0,.17l-.84.48a.33.33,0,0,1-.29,0l-5.88-3.4c-.07,0-.06-.12,0-.16l.85-.49A.31.31,0,0,1,301,99.41Z" />
                                                        <path class="cls-24"
                                                            d="M306.7,105.5l.89.51c.07,0,.06.11,0,.16l-.85.49a.31.31,0,0,1-.28,0l-.88-.51c-.08,0-.07-.11,0-.16l.84-.49A.31.31,0,0,1,306.7,105.5Z" />
                                                        <path class="cls-24"
                                                            d="M305.45,104.78l.89.51c.07,0,.06.11,0,.16l-.84.49a.31.31,0,0,1-.28,0l-.89-.51c-.07,0-.06-.12,0-.16l.85-.49A.28.28,0,0,1,305.45,104.78Z" />
                                                        <path class="cls-24"
                                                            d="M304.2,104.05l.88.52c.08,0,.07.11,0,.16l-.84.49a.34.34,0,0,1-.28,0l-.89-.51c-.07,0-.06-.12,0-.17l.85-.48A.31.31,0,0,1,304.2,104.05Z" />
                                                        <path class="cls-24"
                                                            d="M303,103.33l.88.51c.07,0,.07.12,0,.17l-.84.48a.28.28,0,0,1-.28,0l-.89-.51c-.07,0-.06-.11,0-.16l.85-.49A.34.34,0,0,1,303,103.33Z" />
                                                        <path class="cls-24"
                                                            d="M301.7,102.61l.88.51c.07,0,.06.11,0,.16l-.84.49a.33.33,0,0,1-.29,0l-.88-.51c-.07,0-.06-.11,0-.16l.84-.49A.33.33,0,0,1,301.7,102.61Z" />
                                                        <path class="cls-24"
                                                            d="M300.44,101.89l.89.51c.07,0,.06.11,0,.16l-.85.49a.31.31,0,0,1-.28,0l-.88-.51c-.07,0-.07-.12,0-.16l.84-.49A.28.28,0,0,1,300.44,101.89Z" />
                                                        <path class="cls-24"
                                                            d="M299.19,101.16l.89.52c.07,0,.06.11,0,.16l-.85.49a.34.34,0,0,1-.28,0l-.88-.51c-.08,0-.07-.12,0-.17l.84-.48A.31.31,0,0,1,299.19,101.16Z" />
                                                        <path class="cls-24"
                                                            d="M297.94,100.44l.89.51c.07,0,.06.12,0,.17l-.85.48a.28.28,0,0,1-.28,0l-.88-.51c-.08,0-.07-.11,0-.16l.84-.49A.34.34,0,0,1,297.94,100.44Z" />
                                                        <path class="cls-24"
                                                            d="M296.69,99.72l.89.51c.07,0,.06.11,0,.16l-.85.49a.31.31,0,0,1-.28,0l-.89-.51c-.07,0-.06-.11,0-.16l.85-.49A.31.31,0,0,1,296.69,99.72Z" />
                                                        <path class="cls-24"
                                                            d="M295.44,99l.88.51c.08,0,.07.11,0,.16l-.84.49a.31.31,0,0,1-.28,0l-.89-.51c-.07,0-.06-.12,0-.16l.85-.49A.28.28,0,0,1,295.44,99Z" />
                                                        <path class="cls-24"
                                                            d="M294.19,98.27l.88.52c.07,0,.07.11,0,.16l-.84.49a.34.34,0,0,1-.28,0l-.89-.51c-.07,0-.06-.12,0-.17l.85-.48A.31.31,0,0,1,294.19,98.27Z" />
                                                        <path class="cls-24"
                                                            d="M292.94,97.55l.88.51c.07,0,.06.12,0,.17l-.84.48a.3.3,0,0,1-.29,0l-.88-.51c-.07,0-.06-.11,0-.16l.84-.49A.37.37,0,0,1,292.94,97.55Z" />
                                                        <path class="cls-24"
                                                            d="M308,106.22l1.83,1.06c.08,0,.07.11,0,.16l-.84.49a.31.31,0,0,1-.28,0l-1.83-1.06c-.08,0-.07-.11,0-.16l.84-.49A.34.34,0,0,1,308,106.22Z" />
                                                        <path class="cls-24"
                                                            d="M308.54,105.16l.88.51c.07,0,.07.11,0,.16l-.84.49a.31.31,0,0,1-.28,0l-.89-.51c-.07,0-.06-.12,0-.16l.85-.49A.31.31,0,0,1,308.54,105.16Z" />
                                                        <path class="cls-24"
                                                            d="M307.29,104.43l.88.52c.07,0,.06.11,0,.16l-.84.49a.37.37,0,0,1-.29,0l-.88-.51c-.07,0-.06-.12,0-.17l.84-.48A.33.33,0,0,1,307.29,104.43Z" />
                                                        <path class="cls-24"
                                                            d="M306,103.71l.89.51c.07,0,.06.12,0,.17l-.85.48a.28.28,0,0,1-.28,0l-.88-.51c-.07,0-.06-.11,0-.16l.84-.49A.34.34,0,0,1,306,103.71Z" />
                                                        <path class="cls-24"
                                                            d="M304.78,103l.89.51c.07,0,.06.12,0,.16l-.85.49a.31.31,0,0,1-.28,0l-.88-.51c-.08,0-.07-.11,0-.16l.84-.49A.31.31,0,0,1,304.78,103Z" />
                                                        <path class="cls-24"
                                                            d="M303.53,102.27l.89.51c.07,0,.06.11,0,.16l-.85.49a.31.31,0,0,1-.28,0l-.88-.51c-.08,0-.07-.12,0-.16l.84-.49A.31.31,0,0,1,303.53,102.27Z" />
                                                        <path class="cls-24"
                                                            d="M302.28,101.54l.89.52c.07,0,.06.11,0,.16l-.85.49a.34.34,0,0,1-.28,0l-.89-.51c-.07,0-.06-.12,0-.17l.85-.48A.31.31,0,0,1,302.28,101.54Z" />
                                                        <path class="cls-24"
                                                            d="M301,100.82l.88.51c.08,0,.07.12,0,.17l-.84.48a.31.31,0,0,1-.28,0l-.89-.52c-.07,0-.06-.11,0-.16l.85-.49A.34.34,0,0,1,301,100.82Z" />
                                                        <path class="cls-24"
                                                            d="M299.78,100.1l.88.51c.08,0,.07.12,0,.16l-.84.49a.31.31,0,0,1-.28,0l-.89-.51c-.07,0-.06-.11,0-.16l.85-.49A.31.31,0,0,1,299.78,100.1Z" />
                                                        <path class="cls-24"
                                                            d="M298.53,99.38l.88.51c.07,0,.07.11,0,.16l-.84.49a.31.31,0,0,1-.28,0l-.89-.51c-.07,0-.06-.11,0-.16l.85-.49A.31.31,0,0,1,298.53,99.38Z" />
                                                        <path class="cls-24"
                                                            d="M297.28,98.66l.88.51c.07,0,.06.11,0,.16l-.84.49a.37.37,0,0,1-.29,0l-.88-.51c-.07,0-.06-.12,0-.17l.84-.48A.3.3,0,0,1,297.28,98.66Z" />
                                                        <path class="cls-24"
                                                            d="M296,97.93l.88.51c.07,0,.06.12,0,.17l-.84.48a.33.33,0,0,1-.29,0l-.88-.52c-.07,0-.06-.11,0-.16l.84-.49A.37.37,0,0,1,296,97.93Z" />
                                                        <path class="cls-24"
                                                            d="M293.23,96.32l2.43,1.4c.07,0,.06.12,0,.16l-.85.49a.28.28,0,0,1-.28,0L292.08,97c-.07,0-.06-.12,0-.16l.84-.49A.3.3,0,0,1,293.23,96.32Z" />
                                                        <path class="cls-24"
                                                            d="M309.79,105.88l1.21.7c.07,0,.06.11,0,.16l-.84.49a.34.34,0,0,1-.28,0l-1.21-.7c-.07,0-.06-.11,0-.16l.85-.49A.31.31,0,0,1,309.79,105.88Z" />
                                                        <path class="cls-24"
                                                            d="M288.33,99.15,306.1,109.4c.07,0,.06.12,0,.17l-.42.24a.31.31,0,0,1-.28,0L287.6,99.56c-.07,0-.06-.11,0-.16l.42-.24A.3.3,0,0,1,288.33,99.15Z" />
                                                        <polygon id="_Контур_45" data-name="&lt;Контур&gt;" class="cls-25"
                                                            points="309.12 99.6 309 99.67 305.93 101.44 300.47 98.29 300.36 98.23 303.55 96.39 309.12 99.6" />
                                                        <polygon id="_Контур_46" data-name="&lt;Контур&gt;" class="cls-26"
                                                            points="309 99.67 305.93 101.44 300.47 98.29 303.55 96.52 309 99.67" />
                                                        <path id="_Контур_47" data-name="&lt;Контур&gt;" class="cls-26"
                                                            d="M317.87,103.74V104a1.12,1.12,0,0,1-.55,1l-10.83,6.25a1.09,1.09,0,0,1-.56.15,1.15,1.15,0,0,1-.56-.15l-19.58-11.3a1.11,1.11,0,0,1-.56-1v-.28l20.7,12Z" />
                                                        <path id="_Контур_48" data-name="&lt;Контур&gt;" class="cls-20"
                                                            d="M305.62,110.8a1.33,1.33,0,0,1-1.15-.09L285,99.46a1.33,1.33,0,0,1-.65-.93L282.2,85.8a1.5,1.5,0,0,1,0-.22,1.33,1.33,0,0,1,.39-.94l20.26,11.7a1,1,0,0,1,.48.69Z" />
                                                        <path id="_Контур_49" data-name="&lt;Контур&gt;" class="cls-26"
                                                            d="M305.93,110.64l-.13.07a.76.76,0,0,1-.18.09L303.31,97a1,1,0,0,0-.48-.69l-20.26-11.7a1.05,1.05,0,0,1,.27-.2l20.31,11.72a1,1,0,0,1,.47.68Z" />
                                                    </g>
                                                </g>
                                                <path id="_Контур_50" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M320.65,56.16s-.25,4.85-.14,5.28,2.22,1.85,2.84,2.35-3.35,4.42-5.28,5.31-8-1.45-8.14-4.45,1-5.52,2-5.65S320.65,56.16,320.65,56.16Z" />
                                                <path id="_Контур_51" data-name="&lt;Контур&gt;" class="cls-20"
                                                    d="M321.19,62.27s-3.51,5.24-8.42,5.73c-1.54-1.52-1.68-7,.46-8.68,0,0-2-1.59-3.32-1.28a6.93,6.93,0,0,0-3,3.87,31.33,31.33,0,0,0-1.73,11.21c.08,5.14,0,18.13,0,18.13a11,11,0,0,0,5.17,7.43A16,16,0,0,0,322,100.29c2.48-.58,3.4-2,4.26-3.77-.22-3.6-1.65-11-1.05-15.55s1.56-7.91,1.81-11.57-.49-3.59-2.32-4.89A28.56,28.56,0,0,0,321.19,62.27Z" />
                                                <path id="_Контур_52" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M315.55,104a28.93,28.93,0,0,1,2.76-1.58,5.59,5.59,0,0,0,2.35-1.42c.87-.85,2.28-4,3.28-7.15A32,32,0,0,0,325.13,83c-.43-4.36-2-10.47-2.4-13s.41-3.52,1.58-4.44c1.37-1.09,3.27-.61,4.28,2.91a68.3,68.3,0,0,1,2.26,14.92,34.15,34.15,0,0,1-1.71,11,40.2,40.2,0,0,1-4.2,8.65c-.48.82-.64,1.54-1.38,3.2a11.17,11.17,0,0,1-3.21,4.27c-1.24.89-1.82,1-2.11.84s-.29-.6.23-1.07a9.29,9.29,0,0,0,2.2-2.46s-1.08,1.08-1.78,1.67a9.48,9.48,0,0,1-2.06,1.31c-.72.32-1.72-.29-1.21-.78s1-.72,2.06-1.61a9.31,9.31,0,0,0,1.46-1.59,16.94,16.94,0,0,1-2.29,1.48,3.79,3.79,0,0,1-2.08.56c-.38,0-.84-.54-.13-1.06a13.87,13.87,0,0,0,2.73-1.86c.79-.78,1.23-1.44,1-1.46s-.65.48-1.57.77-1.91,0-2-.48S314.69,104.44,315.55,104Z" />
                                                <path id="_Контур_53" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M309.69,48.94h0c.58-3.76,3.28-6.6,7.16-6.39a7.45,7.45,0,0,1,3.8,13.61,8,8,0,0,1-.6,1.65c-1.37,1.6-5.52,2.59-6.71,2.42a3.56,3.56,0,0,1-3.09-2.53C309,54.75,309.37,50.8,309.69,48.94Z" />
                                                <path class="cls-24"
                                                    d="M320.65,56.16h0l-.36-3.28s2.68-6.94-3.65-5.6c-4.18.88-5.23,1.26-6.5-1.55s3.21-5.32,8.54-4.62a7.36,7.36,0,0,1,6.59,7.47C325.13,50.64,324.58,54.82,320.65,56.16Z" />
                                                <path class="cls-23"
                                                    d="M331.49,75s-3.46,3.44-7.55,2.45c-.58-.4-2-8.43-2-8.43s0-4.45,3.41-4.34S331.49,75,331.49,75Z" />
                                                <path class="cls-23"
                                                    d="M305.39,68.33a3.81,3.81,0,0,1-2.55-1.15c.14-1.79,2.44-8.63,7.07-9.14a8.61,8.61,0,0,0-2.89,3.5A45.75,45.75,0,0,0,305.39,68.33Z" />
                                            </g>
                                            <path class="cls-1"
                                                d="M425.06,388.31a28.43,28.43,0,0,0-5.1-3.71c-13.85-8-36.37-8-50.21,0a27.19,27.19,0,0,0-5.84,4.44c-7.61,7.81-5.66,17.91,5.84,24.55,13.84,8,36.37,8,50.21,0C431.82,406.74,433.52,396.21,425.06,388.31ZM415.55,411c-11.41,6.59-30,6.59-41.38,0-8-4.62-10.4-11.28-7.17-17.12a18.64,18.64,0,0,1,7.17-6.77c11.41-6.58,30-6.58,41.38,0a18.5,18.5,0,0,1,7.15,6.77h0C425.94,399.76,423.55,406.41,415.55,411Z" />
                                            <path class="cls-29"
                                                d="M422.7,393.92h0a18.5,18.5,0,0,0-7.15-6.77c-11.41-6.58-30-6.58-41.38,0a18.64,18.64,0,0,0-7.17,6.77L363.91,389l-.56-.89,4-9.55,13.89-7.72,25.86.45,17.57,10.42s.32,3.3.36,6.56C425.1,392.35,424.7,396.32,422.7,393.92Z" />
                                            <polygon class="cls-1" points="359.37 399 359.38 388.15 364.76 397.26 359.37 399" />
                                            <polygon class="cls-1" points="430.34 399 430.34 388.21 425.6 393.58 430.34 399" />
                                            <ellipse class="cls-30" cx="395.18" cy="393.58" rx="29.54"
                                                ry="17.05" />
                                            <path class="cls-1"
                                                d="M362.07,400.83s4.55,17.92,38.48,17c23.55,0,26.56-20.24,26-23.12a28.24,28.24,0,0,1-20.81,11.58c-14.33,1.25-24.91,1.09-30.57-1.65s-13.09-9.93-13.09-9.93Z" />
                                            <path class="cls-3"
                                                d="M369.75,403.25c-13.84-8-13.84-21,0-29s36.37-8,50.21,0,13.84,21,0,29S383.59,411.24,369.75,403.25Zm45.79-26.44c-11.41-6.58-30-6.59-41.37,0s-11.41,17.3,0,23.89,30,6.59,41.37,0S427,383.4,415.54,376.81Z" />
                                            <ellipse class="cls-16" cx="319.57" cy="438.88" rx="3.9"
                                                ry="6.75" transform="translate(-176.63 218.6) rotate(-30)" />
                                            <polygon class="cls-1"
                                                points="373.39 407.78 358.45 416.41 353.84 413.74 368.78 405.12 373.39 407.78" />
                                            <polygon class="cls-29"
                                                points="373.39 413.1 358.45 421.72 358.45 416.4 373.39 407.77 373.39 413.1" />
                                            <path class="cls-10"
                                                d="M361.5,420.18a10.56,10.56,0,0,0-4.77-8.27,3.38,3.38,0,0,0-3.33-.36v0L316.22,433,323,444.64l36.72-21.2C360.81,423.05,361.5,421.91,361.5,420.18Z" />
                                            <ellipse class="cls-10" cx="319.57" cy="438.88" rx="3.9"
                                                ry="6.75" transform="translate(-176.63 218.6) rotate(-30)" />
                                            <g id="Men_1">
                                                <ellipse class="cls-6" cx="423.93" cy="486.82" rx="22.69"
                                                    ry="13.1" />
                                                <path id="_Контур_54" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M439.85,392.73c.24,2.11,2.76,11.21,2.22,14.32s-9.14,8.33-9.14,8.33l-1.19-5.33,4.76-4.67-1.29-8.83Z" />
                                                <path id="_Контур_55" data-name="&lt;Контур&gt;" class="cls-23"
                                                    d="M433.2,383.76a3.77,3.77,0,0,1,4.79,1.45c1.26,2.09,2.57,9.28,2.69,10.5,0,0-1.77,2.46-4.43,2.05Z" />
                                                <path class="cls-18"
                                                    d="M423.38,485.22a7.4,7.4,0,0,1-5.56-.68c-1.34,0-8.62-3.07-9.61-.46-.86,2.3,2.29,4.42,4,4.82,3.68.89,6.39,2.73,7.87,3,1.1.23,2.52.38,3.4-.48C424.5,490.42,424.41,486.58,423.38,485.22Z" />
                                                <path class="cls-21"
                                                    d="M420.05,491.3c-1.48-.31-4.19-2.14-7.87-3-1.41-.34-3.84-1.89-4.09-3.73-.32,2.11,2.52,4,4.09,4.36,3.68.89,6.39,2.73,7.87,3,1.1.23,2.52.38,3.4-.48a2.22,2.22,0,0,0,.48-.88A4.41,4.41,0,0,1,420.05,491.3Z" />
                                                <path class="cls-18"
                                                    d="M435.18,479.92a7.35,7.35,0,0,1-5.56-.67c-1.34,0-8.62-3.08-9.61-.46-.86,2.29,2.29,4.41,4,4.82,3.67.89,6.39,2.72,7.87,3,1.1.23,2.52.38,3.4-.48C436.3,485.12,436.21,481.28,435.18,479.92Z" />
                                                <path class="cls-21"
                                                    d="M431.85,486c-1.48-.31-4.2-2.14-7.87-3-1.41-.34-3.84-1.88-4.09-3.72-.32,2.11,2.52,4,4.09,4.36,3.67.89,6.39,2.72,7.87,3,1.1.23,2.52.38,3.4-.48a2.22,2.22,0,0,0,.48-.88A4.38,4.38,0,0,1,431.85,486Z" />
                                                <path id="_Контур_56" data-name="&lt;Контур&gt;" class="cls-22"
                                                    d="M435.32,460.15a44.45,44.45,0,0,0-1.67-8s.5-6.88.75-13.4c.28-7.4,2.85-13.91.82-19.81l-22.82,5.07s1.38,29.5,1.68,33.07a66.94,66.94,0,0,0,1,8.28c1,5.73,2.73,19.35,2.73,19.35a8.52,8.52,0,0,0,5.58.62s-.17-17.22-.33-21.35c-.19-5-.34-4.65-.34-4.65l.76-12.55.49-6.24s.63,4.58,1,8.67c.36,3.57,1.22,6.8,2.18,13.44.84,5.76,2.19,17.34,2.19,17.34,2.42,1.4,5.69.24,5.69.24S436,465.15,435.32,460.15Z" />
                                                <path id="_Контур_57" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M432,383.88c-1.74.09-3,.54-3.25,0a24.73,24.73,0,0,1-.4-2.71c.2-.51.38-1.05.38-1.05,2.18-1.34,2.87-3.7,3.16-6.45.49-4.7-2.05-8.81-6.75-9.3-4.41-.46-7.66,2.65-8.53,6.91-.46,2.1-1.39,6.07-.14,9.53.71,1.94,1.61,3.47,2.52,3.77a20.09,20.09,0,0,0,2.61-.23h0s.23,1.3.39,2.14.1,1.28-1.57,2.3,2.52,3.14,5.26,2.93,5.81-1.86,6.66-3.62C433.27,386.15,433.18,383.83,432,383.88Z" />
                                                <path id="_Контур_58" data-name="&lt;Контур&gt;" class="cls-20"
                                                    d="M429.48,384.14c.48,1.2-.75,2.67-4,3.7s-3.56-.3-3.56-.3a66.49,66.49,0,0,0-6.35,3.27c-2,1.37-2.82,5.34-3.09,12-.3,7.74-.33,19.23-.07,21.21,0,0,3.66,3.65,8.35,3.27s12.57-4.53,14.48-7.74c-.05-6.79-.85-7.89.25-11.8,2.52-9,3.84-12.62,2.62-18.57-1-4.91-2.42-5.52-4.36-5.47A41.07,41.07,0,0,0,429.48,384.14Z" />
                                                <path id="_Контур_59" data-name="&lt;Контур&gt;" class="cls-19"
                                                    d="M405.1,409.24c3.85,1,4.75-1.45,5.26-3.46,1.22-4.86,1.88-9.25,2.79-12,1.08-3.26,2.2-3.78,3.79-4.41,1.85-.75,3.45.82,2.83,5a82.82,82.82,0,0,1-3.52,14.13c-.48,1.52-1.55,4.21-3.16,5.51-2,1.6-5,1.53-9.5.41-1.92-.48-4-1.63-7.69-3.33-1-.46-1.74-.76-3.62-1.64a12.94,12.94,0,0,1-4.82-3.76c-1-1.43-1.11-2.1-.91-2.42s.7-.32,1.22.28a10.72,10.72,0,0,0,2.77,2.56s-1.22-1.26-1.87-2.07a10.55,10.55,0,0,1-1.46-2.38c-.35-.83.37-2,.91-1.37s.81,1.2,1.8,2.39a10.35,10.35,0,0,0,1.78,1.7,19.53,19.53,0,0,1-1.64-2.64,4.45,4.45,0,0,1-.6-2.39c0-.43.65-.95,1.22-.12a16.2,16.2,0,0,0,2.07,3.15c.88.91,1.62,1.44,1.64,1.18s-.53-.75-.84-1.81,0-2.18.59-2.31.47-.09.94.91a28.49,28.49,0,0,1,1.75,3.17,6.56,6.56,0,0,0,1.58,2.73C399.36,407.21,401.45,408.32,405.1,409.24Z" />
                                                <path id="_Контур_60" data-name="&lt;Контур&gt;" class="cls-23"
                                                    d="M418.36,388.69c-2.57-.37-4.38.78-5.52,4.67s-1.92,7.09-1.92,7.09a7,7,0,0,0,4.3,2.86c3.07.74,4.18-.73,4.18-.73s.85-4.08,1.38-6.85S421.54,389.16,418.36,388.69Z" />
                                                <path class="cls-18"
                                                    d="M416.75,370.67s-4.05-6.16,4.74-7.42c6.34-.91,10.41,3.17,10.88,7.59.45,4.22-2.15,8.61-4,10.35a7.68,7.68,0,0,1-5.48-.67,33.14,33.14,0,0,1-.12-3.45S425.83,370.56,416.75,370.67Z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <!-- End Col -->

                            <!-- Timeline -->
                            <div>
                                <!-- Heading -->
                                <div class="mb-4">
                                    <h3 class="text-[#d7bbf3] text-xs font-medium uppercase">
                                        Steps
                                    </h3>
                                </div>
                                <!-- End Heading -->

                                <!-- Item -->
                                <div class="flex gap-x-5 ms-1">
                                    <!-- Icon -->
                                    <div data-aos="fade-up"
                                        class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-slate-600">
                                        <div class="relative z-10 size-8 flex justify-center items-center">
                                            <span
                                                class="flex flex-shrink-0 justify-center items-center size-8 border border-purple-500 text-[#d7bbf3]  font-semibold text-xs uppercase rounded-full">
                                                1
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End Icon -->

                                    <!-- Right Content -->
                                    <div class="grow pt-0.5 pb-8 sm:pb-12" data-aos="fade-up">
                                        <p class="text-sm lg:text-base text-white">
                                            {{-- <span class="text-white">Market Research and Analysis:</span> --}}
                                           {{ __('Reduce stress on your team by outsourcing device management.') }}
                                        </p>
                                    </div>
                                    <!-- End Right Content -->
                                </div>
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="flex gap-x-5 ms-1" data-aos="fade-up">
                                    <!-- Icon -->
                                    <div
                                        class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-slate-600">
                                        <div class="relative z-10 size-8 flex justify-center items-center">
                                            <span
                                                class="flex flex-shrink-0 justify-center items-center size-8 border border-purple-500 text-[#d7bbf3]  font-semibold text-xs uppercase rounded-full">
                                                2
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End Icon -->

                                    <!-- Right Content -->
                                    <div class="grow pt-0.5 pb-8 sm:pb-12" data-aos="fade-up">
                                        <p class="text-sm lg:text-base text-white">
                                            {{-- <span class="text-white">Product Development and Testing:</span> --}}
                                         {{ __('New users and devices are configured online with Zetta\'s no-touch setup. Let us handle your device setup effortlessly.') }}
                                        </p>
                                    </div>
                                    <!-- End Right Content -->
                                </div>
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="flex gap-x-5 ms-1" data-aos="fade-up">
                                    <!-- Icon -->
                                    <div
                                        class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-slate-600">
                                        <div class="relative z-10 size-8 flex justify-center items-center">
                                            <span
                                                class="flex flex-shrink-0 justify-center items-center size-8 border border-purple-500 text-[#d7bbf3]  font-semibold text-xs uppercase rounded-full">
                                                3
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End Icon -->

                                    <!-- Right Content -->
                                    <div class="grow pt-0.5 pb-8 sm:pb-12" data-aos="fade-up">
                                        <p class="text-sm md:text-base text-neutral-400g text-white">
                                            {{-- <span class="text-white">Marketing and Promotion:</span> --}}
                                           {{ __('Entrust your device protection to us and gain guaranteed visibility and traceability.') }}
                                        </p>
                                    </div>
                                    <!-- End Right Content -->
                                </div>
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="flex gap-x-5 ms-1" data-aos="fade-up">
                                    <!-- Icon -->
                                    <div
                                        class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-slate-600">
                                        <div class="relative z-10 size-8 flex justify-center items-center">
                                            <span
                                                class="flex flex-shrink-0 justify-center items-center size-8 border border-purple-500 text-[#d7bbf3]  font-semibold text-xs uppercase rounded-full">
                                                4
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End Icon -->

                                    <!-- Right Content -->
                                    <div class="grow pt-0.5 pb-8 sm:pb-12" data-aos="fade-up">
                                        <p class="text-sm md:text-base text-neutral-400d text-white">
                                            {{-- <span class="text-white">Launch and Optimization:</span> --}}
                                            {{ __('With Zetta, you will gain access to our comprehensive service including: warranties, support, and disposal.') }}
                                        </p>
                                    </div>
                                    <!-- End Right Content -->
                                </div>
                                <!-- End Item -->

                                <a data-aos="fade-up" class="group inline-flex items-center gap-x-2 py-2 px-3 bg-primary-gradient font-medium text-sm text-neutral-200 rounded-full focus:outline-none"
                                    href="#">
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                        <path
                                            class="opacity-0 group-hover:opacity-100 group-focus:opacity-100 group-hover:delay-100 transition"
                                            d="M14.05 2a9 9 0 0 1 8 7.94"></path>
                                        <path
                                            class="opacity-0 group-hover:opacity-100 group-focus:opacity-100 transition"
                                            d="M14.05 6A5 5 0 0 1 18 10"></path>
                                    </svg>
                                   {{ __('messages.contact_us') }}
                                </a>
                            </div>
                            <!-- End Timeline -->
                        </div>
                        <!-- End Grid -->
                    </div>
                </div>
                <!-- End Approach -->
            </section>
              {{-- Why Zetta Section End --}}
            {{-- How Zetta Work Section Start --}}
            <section class="mt-[10vh] container">
                <x-h2>{{ __('How does Zetta work?') }}</x-h2>
                <!-- Stepper -->
                <div class="flex justify-center mt-4">
                    <ul class="relative flex flex-col md:flex-row gap-4">
                        <x-step bg="bg-purple-400" img="{{ asset('assets/img/image.png') }}" title="{{ __('Select') }}"
                            text="{{ __('Select your preferred device and plan duration: 12, 18, 24, or 36 months.') }}">
                            {{-- <svg class="fill-slate-200" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.24408 3.11425L18.5419 11.7747C18.6465 11.8497 18.7281 11.9524 18.7776 12.0712C18.8271 12.19 18.8425 12.3203 18.8221 12.4474C18.8018 12.5745 18.7464 12.6934 18.6622 12.7907C18.578 12.8881 18.4684 12.9601 18.3456 12.9987L13.7267 13.8763C13.645 13.9001 13.5697 13.9421 13.5065 13.9991C13.4433 14.0561 13.3937 14.1266 13.3615 14.2054C13.3293 14.2842 13.3154 14.3693 13.3206 14.4542C13.3258 14.5392 13.3502 14.6219 13.3918 14.6961L15.7013 19.0725C15.7538 19.1506 15.7899 19.2386 15.8073 19.3311C15.8247 19.4235 15.8231 19.5186 15.8026 19.6105C15.7821 19.7023 15.743 19.789 15.6879 19.8653C15.6327 19.9415 15.5626 20.0058 15.4819 20.054L13.8191 20.9201C13.6567 21.0056 13.467 21.0233 13.2917 20.9692C13.1163 20.9151 12.9696 20.7936 12.8837 20.6314L10.5743 16.2435C10.5392 16.1651 10.487 16.0956 10.4216 16.0399C10.3562 15.9843 10.2792 15.944 10.1962 15.9218C10.1133 15.8997 10.0264 15.8964 9.942 15.9121C9.85759 15.9277 9.77773 15.9621 9.70825 16.0125L6.32491 19.2688C6.22286 19.3605 6.09589 19.4198 5.96009 19.4392C5.8243 19.4587 5.68579 19.4374 5.56212 19.378C5.43845 19.3186 5.33519 19.2239 5.26541 19.1058C5.19564 18.9877 5.1625 18.8515 5.17019 18.7146V3.70316C5.16831 3.57722 5.2008 3.45315 5.26416 3.34429C5.32753 3.23544 5.41937 3.14591 5.52981 3.08535C5.64025 3.02479 5.76511 2.99547 5.89096 3.00057C6.01681 3.00566 6.1389 3.04496 6.24408 3.11425Z" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg> --}}
                                
                                
                        </x-step>
                        <!-- Item -->
                        <x-step bg="bg-purple-600" img="{{ asset('assets/img/Picture2.png') }}" title="{{ __('Subscribe') }}"
                            text="{{ __('Sign up and onboard seamlessly with our NYC process.') }}" />
                        <!-- End Item -->
                        <x-step bg="bg-sky-300" img="{{ asset('assets/img/Picture3.png') }}" title="{{ __('Receive') }}"
                            text="{{ __('Receive and activate your devices with seamless setup to get you up and running in no time.') }}" />
                       
                            <!-- Item -->

                        <x-step bg="bg-sky-900" img="{{ asset('assets/img/Picture4.png') }}" title="{{ __('Pay') }}"
                            text="{{ __('Enjoy effortless transactions for your subscription plan, available in monthly or quarterly payments.') }}" />
                            

                        <x-step bg="bg-gray-800" img="{{ asset('assets/img/Picture6.png') }}"
                            title="{{ __('Return or upgrade') }}"
                            text="{{ __('At the end of your plan, you have the option to either return the devices or upgrade.') }}" />
                        <!-- End Item -->
                    </ul>
                </div>

                <!-- End Stepper -->

            </section>
            {{-- How Zetta Work Section End --}}
           
            {{-- Plans Section Start --}}
            <section class="mt-[10vh] container">
                <x-h2>
                    {{ __('PAYMENT PLANS') }}
                    
                </x-h2>
                <p  class="text-center text-gray-300">{{ __('Stay in control of your finances with our flexible payment options.') }}</p>
                <x-plans/>
                <!-- component -->
            </section>
            {{-- Plans Section End --}}

            <section class="mt-[10vh] container">
                <x-h2>
                    {{ __('FAQ') }}
                </x-h2>
                <div class="hs-accordion-group">
                    <x-faq>
                        <x-slot name="title">
                            {{ __('What is Device as a Service (DaaS)?') }}
                        </x-slot>
                        <x-slot name="content">
                            {{ __('Device as a Service (DaaS) is a service model that allows businesses to lease devices such as laptops, desktops, and tablets on a subscription basis. This model includes device management, support, and maintenance.') }}
                        </x-slot>
                    </x-faq>
                
                    <x-faq>
                        <x-slot name="title">
                            {{ __('How does Zetta Technologies\' DaaS model benefit my business?') }}
                        </x-slot>
                        <x-slot name="content">
                            {{ __('Zetta Technologies\' DaaS model provides predictable costs, scalability, enhanced security, and expert support. It helps businesses avoid large upfront costs and ensures devices are always up-to-date and secure.') }}
                        </x-slot>
                    </x-faq>
                
                    <x-faq>
                        <x-slot name="title">
                            {{ __('What types of devices are available through Zetta Technologies\' DaaS?') }}
                        </x-slot>
                        <x-slot name="content">
                            {{ __('We offer a wide range of devices including laptops, desktops, tablets, and smartphones, all tailored to meet the specific needs of your business.') }}
                        </x-slot>
                    </x-faq>
                
                    {{-- <x-faq>
                        <x-slot name="title">
                            {{ __('How do I get started with Zetta Technologies\' DaaS?') }}
                        </x-slot>
                        <x-slot name="content">
                            {{ __('To get started, contact us via email at info@zettatech.sa.com or call us at +996 503564670. Our team will guide you through the process and help you choose the right devices for your business.') }}
                        </x-slot>
                    </x-faq>
                 --}}
                    <x-faq>
                        <x-slot name="title">
                            {{ __('What kind of support does Zetta Technologies provide?') }}
                        </x-slot>
                        <x-slot name="content">
                            {{ __('We provide comprehensive support including setup, configuration, and ongoing technical assistance to ensure your devices are always functioning optimally.') }}
                        </x-slot>
                    </x-faq>
                
                    <x-faq>
                        <x-slot name="title">
                            {{ __('Is my business data secure with Zetta Technologies\' DaaS?') }}
                        </x-slot>
                        <x-slot name="content">
                            {{ __('Yes, we prioritize security and ensure that all devices are equipped with the latest security features and managed in compliance with industry standards and regulations.') }}
                        </x-slot>
                    </x-faq>
                </div>
                
            </section>

            <section class="mt-[10vh] container">
                <x-contact/>
            </section>
        </main>
        <x-footer />
        <div
            class="pointer-events-none fixed z-[-1] flex min-h-screen w-screen justify-center p-[120px_24px_160px_24px] before:absolute before:top-0 before:z-[2] before:h-full before:w-full before:bg-landing-gradient after:absolute after:top-0 after:z-[-1] after:h-full after:w-full after-bg  after:opacity-[.2] after:invert-[1]">
            <div
                class="absolute top-[80px] z-[3]  h-full w-full max-w-2xl bg-landing-gradient-2 opacity-[0.15] blur-[100px] saturate-[150%]">
            </div>
        </div>


    </div>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

   
</body>

</html>
