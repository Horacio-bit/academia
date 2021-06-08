
<x-app-layout>
    
    <section class="bg-cover" style="background-image: url({{asset('img/home/laboratory-4712721_1920.jpg')}})">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
            <h1 class="text-white font-fold text-4xl">El cubo virtual</h1>

            <p class="text-white text-lg mt-2">Asesorias virtuales</p>
                <!-- This is an example component -->
            <div class="pt-2 relative mx-auto text-gray-600">
                <input class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                type="search" name="search" placeholder="Search">

                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded absolute right-0 top-0 mt-2">
                        Buscar
                </button>

              
            </div>

        </div>

        </div>
    </section>

    <section class="mt-24">

        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-4 gap-6"></div>
        
    </section>

</x-app-layout>

