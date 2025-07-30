<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad Familia Medellín - Panel Principal</title>
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/tailwind-custom.css'); ?>">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Custom scrollbar for better aesthetics */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background-color: #cbd5e1; /* neutral-300 */
            border-radius: 20px;
        }
        .dark ::-webkit-scrollbar-thumb {
            background-color: #475569; /* slate-600 */
        }
        /* For Kanban drag placeholder */
        .ghost {
            background: #e0f2fe; /* sky-100 */
            border: 2px dashed #0ea5e9; /* sky-500 */
            opacity: 0.7;
        }
        .dark .ghost {
            background: #0c4a6e; /* sky-900 */
            border-color: #38bdf8; /* sky-400 */
        }
    </style>

</head>
<body class="bg-slate-100 dark:bg-slate-900 text-slate-800 dark:text-slate-200 transition-colors duration-300">

    <div class="flex h-screen">
        <aside id="sidebar" class="fixed inset-y-0 left-0 bg-white dark:bg-slate-800 w-72 transform transition-transform duration-300 ease-in-out z-40">
            <div class="flex flex-col h-full border-r border-slate-200 dark:border-slate-700">
                <div class="flex items-center justify-center h-20 border-b border-slate-200 dark:border-slate-700 px-4">
                    <a href="#" data-view="directorio" class="nav-link flex items-center gap-3 text-xl font-bold text-primary dark:text-white">
                        <svg class="h-10 w-10 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                          <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-4-4 1.41-1.41L10 13.17l7.59-7.59L19 7l-9 9z"/>
                        </svg>
                        <span class="whitespace-nowrap">Unidad Familia Medellín</span>
                    </a>
                </div>

                <nav class="flex-1 p-4 space-y-2">
                    <a href="#" data-view="directorio" class="nav-link flex items-center px-4 py-2.5 rounded-lg transition-colors duration-200">
                        <svg class="w-6 h-6 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" /></svg>
                        Directorio Hogares
                    </a>
                    <a href="#" data-view="seguimiento" class="nav-link flex items-center px-4 py-2.5 rounded-lg transition-colors duration-200">
                        <svg class="w-6 h-6 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 100 15 7.5 7.5 0 000-15z" /><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.2-5.2" /></svg>
                        Seguimiento
                    </a>
                    <a href="#" data-view="visita" class="nav-link flex items-center px-4 py-2.5 rounded-lg transition-colors duration-200">
                        <svg class="w-6 h-6 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0h18M12 12.75h.008v.008H12v-.008z" /></svg>
                        Programar Visita
                    </a>
                </nav>
            </div>
        </aside>
        
        <div id="sidebar-overlay" class="fixed inset-0 bg-black/30 z-30 lg:hidden hidden"></div>

        <div id="main-content" class="flex-1 flex flex-col transition-all duration-300 ease-in-out">
            
            <header class="flex-shrink-0 bg-white dark:bg-slate-800 shadow-sm dark:border-b dark:border-slate-700">
                <div class="flex items-center justify-between h-20 px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center">
                        <button id="sidebar-toggle" class="lg:hidden text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-white mr-4">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
                        </button>
                    </div>
                    
                    <div class="flex items-center gap-4">
                        <button id="theme-toggle" class="text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-white">
                             <svg id="theme-icon-light" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" /></svg>
                             <svg id="theme-icon-dark" class="w-6 h-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" /></svg>
                        </button>
                    </div>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8">

                <div id="directorio-view" class="view-content">
                    <div class="flex items-center justify-between mb-6">
                        <h1 class="text-3xl font-bold">Directorio de Hogares</h1>
                    </div>
                    <div class="mb-6">
                        <form action="<?= base_url('llamadas_m2/c_llamadas_m2/index') ?>" method="get" class="flex items-center max-w-lg mx-auto">
                            <input type="text" name="filtro" value="<?= isset($filtro_actual) ? htmlspecialchars($filtro_actual) : '' ?>" placeholder="Buscar por folio o nombre de jefe de hogar..." class="w-full px-4 py-2 border-slate-300 dark:border-slate-600 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-primary dark:bg-slate-800">
                            <button type="submit" class="px-6 py-2 bg-primary text-white rounded-r-lg hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">Buscar</button>
                        </form>
                    </div>
                    <div class="grid grid-cols-4 gap-6">
                        <?php if (isset($hogares) && !empty($hogares)):
                            foreach ($hogares as $hogar):
                        ?>
                                <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-md text-center">
                                    <div class="w-24 h-24 mx-auto rounded-full -mt-12 border-4 border-white dark:border-slate-800 <?= $hogar['color']['bg'] ?> flex items-center justify-center">
                                        <span class="text-4xl font-bold <?= $hogar['color']['text'] ?>"><?= htmlspecialchars($hogar['inicial']) ?></span>
                                    </div>
                                    <h3 class="mt-4 text-xl font-semibold"><?= htmlspecialchars($hogar['nombre_familia']) ?></h3>
                                    <p class="mt-1 text-slate-500 dark:text-slate-400 font-mono">Folio: <?= htmlspecialchars($hogar['folio']) ?></p>
                                    <p class="mt-1 text-slate-500 dark:text-slate-400">Jefe de Hogar: <?= htmlspecialchars($hogar['jefe_hogar']) ?></p>
                                    <div class="mt-4">
                                        <div class="flex justify-between items-center mb-1">
                                            <span class="text-sm font-medium text-slate-600 dark:text-slate-300">Progreso de Logros</span>
                                            <span class="text-sm font-bold text-primary"><?= $hogar['porcentaje_total'] ?>%</span>
                                        </div>
                                        <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2.5">
                                            <div class="bg-primary h-2.5 rounded-full" style="width: <?= $hogar['porcentaje_total'] ?>%"></div>
                                        </div>
                                    </div>
                                    <a href="<?= site_url('llamadas_m2/c_llamadas_m2/vista_hogar_simple/' . $hogar['folio']) ?>" class="mt-4 block w-full bg-primary/10 hover:bg-primary/20 text-primary font-semibold py-2 px-4 rounded-lg text-center">Gestionar Hogar</a>
                                </div>
                        <?php 
                            endforeach;
                        else:
                        ?>
                            <div class="col-span-full text-center py-12">
                                <p class="text-slate-500 dark:text-slate-400 text-lg">No se encontraron hogares que coincidan con su búsqueda.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mt-6">
                        <?php if (isset($pagination_links)) { echo $pagination_links; } ?>
                    </div>
                </div>

                <div id="seguimiento-view" class="view-content hidden">
                    <h1 class="text-3xl font-bold mb-6">Seguimiento de Llamadas</h1>
                    <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left">
                                <thead class="bg-slate-50 dark:bg-slate-700/50"><tr><th scope="col" class="px-6 py-3 font-medium">Hogar (Folio)</th><th scope="col" class="px-6 py-3 font-medium">Fecha y Hora</th><th scope="col" class="px-6 py-3 font-medium">Resultado</th><th scope="col" class="px-6 py-3 font-medium">Notas</th><th scope="col" class="px-6 py-3 font-medium text-right">Acciones</th></tr></thead>
                                <tbody>
                                    <tr class="border-b dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors"><td class="px-6 py-4 font-semibold">Familia Rojas (23451)</td><td class="px-6 py-4 text-slate-500 dark:text-slate-400">Hoy, 09:15 AM</td><td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold rounded-full bg-emerald-100 text-emerald-800 dark:bg-emerald-900/50 dark:text-emerald-300">Contacto Exitoso</span></td><td class="px-6 py-4 text-slate-500 dark:text-slate-400 max-w-xs truncate">Se presentó el programa, agendada visita.</td><td class="px-6 py-4 text-right"><button class="p-1.5 text-slate-500 hover:text-primary dark:hover:text-white rounded-md"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639l4.433-7.58a1.012 1.012 0 011.696 0l4.433 7.58a1.012 1.012 0 010 .639l-4.433 7.58a1.012 1.012 0 01-1.696 0l-4.433-7.58z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg></button><button class="p-1.5 text-slate-500 hover:text-primary dark:hover:text-white rounded-md"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" /></svg></button></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div id="visita-view" class="view-content hidden">
                    <h1 class="text-3xl font-bold">Programar Visita</h1>
                    <p>Esta es la vista para programar una visita. El contenido se cargará aquí.</p>
                </div>

            </main>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // --- Constants & State --- //
        const APLICATION_KEY = 'familia_medellin_theme';
        let isSidebarOpen = window.innerWidth >= 1024;

        // --- DOM Elements --- //
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const sidebarOverlay = document.getElementById('sidebar-overlay');
        const mainContent = document.getElementById('main-content');
        const themeToggle = document.getElementById('theme-toggle');
        const lightIcon = document.getElementById('theme-icon-light');
        const darkIcon = document.getElementById('theme-icon-dark');
        const navLinks = document.querySelectorAll('.nav-link');
        const views = document.querySelectorAll('.view-content');

        // --- Theme Management --- //
        const applyTheme = (theme) => {
            document.documentElement.classList.toggle('dark', theme === 'dark');
            lightIcon.classList.toggle('hidden', theme === 'dark');
            darkIcon.classList.toggle('hidden', theme !== 'dark');
        };

        const toggleTheme = () => {
            const newTheme = document.documentElement.classList.contains('dark') ? 'light' : 'dark';
            localStorage.setItem(APLICATION_KEY, newTheme);
            applyTheme(newTheme);
        };

        // --- Sidebar Management --- //
        const updateSidebar = () => {
            sidebar.classList.toggle('-translate-x-full', !isSidebarOpen);
            mainContent.classList.toggle('lg:ml-72', isSidebarOpen);
            if (window.innerWidth < 1024) {
                sidebarOverlay.classList.toggle('hidden', !isSidebarOpen);
            }
        };

        // --- View Management --- //
        const setActiveView = (viewId) => {
            const targetViewId = viewId.endsWith('-view') ? viewId : `${viewId}-view`;
            
            views.forEach(view => {
                view.classList.add('hidden');
            });
            document.getElementById(targetViewId)?.classList.remove('hidden');

            navLinks.forEach(link => {
                const linkView = link.getAttribute('data-view');
                const isActive = linkView === viewId;
                link.classList.toggle('bg-primary/10', isActive);
                link.classList.toggle('text-primary', isActive);
                link.classList.toggle('dark:bg-primary/20', isActive);
                link.classList.toggle('hover:bg-slate-100', !isActive);
                link.classList.toggle('dark:hover:bg-slate-700', !isActive);
            });

            if (window.innerWidth < 1024 && isSidebarOpen) {
                isSidebarOpen = false;
                updateSidebar();
            }
        };

        // --- Event Listeners --- //
        themeToggle.addEventListener('click', toggleTheme);

        sidebarToggle.addEventListener('click', () => {
            isSidebarOpen = !isSidebarOpen;
            updateSidebar();
        });

        sidebarOverlay.addEventListener('click', () => {
            isSidebarOpen = false;
            updateSidebar();
        });

        window.addEventListener('resize', () => {
            const isDesktop = window.innerWidth >= 1024;
            if (isSidebarOpen !== isDesktop) {
                isSidebarOpen = isDesktop;
                updateSidebar();
            }
        });

        navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const viewId = link.getAttribute('data-view');
                if (viewId) setActiveView(viewId);
            });
        });

        // --- Initialization --- //
        const initialTheme = localStorage.getItem(APLICATION_KEY) || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
        applyTheme(initialTheme);
        updateSidebar();
        setActiveView('directorio'); // Default view
    });
    </script>
</body>
</html>
