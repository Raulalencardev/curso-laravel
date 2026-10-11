<header>
    <nav class="bg-slate-800 border-b border-slate-700">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">

                <!-- Lado Esquerdo: Logo e Links de Navegação -->
                <div class="flex items-center">
                    <!-- Logo -->
                    <div class="flex-shrink-0">
                        <a href="#" class="text-xl font-bold text-white tracking-wider flex items-center gap-2">
                            <span class="h-8 w-8 rounded-lg bg-indigo-600 flex items-center justify-center text-sm">✦</span>
                            RaulAlencarDev
                        </a>
                    </div>

                    <!-- Links para Desktop -->
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="#" class="rounded-md bg-slate-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Dashboard</a>
                            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-slate-300 hover:bg-slate-700 hover:text-white transition">Projetos</a>
                            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-slate-300 hover:bg-slate-700 hover:text-white transition">Equipe</a>
                            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-slate-300 hover:bg-slate-700 hover:text-white transition">Relatórios</a>
                        </div>
                    </div>
                </div>

                <!-- Lado Direito: Botões de Ação (Desktop) -->
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6 gap-4">
                        <a href="#" class="text-sm font-medium text-slate-300 hover:text-white transition">Entrar</a>
                        <a href="#" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 transition">Criar conta</a>
                    </div>
                </div>

                <!-- Botão Menu Mobile (Hambúrguer) -->
                <div class="-mr-2 flex md:hidden">
                    <button type="button" id="mobile-menu-btn" class="relative inline-flex items-center justify-center rounded-md bg-slate-800 p-2 text-slate-400 hover:bg-slate-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-slate-800" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Abrir menu principal</span>
                        <!-- Ícone Hambúrguer -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Menu Mobile (Oculto por padrão, remova a classe 'hidden' para testar) -->
        <div class="hidden md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                <a href="#" class="block rounded-md bg-slate-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Dashboard</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-slate-300 hover:bg-slate-700 hover:text-white">Projetos</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-slate-300 hover:bg-slate-700 hover:text-white">Equipe</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-slate-300 hover:bg-slate-700 hover:text-white">Relatórios</a>
            </div>
            <div class="border-t border-slate-700 pb-3 pt-4 px-5 flex flex-col gap-3">
                <a href="#" class="text-base font-medium text-slate-300 hover:text-white">Entrar</a>
                <a href="#" class="w-full text-center rounded-md bg-indigo-600 px-4 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500">Criar conta</a>
            </div>
        </div>
    </nav>

</header>