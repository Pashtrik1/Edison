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
    <div class="block block-layout-builder block-inline-blockhero-parlax">
        <section>
            <div class="w-[100%] h-screen bg-cover bg-center" style="background-image: url({{ asset('storage/mainpagecontent/Homepage-Model-Y-2-Desktop-EMEA-LHD.jpeg') }});"></div>
        </section>    
    </div>    
    <div>
        <section>
            <div class="w-[100%] h-screen bg-cover bg-center" style="background-image: url({{ asset('storage/mainpagecontent/Homepage-Model-Y-Global-Desktop.jpeg') }});"></div>
        </section>
    </div>
    <div>
        <section>
            <div class="w-[100%] h-screen bg-cover bg-center" style="background-image: url({{ asset('storage/mainpagecontent/Homepage-Model-3-Desktop-US.jpeg') }});"></div>
        </section>
    </div>
    <div>
        <section>
            <div class="w-[100%] h-screen bg-cover bg-center" style="background-image: url({{ asset('storage/mainpagecontent/Homepage-Model-S-Desktop-US.jpeg') }});"></div>
        </section>
    </div>
    <div>
        <section>
            <div class="w-[100%] h-screen bg-cover bg-center" style="background-image: url({{ asset('storage/mainpagecontent/Homepage-Model-X-Desktop-US.jpeg') }});"></div>
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