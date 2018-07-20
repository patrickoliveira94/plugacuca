<?php get_header(); ?>
    <section>
        <div class="jumbotron jumbotron-fluid">
            <div class="jumbotron__container centralized-text">
                <div class="jumbotron__wrap-jumbotrom-content">
                    <h1 class="display-5">Pais, Aprendizes e Educadores</h1>                             
                </div>
            </div>
            <div class="jumbotron__layer"></div>
        </div>

        <div class="container pais-aprendizes-educadores">
            <div class="row justify-content-center pais-aprendizes-educadores__item">
                <div class="col-lg-4 col-md-12 col-12">
                    <img src="<?= get_template_directory_uri() . '/images/pais.jpg'; ?>" width="350" height="225" alt="Pais">
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <p class="geral__titulo">Pais</p>
                    <p class="geral__texto">
                        Acabou o tormento, lição de casa é aqui!
                        Vai sobrar tempo para o descanso e para aproveitar melhor o convívio em família. 
                        Pensamos em vocês porque também temos filhos com lição de casa para fazer.
                        Vai ser legal! Naveguem com seus filhos e confiram.
                        Assim que conferirem não vão querer outra vida!
                        Façam uma visita por todo o site, vale a pena!
                        Para ter acesso gratuito às aulas, clique aqui e cadastre-se.                        
                    </p>
                </div>
            </div>

            <div class="row justify-content-center pais-aprendizes-educadores__item">
                <div class="col-lg-4 col-md-12 col-12">
                    <img src="<?= get_template_directory_uri() . '/images/aprendizes.jpg'; ?>" width="350" height="225" alt="Pais">
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <p class="geral__titulo">Aprendizes</p>
                    <p class="geral__texto">
                        Ei! Vamos fazer a lição de casa?
                        Você acaba de entrar no lugar certo!
                        Aqui tem gente competente do seu lado.
                        Professores especialistas para trabalhar juntinho de você.
                        É Rápido e fácil! Entre já! É interativo!
                        Cadastre-se!'
                    </p>
                </div>
            </div>
            
            <div class="row justify-content-center pais-aprendizes-educadores__item">
                <div class="col-lg-4 col-md-12 col-12">
                    <img src="<?= get_template_directory_uri() . '/images/educadores.jpg'; ?>" width="350" height="225" alt="Pais">
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <p class="geral__titulo">Educadores</p>
                    <p class="geral__texto">
                        Colega, sabemos da nossa responsabilidade no ensinar. Muitas vezes, ficamos impossibilitados. 
                        Sofremos com isso. Você é aquele professor que tem, na sua sala de aula, pelo menos quatro níveis de alunos?
                    </p>
                    <ul class="geral__texto">
                        <li>Primeiro: aquele(s) excelente(s), que precisa(m) esperar os outros?</li>
                        <li>Segundo: aqueles que acompanham suas explicações?</li>
                        <li>Terceiro: aqueles que, "cutucados", fazem?</li>
                        <li>Quarto: aqueles que apresentam muitas dificuldades?</li>
                    </ul>   
                    <p class="geral__texto">
                        Nós também temos e sabemos o quanto é difícil!
                        Sofremos todos: professores e alunos.
                        Pois bem! Podemos ajudá-lo nessa empreitada.
                        Cadastre-se, navegue aqui e fale disso para o seu aluno. Vai ser ótimo para ele. E para você!
                        Clique... Fala Professor e mande o seu recado. Você é 10.
                    </p>
                </div>
            </div>            
        </div>
    </section>
<?php get_footer(); ?>