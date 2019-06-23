<!--==========================
    Tabela Users
  ============================-->
  <div class="container">
    <h1 style="text-align: center;">TABELA USERS</h1>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Contacto</th>
            <th scope="col">NIF</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
              <th style="font-weight:normal;">{{$user->id}}</th>
              <th style="font-weight:normal;">{{$user->name}}</th>
              <th style="font-weight:normal;">{{$user->email}}</th>
              @if($user->contacto == "")
              <th style="font-weight:normal;">Não Inseriu</th>
              @else
              <th style="font-weight:normal;">{{$user->contact}}</th>
              @endif
              @if($user->nif == "")
              <th style="font-weight:normal;">Não Inseriu</th>
              @else
              <th style="font-weight:normal;">{{$user->nif}}</th>
              @endif
              <th style="font-weight:normal; width: 20%;">
                @if($user->deleted_at)
                  <a href="/admin/users/{{$user->id}}/force-delete" class="btn btn-danger" style="color: white;">Forçar Eliminar</a>
                  <a href="/admin/users/{{$user->id}}/restore" class="btn btn-success mt-2" style="color: white;">Reactivar</a>
                @else
                  @if($user->id != 1)
                  <a href="/admin/users/{{$user->id}}/delete" class="btn btn-warning" style="color: white;">Desativar</a>
                  @endif
                @endif
              </th>
            </tr>
            @endforeach
        </tbody>
        {{$users->links()}}
      </table>
    </div>