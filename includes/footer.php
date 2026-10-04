<!-- Rodapé do Conteúdo -->
        <footer class="footer mt-auto py-3 px-4 border-top border-secondary text-secondary text-center text-md-start small">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <span>&copy; <?php echo date('Y'); ?> Sistema Empacotamento - Todos os direitos reservados.</span>
                <span class="mt-2 mt-md-0">Versão 1.0.0</span>
            </div>
        </footer>

    </div> <!-- Fim da div main-wrapper -->

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script de Encolher/Expandir Sidebar -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btnToggle = document.getElementById('btnToggleSidebar');
        const body = document.body;

        // Recupera o estado salvo no navegador (se houver)
        if (localStorage.getItem('sidebar-collapsed') === 'true') {
            body.classList.add('sidebar-collapsed');
        }

        // Alterna o estado ao clicar no botão da topbar
        btnToggle.addEventListener('click', () => {
            body.classList.toggle('sidebar-collapsed');
            const isCollapsed = body.classList.contains('sidebar-collapsed');
            localStorage.setItem('sidebar-collapsed', isCollapsed);
        });
    });
</script>
</body>
</html>