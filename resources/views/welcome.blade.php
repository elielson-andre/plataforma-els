<!--
     2022 - Els learning | elielsondeveloper@gmail.com
-->
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ELS Learn | Aprenda programação do absoluto zero!</title>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/wellcome.css') }}">
    <script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
	<script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
							<a href="#">
								<img class="header-logo-image" src="{{ asset('images/logo.svg') }}" alt="Logo">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
						<div class="hero-copy">
	                        <h1 class="hero-title mt-0">< /> Desenvolvimento web sem complicações, do absoluto zero.</h1>
	                        <p class="hero-paragraph">Seja para conhecer, ou para atuar na área que mais cresce no MUNDO, aprenda mesmo que nunca tenha escrito uma linha de código</p>
	                        <div class="hero-cta"><a class="button button-primary" href="{{ route('register') }}">CRIAR CONTA</a><a class="button" href="{{ route('login') }}">ACESSAR MINHA CONTA</a></div>
						</div>
						<div class="hero-figure anime-element">
							<svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
								<rect width="528" height="396" style="fill:transparent;" />
							</svg>
							<div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
							<div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
							<div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
							<div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
							<div class="hero-figure-box hero-figure-box-05"></div>
							<div class="hero-figure-box hero-figure-box-06"></div>
							<div class="hero-figure-box hero-figure-box-07"></div>
							<div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
							<div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
							<div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
						</div>
                    </div>
                </div>
            </section>

            <section class="features section">
                <div class="container">
					<div class="features-inner section-inner has-bottom-divider">
                        <div class="features-wrap">
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="{{ asset('images/feature-icon-01.svg') }}" alt="Feature 01">
                                    </div>
                                    <h4 class="feature-title mt-24">Conceitos gerais</h4>
                                    <p class="text-sm mb-0">Neste pequeno treinamento, você entenderá os principais conceitos da computação, para ter uma jornada de aprendizado mais sólida.</p>
                                </div>
                            </div>
							<div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="{{ asset('images/feature-icon-02.svg') }}" alt="Feature 02">
                                    </div>
                                    <h4 class="feature-title mt-24">Lógica</h4>
                                    <p class="text-sm mb-0">Aprenda a pensar como um programador! Entender o problema, esquematizar uma solução, e colocá-la em prática.</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="{{ asset('images/feature-icon-03.svg') }}" alt="Feature 03">
                                    </div>
                                    <h4 class="feature-title mt-24">Carga básica</h4>
                                    <p class="text-sm mb-0">Ao final do treinamento, você terá toda carga básica para dar seus primeiros passos no mercado de tecnologia!</p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </section>

			<section class="cta section">
				<div class="container">
					<div class="cta-inner section-inner">
						<h3 class="section-title mt-0">Alguma dúvida?</h3>
						<div class="cta-cta">
							<a class="button button-primary button-wide-mobile" href="https://api.whatsapp.com/send?phone=5598987150653">ENTRE EM CONTATO</a>
						</div>
					</div>
				</div>
			</section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner">

                    <div class="footer-copyright">&copy; 2022 Els-learning | elielsondeveloper@gmail.com</div>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{ asset('js/wellcome.js') }}"></script>
</body>
</html>
