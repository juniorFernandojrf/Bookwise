<div class="mt-6 grid grid-cols-2 gap-2">
    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Login</h1>
        <form action="" class="px-4 space-y-4">
            <div class="flex flex-col">
                <label class="text-stone-400">Email</label>
                <input
                    type="email"
                    name="email" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1">
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Senha</label>
                <input
                    type="senha"
                    name="email" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 ">
            </div>

            <button type="submit" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 hover:bg-stone-800">
                Logar
            </button>
        </form>
    </div>
    
    <!-- Registro -->
    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Registro</h1>
        <form action="" class="px-4 space-y-4">
            <div class="flex flex-col">
                <label class="text-stone-400">Nome</label>
                <input
                    type="email"
                    name="nome" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1">
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400">Email</label>
                <input
                    type="email"
                    name="email" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1">
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400">Confirme o seu email</label>
                <input
                    type="email"
                    name="email_confirmacao" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1">
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Senha</label>
                <input
                    type="senha"
                    name="email" required
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 ">
            </div>

            <button type="reset" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 hover:bg-stone-800">
                Cancelar
            </button>
            <button type="submit" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 hover:bg-stone-800">
                Registrar
            </button>
        </form>
    </div> 
</div>