<x-base title="Crear categoría">
    <div class="form-create">
        <h1>Nueva categoría</h1>
        <form action="{{ route('categories.store') }}" method="POST" class="form-container">
            @csrf
            @include('components.form', [
                'name' => 'name',
                'label' => 'Nombre',
                'type' => 'text',
            ])

            @include('components.form', [
                'name' => 'description',
                'label' => 'Descripción',
                'type' => 'textarea'
            ])

            <button type="submit">Registrar</button>
        </form>

        <a href="{{ route('categories.index') }}">Ver lista de categorias</a>
    </div>
</x-base>
