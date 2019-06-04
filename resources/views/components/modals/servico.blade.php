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

              {{-- Form group select / button --}}
              <div class="row">
                <div class="col-sm-11">
                  <div class="row form-group mb-1">
                    <div class="col-sm-2 text-right">
                      <label for="staticContact" class="">Opções: </label>
                    </div>
                    <div class="col-sm-10" id="selectContainer">
                      <select class="selService form-control mb-3" id="sel" name="caracteristicas">
                        @foreach($caracs as $carac)
                        <option value={{$carac->id}}>{{$carac->preco}}€ - {{$carac->desc}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-1">
                  <button onclick="cloneSelect()" class="btn btn-primary" type="button" style="padding-right: 15px; padding-left:15px">+</button>
                </div>
              </div>


              {{-- Form group total --}}
              <div class="form-group row">
                <div class="col-sm-11">
                    <div class="row form-group mb-3">
                        <div class="col-sm-2 text-right">
                          <label for="staticContact">TOTAL: </label>
                        </div>
                        <div class="col-sm-10">
                            @auth
                              <input type="text" class="form-control" id="staticContact" name="total" readonly>
                            @endauth
                        </div>
                    </div>
                </div>
                <div class="col"></div>
              </div>

              {{-- Modal Footer --}}
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              </div>
              {{-- End Modal footer --}}

            </form>
            </div>
          </div>
        </div>
      </div>
