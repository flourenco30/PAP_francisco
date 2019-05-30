<!--==========================
    Tabela Serviços
  ============================-->
  <div class="container">
    <h1 style="text-align: center;margin-top: 10%;">TABELA SERVIÇOS</h1>
    <button type="button" class="btn btn-primary" style="margin-bottom: 30px;" data-toggle="modal" data-target="#serviModal">Criar Serviço</button>
    <button type="button" class="btn btn-primary" style="margin-bottom: 30px;" data-toggle="modal" data-target="#serviCaracModal">Associar Caracteristica</button>
    <table class="table table-responsive table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
            @foreach($servis as $servi)
            <tr>
              <th style="font-weight:normal;">{{$servi->id}}</th>
              <th style="font-weight:normal;">{{$servi->nome}}</th>
              <th style="font-weight:normal;">{{$servi->preco}}€</th>
              <th style="font-weight:normal; width: 20%;">
                @if($servi->deleted_at)
                  <a href="/admin/servicos/{{$servi->id}}/force-delete" class="btn btn-danger" style="color: white;">Forçar Eliminar</a>
                  <a href="/admin/servicos/{{$servi->id}}/restore" class="btn btn-success mt-2" style="color: white;">Restaurar</a>
                @else
                  <a href="/admin/servicos/{{$servi->id}}/delete" class="btn btn-warning" style="color: white;">Eliminar</a>
                @endif
              </th>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>