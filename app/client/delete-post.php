   <!-- DEFINAÇÃO: Modal de Adicionar um Novo Post -->

   <div class="modal fade" id="editPost" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Eliminar Post</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <p>Deseja mesmo eliminar este post?</p>
            </div>
            <div class="modal-footer">
               <button type="submit" form="formNewPost" name="new" class="button buttonPrimary">Sim</button>
               <button type="button" form="formNewPost" value="cancel" onClick="" name="" class="button buttonCancel">Não</button>
            </div>
         </div>
      </div>
   </div>