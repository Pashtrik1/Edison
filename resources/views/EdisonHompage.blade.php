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
        <home>
        </home>
        <cbanner></cbanner>
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