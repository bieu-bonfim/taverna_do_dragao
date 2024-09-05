<x-layout title="Home">
    @isset($message)
        <div class="margin alert alert-success">
            {{ $message }}
        </div>
    @endisset
    <main class="main-home">
        <section>
            <div class="div-main-background">
                <img class="img-main-background" src="/img/background_main.png" alt="Minha Figura">
            </div>
            <div class="container-div-middle">
                <div>
                    <img class="img-sword" src="/img/left-sword.png" alt="Minha Figura">
                    <div class="div-middle">
                        <div class="div-middle">
                            <h1>Acesse o nosso </h1>
                            <span>Cardápio Digital</span>
                        </div>
                        <img class="img-middle" src="/img/menu.png" alt="Minha Figura">
                    </div>
                </div>
                <div class="div-middle">
                    <img class="img-shield" src="/img/shield.png" alt="Minha Figura">
                    <img class="img-shield" src="/img/chef-hat.png" alt="Minha Figura">
                </div>
                <div>
                    <img class="img-sword" src="/img/right-sword.png" alt="Minha Figura">
                    <div class="div-middle">
                        <div class="div-middle">
                            <h1>Agende uma</h1>
                            <span>Reserva</span>
                        </div>
                        <img class="img-middle" src="/img/reservation.png" alt="Minha Figura">
                    </div>
                </div>
            </div>
            <div class="container-div-about">
                <img class="img-about-background" src="/img/background_about.png" alt="Minha Figura">
                <div class="div-about">
                    <h1 class="h1-about">Sobre a nossa taverna</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five
                    </p>
                </div>
            </div>
        </section>
    </main>
</x-layout>
