<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . " - Empacotamento" : "Sistema Empacotamento"; ?></title>
    
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #0f172a;
            color: #f8fafc;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Sidebar Fixa */
        .sidebar {
            position: fixed;
            left: 0;
            bottom: 0;
            height: calc(100vh - 64px);
            width: 260px;
            background-color: #1e293b;
            border-right: 1px solid #334155;
            transition: width 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 1030;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .sidebar .nav-link {
            color: #94a3b8;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            margin-bottom: 0.25rem;
            font-weight: 500;
            white-space: nowrap;
            display: flex;
            align-items: center;
        }

        .sidebar .nav-link:hover {
            color: #ffffff;
            background-color: #334155;
        }

        .sidebar .nav-link.active {
            color: #ffffff;
            background-color: #2563eb;
        }

        .sidebar .nav-link i {
            font-size: 1.25rem;
            min-width: 2rem;
        }

        /* Estado Encolhido (Collapsed) da Sidebar */
        body.sidebar-collapsed .sidebar {
            width: 78px;
        }

        body.sidebar-collapsed .sidebar .brand-text,
        body.sidebar-collapsed .sidebar .nav-text,
        body.sidebar-collapsed .sidebar hr {
            display: none !important;
        }

        body.sidebar-collapsed .sidebar .nav-link {
            justify-content: center;
            padding: 0.75rem 0;
        }

        body.sidebar-collapsed .sidebar .nav-link i {
            min-width: auto;
            margin-right: 0 !important;
        }

        /* Adjusting Main Wrapper para respeitar a Sidebar Fixa */
        .main-wrapper {
            margin-left: 260px;
            transition: margin-left 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        body.sidebar-collapsed .main-wrapper {
            margin-left: 78px;
        }

        /* Topbar Fixa/Sticky */
        .topbar {
            background-color: #1e293b;
            border-bottom: 1px solid #334155;
            height: 64px;
            width: 100%;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 1020;
        }

        /* Conteúdo Principal */
        .main-content {
            margin-top: 64px;
            background-color: #0f172a;
            flex: 1;
        }

        @media (max-width: 991.98px) {
            .sidebar {
                margin-left: -260px;
            }
            body.sidebar-collapsed .sidebar {
                margin-left: 0;
                width: 260px;
            }
            .main-wrapper, body.sidebar-collapsed .main-wrapper {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>