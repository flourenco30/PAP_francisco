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
            <div class="modal-body" style="display: block;" id="body11111">
            <form method="POST" action="{{url('/alter-user')}}" id="form-save-custom-service" name="form-save-custom-service">
              @csrf
              {{-- Form group select / button --}}
              <div class="row">
                <div class="col-sm-11">
                  <div class="row form-group mb-1">
                    <div class="col-sm-2 text-right">
                      <label for="staticContact" class="">Opções: </label>
                    </div>
                    <div class="col-sm-10" id="selectContainer">
                      <select class="selService form-control mb-3" id="sel" name="caracteristicas" onChange="updateTotal()">
                        @foreach($caracs as $carac)
                        <option data-price="{{ $carac->preco }}" value={{$carac->id}}>{{$carac->preco}}€ - {{$carac->desc}}</option>
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
                              <input type="text" class="form-control" id="totalPrice" name="total" value="" readonly>
                            @endauth
                        </div>
                    </div>
                </div>
                <div class="col"></div>
              </div>

              {{-- Modal Footer --}}
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="btn-save-service">Guardar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              </div>
              {{-- End Modal footer --}}

            </form>
          </div>
            <div class="modal-body" style="display: none;" id="message1">
              <div class="alert alert-success" role="alert">
                  Sucesso! Serviço agendado
              </div>
            </div>
            <div class="modal-body" style="display: none;" id="message-error1">
              <div class="alert alert-danger" role="alert">
                  <span id="span-error">Ocorreu um erro, tente novamente dentro de instantes.</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      @push('scripts')
        <script>

          $(document).ready(function(){
            updateTotal();
          })

          $('#form-save-custom-service').on('submit', function(e){
            e.preventDefault();

            // Receber ids das carateristicas das selects
            var selects_values = [];
            $('.selService').each(function(index, element){
                var value = $(element).val();
                selects_values.push(value)
            });

            var total = $('#totalPrice').val();

            var data = {
              total,
              caratetisticas: selects_values
            }

            axios.post('/api/servico-custom', data)
            .then(function (res) {
              console.log(res);
              document.getElementById('form-save-custom-service').reset();
              document.getElementById('body11111').style.display = "none";
              document.getElementById('message1').style.display = "block";
              function clodeModal(){
                $('#servicoModal').modal('toggle');
                document.getElementById('body11111').style.display = "block";
                document.getElementById('message1').style.display = "none";
                location.reload();
              }
              setTimeout(clodeModal, 5000);
            })
            .catch(function (err){ 
              console.log(err)
              document.getElementById('span-error').innerHTML = "Ocorreu um erro! Tente novamente dentro de instantes.";
              document.getElementById('body11111').style.display = "none";
              document.getElementById('message-error1').style.display = "block";
              function explode(){
                document.getElementById('body11111').style.display = "block";
                document.getElementById('message-error1').style.display = "none";
              }
              setTimeout(explode, 3000);
            })

          })


        </script>
      @endpush