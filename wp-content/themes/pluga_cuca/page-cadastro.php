<?php get_header(); ?>
    <section class="geral__bloco">    
        <div class="container">                       
            <div class="row justify-content-center">                
                <div class="col-lg-8 col-md-12 col-12">
                    <h1 class="geral__cabecalho">Para o acesso gratuito às aulas online, cadastre-se. É rápido e fácil!</h1>

                    <form>
                        <div class="form-row">
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="form-group text-left">
                                    <label class="geral__label" for="nome">Nome Completo:</label>
                                    <input type="text" class="form-control" id="nome">
                                </div>

                                <div class="form-row">
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="form-group text-left">
                                            <label class="geral__label" for="telefone">Telefone:</label>
                                            <input type="text" class="form-control" id="telefone">
                                        </div>
                                    </div>      
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="form-group text-left">
                                            <label class="geral__label" for="nascimento">Nascimento:</label>
                                            <input type="date" class="form-control" id="nascimento">
                                        </div>
                                    </div>   
                                </div>
                                
                                <div class="form-row">
                                    <div class="col-lg-4 col-md-12 col-12">
                                        <div class="form-group text-left">
                                            <label class="geral__label" for="pais">Pais:</label>
                                            <select id="pais" class="form-control">
                                                <option selected>Brasil</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>     
                                    
                                    <div class="col-lg-3 col-md-12 col-12">
                                        <div class="form-group text-left">
                                            <label class="geral__label" for="estado">Estado:</label>
                                            <select id="estado" class="form-control">
                                                <option selected>SP</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>      
                                    
                                    <div class="col-lg-5 col-md-12 col-12">
                                        <div class="form-group text-left">
                                            <label class="geral__label" for="cidade">Cidade:</label>
                                            <select id="cidade" class="form-control">
                                                <option selected>Franca</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>                                      
                                </div>   
                                
                                <div class="form-row text-left cadastro__radio">
                                    <div class="col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio_option" id="aluno" value="A">
                                            <label class="form-check-label geral__label" for="aluno">Aluno</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio_option" id="profissional" value="P">
                                            <label class="form-check-label geral__label" for="profissional">Profissional da educação</label>
                                        </div>
                                    </div>                                
                                </div>

                                <div class="form-row">
                                    <div class="col-lg-4 col-md-12 col-12">
                                        <div class="form-group text-left">
                                            <label class="geral__label" for="ano">Ano:</label>
                                            <input type="text" class="form-control" id="ano">
                                        </div>
                                    </div>      
                                    <div class="col-lg-8 col-md-12 col-12">
                                        <div class="form-group text-left">
                                            <label class="geral__label" for="escola">Escola que estuda ou leciona:</label>
                                            <input type="text" class="form-control" id="escola">
                                        </div>
                                    </div>   
                                </div>                                
                            </div>

                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="form-group text-left">
                                    <label class="geral__label" for="email">E-mail:</label>
                                    <input type="email" class="form-control" id="email">
                                </div>    

                                <div class="form-row">
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="form-group text-left">
                                            <label class="geral__label" for="senha">Senha:</label>
                                            <input type="password" class="form-control" id="senha">
                                        </div>
                                    </div>      
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="form-group text-left">
                                            <label class="geral__label" for="confirmarsenha">Confirmar Senha:</label>
                                            <input type="password" class="form-control" id="confirmarsenha">
                                        </div>
                                    </div>   
                                </div>   
                                
                                <div class="form-row">
                                    <div class="col-12">
                                        <p class="geral__texto text-left">
                                            Atenção: Faça devidamente o seu cadastro com todas as informações 
                                            corretas e com o seu e-mail válido. 
                                            Ao clicar em "Cadastrar" você receberá um e-mail para confirmar e 
                                            ativar o seu cadastro. Caso contrário não terá acesso às aulas.
                                        </p>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">CADASTRAR!</button>
                            </div>
                        </div>
                    </form>                    
                </div>                
            </div>
        </div>
    </section>
<?php get_footer(); ?>