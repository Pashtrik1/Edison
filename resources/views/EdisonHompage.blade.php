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
    </div> <!-- Vue will mount here -->
    <div class="absolute w-[100%] h-screen bg-cover bg-center" style="background-image: url({{ asset('storage/mainpagecontent/Homepage-Model-Y-2-Desktop-EMEA-LHD.jpeg') }});"></div>

    <div class="grid grid-rows-5">
        <header>
            <div class="flex flex-row flex-wrap justify-between relative h-[56px]">
                <button class="px-4">
                    <img src="{{ asset('storage/mainpagecontent/TESLA.png') }}" alt="TESLA" class="w-[120px]">
                </button>
                <ol class="lg:flex hidden flex-row justify-around items-center font-medium">
                    <li class="duration-300 hover:bg-[#0000000D] px-[8px] py-[4px] rounded-lg"><button class="mx-[8px]"><span>Fahrzeuge</span></button></li>
                    <li class="duration-300 hover:bg-[#0000000D] px-[8px] py-[4px] rounded-lg "><button class="mx-[8px]"><span></span>Energie</button></li>
                    <li class="duration-300 hover:bg-[#0000000D] px-[8px] py-[4px] rounded-lg "><button class="mx-[8px]"><span></span>Aufladen</button></li>
                    <li class="duration-300 hover:bg-[#0000000D] px-[8px] py-[4px] rounded-lg "><button class="mx-[8px]"><span></span>Entdecken</button></li>
                    <li class="duration-300 hover:bg-[#0000000D] px-[8px] py-[4px] rounded-lg "><button class="mx-[8px]"><span></span>Shop</button></li>
                </ol>
                <div class="flex items-center w-[79px] lg:hidden">
                        <button class="flex justify-center items-center h-[32px] font-medium px-[8px] py-[3px] rounded-lg bg-[#0000000D]">
                            <span class="m-[8px]">Menü</span>
                        </button> 
                </div>
                    <ol class="hidden lg:flex flex-row justify-center items-center me-7">
                        <li class="flex duration-300 py-[4px] px-[8px] hover:bg-[#0000000D] rounded-lg"><button class=""><img src="{{asset('storage/mainpagecontent/mark.png')}}" alt=""></button></li>
                        <li class="flex duration-300 py-[4px] px-[8px] hover:bg-[#0000000D] rounded-lg"><button class=""><img src="{{asset('storage/mainpagecontent/Glob.png')}}" alt=""></button></li>
                        <li class="flex duration-300 py-[4px] px-[8px] hover:bg-[#0000000D] rounded-lg"><button class=""><img src="{{asset('storage/mainpagecontent/User.png')}}" alt=""></button></li>
                    </ol>
            </div>

            <div class="relative w-[100%] flex justify-center items-center flex-col mt-12">
                <div class="flex justify-center items-center m-2">
                    <span class="text-5xl font-medium text-black">Model Y</span></div>
                    <span class="underline cursor-pointer">Bestand erkunden</span>
            </div>
        </header>
        <div class="w-[100%] h-[40px]">
        </div>
        <div class="relative w-[100%] h-[50px]"></div>
    </div>
    <div id="app">
        <agb-component></agb-component> 
    </div>

</body>
</html>