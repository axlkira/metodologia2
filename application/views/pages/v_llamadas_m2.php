<?php // Vista para llamadas_m2 ?>
<!-- INICIO DEL HTML ADAPTADO -->
<!DOCTYPE html>
<html lang="es" x-data="app()" x-init="init" :class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llamadas M2 - Unidad Familia Medellín</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body {font-family: 'Inter', sans-serif;}::-webkit-scrollbar {width: 8px;height: 8px;}::-webkit-scrollbar-track {background: transparent;}::-webkit-scrollbar-thumb {background-color: #cbd5e1; border-radius: 20px;}.dark ::-webkit-scrollbar-thumb {background-color: #475569;}.ghost {background: #e0f2fe; border: 2px dashed #0ea5e9; opacity: 0.7;}.dark .ghost {background: #0c4a6e; border-color: #38bdf8;}</style>
    <script>tailwind.config = {darkMode: 'class',theme: {extend: {colors: {primary: {DEFAULT: '#4f46e5','50': '#eef2ff','100': '#e0e7ff','200': '#c7d2fe','300': '#a5b4fc','400': '#818cf8','500': '#6366f1','600': '#4f46e5','700': '#4338ca','800': '#3730a3','900': '#312e81',},secondary: {DEFAULT: '#06b6d4','50': '#ecfeff','100': '#cffafe','200': '#a5f3fc','300': '#67e8f9','400': '#22d3ee','500': '#06b6d4','600': '#0891b2','700': '#0e7490','800': '#155e75','900': '#164e63',}}}}}</script>
</head>
<body class="bg-slate-100 dark:bg-slate-900 text-slate-800 dark:text-slate-200 transition-colors duration-300">
    <div class="flex h-screen">
        <!-- Aquí puedes incluir el contenido específico de llamadas_m2 -->
        <div class="m-auto text-center">
            <h1 class="text-3xl font-bold mb-6">Módulo de Llamadas M2</h1>
            <p class="mb-4">Esta es la vista base para el módulo de llamadas, lista para ser personalizada.</p>
            <!-- Puedes pegar aquí el HTML completo que desees mostrar para llamadas -->
        </div>
    </div>
</body>
</html>
