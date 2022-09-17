@extends('layouts.app')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body d-flex flex-wrap justify-content-center">
                        <div class="row">
                            <div class="col-md-12">
                                <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_dacnbi4x.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player>
                            </div>
                        </div>
                        <div class="row">
                            <h2> <i class="mdi mdi-rocket"></i> Desbloqueie seus limites com o premium</h2>
                        <ul>
                            <li>Suporte 1 à 1. Tire suas dúvidas diretamente com o instrutor (60 dias).</li>
                            <li>Acesso vitaício ao canal VIP do telegram com conteúdos adicionais, dicas de aprendizado, dicas para entrevistas e muito mais.</li>
                            <li>Obtenha feedbacks de outros alunos.</li>
                            <li>Desafios coletivos e muito mais.</li>

                        </ul>

                        <div class="col-12">
                            <h3>De <span><del>R$:85,00</del></span> por <span class="text-success">R$:45,90</span></h3>
                            <span class="mb-3">Pagamento online via PIX, cartão ou boleto. (parcelamento de até 5x)</span>
                            <br><br>
                            <a href="https://mpago.la/1CqHjcq" class="btn btn-inverse-success btn-fw ">EU QUERO SER PREMIUM!</a>
                        </div>





                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <!-- partial -->
</div>

@endsection
