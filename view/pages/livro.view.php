 <!-- Lista de Livros -->
 <section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
     <!-- Livro -->

     <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
         <div class="bg-red-800 flex">
             <div class="w-1/3">Imagem</div>
             <div class="">
                 <a href="/livro.php?id=<?= $livros['id'] ?>" class="font-semibol hover:underline"><?= $livros['titulo'] ?></a>
                 <div class="text-xs italic"><?= $livros['autor'] ?></div>
                 <div class="text-xs italic">*** (3 Avaliação) </div>
             </div>
         </div>

         <div class="text-sm">
             <?= $livros['descricao'] ?>
         </div>
     </div>


 </section>