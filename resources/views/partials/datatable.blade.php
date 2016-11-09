    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                @foreach($fields as $fieldName => $field)
                    <th>{{ $fieldName  }}</th>
                @endforeach
                @if(isset($actions) && !empty($actions))
                    <th>Ações</th>
                @endif
            </tr>
        </thead>
        <tbody>
      @foreach($resources as $resource)
        <tr>
          @foreach($fields as $fieldName => $field)
              <td>{{ $resource->$field  }}</td>
          @endforeach
          @if(isset($actions) && !empty($actions))
          <td class="text-center">
              @if(in_array('edit', $actions))
                <a href="{{ route("{$route_name}.edit", $resource->id) }}" title="Editar" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
              @endif
              @if(in_array('delete', $actions))
                <a href="{{ route("{$route_name}.delete", $resource->id) }}" title="Excluir" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
              @endif
          </td>
          @endif
        </tr>
      @endforeach
        </tbody>
    </table>

