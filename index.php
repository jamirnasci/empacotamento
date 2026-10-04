<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema Empacotamento</title>
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #0f172a; /* Azul bem escuro/Grafite */
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .login-card {
            background-color: #1e293b;
            border: 1px solid #334155;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            max-width: 420px;
            width: 100%;
        }

        .login-header {
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            color: #ffffff;
            padding: 2.5rem 1.5rem 1.5rem 1.5rem;
            text-align: center;
        }

        .brand-icon {
            font-size: 3rem;
            margin-bottom: 0.5rem;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.3));
        }

        .form-control, .input-group-text {
            background-color: #0f172a;
            border-color: #334155;
            color: #f8fafc;
        }

        .form-control:focus {
            background-color: #0f172a;
            border-color: #3b82f6;
            color: #ffffff;
            box-shadow: 0 0 0 0.25rem rgba(59, 130, 246, 0.25);
        }

        .input-group-text {
            color: #94a3b8;
        }

        .btn-primary {
            background-color: #2563eb;
            border-color: #2563eb;
            padding: 0.75rem;
            font-weight: 600;
            border-radius: 0.5rem;
        }

        .btn-primary:hover {
            background-color: #1d4ed8;
            border-color: #1d4ed8;
        }

        .btn-outline-secondary {
            border-color: #334155;
            color: #94a3b8;
        }

        .btn-outline-secondary:hover {
            background-color: #334155;
            color: #ffffff;
        }

        .card-footer {
            background-color: #182234;
            border-top: 1px solid #334155;
        }
    </style>
</head>
<body>

    <div class="container p-3">
        <div class="card login-card mx-auto">
            <!-- Cabeçalho / Banner Dark -->
            <div class="login-header">
                <div class="brand-icon">
                    <i class="bi bi-box-seam-fill"></i>
                </div>
                <h3 class="fw-bold mb-1">Empacotamento</h3>
                <p class="mb-0 text-white-50 small">Acesse o sistema de gestão e logística</p>
            </div>

            <!-- Corpo do Formulário -->
            <div class="card-body p-4">
                <form action="autenticar.php" method="POST" class="needs-validation" novalidate>
                    
                    <!-- Campo de Usuário / E-mail -->
                    <div class="mb-3">
                        <label for="usuario" class="form-label text-light-50 small fw-semibold">Usuário ou E-mail</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="digite seu usuário" required autocomplete="username">
                            <div class="invalid-feedback">
                                Por favor, informe seu usuário ou e-mail.
                            </div>
                        </div>
                    </div>

                    <!-- Campo de Senha -->
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <label for="senha" class="form-label text-light-50 small fw-semibold">Senha</label>
                            <a href="#" class="text-decoration-none small text-info">Esqueceu a senha?</a>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="••••••••" required autocomplete="current-password">
                            <button class="btn btn-outline-secondary" type="button" id="toggleSenha">
                                <i class="bi bi-eye" id="iconeOlho"></i>
                            </button>
                            <div class="invalid-feedback">
                                Por favor, informe sua senha.
                            </div>
                        </div>
                    </div>

                    <!-- Opção Lembrar-me -->
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="lembrar" name="lembrar">
                        <label class="form-check-label small text-secondary" for="lembrar">
                            Lembrar-me neste dispositivo
                        </label>
                    </div>

                    <!-- Botão de Login -->
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary btn-lg shadow-sm">
                            <i class="bi bi-box-arrow-in-right me-2"></i>Entrar
                        </button>
                    </div>

                </form>
            </div>

            <!-- Rodapé da Card -->
            <div class="card-footer text-center py-3">
                <span class="text-secondary small">&copy; <?php echo date('Y'); ?> Sistema Empacotamento v1.0</span>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Scripts de Interatividade -->
    <script>
        // Validação dos campos pelo Bootstrap
        (() => {
            'use strict'
            const forms = document.querySelectorAll('.needs-validation')
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()

        // Alternar visibilidade da senha (mostrar/ocultar)
        const toggleSenhaBtn = document.getElementById('toggleSenha');
        const campoSenha = document.getElementById('senha');
        const iconeOlho = document.getElementById('iconeOlho');

        toggleSenhaBtn.addEventListener('click', () => {
            const tipoAtual = campoSenha.getAttribute('type');
            if (tipoAtual === 'password') {
                campoSenha.setAttribute('type', 'text');
                iconeOlho.classList.remove('bi-eye');
                iconeOlho.classList.add('bi-eye-slash');
            } else {
                campoSenha.setAttribute('type', 'password');
                iconeOlho.classList.remove('bi-eye-slash');
                iconeOlho.classList.add('bi-eye');
            }
        });
    </script>
</body>
</html>