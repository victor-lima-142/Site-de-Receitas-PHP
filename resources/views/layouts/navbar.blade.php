<nav class="navbar navbar-expand-lg p-1 navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Receitas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/lista-receitas">Receitas</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a href="/categoria/Salgado" class="dropdown-item">Salgados</a>
                            <a href="/categoria/Doce" class="dropdown-item">Doces</a>
                            <a href="/categoria/Pratos Finos" class="dropdown-item">Pratos Finos</a>
                            <a href="/categoria/Sobremesas" class="dropdown-item">Sobremesas</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/lista-receitas">Todas</a></li>
                    </ul>
                </li>
                @include('layouts.auth-links')
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Ir</button>
            </form>

        </div>
    </div>
</nav>
