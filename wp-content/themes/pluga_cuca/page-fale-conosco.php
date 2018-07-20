<?php get_header(); ?>
    <section class="geral__bloco">    
        <div class="container">           
            <h1 class="geral__cabecalho">Fale Conosco</h1>
            <div class="row justify-content-center">                
                <div class="col-lg-5 col-md-12 col-12">
                    <p class="geral__destaque fale-conosco__frase">
                        "Ensinar é uma arte e nada pode substituir a riqueza do diálogo pedagógico. 
                        Contudo, as novas tecnologias abrem ao ensino vias inexploradas”.
                    </p>

                    <p class="geral__texto fale-conosco__livro">Educação um tesouro a descobrir</p>
                    <p class="geral__texto fale-conosco__autor">Jacques Delors</p>
                </div>

                <div class="col-lg-4 col-md-12 col-12">
                    <p class="geral__texto text-left">Entre em contato conosco através do formulário abaixo.</p>

                    <form>
                        <div class="form-group text-left">
                            <label class="geral__label" for="nome">Nome:</label>
                            <input type="text" class="form-control" id="nome" placeholder="Inserir nome">
                        </div>
                        <div class="form-group text-left">
                            <label class="geral__label" for="email">E-mail:</label>
                            <input type="email" class="form-control" id="email" placeholder="Inserir e-mail">
                        </div>                        
                        <div class="form-group text-left">
                            <label class="geral__label" for="mensagem">Mensagem:</label>
                            <textarea class="form-control" id="mensagem" placeholder="Inserir sua mensagem" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-info float-right">ENVIAR</button>
                    </form>                    
                </div>                
            </div>
        </div>
    </section>
<?php get_footer(); ?>