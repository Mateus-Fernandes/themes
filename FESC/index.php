<?php get_header(); ?>
    <div id="video-carousel-example top" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
            <video class="video-fluid" autoplay loop muted>
                <source src="<?php bloginfo('template_directory'); ?>/video_bannerv2.mp4" type="video/mp4" />
            </video>
            <div class="legenda">
                <h2>Sistema Unimed</h2>
                <p>A FESC é a grande aliada das cooperativas <br> que forma o Sistema Unimed.</p>
                <a href="#sobre" class="conheca">Conheça <i class="icon-arrow_down"></i></a>
            </div>
            </div>
        </div>
    </div>

    <section class="a_fesc" id="sobre">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="title">A fesc</h2>
                    <p class="subtitle">A FESC é a grande aliada das <br> cooperativas que formam o <br> Sistema Unimed. </p>
                    <div class="grid">
                        <p>Criada pela Unimed Santa Catarina, a empresa conhece as reais necessidades das Singulares e Federações, criando e implantando soluções tecnológicas para gestão, qualidade do atendimento, controle de custos, otimização de processos, capacidade de gerar bons resultados e excelência dos serviços.</p>
                        <p>Fundada em 2011, a FESC já se tornou referência no país, atuando em Unimeds de diversos estados. Seus diferenciais também se firmaram no mercado nacional, como sinônimo de eficiência na busca de respostas para as demandas específicas das cooperativas.</p>
                        <p>Hoje, a FESC atende mais de 120 Unimeds no Brasil, em 23 estados, beneficiando cerca de 5 milhões de clientes em todo o país, consolidando sua marca e seus produtos.</p>
                    </div>
                </div>
                <div class="col-md-4 text-right">
                    <img src="<?php bloginfo('template_directory'); ?>/images/afesc.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="conheca_fesc">
        <div class="container">
            <div class="line_gray"></div>
            <h2 class="title">Conheça a FESC:</h2>
            <div class="video_area">
                <div class="video_play" id="video_play">
                <video id="video" poster="<?php bloginfo('template_directory'); ?>/images/video_imagem.jpg" src="<?php bloginfo('template_directory'); ?>/fesc.mp4"></video>
                    <a class="play" id="play_button">
                        <span class="icon-play">
                            <span class="path1"></span><span class="path2"></span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="line_gray"></div>
        </div>
    </section>

    <section class="nossas_solucoes" id="solucoes">
        <div class="container">
            <h2 class="title">Nossas Soluções</h2>
            <p class="subtitle">Nossos serviços são desenvolvidos com tecnologia e <br> humanização do atendimento, com soluções especializadas em:</p>
            <div class="row lista_solucoes only_mobile">
                <div class="col-md-4 sgu active">
                    <div class="dentro_solucao">
                        <div class="header_solucao d-flex">
                            <a href="#sgu"><img src="<?php bloginfo('template_directory'); ?>/images/sgu.svg" alt=""></a>
                            <a href="#sgu" class="d-flex align-items-center"><h3>Soluções SGU</h3></a>
                        </div>
                        <div class="imagem_solucao">
                            <a href="#sgu"><img src="<?php bloginfo('template_directory'); ?>/images/sgu_imagem.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 auditoria">
                    <div class="dentro_solucao">
                        <div class="header_solucao d-flex">
                            <a href="#auditoria"><img src="<?php bloginfo('template_directory'); ?>/images/auditoria.svg" alt=""></a>
                            <a href="#auditoria" class="d-flex align-items-center"><h3>Auditoria em Saúde</h3></a>
                        </div>
                        <div class="imagem_solucao">
                            <a href="#auditoria"><img src="<?php bloginfo('template_directory'); ?>/images/auditoria_imagem.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 contact">
                    <div class="dentro_solucao">
                        <div class="header_solucao d-flex">
                            <a href="#contact"><img src="<?php bloginfo('template_directory'); ?>/images/contact.svg" alt=""></a>
                            <a href="#contact" class="d-flex align-items-center"><h3>Contact Center</h3></a>
                        </div>
                        <div class="imagem_solucao">
                            <a href="#contact"><img src="<?php bloginfo('template_directory'); ?>/images/contact_imagem.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="open_solucao sgu_content current" id="sgu">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 left_solucao" style="background: #67418b">
                        <div class="texto_left">
                            <h4>SGU 2.0</h4>
                            <p>O SGU 2.0 é um sistema de gestão focado nos processos do sistema Unimed, garantindo alto índice de automação e gerenciamento. Ele permite a implementação dinâmica das regras de auditoria de contas sem a necessidade de customização, dando mais agilidade e autonomia para as singulares da Unimed.</p>
                            <p>É composto por módulos que fazem a integração entre cadastro de beneficiários, processamento de contas médicas, auditoria, faturamento, pagamentos, atendimento ANS e informações gerenciais.</p>
                        </div>
                        <div class="video_left d-none"> <!-- Add to wp -->
                            <img src="<?php bloginfo('template_directory'); ?>/images/sgu_video.png" alt="">
                            <a href="#" class="play">
                                <span class="icon-play">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-6 right_solucao">
                        <h5>Diferenciais</h5>
                        <p>• Único sistema com atendimento integral a normas da Unimed do Brasil e da ANS com custo zero de customização para sua Unimed.</p>
                        <p>• Solução escolhida por 44 Unimeds no país de diferentes portes.</p>
                        <p>• Metodologia de implantação diferenciada para Unimeds até 20.000 beneficiários.</p>
                        <p>• Sistemas desenvolvidos dentro das terminologias e processos Unimed (especialista)</p>
                        <p>• Equipe com profundo conhecimento do negócio.</p>
                        <p>• Núcleo de processamento de regras de negócio com Inteligência Artificial.</p>
                        <p>• Integração nativa com as soluções do portal Unimed.</p>
                        <p>• Serviços de monitoramento 24x7, atualização das aplicações e consultoria pontual.</p>
                        <p>• Diversos mecanismos de elegibilidade dos beneficiários (biometria digital, biometria facial, bloqueio de pesquisas sem cartão etc.).</p>
                        <p>• Módulo de validação de estrutura e também conteúdo da produção enviada pelos prestadores no formato TISS.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="open_solucao auditoria_content" id="auditoria">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 left_solucao" style="background: #a4c267">
                        <div class="texto_left">
                            <h4>Auditoria</h4>
                            <p>Estrutura especializada na área de auditoria, com foco na padronização da execução das condutas técnicas no cenário atual do setor de saúde suplementar, bem como no cumprimento dos prazos de resposta pré-definidos pela ANS (Agência Nacional de Saúde Suplementar) e pela Unimed do Brasil.</p>
                            <ul class="tabs">
                                <li class="tab-link current" data-tab="tab-1">Consultoria Médica <i class="icon-arrow_down"></i></li>
                                <li class="tab-link" data-tab="tab-2">Consultoria Técnica <i class="icon-arrow_down"></i></li>
                                <li class="tab-link" data-tab="tab-3">Junta Médica <i class="icon-arrow_down"></i></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-6 right_solucao auditoria_text">
                        <div id="tab-1" class="tab-content current">
                            <h5>Consultoria em auditoria médica de autorização e consultoria médica especializada (segunda opinião) </h5>
                            <p>• Núcleo técnico especializado na emissão de pareceres de auditoria/2ª opinião </p>
                            <p>• 30 médicos auditores/consultores em 17 especialidades médicas</p>
                            <p>• Retorno em até 72 horas </p>
                            <p>• Pareceres pautados em boas práticas médicas e resolução normativa vigente </p>
                            <p>• Equipe em constante atualização, primando pela qualidade nos pareceres emitidos</p>
                        </div>
                        <div id="tab-2" class="tab-content">
                            <h5>Consultoria em auditoria técnica retrospectiva </h5>
                            <p>• Equipe médica e enfermagem com expertise na análise de auditoria de contas </p>
                            <p>• Atuação pautada nos regramentos vigentes do Sistema Unimed</p>
                            <p>• Pareceres emitidos com foco na qualidade </p>
                            <p>• Análise técnica das contestações efetuadas na ferramenta AJIUS</p>
                            <p>• Atuação online no sistema de gestão das Unimeds contratantes</p>
                        </div>
                        <div id="tab-3" class="tab-content">
                            <h5>Junta Médica</h5>
                            <p>• Redução de impasses no processo de autorização </p>
                            <p>• Índice acima de 65% nos resultados de efetividade do processo</p>
                            <p>• Processo 100% aderente a RN 424 da ANS </p>
                            <p>• Experiência de mais de 5.000 juntas médicas realizadas; </p>
                            <p>• Mais de 100 Unimeds clientes atendidas com o serviço; </p>
                            <p>• Mais de 200 médicos desempatadores em mais de 30 especialidades aptos a emitirem pareceres de junta médica</p>
                            <p>• Alto índice de resolutividade e economia gerada às operadoras clientes dos serviços</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="open_solucao contact_content" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 left_solucao" style="background: #e06539">
                        <div class="texto_left">
                            <h4>Contact Center</h4>
                            <p>O Contact Center da FESC possui uma estrutura preparada para oferecer atendimento aos clientes das operadoras por meio de 0800, internet e e-mail. O diferencial é que o atendimento é realizado por profissionais com a experiência e a cultura organizacional do Sistema Unimed.</p>
                        </div>
                        <div class="video_left">
                            <img src="<?php bloginfo('template_directory'); ?>/images/contact_video.png" alt="">
                            <a href="#" class="play">
                                <span class="icon-play">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-6 right_solucao">
                        <h5>Serviços</h5>
                        <p>• SAC e backoffice.</p>
                        <p>• Agendamento de consulta e procedimentos médicos – RN 259/268</p>
                        <p>• Pesquisa para o segmento de saúde suplementar – satisfação do cliente/cooperado, insuficiência de rede, satisfação da ANS (Agência Nacional de Saúde Suplementar)</p>
                        <p>• Autorização administrativa e médica à noite e em finais de semana</p>
                        <p>• Retorno fonado de negativas de autorização de procedimentos médicos – RN 319 </p>
                        <h5>Diferenciais</h5>
                        <p>• Solução alinhada à cultura organizacional da Unimed, compartilhando os mesmos princípios, visão e valores da cooperativa</p>
                        <p>• Expertise em gerenciamento de Contact Center dentro da realidade dos planos de saúde </p>
                        <p>• Atendimento integral das normas da Unimed do Brasil e ANS com custo zero de adaptação para sua Unimed </p>
                        <p>• 42 premiações em diversas categorias no Prêmio Nacional Unimed de Atendimento</p>
                        <p>• Serviço utilizado por 28 Unimeds no país de diferentes portes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="depoimentos" id="depoimentos">
        <div class="container">
            <div class="line_gray"></div>
            <h2 class="title">Depoimentos</h2>
        </div>
        <div class="container-fluid fluid-depo">
            <div class="lista_depoimentos">
                <div class="dentro_depoimento">
                    <div class="cada_depoimento">
                        
                        <div class="texto_depoimento">
                            <p>“Como cliente FESC posso afirmar que a estabilidade da versão atual do SGU me deixa muito tranquilo, facilitando o trabalho de toda equipe. A meta é que essa conquista também aconteça no setor de Contas Médicas, em implantação.”</p>
                            <h4>Sandro Abreu - Gerente TI <span>Unimed Juiz de Fora</span></h4>
                        </div>
                    </div>
                </div>
                <div class="dentro_depoimento">
                    <div class="cada_depoimento">
                        
                        <div class="texto_depoimento">
                            <p>“Somos clientes FESC há quatro anos e estamos muito felizes porque as soluções da empresa ajudaram a melhorar os processos internos. Somos bem cuidados pela FESC, que entrega o que pedimos, com novas tecnologias para os nossos produtos.”</p>
                            <h4>Fábio Leite - Gerente de TI <span>Unimed Guarulhos</span></h4>
                        </div>
                    </div>
                </div>
                <div class="dentro_depoimento">
                    <div class="cada_depoimento">
                        
                        <div class="texto_depoimento">
                            <p>“Como cliente FESC posso afirmar que a estabilidade da versão atual do SGU me deixa muito tranquilo, facilitando o trabalho de toda equipe. A meta é que essa conquista também aconteça no setor de Contas Médicas, em implantação.”</p>
                            <h4>Sandro Abreu - Gerente TI <span>Unimed Juiz de Fora</span></h4>
                        </div>
                    </div>
                </div>
                <div class="dentro_depoimento">
                    <div class="cada_depoimento">
                        
                        <div class="texto_depoimento">
                            <p>“Somos clientes FESC há quatro anos e estamos muito felizes porque as soluções da empresa ajudaram a melhorar os processos internos. Somos bem cuidados pela FESC, que entrega o que pedimos, com novas tecnologias para os nossos produtos.”</p>
                            <h4>Fábio Leite - Gerente de TI <span>Unimed Guarulhos</span></h4>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>

    <section class="premios" id="premios">
        <div class="container">
            <div class="line_gray"></div>
            <h2 class="title">Prêmios e Resultados</h2>
            <div class="row">
                <div class="col-md-3 texto_premio">
                    <p>Pelo 9º ano consecutivo o Contact Center FESC foi contemplado no Prêmio Nacional Unimed de Atendimento 2018 e já acumula 42 premiações em diversas categorias.</p>
                    <p>A premiação é promovida pela Central Nacional Unimed e reconhece as melhores práticas em atendimento no Sistema Unimed.</p>
                    <p><b>Foram premiadas 6 Unimeds atendidas pelo Contact Center FESC:</b></p>
                </div>
                <div class="col-md-9">
                    <div class="row only_mobile">
                        <div class="col-md-4 cada_premio">
                            <div class="caixa_premio">
                                <div class="imagem_premio"><img src="<?php bloginfo('template_directory'); ?>/images/unimed_pequeno.png" alt=""></div>
                                <h4>Unimed de Pequeno Porte</h4>
                            </div>
                            <div class="text-center">Unimed Planalto Norte (1º lugar), Unimed Extremo Oeste (2º lugar) e Unimed Brusque (3º lugar)</div>
                        </div>
                        <div class="col-md-4 cada_premio">
                            <div class="caixa_premio">
                                <div class="imagem_premio"><img src="<?php bloginfo('template_directory'); ?>/images/unimed_medio.png" alt=""></div>
                                <h4>Unimed de Médio Porte</h4>
                            </div>
                            <div class="text-center">Unimed Sul Capixaba (1º lugar)</div>
                        </div>
                        <div class="col-md-4 cada_premio">
                            <div class="caixa_premio">
                                <div class="imagem_premio"><img src="<?php bloginfo('template_directory'); ?>/images/unimed_federacao.png" alt=""></div>
                                <h4>Federação <br> Unimed</h4>
                            </div>
                            <div class="text-center">Federação do Paraná (2º lugar) e Federação de Santa Catarina (3º lugar)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="linkedin">
        <div class="container">
            <div class="line_gray"></div>
            <h2 class="title">Acompanhe nosso Facebook</h2>
            <ul class="juicer-feed" data-per="3" data-truncate="120" data-after="translateJuicer()" data-feed-id="fesctecnologia"></ul>
        </div>
    </section>

    <section class="contato" id="contato">
        <div class="container">
            <div class="row">
                <div class="col-md-7 left_contato">
                    <h2>Contato</h2>
                    <p>Interessou? Vamos conversar!</p>
                    <div class="d-flex align-items-center contato_icon">
                        <div class="lista_telefones">
                        <a href="tel:4734410541" class="d-flex">
                            <i class="icon-wp-ball"></i>
                            <h3>Comercial <span>47 3441-0541 / 47 3441-0715</span></h3>
                        </a>
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=5547991328388&text=Qual%20a%20sua%20d%C3%BAvida%3F%20FESC" class="d-flex">
                            <i class="icon-wp"></i>
                            <h3>WhatsApp <span>Clique para conversar</span></h3>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 form_contato">
                    <h3 class="text-center">Preencha o formulário abaixo</h3>
                    <?php echo do_shortcode('[contact-form-7 id="5" title="Contato"]'); ?>
                </div>
            </div>
        </div>
    </section>
    <div class="secao_mapa position-relative">
        <div id="map"></div>
        <a target="_blank" href="https://www.google.com/maps?ll=-26.297800,-48.864680&z=18&t=m&hl=pt-BR&gl=US&mapclient=apiv3" class="abrir_map">Abrir no maps</a>
    </div>

    <?php get_footer(); ?>