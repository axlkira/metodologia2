<!DOCTYPE html>
<html lang="es" x-data="app()" x-init="init" :class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad Familia Medellín - Panel Principal</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    
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
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#4f46e5', // indigo-600
                            '50': '#eef2ff',
                            '100': '#e0e7ff',
                            '200': '#c7d2fe',
                            '300': '#a5b4fc',
                            '400': '#818cf8',
                            '500': '#6366f1',
                            '600': '#4f46e5',
                            '700': '#4338ca',
                            '800': '#3730a3',
                            '900': '#312e81',
                        },
                        secondary: {
                            DEFAULT: '#06b6d4', // cyan-500
                            '50': '#ecfeff',
                            '100': '#cffafe',
                            '200': '#a5f3fc',
                            '300': '#67e8f9',
                            '400': '#22d3ee',
                            '500': '#06b6d4',
                            '600': '#0891b2',
                            '700': '#0e7490',
                            '800': '#155e75',
                            '900': '#164e63',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-100 dark:bg-slate-900 text-slate-800 dark:text-slate-200 transition-colors duration-300">

    <div class="flex h-screen">
        <script>
            function app() {
                return {
                    darkMode: false,
                    isSidebarOpen: window.innerWidth >= 1024, // Open by default on desktop
                    // Added 'visita' view for the new component
                    currentView: '<?php echo isset($vista_actual) ? $vista_actual : 'gestion'; ?>',
                    previousView: 'directorio', // To know where to return to
                    
                    // Initialize dark mode from localStorage
                    init() {
                        const storedTheme = localStorage.getItem('familia_medellin_theme');
                        if (storedTheme === 'dark' || (storedTheme === null && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                            this.darkMode = true;
                        }
                    },
                    // Watch for changes in darkMode and persist to localStorage
                    toggleTheme() {
                        this.darkMode = !this.darkMode;
                        localStorage.setItem('familia_medellin_theme', this.darkMode ? 'dark' : 'light');
                    },
                    // Function to change view and close sidebar on mobile
                    setView(view) {
                        if (this.currentView !== view) {
                            this.previousView = this.currentView;
                        }
                        this.currentView = view;
                        if (window.innerWidth < 1024) {
                            this.isSidebarOpen = false;
                        }
                    },
                    // Function to go back to the previous view
                    goBack() {
                        this.currentView = this.previousView;
                    }
                }
            }
        </script>

        <aside 
            class="fixed inset-y-0 left-0 bg-white dark:bg-slate-800 w-72 transform transition-transform duration-300 ease-in-out z-40 lg:translate-x-0"
            :class="{ '-translate-x-full': !isSidebarOpen }"
        >
            <div class="flex flex-col h-full border-r border-slate-200 dark:border-slate-700">
                <div class="flex items-center justify-center h-20 border-b border-slate-200 dark:border-slate-700 px-4">
                    <a href="#" @click.prevent="setView('dashboard')" class="flex items-center gap-3 text-xl font-bold text-primary dark:text-white">
                        <svg class="h-10 w-10 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                          <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-4-4 1.41-1.41L10 13.17l7.59-7.59L19 7l-9 9z"/>
                        </svg>
                        <span class="whitespace-nowrap">Unidad Familia Medellín</span>
                    </a>
                </div>

                <nav class="flex-1 p-4 space-y-2">
                    <a href="#" @click.prevent="setView('directorio')" class="flex items-center px-4 py-2.5 rounded-lg transition-colors duration-200" :class="{ 'bg-primary/10 text-primary dark:bg-primary/20': currentView === 'directorio', 'hover:bg-slate-100 dark:hover:bg-slate-700': currentView !== 'directorio' }">
                        <svg class="w-6 h-6 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 002.175 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" /></svg>
                        Directorio Hogares
                    </a>
                    <a href=""  class="flex items-center px-4 py-2.5 rounded-lg transition-colors duration-200" :class="{ 'bg-primary/10 text-primary dark:bg-primary/20': currentView === 'visita' || currentView === 'gestion', 'hover:bg-slate-100 dark:hover:bg-slate-700': currentView !== 'visita' && currentView !== 'gestion' }">
                        <svg class="w-6 h-6 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" /></svg>
                        Gestión de Hogares
                    </a>
                    <a href="#" @click.prevent="setView('seguimiento')" class="flex items-center px-4 py-2.5 rounded-lg transition-colors duration-200" :class="{ 'bg-primary/10 text-primary dark:bg-primary/20': currentView === 'seguimiento', 'hover:bg-slate-100 dark:hover:bg-slate-700': currentView !== 'seguimiento' }">
                        <svg class="w-6 h-6 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg>
                        Seguimiento Telefónico
                    </a>
                   
                </nav>

                <div class="p-4 border-t border-slate-200 dark:border-slate-700">
                    <div class="flex items-center">
                        <img class="h-10 w-10 rounded-full object-cover" src="https://placehold.co/100x100/6366f1/white?text=A" alt="Avatar de usuario">
                        <div class="ml-3">
                            <p class="text-sm font-semibold">Ana García</p>
                            <a href="#" class="text-xs text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-secondary">Cerrar Sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        
        <div x-show="isSidebarOpen" @click="isSidebarOpen = false" class="fixed inset-0 bg-black/30 z-30 lg:hidden" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>


        <div class="flex-1 flex flex-col transition-all duration-300 ease-in-out" :class="{ 'lg:ml-72': isSidebarOpen }">
            
            <header class="flex-shrink-0 bg-white dark:bg-slate-800 shadow-sm dark:border-b dark:border-slate-700">
                <div class="flex items-center justify-between h-20 px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center">
                        <button @click="isSidebarOpen = !isSidebarOpen" class="lg:hidden text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-white mr-4">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
                        </button>
                        <div class="relative hidden sm:block">
                            <svg class="w-5 h-5 text-slate-400 absolute left-3 top-1/2 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" /></svg>
                            <input type="text" placeholder="Buscar por Folio o Integrante..." class="w-full max-w-xs pl-10 pr-4 py-2 bg-slate-100 dark:bg-slate-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-4">
                         <button class="relative text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-white">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" /></svg>
                            <span class="absolute -top-1 -right-1 flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-secondary"></span>
                            </span>
                        </button>
                        
                        <button @click="toggleTheme()" class="text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-white">
                             <svg x-show="!darkMode" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" /></svg>
                             <svg x-show="darkMode" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" /></svg>
                        </button>
                    </div>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8">
                
                <!-- The dashboard view has been removed as per user request -->



                <div x-show="currentView === 'seguimiento'" x-transition>
                    <div class="flex items-center justify-between mb-6">
                        <h1 class="text-3xl font-bold">Seguimiento Telefónico</h1>
                        <button class="bg-primary hover:bg-primary-700 text-white font-bold py-2 px-4 rounded-lg flex items-center gap-2"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>Registrar Llamada</button>
                    </div>
                    <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left">
                                <thead class="bg-slate-50 dark:bg-slate-700/50"><tr><th scope="col" class="px-6 py-3 font-medium">Hogar (Folio)</th><th scope="col" class="px-6 py-3 font-medium">Fecha y Hora</th><th scope="col" class="px-6 py-3 font-medium">Resultado</th><th scope="col" class="px-6 py-3 font-medium">Notas</th><th scope="col" class="px-6 py-3 font-medium text-right">Acciones</th></tr></thead>
                                <tbody>
                                    <tr class="border-b dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors"><td class="px-6 py-4 font-semibold">1524145</td><td class="px-6 py-4 text-slate-500 dark:text-slate-400">Hoy, 09:15 AM</td><td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold rounded-full bg-emerald-100 text-emerald-800 dark:bg-emerald-900/50 dark:text-emerald-300">Contacto Exitoso</span></td><td class="px-6 py-4 text-slate-500 dark:text-slate-400 max-w-xs truncate">Se presentó el programa, agendada visita.</td><td class="px-6 py-4 text-right"><button class="p-1.5 text-slate-500 hover:text-primary dark:hover:text-white rounded-md"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639l4.433-7.58a1.012 1.012 0 011.696 0l4.433 7.58a1.012 1.012 0 010 .639l-4.433 7.58a1.012 1.012 0 01-1.696 0l-4.433-7.58z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg></button><button class="p-1.5 text-slate-500 hover:text-primary dark:hover:text-white rounded-md"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" /></svg></button></td></tr>
                                    <tr class="border-b dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors"><td class="px-6 py-4 font-semibold">5214587</td><td class="px-6 py-4 text-slate-500 dark:text-slate-400">Ayer, 3:30 PM</td><td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold rounded-full bg-amber-100 text-amber-800 dark:bg-amber-900/50 dark:text-amber-300">No Contesta</span></td><td class="px-6 py-4 text-slate-500 dark:text-slate-400 max-w-xs truncate">Segundo intento sin respuesta.</td><td class="px-6 py-4 text-right"><button class="p-1.5 text-slate-500 hover:text-primary dark:hover:text-white rounded-md"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639l4.433-7.58a1.012 1.012 0 011.696 0l4.433 7.58a1.012 1.012 0 010 .639l-4.433 7.58a1.012 1.012 0 01-1.696 0l-4.433-7.58z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg></button><button class="p-1.5 text-slate-500 hover:text-primary dark:hover:text-white rounded-md"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" /></svg></button></td></tr>
                                    <tr class="border-b dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors"><td class="px-6 py-4 font-semibold">6587452</td><td class="px-6 py-4 text-slate-500 dark:text-slate-400">18 Jun 2025, 11:00 AM</td><td class="px-6 py-4"><span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900/50 dark:text-blue-300">Requiere Seguimiento</span></td><td class="px-6 py-4 text-slate-500 dark:text-slate-400 max-w-xs truncate">Id. integrante 02 interesado en curso.</td><td class="px-6 py-4 text-right"><button class="p-1.5 text-slate-500 hover:text-primary dark:hover:text-white rounded-md"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639l4.433-7.58a1.012 1.012 0 011.696 0l4.433 7.58a1.012 1.012 0 010 .639l-4.433 7.58a1.012 1.012 0 01-1.696 0l-4.433-7.58z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg></button><button class="p-1.5 text-slate-500 hover:text-primary dark:hover:text-white rounded-md"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" /></svg></button></td></tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="flex items-center justify-between p-4"><span class="text-sm text-slate-500 dark:text-slate-400">Mostrando 1-10 de 150</span><div class="flex gap-1"><button class="px-3 py-1 rounded-md border border-slate-300 dark:border-slate-600 hover:bg-slate-100 dark:hover:bg-slate-700 disabled:opacity-50" disabled>Anterior</button><button class="px-3 py-1 rounded-md border border-slate-300 dark:border-slate-600 hover:bg-slate-100 dark:hover:bg-slate-700">Siguiente</button></div></div>
                    </div>
                </div>
                
                <div x-show="currentView === 'directorio'" x-transition>
                    <div class="flex items-center justify-between mb-6">
                        <h1 class="text-3xl font-bold">Directorio de Hogares</h1>
                        <button class="bg-primary hover:bg-primary-700 text-white font-bold py-2 px-4 rounded-lg flex items-center gap-2"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>Nuevo Hogar</button>
                    </div>

                                        <!-- Search Form -->
                    <div class="mb-6">
                        <form action="<?= base_url('llamadas_m2/c_llamadas_m2/index') ?>" method="get" class="flex items-center max-w-lg mx-auto">
                            <input type="text" name="filtro" value="<?= isset($filtro_actual) ? htmlspecialchars($filtro_actual) : '' ?>" placeholder="Buscar por folio o nombre de jefe de hogar..." class="w-full px-4 py-2 border-slate-300 dark:border-slate-600 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-primary dark:bg-slate-800">
                            <button type="submit" class="px-6 py-2 bg-primary text-white rounded-r-lg hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary">Buscar</button>
                        </form>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                        <?php if (isset($hogares) && !empty($hogares)): ?>
                            <?php foreach ($hogares as $hogar): ?>
                                <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-md text-center">
                                    <div class="w-24 h-24 mx-auto rounded-full -mt-12 border-4 border-white dark:border-slate-800 <?php echo $hogar['color']['bg']; ?> flex items-center justify-center">
                                        <span class="text-4xl font-bold <?php echo $hogar['color']['text']; ?>"><?php echo htmlspecialchars($hogar['inicial']); ?></span>
                                    </div>
                                    <h3 class="mt-4 text-xl font-semibold"><?php echo htmlspecialchars($hogar['nombre_familia']); ?></h3>
                                    <p class="mt-1 text-slate-500 dark:text-slate-400 font-mono">Folio: <?php echo htmlspecialchars($hogar['folio']); ?></p>
                                    <p class="mt-1 text-slate-500 dark:text-slate-400">Jefe de Hogar: <?php echo htmlspecialchars($hogar['jefe_hogar']); ?></p>
                                    
                                    <!-- Barra de Progreso de Logros -->
                                    <div class="mt-4">
                                        <div class="flex justify-between items-center mb-1">
                                            <span class="text-sm font-medium text-slate-600 dark:text-slate-300">Progreso de Logros</span>
                                            <span class="text-sm font-bold text-primary"><?php echo $hogar['porcentaje_total']; ?>%</span>
                                        </div>
                                        <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2.5">
                                            <div class="bg-primary h-2.5 rounded-full" style="width: <?php echo $hogar['porcentaje_total']; ?>%"></div>
                                        </div>
                                    </div>

                                    <button @click="setView('visita')" class="mt-4 w-full bg-primary/10 hover:bg-primary/20 text-primary font-semibold py-2 px-4 rounded-lg">Gestionar Hogar</button>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="col-span-full text-center py-12">
                                <p class="text-slate-500 dark:text-slate-400 text-lg">No se encontraron hogares que coincidan con su búsqueda.</p>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-6">
                        <?php if (isset($pagination_links)) { echo $pagination_links; } ?>
                    </div>
                </div>

                <div x-show="currentView === 'gestion'" x-data="visitaHogar()" x-transition>
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-md mb-6">
                        <div class="flex flex-wrap justify-between items-center gap-4">
                            <div>
                                <a href="<?php echo site_url('llamadas_m2/c_llamadas_m2'); ?>" class="text-primary hover:underline mb-2 flex items-center gap-1">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                                    Volver
                                </a>
                                <h1 class="text-2xl font-bold">Plan de Vida Familiar: <span class="text-primary"><?php if(isset($hogar)) echo htmlspecialchars(trim($hogar->nombre1 . ' ' . $hogar->apellido1)); ?></span></h1>
                                <div class="flex items-center gap-4 text-sm text-slate-500 dark:text-slate-400 mt-1">
                                    <span>Folio: <strong class="font-mono text-slate-700 dark:text-slate-300"><?php if(isset($hogar)) echo htmlspecialchars($hogar->folio); ?></strong></span>
                                    <span>ID Integrante: <strong class="font-mono text-slate-700 dark:text-slate-300"><?php if(isset($hogar)) echo htmlspecialchars($hogar->idintegrantetitular); ?></strong></span>
                                </div>
                            </div>
                            <div class="w-full sm:w-auto">
                                <label class="text-sm font-medium">Porcentaje de Logros: <strong><?php echo isset($porcentaje_total) ? $porcentaje_total : 0; ?>%</strong></label>
                                <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2.5 mt-1">
                                    <div class="bg-emerald-500 h-2.5 rounded-full" style="width: <?php echo isset($porcentaje_total) ? $porcentaje_total : 0; ?>%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex flex-col md:flex-row gap-8">
                        <div class="w-full md:w-1/4">
                            <nav class="space-y-1">
                                <template x-for="(step, index) in steps" :key="index">
                                    <button @click="activeStep = index + 1" class="w-full text-left p-3 rounded-lg flex items-center gap-4 transition-colors" :class="{ 'bg-primary text-white shadow-lg': activeStep === index + 1, 'hover:bg-slate-200 dark:hover:bg-slate-700': activeStep !== index + 1 }">
                                        <div class="flex-shrink-0 w-8 h-8 rounded-full flex items-center justify-center font-bold" :class="{ 'bg-white text-primary': activeStep === index + 1, 'bg-slate-200 dark:bg-slate-700': activeStep !== index + 1, 'bg-emerald-500 text-white': completedSteps.includes(index + 1) && activeStep !== index + 1 }">
                                            <span x-show="!completedSteps.includes(index + 1) || activeStep === index + 1" x-text="index + 1"></span>
                                            <svg x-show="completedSteps.includes(index + 1) && activeStep !== index + 1" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" /></svg>
                                        </div>
                                        <div>
                                            <p class="font-semibold" x-text="step.title"></p>
                                            <p class="text-xs" :class="{'text-white/80': activeStep === index + 1, 'text-slate-500 dark:text-slate-400': activeStep !== index + 1 }" x-text="step.subtitle"></p>
                                        </div>
                                    </button>
                                </template>
                            </nav>
                        </div>
                        
                        <div class="flex-1 bg-white dark:bg-slate-800 p-6 rounded-xl shadow-md min-h-[400px]">
                            <template x-for="(step, index) in steps" :key="index">
                                <div x-show="activeStep === index + 1" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                                    <h2 class="text-xl font-bold mb-1" x-text="step.title"></h2>
                                    <p class="text-slate-500 dark:text-slate-400 mb-6" x-text="step.description"></p>
                                    
                                    <div class="space-y-4">
                                        <div x-show="activeStep === 1">
                                            <h3 class="text-2xl font-bold mb-6">Registrar nueva llamada</h3>
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                                <!-- Fecha y Hora -->
                                                <div>
                                                    <label for="fecha_hora" class="block font-semibold mb-2">Fecha y Hora</label>
                                                    <input type="datetime-local" id="fecha_hora" class="w-full p-3 bg-slate-100 dark:bg-slate-700 border-none rounded-lg focus:ring-2 focus:ring-primary" value="<?php echo date('Y-m-d\TH:i'); ?>">
                                                </div>

                                                <!-- Resultado -->
                                                <div>
                                                    <label for="resultado" class="block font-semibold mb-2">Resultado</label>
                                                    <div class="relative">
                                                        <select id="resultado" class="w-full p-3 bg-slate-100 dark:bg-slate-700 border-none rounded-lg appearance-none focus:ring-2 focus:ring-primary">
                                                            <option value="" selected disabled>Seleccionar resultado</option>
                                                            <option value="Contactado">Contactado</option>
                                                            <option value="No contestó">No contestó</option>
                                                            <option value="Ocupado">Ocupado</option>
                                                            <option value="Volver a llamar">Volver a llamar</option>
                                                            <option value="Número equivocado">Número equivocado</option>
                                                        </select>
                                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-slate-500">
                                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Duración -->
                                            <div class="mb-6">
                                                <label for="duracion" class="block font-semibold mb-2">Duración (minutos)</label>
                                                <input type="number" id="duracion" class="w-full p-3 bg-slate-100 dark:bg-slate-700 border-none rounded-lg focus:ring-2 focus:ring-primary" min="0">
                                            </div>

                                            <!-- Notas / Observaciones -->
                                            <div class="mb-6">
                                                <label for="notas" class="block font-semibold mb-2">Notas / Observaciones</label>
                                                <textarea id="notas" rows="4" class="w-full p-3 bg-slate-100 dark:bg-slate-700 border-none rounded-lg focus:ring-2 focus:ring-primary" placeholder="Escriba aquí..."></textarea>
                                            </div>

                                            <!-- Acciones pendientes -->
                                            <div class="mb-6">
                                                <label for="acciones" class="block font-semibold mb-2">Acciones pendientes / Compromisos</label>
                                                <textarea id="acciones" rows="4" class="w-full p-3 bg-slate-100 dark:bg-slate-700 border-none rounded-lg focus:ring-2 focus:ring-primary" placeholder="Escriba aquí..."></textarea>
                                            </div>
                                        </div>
                                        <div x-show="activeStep === 2">
                                            <p class="text-sm">Antes de iniciar, el Gestor verifica si se requiere actualizar datos generales (excepto fecha de nacimiento y sexo).</p>
                                            <button class="mt-4 bg-primary/10 hover:bg-primary/20 text-primary font-semibold py-2 px-4 rounded-lg">
                                                Ir a Actualizar Datos del Hogar
                                            </button>
                                        </div>
                                         <div x-show="activeStep === 3">
                                             <p class="text-sm">Se gestionan los avances del hogar según su ritmo, cambiando logros de estado (Rojo a Verde, etc.).</p>
                                             <button class="mt-4 bg-primary/10 hover:bg-primary/20 text-primary font-semibold py-2 px-4 rounded-lg">
                                                 Gestionar Logros y Privaciones
                                             </button>
                                         </div>
                                         <div x-show="activeStep === 4">
                                             <p class="text-sm">El Gestor acerca las oportunidades vigentes que aplican al hogar para mejorar sus condiciones de vida.</p>
                                             <button class="mt-4 bg-primary/10 hover:bg-primary/20 text-primary font-semibold py-2 px-4 rounded-lg">
                                                 Buscar y Asignar Oportunidades
                                             </button>
                                         </div>
                                         <div x-show="activeStep === 5">
                                             <label for="historia_hogar" class="font-semibold">Registre los aspectos y avances más significativos de esta visita:</label>
                                             <textarea id="historia_hogar" rows="5" class="w-full mt-1 p-2 border rounded-md bg-slate-50 dark:bg-slate-700 dark:border-slate-600 focus:ring-primary focus:border-primary" placeholder="Escriba aquí..."></textarea>
                                         </div>
                                    </div>

                                    <div class="mt-8 pt-6 border-t dark:border-slate-700 flex justify-between items-center">
                                        <button @click="activeStep--" x-show="activeStep > 1" class="bg-slate-200 hover:bg-slate-300 dark:bg-slate-700 dark:hover:bg-slate-600 text-slate-800 dark:text-white font-bold py-2 px-4 rounded-lg">Anterior</button>
                                        <div x-show="activeStep === 1"></div> <button @click="nextStep()" x-show="activeStep < steps.length" class="bg-primary hover:bg-primary-700 text-white font-bold py-2 px-4 rounded-lg">Guardar y Continuar</button>
                                        <button @click="finishVisit()" x-show="activeStep === steps.length" class="bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-2 px-4 rounded-lg">Finalizar Visita</button>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                    
                    <script>
                        function visitaHogar() {
                            return {
                                activeStep: 1,
                                completedSteps: [],
                                porcentajeLogros: 65,
                                paso0: { lugar: 'Si', motivo: '' },
                                steps: [
                                    { title: 'Paso 1', subtitle: 'Realización de la visita', description: 'Registre la información de la llamada.' },
                                    { title: 'Paso 2', subtitle: 'Actualización de datos', description: 'El Gestor saluda y verifica si el hogar o alguno de sus integrantes requiere actualizar sus datos generales.' },
                                    { title: 'Paso 3', subtitle: 'Movimiento de logros', description: 'Gestionar los avances del hogar, cambiando el estado de los logros según corresponda (de privación a logro).' },
                                    { title: 'Paso 4', subtitle: 'Acercar oportunidades', description: 'El Gestor presenta oportunidades vigentes que aplican al hogar para mejorar sus condiciones de vida.' },
                                    { title: 'Paso 5', subtitle: 'Cierre de la visita', description: 'Realizar la evaluación de la visita, motivar al cumplimiento de compromisos y sintetizar lo trabajado.' },
                                ],
                                nextStep() {
                                    if (!this.completedSteps.includes(this.activeStep)) {
                                        this.completedSteps.push(this.activeStep);
                                    }
                                    if (this.activeStep < this.steps.length) {
                                        this.activeStep++;
                                    }
                                },
                                finishVisit() {
                                    alert('Visita finalizada y registrada. Redirigiendo al panel principal.');
                                    // In a real app, you would save final data and then change view
                                    this.goBack();
                                }
                            }
                        }
                    </script>
                </div>
                

             
            </main>
        </div>
    </div>
</body>
</html>
