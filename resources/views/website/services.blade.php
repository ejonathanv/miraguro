<x-website-layout>
    <!-- Cover principal -->
    <section class="py-16 pb-48 relative">
        <div class="bg-gradient-square"></div>
        <div class="container">
            <div class="w-10/12 mx-auto flex items-center space-x-32">
                <div class="w-5/12 relative">
                    <div class="cover-window" style="background-image:url({{ asset('img/pexels-rachel-claire-4857760.jpg') }})"></div>
                    <div class="cover-window-bg-square"></div>
                </div>

                <div class="w-7/12">

                    <span class="font-xs font-bold">
                        Servicios
                    </span>

                    <h1 class="text-miraguro-green-dark mb-7 mt-7">
                        Innovación Sustentable, Espacios Increíbles.
                    </h1>

                    <p class="m-0 lead font-bold mb-7">
                        Nos enorgullece ofrecer una amplia gama de servicios diseñados para transformar espacios y entornos en lugares sostenibles, cómodos y armoniosos.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-16 pb-7">
        <div class="container">
            <div class="w-10/12 mx-auto flex items-center space-x-16">
                <div class="w-7/12">
                    <h2 class="bordered-title">
                        Creación de espacios sustentables
                    </h2>
                    <p>
                        Creamos espacios habitacionales y ocupacionales que son abrazados por el confort térmico y visual, todo ello impulsado por sistemas sustentables. Diseñamos entornos que no solo se sienten bien, sino que también cuidan de nuestro planeta.
                    </p>
                </div>
                <div class="w-5/12">
                    <img src="{{ asset('/img/creacion_de_espacios_sustentables.png') }}" alt="" class="w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <img src="{{ asset('img/curve-top.svg') }}" alt="" class="w-full h-auto relative -bottom-2">

    <section class="py-2 bg-miraguro-brown">
        <div class="container">
            <div class="w-10/12 mx-auto flex items-center space-x-16">
                <div class="w-5/12">
                    <img src="{{ asset('/img/direccion_de_obras.png') }}" alt="" class="w-full h-auto">
                </div>
                <div class="w-7/12">
                    <h2 class="bordered-title text-white">
                        Dirección de Obras y Suministros Técnicos
                    </h2>
                    <p class="text-white">
                        Nuestra experiencia en la dirección de obras y gestión de suministros técnicos garantiza que tus proyectos se ejecuten con precisión y eficiencia. Deja en nuestras manos la coordinación de cada detalle para lograr resultados excepcionales.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <img src="{{ asset('img/curve-bottom.svg') }}" alt="" class="w-full h-auto relative -top-2">

</x-website-layout>