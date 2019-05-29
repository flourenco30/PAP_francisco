<!--===============================
    Modal Form Servico
  ================================-->
  <!-- Modal -->
  <div class="modal fade" id="servicoModal" tabindex="-1" role="dialog" aria-labelledby="servicoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Serviço Costumizado</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{url('/alter-user')}}">
              @csrf
              <div class="form-group row">
                <label for="staticContact" class="col-sm-2 col-form-label">Opções: </label>
                <div class="col-sm-9" id="selectContainer">
                  <select class="form-control col-sm-12 mb-3" id="sel4" name="caracteristicas">
                    @foreach($caracs as $carac)
                    <option value={{$carac->id}}>{{$carac->preco}}€ - {{$carac->desc}}</option>
                    @endforeach
                  </select>
                </div>
                <div style="position: relative">
                  <button onclick="cloneSelect()" class="btn btn-primary" type="button" style="position: absolute;bottom: 15px;width: 50px;">+</button>
                </div>
              </div>
              <div class="form-group row">
                <label for="staticContact" class="col-sm-2 col-form-label">TOTAL: </label>
                <div class="col-sm-10">
                  @auth
                    <input type="text" class="form-control" id="staticContact" name="total" readonly>
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