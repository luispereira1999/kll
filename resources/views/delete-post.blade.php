<!-- DEFINIÇÃO: modal de remover um post -->

<div class="modal fade" id="deletePost{{ $post->id }}" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Remover Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p class="modal__paragraph">Deseja mesmo remover este post?</p>

                <form id="formDeletePost{{ $post->id }}" method="post" action="{{ route('posts.delete', ['postId' => $post->id]) }}">
                    @csrf
                    @method('DELETE')
                </form>
            </div>

            <div class="modal-footer">
                <button class="button button-danger" type="submit" form="formDeletePost{{ $post->id }}">Remover</button>
                <button class="button button-cancel" type="button" data-dismiss="modal">Não</button>
            </div>
        </div>
    </div>
</div>
