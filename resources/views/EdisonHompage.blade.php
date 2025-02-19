<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edison</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
</head>
<body>
    <div id="App">
        <personal></personal>
        <enavbar></enavbar>
        <cbanner></cbanner>
    </div> <!-- Vue will mount here -->
    <div class="block block-layout-builder ">
        <section>
            <div class="w-[100%]">
                <picture>
                    <source srcset="{{ asset('storage/mainpagecontent/model-Y-2/Homepage-Model-Y-2-Desktop-EMEA-LHD.jpeg') }}" media="(min-width: 900px) and (orientation: landscape)">
                    <source srcset="{{ asset('storage/mainpagecontent/model-Y-2/Homepage-Model-Y-2-Mobile-EMEA-LHD.avif') }}" media="(max-height: 599px) and (orientation: landscape)">
                    <source srcset="{{ asset('storage/mainpagecontent/model-Y-2/Homepage-Model-Y-2-Mobile-EMEA-LHD.avif') }}" media="(max-width: 599px) and (orientation: portrait)">
                    <source srcset="{{ asset('storage/mainpagecontent/model-Y-2/Homepage-Model-Y-2-Tablet-EMEA-LHD.avif') }}" media="(min-width: 600px) and (orientation: portrait)">
                    <source srcset="{{ asset('storage/mainpagecontent/model-Y-2/Homepage-Model-Y-2-Desktop-EMEA-LHD.avif') }}" media="(min-width: 900px) and (orientation: portrait)">
                    <img src="{{ asset('storage/mainpagecontent/model-Y-2/Homepage-Model-Y-2-Desktop-EMEA-LHD.jpeg') }}" alt="Model Y">
                </picture>
            </div>
        </section>
        
        <div class="absolute inset-0 flex items-center justify-center h-screen">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-white">Das neue Model Y</h1>
                <p class="text-lg">Order Online for Touchless Delivery</p>
            </div>
        </div>  
    </div>    
    <div>
        <section>
            <div class="w-[100%] h-screen bg-cover bg-center" style="background-image: url({{ asset('storage/mainpagecontent/model-Y/Homepage-Model-Y-Global-Desktop.jpeg') }});"></div>
        </section>
    </div>
    <div>
        <section>
            <div class="w-[100%] h-screen bg-cover bg-center" style="background-image: url({{ asset('storage/mainpagecontent/model-3/Homepage-Model-3-Desktop-US.jpeg') }});"></div>
        </section>
    </div>
    <div>
        <section>
            <div class="w-[100%] h-screen bg-cover bg-center" style="background-image: url({{ asset('storage/mainpagecontent/model-S/Homepage-Model-S-Desktop-US.jpeg') }});"></div>
        </section>
    </div>
    <div>
        <section>
            <div class="w-[100%] h-screen bg-cover bg-center" style="background-image: url({{ asset('storage/mainpagecontent/model-X/Homepage-Model-X-Desktop-US.jpeg') }});"></div>
        </section>
    </div>
    <div id="app">
        <agb-component></agb-component> 
    </div>
    <footer>
        <div>
            <div class="">
                <p>text mitte</p>
            </div>
        </div>
    </footer>
</body>
</html>