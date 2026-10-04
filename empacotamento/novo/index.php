<?php 
// Configurações da página
$pageTitle = "Apontamento de Produção";
$activePage = "apontamento";

// Carrega o cabeçalho do layout
require_once __DIR__ . '/../../includes/head.php'; 
?>
<?php require_once __DIR__ . '/../../includes/sidebar.php'; ?>

<div class="d-flex min-vh-100">
    <!-- Sidebar Desktop -->

    <div class="flex-grow-1 d-flex flex-column">
        <!-- Topbar -->
        <div class="main-wrapper">
            <?php require_once __DIR__ . '/../../includes/topbar.php'; ?>
        <!-- Conteúdo Principal -->
        <main class="main-content p-3 p-lg-4">
            
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="h3 fw-bold mb-1">Apontamento de Empacotamento</h2>
                    <p class="text-secondary mb-0">Registre os dados de produção, caixas e métricas do turno.</p>
                </div>
            </div>

            <!-- Card do Formulário -->
            <div class="card border-secondary shadow-sm" style="background-color: #161f2e;">
                <div class="card-body p-4">
                    <form action="salvar_apontamento.php" method="POST">
                        
                        <!-- Linha 1: Data, Produto, Colaborador, Início, Fim -->
                        <div class="row g-3 mb-3">
                            <div class="col-12 col-md-2">
                                <label for="data" class="form-label text-secondary small fw-semibold">Data</label>
                                <input type="date" class="form-control bg-dark border-secondary text-white" id="data" name="data" value="2026-10-01" required>
                            </div>

                            <div class="col-12 col-md-4">
                                <label for="produto" class="form-label text-secondary small fw-semibold">Produto</label>
                                <select class="form-select border-secondary text-white" id="produto" name="produto" required>
                                    <option value="" selected disabled>Selecione o produto</option>
                                    <option value="1">Produto A</option>
                                    <option value="2">Produto B</option>
                                    <option value="3">Produto C</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-3">
                                <label for="colaborador" class="form-label text-secondary small fw-semibold">Colaborador</label>
                                <select class="form-select bg-dark border-secondary text-white" id="colaborador" name="colaborador" required>
                                    <option value="" selected disabled>Selecione</option>
                                    <option value="1">João Silva</option>
                                    <option value="2">Maria Souza</option>
                                    <option value="3">Carlos Oliveira</option>
                                </select>
                            </div>

                            <div class="col-6 col-md-1-5 col-lg-1.5" style="flex: 0 0 auto; width: 12.5%;">
                                <label for="inicio" class="form-label text-secondary small fw-semibold">Início</label>
                                <input type="time" class="form-control bg-dark border-secondary text-white" id="inicio" name="inicio" value="07:00" required>
                            </div>

                            <div class="col-6 col-md-1-5 col-lg-1.5" style="flex: 0 0 auto; width: 12.5%;">
                                <label for="fim" class="form-label text-secondary small fw-semibold">Fim</label>
                                <input type="time" class="form-control bg-dark border-secondary text-white" id="fim" name="fim">
                            </div>
                        </div>

                        <!-- Linha 2: Total (kg) e Meta (kg) -->
                        <div class="row g-3 mb-4">
                            <div class="col-12 col-md-2">
                                <label for="total_kg" class="form-label text-secondary small fw-semibold">Total (kg)</label>
                                <input type="text" class="form-control bg-dark border-secondary text-white" id="total_kg" name="total_kg" placeholder="0,00">
                            </div>

                            <div class="col-12 col-md-2">
                                <label for="meta_kg" class="form-label text-secondary small fw-semibold">Meta (kg)</label>
                                <input type="text" class="form-control bg-dark border-secondary text-white" id="meta_kg" name="meta_kg" placeholder="0,00">
                            </div>
                        </div>

                        <!-- Linha 3: Caixas por tipo (CX1 a CX8) -->
                        <div class="mb-4">
                            <label class="form-label text-secondary small fw-semibold">Caixas por tipo (CX1 a CX8)</label>
                            <div class="row g-2">
                                <div class="col-6 col-sm-3 col-md">
                                    <input type="number" class="form-control bg-dark border-secondary text-white" name="cx1" placeholder="CX1" min="0">
                                </div>
                                <div class="col-6 col-sm-3 col-md">
                                    <input type="number" class="form-control bg-dark border-secondary text-white" name="cx2" placeholder="CX2" min="0">
                                </div>
                                <div class="col-6 col-sm-3 col-md">
                                    <input type="number" class="form-control bg-dark border-secondary text-white" name="cx3" placeholder="CX3" min="0">
                                </div>
                                <div class="col-6 col-sm-3 col-md">
                                    <input type="number" class="form-control bg-dark border-secondary text-white" name="cx4" placeholder="CX4" min="0">
                                </div>
                                <div class="col-6 col-sm-3 col-md">
                                    <input type="number" class="form-control bg-dark border-secondary text-white" name="cx5" placeholder="CX5" min="0">
                                </div>
                                <div class="col-6 col-sm-3 col-md">
                                    <input type="number" class="form-control bg-dark border-secondary text-white" name="cx6" placeholder="CX6" min="0">
                                </div>
                                <div class="col-6 col-sm-3 col-md">
                                    <input type="number" class="form-control bg-dark border-secondary text-white" name="cx7" placeholder="CX7" min="0">
                                </div>
                                <div class="col-6 col-sm-3 col-md">
                                    <input type="number" class="form-control bg-dark border-secondary text-white" name="cx8" placeholder="CX8" min="0">
                                </div>
                            </div>
                        </div>

                        <!-- Linha 4: Unidades soltas (UNI) e URL da imagem -->
                        <div class="row g-3 mb-4">
                            <div class="col-12 col-md-2">
                                <label for="unidades_soltas" class="form-label text-secondary small fw-semibold">Unidades soltas (UNI)</label>
                                <input type="number" class="form-control bg-dark border-secondary text-white" id="unidades_soltas" name="unidades_soltas" value="0" min="0">
                            </div>

                            <div class="col-12 col-md-4">
                                <label for="url_imagem" class="form-label text-secondary small fw-semibold">URL da imagem</label>
                                <input type="url" class="form-control bg-dark border-secondary text-white" id="url_imagem" name="url_imagem" placeholder="https://...">
                            </div>
                        </div>

                        <!-- Linha 5: Observação -->
                        <div class="mb-4">
                            <label for="observacao" class="form-label text-secondary small fw-semibold">Observação</label>
                            <textarea class="form-control bg-dark border-secondary text-white" id="observacao" name="observacao" rows="4"></textarea>
                        </div>

                        <!-- Botões de Ação -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn text-dark fw-bold px-4" style="background-color: #f59e0b;">Salvar apontamento</button>
                            <button type="reset" class="btn btn-outline-secondary px-4">Limpar</button>
                        </div>

                    </form>
                </div>
            </div>

        </main>
</div>
<?php 
// Carrega o rodapé do layout
require_once __DIR__ . '/../../includes/footer.php'; 
?>