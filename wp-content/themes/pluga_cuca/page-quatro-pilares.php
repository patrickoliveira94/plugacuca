<?php get_header(); ?>
    <section class="geral__bloco">    
        <div class="container">           
            <h1 class="geral__cabecalho">Os quatro pilares da educação</h1>
            <div class="row justify-content-center">                
                <div class="col-md-12 col-12">
                    <p class="geral__destaque">
                        Os quatro pilares da Educação são conceitos de fundamento da educação baseados no Relatório para a 
                        UNESCO da Comissão Internacional Sobre Educação para o Século XXI , coordenada por Jacques Delors 
                        onde se propõe uma educação direcionada para os quatro tipos fundamentais de educação: aprender 
                        a conhecer, aprender a fazer, aprender a viver com os outros, aprender a ser, eleitos como os 
                        quatro pilares fundamentais da educação.
                    </p>

                    <div class="geral__linha quatro-pilares__linha"></div>           
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-3 col-12">
                    <img class="geral__thumb-redonda" src="<?= get_template_directory_uri() . '/images/pilares-1.jpg'; ?>" width="98" height="98">
                    <p class="geral__titulo quatro-pilares__titulo">Aprender a Conhecer</p>                    
                    <p class="geral__texto">
                        Esta aprendizagem deve ser encarada como um meio e uma finalidade da vida humana 
                        (já que a educação deve ser pensada e planejada para ocorrer em todas as fases da vida).
                    </p>
                </div>
                <div class="col-md-3 col-12">
                    <img class="geral__thumb-redonda" src="<?= get_template_directory_uri() . '/images/pilares-2.jpg'; ?>" width="98" height="98">
                    <p class="geral__titulo quatro-pilares__titulo">Aprender a Fazer</p>
                    <p class="geral__texto">
                        Aprender a conhecer e aprender a fazer estão, em larga medida, indissociáveis. 
                        No entanto, a segunda aprendizagem está mais estreitamente ligada à questão da formação profissional.
                        Aprender a fazer não deve limitar o ensino apenas a uma tarefa material bem definida.
                    </p>
                </div>
                <div class="col-md-3 col-12">
                    <img class="geral__thumb-redonda" src="<?= get_template_directory_uri() . '/images/pilares-3.jpg'; ?>" width="98" height="98">
                    <p class="geral__titulo quatro-pilares__titulo">Aprender a viver com os outros</p>
                    <p class="geral__texto">
                        Esta aprendizagem, sem dúvida, representa um dos maiores desafios da atualidade. 
                        O mundo atual está repleto de violência, em oposição à esperança que alguns têm no progresso da humanidade.
                    </p>
                </div>
                <div class="col-md-3 col-12">
                    <img class="geral__thumb-redonda" src="<?= get_template_directory_uri() . '/images/pilares-4.jpg'; ?>" width="98" height="98">
                    <p class="geral__titulo quatro-pilares__titulo">Aprender a ser</p>
                    <p class="geral__texto">
                        A educação deve contribuir para o desenvolvimento total da pessoa – espírito, corpo, inteligência, 
                        sensibilidade, sentido estético, responsabilidade pessoal e espiritualidade. 
                        Todo ser humano deve receber uma educação que lhe dê ferramentas para o despertar 
                        do pensamento crítico e autônomo, assim como para formular seus juízos de valor e ser autônomo intelectualmente.
                    </p>
                </div>                                                
            </div>
        </div>
    </section>
<?php get_footer(); ?>