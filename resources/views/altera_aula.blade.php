@extends('padrao')
@section('content')

<section>
    <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title d-flex align-items-center flex-wrap">
                        <h2 class="mr-40">Alterar Aula</h2>
                    </div>
                </div>
                <!-- Invoice Wrapper Start -->
                <div class="invoice-wrapper align-items-center m-5">
                    <div class="row align-items-center">
                        <div class="col-10 ">
                            <div class="invoice-card card-style mb-30">
                                <div class="card-style mb-30 ">
                                    <form action="{{route('alterar-banco-aula', $registrosAula->id)}}" method='post'>
                                        @method('put')
                                        @csrf
                                        <div class="input-style-1 fs-4 ">
                                            <label class="fs-4">Id do Curso</label>

                                            <input name='idcurso' type="text" placeholder="6"
                                                value="{{$registrosAula->idcurso}}" />

                                        </div>
                                        <div class="input-style-1 fs-4 ">
                                            <label class="fs-4">Título da aula</label>

                                            <input name='tituloaula' type="text" placeholder="Ep. 1 Linkedin, Início"
                                                value="{{$registrosAula->tituloaula}}" />

                                        </div>
                                        <div class="input-style-1 fs-4 ">
                                            <label class="fs-4">Url da aula</label>
                                            <input name='urlaula' type="text"
                                                placeholder="https://youtube.com/example/uytrdfwf.com"
                                                value="{{$registrosAula->urlaula}}" />

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