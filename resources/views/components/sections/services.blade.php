<!--==========================
      Services Section
    ============================-->
    <section class="pricing py-5" id="servicos">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">SERVIÇOS</h3>
        </div>
        @php
        $count = 1;
        $postCount = 0;
        @endphp
        @foreach($servis as $servi)
          @if($count==3) 
            @php
            $count = 0;
            @endphp
          @endif
          @if($postCount==3)
          <div id="ola" class="row mt-5 mb-5" style="display: none;">
          @endif
          @if($count == 1)
          <div class="row mt-5 mb-5">
          @endif
            <!-- Free Tier -->
            <div class="col-md-4">
              <div class="card mb-5 mt-5 mb-lg-0">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">{{$servi->nome}}</h5>
                  <h6 class="card-price text-center"><span style="font-size: 0.75em;">€</span>{{$servi->preco}}</h6>
                  <hr>
                  <ul class="fa-ul">
                    @foreach($servi->caracteristica as $carac)
                      @if($carac->desc == 'Basic' || $carac->desc == 'Standard' || $carac->desc == 'Lavagem Manual')
                        <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>{{$carac->desc}}</strong></li>
                      @else
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>{{$carac->desc}}</li>
                      @endif
                    @endforeach
                  </ul>
                  @auth
                  <a class="btn btn-block btn-primary text-uppercase text-light" data-toggle="modal" data-target="#agendaModal" onclick="setAgendamento({{$servi->id}}, '{{$servi->nome}}')">AGENDAR</a>
                  @endauth
                  @guest
                  <a href="/login" class="btn btn-block btn-primary text-uppercase">AGENDAR</a>
                  @endguest
                </div>
              </div>
            </div>
            @if($count==0)
            </div>
            @endif
            @php
            $count++;
            $postCount++;
            @endphp
            @endforeach
            @auth
            @if(count($servisC) >0)
            @php
            $count = 1;
            $postCount = 0;
            @endphp
            @foreach($servisC as $serviC)
              @if($count==3) 
                @php
                $count = 0;
                @endphp
              @endif
              @if($postCount==3)
              <div id="ola" class="row mt-5 mb-5" style="display: none;">
              @endif
              @if($count == 1)
              <div class="row mt-5 mb-5">
              @endif
                <!-- Free Tier -->
                <div class="col-md-4">
                  <div class="card mb-5 mt-5 mb-lg-0">
                    <div class="card-body">
                      <h5 class="card-title text-muted text-uppercase text-center">{{$serviC->nome}}</h5>
                      <h6 class="card-price text-center"><span style="font-size: 0.75em;">€</span>{{$serviC->Total}}</h6>
                      <hr>
                      <ul class="fa-ul">
                        @foreach($serviC->caracteristica as $carac)
                          @if($carac->desc == 'Basic' || $carac->desc == 'Standard' || $carac->desc == 'Lavagem Manual')
                            <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>{{$carac->desc}}</strong></li>
                          @else
                            <li><span class="fa-li"><i class="fas fa-check"></i></span>{{$carac->desc}}</li>
                          @endif
                        @endforeach
                      <a class="btn-agendar-custom btn-primary text-uppercase text-light" data-toggle="modal" data-target="#agendaModal" onclick="setAgendamento({{$serviC->id}}, '{{$serviC->nome}}')">AGENDAR</a>
                      <a href="/api/eliminar-custom/{{$serviC->id}}" class="btn-eliminar btn-primary text-uppercase text-light">ELIMINAR</a>
                    </div>
                  </div>
                </div>
                @if($count==0)
                </div>
                @endif
                @php
                $count++;
                $postCount++;
                @endphp
                @endforeach
                @endif
                @endauth
                @auth
                <div class="col-12 my_bt_custom">
                    <button id="btcustom" class="button btn-block btn-primary text-uppercase" data-toggle="modal" data-target="#servicoModal">Criar Serviço Personalizado</button>
                </div>
                @endauth
              </div>
              </div>
              </div>

                <div class="my_bt_readmore">
                    <button id="meubt" onclick="myFunction()" class="button btn-block btn-primary text-uppercase" style="margin: 0 auto;">Ver Mais Serviços</button>
                </div>
            </div>
          </div>
        </section>
<script>
  var Id=null;
  function setAgendamento (id, nome){
    Id = id;
    document.getElementById("nome_servi").innerHTML=nome;
  }
</script> 