<div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Informações do Técnico</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form>
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="nome_tecnico">Nome</label>
                    <input type="text" class="form-control" id="nome_tecnico" name="nome_tecnico"
                        placeholder="Enter Nome" value="{{ old('nome_tecnico') }}">
                    @error('nome_tecnico')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email"
                        value="{{ old('email') }}">
                    @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div style="display: flex;">
                    <div class="form-group" style="flex: 50%; padding-right:1rem;">
                        <label for="idade">Idade</label>
                        <input type="text" class="form-control" id="idade" name="idade"
                            placeholder="Enter Idade" value="{{ old('idade') }}">
                        @error('idade')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group" style="flex: 50%; padding-right:1rem;">
                        <label for="genero">Género</label>
                        <input type="text" class="form-control" id="genero" name="genero"
                            placeholder="Enter Género" value="{{ old('genero') }}">
                        @error('genero')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="contacto">Contacto</label>
                    <input type="text" class="form-control" id="contacto" name="contacto"
                        placeholder="Enter Contacto" value="{{ old('contacto') }}">
                    @error('contacto')
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
