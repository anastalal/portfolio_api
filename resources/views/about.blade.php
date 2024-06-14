<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <title>Zetta Technologies | About Page</title>
    <meta name="title" content="Zetta Technologies | Dashboard Page" />
    <meta name="description"
        content="Zetta Technologies is a Device as a Service (DaaS) provider with a unique business model. With us you get a complete service that enables sustainability, increases your flexibility, simplifies your operations, gives financial control, and decreases the total cost of ownership." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://coderans.pro/" />
    <meta property="og:title" content="Zetta Technologies | Dashboard Page" />
    <meta property="og:description"
        content="Zetta Technologies is a Device as a Service (DaaS) provider with a unique business model. With us you get a complete service that enables sustainability, increases your flexibility, simplifies your operations, gives financial control, and decreases the total cost of ownership." />
    <meta property="og:image"
        content="https://coderans.pro/assets/img/3d-cloud-computing-hosting-technology-with-electronic-devices_843415-37.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://coderans.pro/" />
    <meta property="twitter:title" content="Zetta Technologies | Dashboard Page" />
    <meta property="twitter:description"
        content="Zetta Technologies is a Device as a Service (DaaS) provider with a unique business model. With us you get a complete service that enables sustainability, increases your flexibility, simplifies your operations, gives financial control, and decreases the total cost of ownership." />
    <meta property="twitter:image"
        content="https://coderans.pro/assets/img/3d-cloud-computing-hosting-technology-with-electronic-devices_843415-37.png" />


    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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
{{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-1TB5CD4G9C"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1TB5CD4G9C');
</script> --}}

</head>

<body class="overflow-x-hidden" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
    <div class="min-h-screen flex flex-col">
        <x-nav2 />
       <main class="flex-1">
        <section
        class="pt-8 lg:pt-32 bg-[url('https://pagedone.io/asset/uploads/1691055810.png')] bg-center bg-cover"
      >
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative text-center">
          <div
            class="border border-indigo-600 p-1 w-60 mx-auto rounded-full flex items-center justify-between mb-4"
          >
            <span class="font-inter text-xs font-medium text-gray-900 ml-3"
              >Explore how to use for brands.</span
            >
            <a
              href="javascript:;"
              class="w-8 h-8 rounded-full flex justify-center items-center bg-indigo-600"
            >
              <svg
                width="17"
                height="16"
                viewBox="0 0 17 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M2.83398 8.00019L12.9081 8.00019M9.75991 11.778L13.0925 8.44541C13.3023 8.23553 13.4073 8.13059 13.4073 8.00019C13.4073 7.86979 13.3023 7.76485 13.0925 7.55497L9.75991 4.22241"
                  stroke="white"
                  stroke-width="1.6"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </a>
          </div>
          <h1
            class="max-w-2xl mx-auto text-center font-manrope font-bold text-4xl text-gray-900 mb-5 md:text-5xl leading-[50px]"
          >
            Control your Finances with our
            <span class="text-indigo-600">Smart Tool </span>
          </h1>
          <p
            class="max-w-sm mx-auto text-center text-base font-normal leading-7 text-gray-500 mb-9"
          >
            Invest intelligently and discover a better way to manage your entire
            wealth easily.
          </p>
          <a
            href="javascript:;"
            class="w-full md:w-auto mb-14 inline-flex items-center justify-center py-3 px-7 text-base font-semibold text-center text-white rounded-full bg-indigo-600 shadow-xs hover:bg-indigo-700 transition-all duration-500"
          >
            Create an account
            <svg
              class="ml-2"
              width="20"
              height="20"
              viewBox="0 0 20 20"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M7.5 15L11.0858 11.4142C11.7525 10.7475 12.0858 10.4142 12.0858 10C12.0858 9.58579 11.7525 9.25245 11.0858 8.58579L7.5 5"
                stroke="white"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </a>
          <div class="flex justify-center">
            <img
              src="https://pagedone.io/asset/uploads/1691054543.png"
              alt="Dashboard image"
            />
          </div>
        </div>
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
    {{-- <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script> --}}

    <!-- Initialize Swiper -->
   
</body>

</html>
