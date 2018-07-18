<?php
get_header();
?>
    <div class="jumbotron jumbotron-fluid">
        <div class="jumbotron__container centralized-text">
            <div class="jumbotron__wrap-jumbotrom-content">
                <h1 class="display-5">Conheça o Pluga Cuca</h1>
                <p class="jumbotron__lead">Pluga Cuca é um método de ensino que facilita a aprendizagem e utiliza a Internet como ferramenta.</p>
                <button type="button" class="btn btn-success">CADASTRE-SE</button>
                <div class="centralized-text">
                    <img class="jumbotron__arrow" src="<?= get_template_directory_uri() . '/images/arrow_down.svg'; ?>" width="30" height="30">
                </div>                
            </div>
        </div>
        <div class="jumbotron__layer"></div>
    </div>

    <div class="saiba-mais">
        <p class="saiba-mais__titulo">Saiba mais sobre os quatro pilares da educação ></p>
        <div class="container saiba-mais__itens">
            <div class="row justify-content-md-center">
                <div class="col-sm-6 col-md-2 col-lg-1">
                    <img class="saiba-mais__bag" src="<?= get_template_directory_uri() . '/images/bag.svg'; ?>" alt="Aprender a Conhecer">
                </div>
                <div class="col-sm-6 col-md-2 col-lg-1">
                    <img class="saiba-mais__hand" src="<?= get_template_directory_uri() . '/images/hand.svg'; ?>" alt="Aprender a Fazer">
                </div>
                <div class="col-sm-6 col-md-2 col-lg-1">
                    <img class="saiba-mais__people" src="<?= get_template_directory_uri() . '/images/people.svg'; ?>" alt="Aprender a viver com os outros">
                </div>
                <div class="col-sm-6 col-md-2 col-lg-1">
                    <img class="saiba-mais__digital" src="<?= get_template_directory_uri() . '/images/digital.svg'; ?>" alt="Aprender a ser">
                </div>            
            </div>
        </div>
    </div>

    <div class="geral__bloco aprenda-ja">
        <p class="geral__titulo">Aprenda Já!</p>
        <p class="geral__subtitulo">Aqui o espaço é seu.</p>

        <ul class="nav nav-pills mb-3 justify-content-center aprenda-ja__categorias" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">ENSINO FUNDAMENTAL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">ENSINO MÉDIO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">TABUADA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">MATERIAL DOURADO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">EDUCAÇÃO FINANCEIRA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">HISTORINHAS</a>
            </li>                                    
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-6 col-md-3">
                            <div class="aprenda-ja__curso">
                                <div class="aprenda-ja__curso-thumb">

                                </div>
                                <p class="aprenda-ja__curso-titulo">Título do Curso em 2 Linhas no máximo</p>
                                <p class="aprenda-ja__curso-categoria">Ensino Fundamental</p>
                                <p class="aprenda-ja__curso-ano">1º ano</p>
                                <p class="aprenda-ja__curso-materia">Português</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="aprenda-ja__curso">
                                <div class="aprenda-ja__curso-thumb">

                                </div>
                                <p class="aprenda-ja__curso-titulo">Título do Curso em 2 Linhas no máximo</p>
                                <p class="aprenda-ja__curso-categoria">Ensino Fundamental</p>
                                <p class="aprenda-ja__curso-ano">1º ano</p>
                                <p class="aprenda-ja__curso-materia">Português</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="aprenda-ja__curso">
                                <div class="aprenda-ja__curso-thumb">

                                </div>
                                <p class="aprenda-ja__curso-titulo">Título do Curso em 2 Linhas no máximo</p>
                                <p class="aprenda-ja__curso-categoria">Ensino Fundamental</p>
                                <p class="aprenda-ja__curso-ano">1º ano</p>
                                <p class="aprenda-ja__curso-materia">Português</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="aprenda-ja__curso">
                                <div class="aprenda-ja__curso-thumb">

                                </div>
                                <p class="aprenda-ja__curso-titulo">Título do Curso em 2 Linhas no máximo</p>
                                <p class="aprenda-ja__curso-categoria">Ensino Fundamental</p>
                                <p class="aprenda-ja__curso-ano">1º ano</p>
                                <p class="aprenda-ja__curso-materia">Português</p>
                            </div>
                        </div>                                        
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">2</div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">3</div>
        </div>    
        
        <div class="justify-content-center">
            <button type="button" class="btn geral__btn">VEJA NOSSAS AULAS ></button>
        </div>
    </div>

    <div class="geral__bloco envolvidos">
        <p class="geral__titulo">Pais, aprendizes e educadores</p>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-4">
                    <img class="envolvidos__thumb" src="<?= get_template_directory_uri() . '/images/pais.jpg'; ?>" width="215" height="215" alt="Pais">
                    <p class="envolvidos__subtitulo">
                        Pais >
                    </p>
                </div>
                <div class="col-sm-12 col-md-4">
                    <img class="envolvidos__thumb" src="<?= get_template_directory_uri() . '/images/aprendizes.jpg'; ?>" width="215" height="215" alt="Aprendizes">
                    <p class="envolvidos__subtitulo">
                        Aprendizes >
                    </p>                    
                </div>
                <div class="col-sm-12 col-md-4">
                    <img class="envolvidos__thumb" src="<?= get_template_directory_uri() . '/images/educadores.jpg'; ?>" width="215" height="215" alt="Educadores">
                    <p class="envolvidos__subtitulo">
                        Educadores >
                    </p>                    
                </div>
            </div>
        </div>
    </div>

    <div class="geral__bloco">
        <p class="geral__titulo">Quem somos?</p>
        <p class="geral__subtitulo">Somos educadores com compromisso para a melhoria da qualidade do ensino.</p>
        <button type="button" class="btn geral__btn">CONHEÇA ></button>
    </div>

<?php
get_footer();