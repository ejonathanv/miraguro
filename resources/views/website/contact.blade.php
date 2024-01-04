<x-website-layout>
    <!-- Cover principal -->
    <section class="py-10 lg:py-16 pb-24 relative">
        <div class="container">
            <div class="w-full mx-auto flex flex-col items-center space-y-10">
                <h1 class="text-miraguro-green-dark !leading-relaxed text-center">
                ¡Conéctate con nosotros! <br> Tu puente hacia soluciones sustentables
                </h1>

                <a href="mailto:info@miraguro.com" class="text-2xl text-miraguro-blue inline-block">
                    info@miraguro.com
                </a>
            </div>
        </div>
    </section>


    <!-- Formulario de contacto -->
    <div class="bg-white pt-20 pb-60" style="margin-bottom: -190px">
        <div class="container">
            <div class="w-10/12 lg:w-7/12 mx-auto">
                <p class="text-center mb-16 lead leading-relaxed">
                    Tu opinión es valiosa para nosotros. Por favor, tómate un momento para compartir tus ideas, preguntas o requerimientos a través de nuestro formulario de contacto.
                </p>

                <form action="" class="space-y-7">
                    <div>
                        <label for="">
                            ¿Cual es tu nombre completo?
                        </label>
                        <input type="text" class="form-control" name="name" required>
                        @error('name')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="">
                            Ingresa tu correo electrónico
                        </label>
                        <input type="email" class="form-control" name="email" required>
                        @error('email')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="">
                            Escribe el asunto de tu mensaje
                        </label>
                        <input type="text" class="form-control" name="subject" required>
                        @error('subject')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="">
                            Escribe tu mensaje
                        </label>
                        <textarea name="message" id="" cols="30" rows="3" class="form-control" required></textarea>
                        @error('message')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="terms" required>
                            <span>
                            Acepto los términos y condiciones
                            </span>
                        </label>
                    </div>

                    <button type="submit" class="btn-blue">
                        Enviar mensaje
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-website-layout>