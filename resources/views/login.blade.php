<x-layout>
    <main>
        <section>
            <div class="flex min-h-screen items-center justify-center bg-slate-900 px-4 py-12 sm:px-6 lg:px-8">
                <div class="w-full max-w-md space-y-8 rounded-xl bg-slate-800 p-8 shadow-2xl">
                    <!-- Cabeçalho -->
                    <div class="text-center">
                        <h2 class="text-3xl font-bold tracking-tight text-white">Acesse sua conta</h2>
                        <p class="mt-2 text-sm text-slate-400">
                            Ou <a href="#" class="font-medium text-indigo-400 hover:text-indigo-300">crie uma nova conta</a>
                        </p>
                    </div>

                    <!-- Formulário -->
                    <form class="mt-8 space-y-6" action="/login" method="POST">

                        @csrf

                        @error('email')
                        <p class="text-red-500 text-xl mt-1">
                                {{ $message }}
                        </p>
                        @enderror

                        <div class="-space-y-px rounded-md shadow-sm">
                            <!-- Campo de E-mail -->
                            <div>
                                <label for="email-address" class="sr-only">E-mail</label>
                                <input id="email-address" name="email" type="email" autocomplete="email" required 
                                       class="relative block w-full rounded-t-md border-0 bg-slate-700 p-3 text-white placeholder-slate-400 ring-1 ring-inset ring-slate-600 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm" 
                                       placeholder="Endereço de e-mail">
                            </div>

                            <!-- Campo de Senha -->
                            <div>
                                <label for="password" class="sr-only">Senha</label>
                                <input id="password" name="password" type="password" autocomplete="current-password" required 
                                       class="relative block w-full rounded-b-md border-0 bg-slate-700 p-3 text-white placeholder-slate-400 ring-1 ring-inset ring-slate-600 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm" 
                                       placeholder="Sua senha">
                            </div>
                        </div>

                        <!-- Opções: Lembrar de mim e Esqueci a senha -->
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center">
                                <input id="remember-me" name="remember-me" type="checkbox" 
                                       class="h-4 w-4 rounded border-slate-600 bg-slate-700 text-indigo-600 focus:ring-indigo-500">
                                <label for="remember-me" class="ml-2 block text-slate-300">Lembrar de mim</label>
                            </div>

                            <div class="text-sm">
                                <a href="#" class="font-medium text-indigo-400 hover:text-indigo-300">Esqueceu sua senha?</a>
                            </div>
                        </div>

                        <!-- Botão de Entrar -->
                        <div>
                            <button type="submit" 
                                    class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition duration-150">
                                Entrar
                            </button>
                        </div>
                    </form>

                </div>
            </div>

        </section>
    </main>
</x-layout>

