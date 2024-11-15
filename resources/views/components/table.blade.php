<div class="table-container">
    <table class="table">
        <thead>
            <tr>
                @foreach ($items[0] as $key => $value)
                    <th>{{ $key }}</th>
                @endforeach
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    @foreach ($item as $value)
                        <td>{{ $value }}</td>
                    @endforeach
                    <td class="actions">
                        <a href="{{ route($showRoute, $item['id']) }}" class="btn-crud">👀</a>
                        <a href="{{ route($editRoute, $item['id']) }}" class="btn-crud2">✏</a>
                        <button type="button" class="btn-crud3 btn btn-danger" data-bs-toggle="modal" 
                                data-bs-target="#deleteModal" 
                                data-id="{{ $item['id'] }}" 
                                data-url="{{ route($deleteRoute, $item['id']) }}">
                            🗑
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="modal fade" id="deleteModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Advertencia ⚠</h5>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar este registro?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary mt-3" data-bs-dismiss="modal">Cancelar</button>
                <form id="deleteForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Aceptar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener('load', function () {
        var deleteModal = document.getElementById('deleteModal');
        deleteModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var url = button.getAttribute('data-url');
            var deleteForm = document.getElementById('deleteForm');
            deleteForm.action = url;
        });
    });
</script>
