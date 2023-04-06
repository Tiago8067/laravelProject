<div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Informações do Tipo de Agente Extintor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form>
            @csrf
            <div class=" card-body">
                <div class="form-group" style="flex: 50%; padding-left:1rem;">
                    <label for="nome">Selecione o Tipo:</label>
                    <select class="custom-select form-control-border" id="nome" name="nome">
                        <option>Água
                        </option>
                        <option>Gás Carbônico CO2
                        </option>
                        <option>Pó Químico BC
                        </option>
                        <option>Pó Químico ABC
                        </option>
                        <option>Espuma Mecânica 
                        </option>
                    </select>
                    @error('nome')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
    </div>
</div>
