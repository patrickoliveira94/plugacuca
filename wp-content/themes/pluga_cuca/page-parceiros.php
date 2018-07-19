<?php get_header(); ?>
    <section class="geral__bloco">    
        <div class="container">           
            <h1 class="geral__cabecalho">Parceiros</h1>
            <div class="geral__linha"></div> 
            <div class="row justify-content-center">                
                <div class="col-md-7 col-12">
                    <p class="geral__texto">
                        A sua empresa terá mais importância e será mais competitiva, participando com responsabilidade social. 
                        Só pela educação, muda-se um país! Entre em contato e participe efetivamente da sustentabilidade 
                        educacional do país. Acredite!!
                    </p>

                    <p class="geral__texto">
                        Conheça as empresas que acreditam na educação como processo de mudança social e apoiam o Pluga Cuca.
                    </p>                
                </div>
            </div>

            <div class="row justify-content-center parceiros__thumbs">
                <div class="col-lg-3 col-md-4 col-12">
                    <img class="parceiros__thumbs-item" src="<?= get_template_directory_uri() . '/images/ultragaz.jpg'; ?>" width="151" height="112" alt="Ultragaz">
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <img class="parceiros__thumbs-item" src="<?= get_template_directory_uri() . '/images/unifacef.png'; ?>" width="200" height="45" alt="Uni-FACEF">
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <img class="parceiros__thumbs-item" src="<?= get_template_directory_uri() . '/images/com4.png'; ?>" width="177" height="79" alt="Com4">
                </div>                                   
            </div>
        </div>
    </section>
<?php get_footer(); ?>