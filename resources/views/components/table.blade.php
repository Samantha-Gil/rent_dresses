<div class="table-container">
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                @if ($hasDescription ?? false)
                    <th>Descripción</th>
                @endif
                @if ($hasPrice ?? false)
                    <th>Precio</th>
                @endif
                @if ($hasCategory ?? false)
                    <th>Categoría</th>
                @endif
                @if ($hasDressname ?? false)
                    <th>Vestido</th>
                @endif
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                @if ($item->customer)
                    <td>{{$item->customer->name}}</td>
                    <td>{{$item->dress->name}}</td>
                @elseif ($item->name)
                    <td>{{$item->name}}</td>
                @endif

                @if ($hasDescription ?? false)
                    <td>{{$item->description}}</td>
                @endif

                @if ($hasPrice ?? false)
                    <td>${{$item->price}}</td>
                @endif

                @if ($hasCategory ?? false)
                    <td>{{$item->category->name}}</td>
                @endif
                    <td class="actions">
                        <a href="{{route($showRoute, $item->id)}}" class="btn-crud">👀</a>
                        <a href="{{route($editRoute, $item->id)}}" class="btn-crud2">✏</a>
                        <button type="button" class="btn-crud3 btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{$item->id}}">🗑</button>

                        <div class="modal fade" id="deleteModal{{$item->id}}" tabindex="-1" aria-labelledby="deleteModalLabel{{$item->id}}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title}">Advertencia ⚠</h5>
                                    </div>
                                    <div class="modal-body">
                                        ¿Estás seguro de que deseas eliminar este registro?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary mt-3" data-bs-dismiss="modal">Cancelar</button>
                                        <form action="{{route($deleteRoute, $item->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Aceptar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
