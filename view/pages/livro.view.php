 <!-- Lista de Livro -->
 <section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
     <!-- Livro -->

     <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
         <div class="flex">
             <div class="w-1/3">Imagem</div>
             <div class="">
                 <a href="/livro.php?id=<?= $livro->id ?>" class="font-semibol hover:underline"><?= $livro->titulo ?></a>
                 <div class="text-xs italic"><?= $livro->autor ?></div>
                 <div class="text-xs italic">*** (3 Avaliação) </div>
             </div>
         </div>

         <div class="text-sm">
             <?= $livro->descricao ?>
         </div>
     </div>


 </section>