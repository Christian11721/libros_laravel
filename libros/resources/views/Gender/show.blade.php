    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Detalles del genero</h2>
                <div>
                    <p><strong>ID:</strong> {{ $gender->id }}</p>
                    <p><strong>Nombre:</strong> {{ $gender->name }}</p>
                    <p><strong>Slug:</strong> {{ $gender->slug }}</p>
                </div>
                <a href="{{ route('genders.index') }}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
