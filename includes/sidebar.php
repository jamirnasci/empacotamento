<aside class="sidebar d-flex flex-column p-3">
    <!-- Brand / Logo -->
    <a href="dashboard.php" class="d-flex align-items-center mb-4 text-white text-decoration-none px-2">
        <i class="bi bi-box-seam-fill text-primary fs-3 me-2"></i>
        <span class="fs-4 fw-bold brand-text">Empacotamento</span>
    </a>

    <!-- Menu de Navegação -->
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="dashboard.php" class="nav-link <?php echo ($activePage === 'dashboard') ? 'active' : ''; ?>" title="Dashboard">
                <i class="bi bi-speedometer2"></i>
                <span class="nav-text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="apontamento.php" class="nav-link <?php echo ($activePage === 'apontamento') ? 'active' : ''; ?>" title="Apontamento">
                <i class="bi bi-pencil-square"></i>
                <span class="nav-text">Apontamento</span>
            </a>
        </li>
        <li>
            <a href="pedidos.php" class="nav-link <?php echo ($activePage === 'pedidos') ? 'active' : ''; ?>" title="Pedidos">
                <i class="bi bi-box-seam"></i>
                <span class="nav-text">Pedidos</span>
            </a>
        </li>
        <li>
            <a href="conferencia.php" class="nav-link <?php echo ($activePage === 'conferencia') ? 'active' : ''; ?>" title="Conferência">
                <i class="bi bi-qr-code-scan"></i>
                <span class="nav-text">Conferência / Bipagem</span>
            </a>
        </li>
        <li>
            <a href="expedicao.php" class="nav-link <?php echo ($activePage === 'expedicao') ? 'active' : ''; ?>" title="Expedição">
                <i class="bi bi-truck"></i>
                <span class="nav-text">Expedição</span>
            </a>
        </li>
        <li>
            <a href="relatorios.php" class="nav-link <?php echo ($activePage === 'relatorios') ? 'active' : ''; ?>" title="Relatórios">
                <i class="bi bi-bar-chart-line"></i>
                <span class="nav-text">Relatórios</span>
            </a>
        </li>
    </ul>

    <hr class="border-secondary my-3">

    <!-- Configurações -->
    <ul class="nav nav-pills flex-column">
        <li>
            <a href="configuracoes.php" class="nav-link <?php echo ($activePage === 'configuracoes') ? 'active' : ''; ?>" title="Configurações">
                <i class="bi bi-gear"></i>
                <span class="nav-text">Configurações</span>
            </a>
        </li>
    </ul>
</aside>