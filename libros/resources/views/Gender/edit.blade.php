<x-mater-layout title="Géneros" cardTitle="Géneros">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Editar genero</h2>
                <form action="{{ route('genders.update', $gender->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name" class="col-md-2 col-form-label">Nombre:</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $gender->name }}">
                    </div>
                    <div class="text-left mt-3">
                        <a href="{{ route('genders.index') }}" class="btn btn-info btn-sm hover-elevate-up">Cancelar</a>
                        <button type="submit" class="btn btn-primary  btn-sm hover-elevate-up">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-mater-layout>