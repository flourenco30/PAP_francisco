<!--===============================
    Modal Form Perfil
  ================================-->
  <!-- Modal -->
  <div class="modal fade" id="perfilModal" tabindex="-1" role="dialog" aria-labelledby="perfilModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Perfil Utilizador</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{url('/alter-user')}}">
              @csrf
                <div class="form-group row">
                  <label for="staticName" class="col-sm-2 col-form-label">Nome: </label>
                  <div class="col-sm-10">
                    @auth
                      <input type="text" readonly class="form-control" id="staticName" value="{{Auth::user()->name}}">
                    @endauth
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Email: </label>
                  <div class="col-sm-10">
                    @auth
                      <input type="text" readonly class="form-control" id="staticEmail" value="{{Auth::user()->email}}">
                    @endauth
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticNif" class="col-sm-2 col-form-label">NIF: </label>
                  <div class="col-sm-10">
                    @auth
                      <input type="text" class="form-control" id="staticNif" name="nif" value="{{Auth::user()->nif}}">
                    @endauth
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticContact" class="col-sm-2 col-form-label">Contacto: </label>
                  <div class="col-sm-10">
                    @auth
                      <input type="text" class="form-control" id="staticContact" name="contacto" value="{{Auth::user()->contacto}}">
                    @endauth
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>