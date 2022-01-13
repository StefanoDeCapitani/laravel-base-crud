<div class="modal" tabindex="-1" id="delete-modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Attenzione!</h5>
        </div>
        <div class="modal-body">
          <p></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-primary" id="modal-close-button">Chiudi</button>
          <button type="button" class="btn btn-danger" id="delete-button">Elimina</button>
        </div>
      </div>
    </div>
</div>

<form action="{{ route("comics.destroy", $comic->id) }}" method="POST" class="ml-auto delete-form">
    @csrf
    @method("DELETE")
    <button class="btn btn-danger" 
    data-bs-title="@lang("messages.confirm-comic-deletion", ["title" => $comic->title])">
        Elimina 
    </button>
</form>