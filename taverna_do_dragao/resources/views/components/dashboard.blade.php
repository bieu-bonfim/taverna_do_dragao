    <aside class="aside-dash">
        <div class="aside-items aside-item-username">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
            </svg>
        <p>{{ auth()->user()->username }}</p>
        </div>

        <div class="aside-items aside-item-manage">
            <a href="/dashboard">Início</a>
            <a href="/dashboard/gestao/cardapio">Gestão de cardápio</a>
            <a href="/dashboard/gestao-comandas">Gestão de comandas</a>
            <a href="/dashboard/gestao/reserva">Gestão de reservas</a>
        </div>

        <div class="aside-items aside-item-username">
            <a class="navbar-brand" href="{{ route('dashboard.profile.index') }}">Editar perfil</a>
            <a class="navbar-brand" href="{{ route('login.logout') }}">Realizar Logout</a>
        </div>

    </aside>

    {{-- <nav id="sidebar">
        <div id="sidebar_content" class="aside-dash">
            <div class="aside-items aside-item-username">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
                <p>Username</p>
            </div>

            <div class="aside-items aside-item-manage">
                <a href="/dashboard">Início</a>
                <a href="/dashboard/gestao/cardapio">Gestão de cardápio</a>
                <a href="/dashboard/gestao-comandas">Gestão de comandas</a>
                <a href="#">Gestão de reservas</a>
            </div>

            <div class="aside-items aside-item-username">
                <p>Editar Perfil</p>
                <p>Realizar Logout</p>
            </div>
        </div>

        <div id="logout">
            <button id="logout_btn">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span class="item-description">
                    Logout
                </span>
            </button>
        </div>
    </nav> --}}
