<!--===============================
      Modal Form Servico
  ================================-->
      <!-- Modal -->
      <div class="modal fade" id="serviModal" tabindex="-1" role="dialog" aria-labelledby="serviModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Criar Serviço</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{url('/criar-servi')}}">
                @csrf
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nome: </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="staticName" name="nome">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Preço:</label>
                    <div class="col-sm-10">
                      <input type="number" min="1" max="100" class="form-control" name="preco">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Criar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
        </div>