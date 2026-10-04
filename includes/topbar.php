<header class="topbar d-flex align-items-center justify-content-between px-3 px-lg-4">
    <div class="d-flex align-items-center">
        <!-- Botão de Encolher/Expandir Sidebar -->
        <button class="btn btn-outline-secondary me-3" type="button" id="btnToggleSidebar" title="Alternar Menu">
            <i class="bi bi-list fs-5"></i>
        </button>

        <!-- Campo de Busca Rápida -->
        <div class="input-group d-none d-md-flex" style="max-width: 300px;">
            <span class="input-group-text bg-dark border-secondary text-secondary"><i class="bi bi-search"></i></span>
            <input type="text" class="form-control bg-dark border-secondary text-white" placeholder="Buscar pedido, código...">
        </div>
    </div>

    <!-- Perfil e Notificações -->
    <div class="d-flex align-items-center gap-3">
        <!-- Notificações -->
        <button class="btn btn-link text-secondary position-relative p-1">
            <i class="bi bi-bell fs-5"></i>
            <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-dark rounded-circle"></span>
        </button>

        <!-- Dropdown do Usuário -->
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 36px; height: 36px; font-weight: 600;">
                    OP
                </div>
                <span class="d-none d-md-inline small fw-semibold">Operador Silva</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark shadow border-secondary">
                <li><a class="dropdown-item" href="perfil.php"><i class="bi bi-person me-2"></i> Meu Perfil</a></li>
                <li><a class="dropdown-item" href="configuracoes.php"><i class="bi bi-gear me-2"></i> Configurações</a></li>
                <li><hr class="dropdown-divider border-secondary"></li>
                <li><a class="dropdown-item text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> Sair</a></li>
            </ul>
        </div>
    </div>
</header>