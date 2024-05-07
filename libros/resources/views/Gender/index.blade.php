<center>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Generos</h2>
                <a href="{{ route('genders.create') }}" class="btn btn-primary">Agregar genero</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Slug</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($genders as $gender)
                            <tr>
                                <td>{{ $gender->id }}</td>
                                <td>{{ $gender->name }}</td>
                                <td>{{ $gender->slug }}</td>
                                <td>
                                    <a href="{{ route('genders.show', $gender->id) }}" class="btn btn-info">Ver</a>
                                    <a href="{{ route('genders.edit', $gender->id) }}" class="btn btn-primary">Editar</a>
                                    <form action="{{ route('genders.destroy', $gender->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</center>
