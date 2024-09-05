<x-layout title="Home">
    @isset($message)
        <div class="margin alert alert-success">
            {{ $message }}
        </div>
    @endisset
    <main class="main-home">
        <section>
            <div class="div-main-background">
<<<<<<< Updated upstream
                <img class="img-main-background" src="/img/bacground_taverna.png" alt="Minha Figura">
=======
                <img class="img-main-background" src="/img/background_main.png" alt="Minha Figura">
>>>>>>> Stashed changes
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
                    <p>Bem-vindo à Taverna do Dragão, um refúgio encantado que transporta você diretamente para a era medieval.
                        Em nossa taverna, cada detalhe é cuidadosamente elaborado para criar uma experiência imersiva, onde o passado ganha vida e a magia do antigo mundo se torna realidade.
                        Nossos pratos são inspirados nas receitas tradicionais dos tempos de cavaleiros e reis, preparados com ingredientes frescos e uma pitada de ousadia.
                        Venha descobrir o sabor da aventura e a alegria da boa companhia em cada visita.
                    </p>
                </div>
            </div>
        </section>
    </main>
</x-layout>
