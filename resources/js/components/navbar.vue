<template>
    <nav class="grid grid-rows-1 w-full px-5 absolute z-40 bg-transparent">
        <header>
            <div class="flex flex-row flex-wrap justify-between relative h-[56px]">
                <button class="px-4">
                    <img src="../../../public/storage/mainpagecontent/icons/TESLA.png" alt="TESLA" class="w-[120px] invert">
                </button>
                <ol class="lg:flex hidden flex-row justify-around items-center font-medium text-white">
                    <li class="duration-300 hover:bg-[#0000000D] px-[8px] py-[4px] rounded-lg"><button class="mx-[8px]"><span>Fahrzeuge</span></button></li>
                    <li class="duration-300 hover:bg-[#0000000D] px-[8px] py-[4px] rounded-lg"><button class="mx-[8px]"><span>Energie</span></button></li>
                    <li class="duration-300 hover:bg-[#0000000D] px-[8px] py-[4px] rounded-lg"><button class="mx-[8px]"><span>Aufladen</span></button></li>
                    <li class="duration-300 hover:bg-[#0000000D] px-[8px] py-[4px] rounded-lg"><button class="mx-[8px]"><span>Entdecken</span></button></li>
                    <li class="duration-300 hover:bg-[#0000000D] px-[8px] py-[4px] rounded-lg"><button class="mx-[8px]"><span>Shop</span></button></li>
                </ol>
                <div class="flex items-center w-[79px] lg:hidden">
                    <button class="flex justify-center items-center h-[32px] font-medium px-[8px] py-[3px] rounded-lg bg-[#0000000D]">
                        <span class="m-[8px] text-white">Menü</span>
                    </button>
                </div>
                <ol class="hidden lg:flex flex-row justify-center items-center me-7">
                    <li class="flex duration-300 py-[4px] px-[8px] hover:bg-[#0000000D] rounded-lg invert"><button><img src="../../../public/storage/mainpagecontent/icons/mark.png" alt=""></button></li>
                    <li class="flex duration-300 py-[4px] px-[8px] hover:bg-[#0000000D] rounded-lg invert"><button><img src="../../../public/storage/mainpagecontent/icons/Glob.png" alt=""></button></li>
                    <li class="flex duration-300 py-[4px] px-[8px] hover:bg-[#0000000D] rounded-lg invert"><button><img src="../../../public/storage/mainpagecontent/icons/User.png" alt=""></button></li>
                </ol>
            </div>
        </header>
    </nav>
</template>

<script>
export default {
    data() {
        return {
        };
    }
};
</script>