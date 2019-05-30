<!--==========================
    Tabela Caracteristicas
  ============================-->
  <div class="container">
    <h1 style="text-align: center;margin-top: 10%;">TABELA CARACTERISTICAS</h1>
    <button type="button" class="btn btn-primary" style="margin-bottom: 30px;" data-toggle="modal" data-target="#caracModal">Criar Caracteristica</button>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Descrição</th>
            <th scope="col">Preço</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
            @foreach($caracs as $carac)
            <tr>
              <th style="font-weight:normal;">{{$carac->id}}</th>
              <th style="font-weight:normal;">{{$carac->desc}}</th>
              <th style="font-weight:normal;">{{$carac->preco}}€</th>
              <th style="font-weight:normal; width: 20%;">
                @if($carac->deleted_at)
                  <a href="/admin/caracteristicas/{{$carac->id}}/force-delete" class="btn btn-danger" style="color: white;">Forçar Eliminar</a>
                  <a href="/admin/caracteristicas/{{$carac->id}}/restore" class="btn btn-success mt-2" style="color: white;">Restaurar</a>
                @else
                  <a href="/admin/caracteristicas/{{$carac->id}}/delete" class="btn btn-warning" style="color: white;">Eliminar</a>
                @endif
              </th>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>