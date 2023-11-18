@extends('padrao')
@section('content')

<section>
  <div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="title d-flex align-items-center flex-wrap">
            <h2 class="mr-40">Alterar Curso</h2>
          </div>
        </div>
        <!-- Invoice Wrapper Start -->
        <div class="invoice-wrapper align-items-center m-5">
          <div class="row align-items-center">
            <div class="col-10 ">
              <div class="invoice-card card-style mb-30">
                <div class="card-style mb-30 ">
                  <form action="{{route('alterar-banco-curso', $registros->id)}}" method='post'>
                  @method('put')
                  @csrf
                  <div class="input-style-1 fs-4 ">
                    <label class="fs-4">Nome do Curso</label>
                    
                      <input name='nomecurso' type="text" placeholder="Linkedin como usar" value="{{$registros->nomecurso}}" />
                    
                  </div>
                  <div class="input-style-1 fs-4 ">
                    <label class="fs-4">Carga Horária</label>
                    
                      <input name='cargahoraria' type="text" placeholder="15" value="{{$registros->cargahoraria}}" />
                    
                  </div>
                  <div class="input-style-1 fs-4 ">
                    <label class="fs-4">Id da Categoria</label>
                    
                      <input name='idcategoria' type="text" placeholder="1" value="{{$registros->idcategoria}}"/>
                    
                  </div>
                  <div class="input-style-1 fs-4 ">
                    <label class="fs-4">Valor</label>
                    
                      <input name='valor' type="text" placeholder="200" value="{{$registros->valor}}" />
                    
                  </div>
                  <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Salvar</button>
                  </div>
                  </form>
                </div>

              </div>
              <!-- Invoice Wrapper End -->
            </div>
            <!-- end container -->
          </div>
          <!-- end container -->
        </div>
        <!-- end container -->
      </div>
      <!-- end container -->
    </div>
    <!-- end container -->
  </div>
  <!-- end container -->
</section>
@endsection