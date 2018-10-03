<?php 
require "inc/config.php";
require "classes/secretaria.class.php";
require "classes/cargo.class.php";

$secretaria = new Secretaria($pdo);
$secre = $secretaria->listaSecretaria();

$cargo = new Cargo($pdo);
$info = $cargo->listaCargo();
 ?>
<div class="jumbotron">
   <div align="center"><img src="resources/images/logo.png" class="img-fluid"></div>
  <hr class="my-4">
  <h4>Pesquisa de Clima Organizacional</h4>
  <p class="lead" align="justify">Este questionário tem o objetivo de colher informações acerca de vários aspectos do clima organizacional da empresa. Suas respostas serão utilizadas para elaborar e implementar um plano de ação capaz de minimizar ou corrigir os principais problemas encontrados nesta organização. Suas respostas serão totalmente confidenciais e anônimas. Serão analisadas de forma agrupada e em conjunto com outras obtidas na pesquisa de clima organizacional. Desde já agradecemos a sua colaboração.</p>
</div>

<form action="" method="POST" role="form">
 <div class="container">
  <h4><i class="fas fa-users-cog">Identifacação</i></h4>
   <hr class="my-4">
   <div>
    <div class="col-md">
      <label><i class="fas fa-home">Secretaria</i></label>
       <select name="secretaria" class="form-control" required="required">
          <option value="">Escolha...</option>
        <?php  foreach ($secre as $secret):?>
          <option value="<?php echo $secret['nome'];?>"><?php echo $secret['nome'];?></option>
        <?php endforeach ?>
       </select>
    </div>
    <div class="col-md">
      <label><i class="fa fa-user">Cargo</i></label>
       <select name="cargo" class="form-control" required="required">
          <option value="">Escolha...</option>
        <?php  foreach ($info as $dado):?>
          <option value="<?php echo $dado['nome'];?>"><?php echo $dado['nome'];?></option>
        <?php endforeach ?>
       </select>
    </div>
    <div class="col-md">
      <label><i class="fa fa-users">Sexo</i></label>
       <select name="sexo" id="input" class="form-control" required="required">
         <option value="">Selecione...</option>
         <option value="Masculino">Masculino</option>
         <option value="Feminino">Feminino</option>
       </select>
    </div>

    <div class="col-md">
      <label><i class="fas fa-graduation-cap">Escolaridade</i></label>
       <select name="escolaridade" id="input" class="form-control" required="required">
        <option value="">Selecione...</option>
        <option value="1º grau incompleto">1º grau incompleto</option>
        <option value="1º grau completo">1º grau completo</option>
        <option value="2º grau incompleto">2º grau completo</option>
        <option value="2º grau completo">2º grau incompleto</option>
        <option value="3º grau incompleto">3º grau incompleto</option>
        <option value="3º grau incompleto">3º grau completo</option>
        <option value="Pós graduação/ MBA">Pós graduação/ MBA</option>
       </select>
    </div>
   </div>

   <div>
  	<div class="col-md">
     <label><i class="fas fa-user-graduate">Há algum motivo na empresa para você continuar estudando:</i></label>
      <select name="motivo" id="input" class="custom-select" required="required">
        <option value="">Selecione...</option>
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
      </select>        
    </div>

    <div class="col-md">
     <label><i class="fas fa-business-time">Tempo de empresa:</i></label>
      <select name="tempo" id="input" class="form-control" required="required">
        <option value="">Selecione...</option>
        <option value="Menos de 1 ano ">Menos de 1 ano </option>
        <option value="1 a 3 anos">1 a 3 anos</option>
        <option value="3 a 5 anos">3 a 5 anos</option>
        <option value="5 a 10 anos">5 a 10 anos</option>
        <option value="acima de 10 anos">acima de 10 anos</option>
       </select>
    </div>

    <div class="col-md">
      <label><i class="fas fa-birthday-cake">Idade:</i></label>
      <select name="idade" id="idade" class="form-control" required="required">
        <option value="">Selecione...</option>
        <option value="até 20 anos">até 20 anos</option>
        <option value="21 a 30 anos">21 a 30 anos</option>
        <option value="31 a 40 anos">31 a 40 anos</option>
        <option value="41 a 50 anos">41 a 50 anos</option>
        <option value="mais de 50 anos">mais de 50 anos</option>
      </select>
    </div>
   </div>


   <hr class="my-4">
   <h3 align="center"><i class="fas fa-arrow-circle-right">Fatores Extra - Trabalho</i></h3>
   <h4><i class="fas fa-arrow-circle-down">Necessidades básicas</i></h4>
  <div class="row">
    <div class="col-md">
      <label><b>Minha maior preocupação é com:</b></label>
        <label>
          <input type="radio" name="preocupacao" id="input" value="Alimentação" required>Alimentação
        </label>
        <label>
          <input type="radio" name="preocupacao" id="input" value="Segurança">Segurança
        </label>
        <label>
          <input type="radio" name="preocupacao" id="input" value="Saúde">Saúde
        </label>
        <label>
          <input type="radio" name="preocupacao" id="input" value="Aceitação Social">Aceitação Social
        </label>
        <label>
          <input type="radio" name="preocupacao" id="input" value="Realização Pessoal">Realização Pessoal
        </label>    
      </div>
  </div>
    <hr class="my-4">
   <h4><i class="fas fa-hospital">Saúde</i></h4>
   <label><b>Considerando a sua condição de saúde, como você avalia:</b></label>
  <div class="row">
    <div class="col-md">
      <label><i class="fas fa-user-alt">Seu estado físico:</i></label>
      <select name="estado_fisico" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Ótimo">Ótimo</option>
        <option value="Bom">Bom</option>
        <option value="Razoável">Razoável</option>
        <option value="Ruim">Ruim</option>
        <option value="Péssimo">Péssimo</option>
      </select>
    </div>
    <div class="col-md">
      <label><i class="fas fa-user-plus">Seu estado mental:</i></label>
      <select name="estado_mental" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Ótimo">Ótimo</option>
        <option value="Bom">Bom</option>
        <option value="Razoável">Razoável</option>
        <option value="Ruim">Ruim</option>
        <option value="Péssimo">Péssimo</option>
      </select>
    </div>
    <div class="col-md">
      <label><i class="fas fa-user-plus">Seu estado emocional:</i></label>
      <select name="estado_emocional" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Ótimo">Ótimo</option>
        <option value="Bom">Bom</option>
        <option value="Razoável">Razoável</option>
        <option value="Ruim">Ruim</option>
        <option value="Péssimo">Péssimo</option>
      </select>
    </div>   
  </div>

  <hr class="my-4">
  <h4><i class="fas fa-calculator">Situação financeira</i></h4>
  <label><b>Assinale qual o seu grau de satisfação financeira em relação as questões abaixo, baseando-se em uma escala que varia de 1 a 10:</b></label>
   <div>
     <div class="col-md">
      <label><i class="fas fa-home">Moradia</i></label>
      <select name="moradia" class="form-control" required="required">
         <option value="">Selecione...</option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
         <option value="9">9</option>
         <option value="10">10</option>
       </select> 
     </div>
     <div class="col-md">
      <label><i class="fas fa-car">Carro - Transporte</i></label>
      <select name="transporte" class="form-control" required="required">
         <option value="">Selecione...</option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
         <option value="9">9</option>
         <option value="10">10</option>
       </select> 
     </div>
     <div class="col-md">
      <label><i class="fab fa-avianex">Padrão de vida</i></label>
      <select name="padrao_vida" class="form-control" required="required">
         <option value="">Selecione...</option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
         <option value="9">9</option>
         <option value="10">10</option>
       </select> 
     </div>
     <div class="col-md">
      <label><i class="fas fa-calculator">Situação Financeira</i></label>
      <select name="financeira" class="form-control" required="required">
         <option value="">Selecione...</option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
         <option value="9">9</option>
         <option value="10">10</option>
       </select> 
     </div>
   </div>

   <div>
     <div class="col-md">
      <label><i class="fas fa-money-check-alt">Patrimônio</i></label>
      <select name="patrimonio" class="form-control" required="required">
         <option value="">Selecione...</option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
         <option value="9">9</option>
         <option value="10">10</option>
       </select> 
     </div>
     <div class="col-md">
      <label><i class="fas fa-utensils">Alimentação</i></label>
      <select name="alimentacao" class="form-control" required="required">
         <option value="">Selecione...</option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
         <option value="9">9</option>
         <option value="10">10</option>
       </select> 
     </div>
     <div class="col-md">
      <label><i class="fas fa-graduation-cap">Educação</i></label>
      <select name="educacao" class="form-control" required="required">
         <option value="">Selecione...</option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
         <option value="9">9</option>
         <option value="10">10</option>
       </select> 
     </div>
   </div>

   <hr class="my-4">
   <h4><i class="fas fa-users">Convivência familiar</i></h4>
   <div>
     <div class="col-md">
       <label><i class="fas fa-user-friends">O relacionamento com meu cônjuge é:</i></label>
       <select name="rel_conjuge" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Ótimo">Ótimo</option>
        <option value="Bom">Bom</option>
        <option value="Razoável">Razoável</option>
        <option value="Ruim">Ruim</option>
        <option value="Péssimo">Péssimo</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-user">O relacionamento com meus filhos é:</i></label>
       <select name="rel_filho" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Não tenho filhos">Não tenho filhos</option>
        <option value="Ótimo">Ótimo</option>
        <option value="Bom">Bom</option>
        <option value="Razoável">Razoável</option>
        <option value="Ruim">Ruim</option>
        <option value="Péssimo">Péssimo</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fa fa-users">Você dispõe atenção suficiente para sua família?</i></label>
       <select name="atencao" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
      </select>
     </div>
   </div>

   <hr class="my-4">
   <h4><i class="fas fa-umbrella-beach">Vida Social</i></h4>
   <label><b>Como você avalia:</b></label>
   <div>
     <div class="col-md">
       <label><i class="fas fa-users">Seu nível Social</i></label>
       <select name="nivel_social" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Ótimo">Ótimo</option>
        <option value="Bom">Bom</option>
        <option value="Razoável">Razoável</option>
        <option value="Ruim">Ruim</option>
        <option value="Péssimo">Péssimo</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-user">Seu convívio social:</i></label>
       <select name="convivio_social" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Ótimo">Ótimo</option>
        <option value="Bom">Bom</option>
        <option value="Razoável">Razoável</option>
        <option value="Ruim">Ruim</option>
        <option value="Péssimo">Péssimo</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-book">Seu nível cultural:</i></label>
       <select name="nivel_cultural" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Ótimo">Ótimo</option>
        <option value="Bom">Bom</option>
        <option value="Razoável">Razoável</option>
        <option value="Ruim">Ruim</option>
        <option value="Péssimo">Péssimo</option>
      </select>
     </div>
   </div>
  
   <hr class="my-4">
   <h4><i class="fas fa-umbrella-beach">Férias e Lazer</i></h4>
   <div class="row">
     <div class="col-md-5">
       <label><i class="fas fa-umbrella-beach">Estou satisfeito com as minhas ultimas férias:</i></label>
         <label>
           <input type="radio" name="ultima_ferias" value="Sim" required>
           Sim
         </label>
         <label>
           <input type="radio" name="ultima_ferias" value="Não">
           Não
         </label>
     </div>
     <div class="col-md">
       <label><i class="fas fa-umbrella-beach">Estou planejando para que as minhas próximas férias sejam muito boas:</i></label>
         <label>
           <input type="radio" name="proxima_ferias" value="Sim" required>
           Sim
         </label>
         <label>
           <input type="radio" name="proxima_ferias" value="Não">
           Não
         </label>
     </div>
   </div>

   <hr class="my-4">
   <h4><i class="fas fa-building">Fatores internos da empresa</i></h4>
   <label><b>Autonomia</b></label>
   <div>
     <div class="col-md">
       <label><i class="far fa-arrow-alt-circle-right"><b>Você tem liberdade para fazer o seu trabalho da forma como considera melhor?</b></i></label>
       <select name="lib_trabalho" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="far fa-arrow-alt-circle-left"><b>A instituição exige um procedimento rígido para execução das atividades pertinentes as suas funções?</b></i></label>
       <select name="proc_atividade" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
   </div>

   <div>
     <div class="col-md">
       <label><i class="far fa-arrow-alt-circle-down"><b>Você que organiza sua rotina de trabalho para melhor aproveitamento de suas atividades?</b></i></label>
       <select name="rot_trabalho" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="far fa-arrow-alt-circle-up"><b>Você toma decisões pela instituição?</b></i></label>
       <select name="dec_instituicao" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
   </div>
   
   <hr class="my-4">
   <h4><i class="fas fa-reply-all">Responsabilidade</i></h4>
   <div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-down">Até que ponto você cumpre as responsabilidades que são destinadas à sua função?</i></label>
       <select name="cumpre_funcao" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-down">Você considera que é sua responsabilidade contribuir para o sucesso da empresa?</i></label>
         <p>
         <label>
           <input type="radio" name="suc_empresa" value="Sim" required>
           Sim
         </label>
         <label>
           <input type="radio" name="suc_empresa" value="Não">
           Não
         </label>
         </p>
     </div>
   </div>
   <div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-down">Você desempenha seu trabalho buscando obter resultados melhores do que aqueles esperados pela empresa?</i></label>
       <select name="melhor_resultado" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-down">Você se considera comprometido com suas atividades?</i></label>
       <select name="comp_atividade" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
      </select>
     </div>
   </div>

   <hr class="my-4">
   <h4><i class="fas fa-reply-all">Realização Profissional</i></h4>
  <div>
    <div class="col-md">
       <label><i class="fas fa-address-card">Você está satisfeito com o seu cargo?</i></label>
       <p>
         <label>
           <input type="radio" name="sat_cargo" value="Sim" required>
           Sim
         </label>
         <label>
           <input type="radio" name="sat_cargo" value="Não">
           Não
         </label>
         <label>
           <input type="radio" name="sat_cargo" value="Mais ou menos">
           Mais ou menos
         </label>
       </p>
     </div>
     <div class="col-md">
       <label><i class="fas fa-theater-masks">O seu trabalho lhe dá um sentimento de realização profissional?</i></label>
       <select name="real_profissional" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-clipboard-list">Você considera que seu trabalho é importante para a empresa atingir seus objetivos?</i></label>
       <select name="trab_objetivo" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
  </div>

  <div>
     <div class="col-md">
       <label><i class="fas fa-building">Você sente que trabalhar nesta instituição contribui para melhorar sua vida?</i></label>
       <select name="contrib_vida" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-building">Você acredita que seu trabalho na instituição é motivo para você e sua família se sentirem seguros?</i></label>
       <select name="mot_familia" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
  </div>

  <div>
     <div class="col-md">
       <label><i class="fas fa-headset">Você se sente orgulhoso e conta aos amigos e parentes que trabalha nesta instituição?</i></label>
       <select name="trab_instituicao" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">Ao terminar sua jornada e ir para casa, você se sente realizado profissionalmente?</i></label>
       <select name="realizado_profissional" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
  </div>

  <hr class="my-4">
  <h4><i class="fas fa-list-ol">Quantidade e qualidade de trabalho</i></h4>
   <div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">Você se sente satisfeito em relação ao volume de trabalho que realiza?</i></label>
       <select name="vol_trabalho" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">A qualidade do trabalho é considerada mais importante do que a sua quantidade?</i></label>
       <select name="qual_quantidade" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">A instituição oferece recursos necessários para o desenvolvimento do meu trabalho?</i></label>
       <select name="des_trabalho" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">Quando algo inesperado acontece durante o trabalho, você sabe para quem pedir ajuda?</i></label>
       <select name="ped_ajuda" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
  </div>
  
  <label><i class="fas fa-arrow-circle-right">Você acha que o seu trabalho realizado atualmente poderia ser melhorado?</i></label>
  <div class="row">
     <div class="col-md">
       <label>Muito pouco</label>
         <label>
           <input type="radio" name="melhor_trabalho" value="1" required>
           1
         </label>
         <label>
           <input type="radio" name="melhor_trabalho" value="2">
           2
         </label>
         <label>
           <input type="radio" name="melhor_trabalho" value="3">
           3
         </label>
     </div>

     <div class="col-md">
       <label>Mais ou menos</label>
         <label>
           <input type="radio" name="melhor_trabalho" value="4" required>
           4
         </label>
         <label>
           <input type="radio" name="melhor_trabalho" value="5">
           5
         </label>
         <label>
           <input type="radio" name="melhor_trabalho" value="6">
           6
         </label>
     </div>

     <div class="col-md">
       <label>Muito</label>
         <label>
           <input type="radio" name="melhor_trabalho" value="7" required>
           7
         </label>
         <label>
           <input type="radio" name="melhor_trabalho" value="8">
           8
         </label>
         <label>
           <input type="radio" name="melhor_trabalho" value="9">
           9
         </label>
         <label>
           <input type="radio" name="melhor_trabalho" value="10">
           10
         </label>
     </div>
  </div>
  
  <hr class="my-4">
  <h4><i class="fas fa-microphone-alt">Comunicação</i></h4>
  <div>
     <div class="col-md">
       <label><i class="fas fa-phone-volume">Como a direção da instituição se comunica com seus servidores?</i></label>
       <select name="direcao" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Adequadamente">Adequadamente</option>
        <option value="Razoavelmente">Razoavelmente</option>
        <option value="Inadequadamente">Inadequadamente</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-headphones-alt">A instituição ouve os seus servidores e dá um retorno?</i></label>
       <select name="ouve_retorno" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">A instituição é aberta a receber e reconhecer as críticas, opiniões e contribuições de seus servidores?</i></label>
       <select name="critica" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
  </div>

  <div>
     <div class="col-md">
       <label><i class="fas fa-list-alt">As orientações que você recebe sobre o seu trabalho são claras e objetivas?</i></label>
       <select name="orientacao" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md"></div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">Os meios de comunicação internos funcionam (quadro de avisos, mural, email, etc)?</i></label>
       <select name="meio_comunicacao" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
  </div>


  <hr class="my-4">
  <h4><i class="fas fa-money-check-alt">Remuneração</i></h4>
  <div>
     <div class="col-md">
       <label><i class="fas fa-hand-holding-usd">Considerando o cargo que você ocupa,como você classificaria seu salário?</i></label>
       <select name="salario_cargo" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Ótimo">Ótimo</option>
        <option value="Bom">Bom</option>
        <option value="Razoável">Razoável</option>
        <option value="Ruim">Ruim</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-hand-holding-usd">Você acha que a instituição remunera adequadamente os servidores?</i></label>
       <select name="remuneracao" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-clipboard-list">Como você classificaria os benefícios oferecidos pela institução?</i></label>
       <select name="ben_oferecido" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Ótimo">Ótimo</option>
        <option value="Bom">Bom</option>
        <option value="Razoável">Razoável</option>
        <option value="Ruim">Ruim</option>
      </select>
     </div>
  </div>


  <hr class="my-4">
  <h4><i class="fas fa-id-card">Carreira</i></h4>
  <div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">Você acredita na oportunidade de crescimento em sua carreira?</i></label>
       <select name="op_crescimento" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">Você se sente apto para assumir maiores ou mais responsabilidades?</i></label>
       <select name="apto_responsabilidade" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">Você gostaria de trabalhar em outro departamento da instituição?</i></label>
         <label>
           <input type="radio" name="outro_departamento" id="outro_departamento" value="Sim" required onclick="document.getElementById('outro_qual').removeAttribute('readonly');">
           Sim
         </label>
         <label>
           <input type="radio" name="outro_departamento" id="outro_departamento" value="Não" onclick="document.getElementById('outro_qual').setAttribute('readonly', true); document.getElementById('outro_qual').value = null;">
           Não
         </label>
     </div>
     <div class="col-md-4">
       <b>Qual:</b><input type="text" name="outro_qual" class="form-control" readonly id="outro_qual" required>
     </div>
  </div>

  <div>
     <div class="col-md">
       <label><i class="fas fa-laptop">A instituição oferece oportunidades/treinamentos para o seu desenvolvimento e crescimento profissional?</i></label>
       <select name="treinamento" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-laptop">Você é incentivado a contribuir para a melhoria dos processos de trabalho?</i></label>
       <select name="melhor_processo" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
  </div>

  <div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">Seu trabalho propicia sempre estar aprendendo coisas novas?</i></label>
       <select name="coisa_nova" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">Ter uma perspectiva de carreira o motiva a trabalhar nesta instituição?</i></label>
       <select name="perp_carreira" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
  </div>


  <hr class="my-4">
  <h4><i class="far fa-handshake">Relacionamentos com a chefia</i></h4>
  <div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">Você se sente respeitado pelo seu gestor/ secretário/superior imediato?</i></label>
       <select name="gestor_respeita" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">Você respeita seu gestor/ secretário/superior imediato?</i></label>
       <select name="resp_gestor" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">O apoio que você tem de seu gestor/ secretário/superior imediato para resolver seus problemas técnicos no trabalho é:</i></label>
       <select name="apoio_gestor" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Ótimo">Ótimo</option>
        <option value="Bom">Bom</option>
        <option value="Razoável">Razoável</option>
        <option value="Ruim">Ruim</option>
      </select>
     </div>
  </div>

  <div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">A maneira como seu gestor/ secretário/superior imediato resolve os problemas interpessoais no trabalho é:</i></label>
       <select name="resolve_gestor" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Ótimo">Ótimo</option>
        <option value="Bom">Bom</option>
        <option value="Razoável">Razoável</option>
        <option value="Ruim">Ruim</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">Como você avalia o desempenho profissional do gestor/ secretário/superior imediato?</i></label>
       <select name="desem_gestor" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Ótimo">Ótimo</option>
        <option value="Bom">Bom</option>
        <option value="Razoável">Razoável</option>
        <option value="Ruim">Ruim</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">O seu gestor/ secretário/superior imediato é receptivo às sugestões de mudança?</i></label>
       <select name="sug_gestor" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
  </div>

  <div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">O seu gestor/ secretário/superior imediato está  pronto para prestar suporte necessário à equipe?</i></label>
       <select name="sup_gestor" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Ótimo">Ótimo</option>
        <option value="Bom">Bom</option>
        <option value="Razoável">Razoável</option>
        <option value="Ruim">Ruim</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">Os gestor/ secretário/superior imediato sabem delegar tarefas?</i></label>
       <select name="delega_tarefa" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Ótimo">Ótimo</option>
        <option value="Bom">Bom</option>
        <option value="Razoável">Razoável</option>
        <option value="Ruim">Ruim</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">Seu superior o auxilia a descobrir como aprender e se capacitar?</i></label>
       <select name="sup_auxilia" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
  </div>


  <hr class="my-4">
  <h4><i class="fas fa-handshake">Relacionamento interpessoal</i></h4>
  <div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">Como você qualifica o relacionamento de cooperação entre as secretárias da instituição?</i></label>
       <select name="coop_secretaria" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Ótimo">Ótimo</option>
        <option value="Bom">Bom</option>
        <option value="Razoável">Razoável</option>
        <option value="Ruim">Ruim</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">A cooperação/sentimento de equipe entre os servidores de seu setor é:</i></label>
       <select name="coop_servidores" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Ótimo">Ótimo</option>
        <option value="Bom">Bom</option>
        <option value="Razoável">Razoável</option>
        <option value="Ruim">Ruim</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">O ambiente da empresa facilita o relacionamento entre os colaboradores?</i></label>
       <select name="rel_colaborador" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
  </div>

  <div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">Meus colegas estão sempre dispostos a se ajudarem mutuamente?</i></label>
       <select name="ajud_colega" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">Você confia em seus colegas de trabalho?</i></label>
       <select name="conf_colega" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">Os servidores desta institução tem um bom relacionamento entre si?</i></label>
       <select name="rel_servidor" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
  </div>

  <div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">Os demais integrantes da empresa o atendem prontamente quando precisa de seu auxílio?</i></label>
       <select name="aux_integrante" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">Em geral, seus colegas de empresa compartilham conhecimento?</i></label>
       <select name="comp_conhecimento" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
  </div>

  <hr class="my-4">
  <h4>Valorização profissional</h4>
  <div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">Você se sente valorizado e apto para fazer a diferença dentro da instituição?</i></label>
       <select name="apto_diferenca" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">Você considera que o seu potencial de realização profissional tem sido adequadamente aproveitado?</i></label>
       <select name="ap_potencial" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
  </div>

  <div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">A instituição avalia de forma justa e objetiva o desempenho profissional de seus servidores?</i></label>
       <select name="avalia_desempenho" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">As normas e procedimentos gerais da instituição são aplicados igualmente para todos os servidores?</i></label>
       <select name="norma_servidor" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
  </div>


  <hr class="my-4">
  <h4><i class="fas fa-users">Treinamento / Desenvolvimento</i></h4>
  <div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">Como você avalia o treinamento recebido  para a execução de seu cargo?</i></label>
       <select name="exec_cargo" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Ótimo">Ótimo</option>
        <option value="Bom">Bom</option>
        <option value="Razoável">Razoável</option>
        <option value="Ruim">Ruim</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-circle-right">A empresa investe em treinamento/desenvolvimento pessoal  para que você tenha um aprendizado contínuo?</i></label>
       <select name="inv_treinamento" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
  </div>

  <div>
    <div class="col-md">
      <label><i class="fas fa-arrow-circle-right">Caso considere necessário, escreva sugestões sobre temas de treinamentos que poderiam ser realizados na instituição:</i></label>
      <textarea class="form-control rounded-2" rows="3" name="sug_treinamento"></textarea>
    </div>
  </div>


  <hr class="my-4">
  <h4><i class="fas fa-home">Condições físicas de trabalho</i></h4>
  <div class="row">
     <div class="col-md">
       <label><b>As condições ambientais do seu local de trabalho são satisfatórias?</b></label>
       <div class="radio">
         <label><i class="fas fa-thermometer-half">Temperatura</i></label>
         <label>
           <input type="radio" name="amb_temperatura" value="Sim" required>
           Sim
         </label>
         <label>
           <input type="radio" name="amb_temperatura" value="Não" required>
           Não
         </label>
       </div>
       <div class="radio">
         <label><i class="fas fa-home">Espaço</i></label>
         <label>
           <input type="radio" name="amb_espaco" value="Sim" required>
           Sim
         </label>
         <label>
           <input type="radio" name="amb_espaco" value="Não" required>
           Não
         </label>
       </div>
       <div class="radio">
         <label><i class="fas fa-angle-double-right">Mobiliário</i></label>
         <label>
           <input type="radio" name="amb_mobiliario" value="Sim" required>
           Sim
         </label>
         <label>
           <input type="radio" name="amb_mobiliario" value="Não" required>
           Não
         </label>
       </div>
       <div class="radio">
         <label><i class="fas fa-bath">Higiene</i></label>
         <label>
           <input type="radio" name="amb_higiene" value="Sim" required>
           Sim
         </label>
         <label>
           <input type="radio" name="amb_higiene" value="Não" required>
           Não
         </label>
       </div>
       <div class="radio">
         <label><i class="fas fa-bath">Instalações Sanitárias</i></label>
         <label>
           <input type="radio" name="amb_instalacao" value="Sim" required>
           Sim
         </label>
         <label>
           <input type="radio" name="amb_instalacao" value="Não" required>
           Não
         </label>
       </div>
     </div>
  </div>

  <hr class="my-4">
  <h4><i class="fas fa-hotel">Imagem da empresa</i></h4>
  <div>
     <div class="col-md">
       <label><i class="fas fa-arrow-alt-circle-right">Você considera a instituição um bom lugar para trabalhar?</i></label>
        <div class="radio">
          <label>
            <input type="radio" name="cons_instituicao" value="Sim" required>
            Sim
          </label>
          <label>
            <input type="radio" name="cons_instituicao" value="Não" required>
            Não
          </label>
          <label>
            <input type="radio" name="cons_instituicao" value="Não tenho opinião" required>
            Não tenho opinião
          </label>
        </div>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-alt-circle-right">Você indicaria um amigo para trabalhar na sua instituição?</i></label>
        <div class="radio">
          <label>
            <input type="radio" name="ind_amigo" value="Sim" required>
            Sim
          </label>
          <label>
            <input type="radio" name="ind_amigo" value="Não" required>
            Não
          </label>
          <label>
            <input type="radio" name="ind_amigo" value="Não tenho opinião" required>
            Não tenho opinião
          </label>
        </div>
     </div>
  </div>

  <div>
     <div class="col-md">
       <label><i class="fas fa-arrow-alt-circle-right">Você considera a instituição ética com seus servidores?</i></label>
       <select name="etica_servidor" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-alt-circle-right">Os gestores/secretários/superiores imediatos da  instituição dão bons exemplos aos seus servidores?</i></label>
       <select name="exemp_gestor" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
  </div>

  <hr class="my-4">
  <h4><i class="fas fa-users">Trabalho em equipe</i></h4>
  <div>
     <div class="col-md">
       <label><i class="fas fa-arrow-alt-circle-right">Os assuntos importantes são debatidos em equipe?</i></label>
       <select name="ass_debatido" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-alt-circle-right">A instituição estimula o trabalho em equipe?</i></label>
       <select name="est_equipe" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-alt-circle-right">Como você considera a unidade das  secretárias em torno dos objetivos da instituição?</i></label>
       <select name="secre_objetivo" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Ótimo">Ótimo</option>
        <option value="Bom">Bom</option>
        <option value="Razoável">Razoável</option>
        <option value="Ruim">Ruim</option>
      </select>
     </div>
  </div>

  <hr class="my-4">
  <h4><i class="fas fa-building">Secretaria</i></h4>
  <div>
     <div class="col-md">
       <label><i class="fas fa-arrow-alt-circle-right">A Secretaria a qual você faz parte tem uma boa imagem dentro da instituição?</i></label>
        <div class="radio">
          <label>
            <input type="radio" name="secre_imagem" value="Sim" required>
            Sim
          </label>
          <label>
            <input type="radio" name="secre_imagem" value="Não">
            Não
          </label>
          <label>
            <input type="radio" name="secre_imagem" value="Não tenho opinião">
            Não tenho opinião
          </label>
        </div>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-alt-circle-right">Na Secretaria existe um sistema eficaz para resolver as reclamações dos seus servidores?</i></label>
        <div class="radio">
          <label>
            <input type="radio" name="secre_reclamacao" value="Sim" required>
            Sim
          </label>
          <label>
            <input type="radio" name="secre_reclamacao" value="Não">
            Não
          </label>
          <label>
            <input type="radio" name="secre_reclamacao" value="Não tenho opinião">
            Não tenho opinião
          </label>
        </div>
     </div>
  </div>

  <div>
     <div class="col-md">
       <label><i class="fas fa-arrow-alt-circle-right">A Secretaria comunica adequadamente aos servidores os seus projetos, investimentos e realizações?</i></label>
       <select name="secre_comunica" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-alt-circle-right">Os servidores da secretária atendem à comunidade adequadamente?</i></label>
       <select name="secre_adequadamente" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-alt-circle-right">A Secretaria se preocupa com o meu bem estar no trabalho?</i></label>
       <select name="secre_bem" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
  </div>

  <div>
     <div class="col-md">
       <label><i class="fas fa-arrow-alt-circle-right">Os servidores conhecem o planejamento estratégico, os indicadores e metas traçadas pela Secretaria?</i></label>
        <div class="radio">
          <label>
            <input type="radio" name="meta_secretaria" value="Sim" required>
            Sim
          </label>
          <label>
            <input type="radio" name="meta_secretaria" value="Não">
            Não
          </label>
          <label>
            <input type="radio" name="meta_secretaria" value="Não tenho opinião">
            Não tenho opinião
          </label>
        </div>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-alt-circle-right">A Secretaria tem realizado as mudanças necessárias visando o crescimento e desenvolvimento dos servidores?</i></label>
       <select name="mud_secretaria" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
  </div>

  <div>
    <div class="col-md">
       <label><i class="fas fa-arrow-alt-circle-right">Na Secretaria, os servidores são estimulados a participar das contínuas mudanças?</i></label>
       <select name="cont_servidor" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-alt-circle-right">O que tenho aprendido nos treinamentos oferecidos pela Secretaria melhora minha produtividade?</i></label>
       <select name="tre_produtividade" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
  </div>

  <div>
     <div class="col-md">
       <label><i class="fas fa-arrow-alt-circle-right">Os programas de treinamento e desenvolvimento tem procurado desenvolver o potencial técnico dos servidores da Secretaria?</i></label>
       <select name="pot_tecnico" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
     <div class="col-md">
       <label><i class="fas fa-arrow-alt-circle-right">Os programas de treinamento e desenvolvimento tem procurado desenvolver o potencial humano dos servidores da Secretaria?</i></label>
       <select name="pot_humano" class="form-control" required="required">
        <option value="">Seleciona...</option>
        <option value="Sempre">Sempre</option>
        <option value="Quase sempre">Quase sempre</option>
        <option value="Raramente">Raramente</option>
        <option value="Nunca">Nunca</option>
        <option value="Não tenho opinião">Não tenho opinião</option>
      </select>
     </div>
  </div>


  <hr class="my-4">
  <h4><i class="fas fa-home">FATORES MOTIVACIONAIS/FATORES DESMOTIVADORES</i></h4>
  <label><i class="fas fa-arrow-alt-circle-right">Indique dois principais fatores que geram MAIS INSATISFAÇÃO no seu trabalho.
Coloque número 1 no fator que gera mais insatisfação, número 2 no segundo maior fator de 
insatisfação e o número 3 para o terceiro maior fator de insatisfação.</i>
</label>
  <div class="row">
    <div class="col-md">
      <input type="text" name="falta_conhecimento" id="falta_conhecimento" class="rounded" onkeyup="bloqueia(this); numero(this);" required size="2" style="text-align: center;"><label>Falta de reconhecimento</label>
    </div>
    <div class="col-md">
      <input type="text" name="falta_seguranca" id="falta_seguranca" class="rounded" onkeyup="bloqueia(this); numero(this);" required size="2" style="text-align: center;"><label>Falta de segurança no emprego</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md">
      <input type="text" name="imp_profissional" id="imp_profissional" class="rounded" onkeyup="bloqueia(this); numero(this);" required size="2" style="text-align: center;"><label>Impossibilidade de crescimento profissional</label>
    </div>
    <div class="col-md">
      <input type="text" name="falta_autonomia" id="falta_autonomia" class="rounded" onkeyup="bloqueia(this); numero(this);" required size="2" style="text-align: center;"><label>Falta de autonomia</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md">
      <input type="text" name="amb_ruim" id="amb_ruim" class="rounded" onkeyup="bloqueia(this); numero(this);" required size="2" style="text-align: center;"><label>Ambiente de trabalho ruim</label>
    </div>
    <div class="col-md">
      <input type="text" name="trab_realizo" id="trab_realizo" class="rounded" onkeyup="bloqueia(this); numero(this);" required size="2" style="text-align: center;"><label>O trabalho que realizo</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md">
      <input type="text" name="rel_chefe" id="rel_chefe" class="rounded" onkeyup="bloqueia(this); numero(this);" required size="2" style="text-align: center;"><label>Relacionamento com a chefia</label>
    </div>
    <div class="col-md">
      <input type="text" name="falta_treinamento" id="falta_treinamento" class="rounded" onkeyup="bloqueia(this); numero(this);" required size="2" style="text-align: center;"><label>Falta de treinamento</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md">
      <input type="text" name="sobrecarga" id="sobrecarga" class="rounded" onkeyup="bloqueia(this); numero(this);" required size="2" style="text-align: center;"><label>Sobrecarga de trabalho</label>
    </div>
    <div class="col-md">
      <input type="text" name="instalacao" id="instalacao" class="rounded" onkeyup="bloqueia(this); numero(this);" required size="2" style="text-align: center;"><label>Instalações inadequadas (banheiros, vestiários etc.)</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md">
      <input type="text" name="salario" id="salario" class="rounded" onkeyup="bloqueia(this); numero(this);" required size="2" style="text-align: center;"><label>Salário</label>
    </div>
    <div class="col-md">
      <input type="text" name="outro_fator" id="outro_fator" class="rounded" onkeyup="bloqueia(this); liberaroutro(this); ; numero(this);"  size="2" style="text-align: center;"><label>Outro:</label><input type="text" name="qual_fator" class="form-control" id="qual_fator" readonly required>
    </div>
  </div>

  <hr class="my-4">
  <label><i class="fas fa-arrow-alt-circle-right">Indique dois fatores que geram MAIOR SATISFAÇÃO para a execução de suas atividades na instituição.
Coloque número 1 na principal e número 2 na segunda mais importante.</i></label>
  <div class="row">
    <div class="col-md">
      <input type="text" name="salario_satisfacao" id="salario_satisfacao" class="rounded" onkeyup="bloqueiasat(this); numero(this);" required size="2" style="text-align: center;"><label>Salário</label>
    </div>
    <div class="col-md">
      <input type="text" name="beneficio" id="beneficio" class="rounded" onkeyup="bloqueiasat(this); numero(this);" required size="2" style="text-align: center;"><label>Benefícios oferecidos pela empresa</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md">
      <input type="text" name="estabilidade" id="estabilidade" class="rounded" onkeyup="bloqueiasat(this); numero(this);" required size="2" style="text-align: center;"><label>Estabilidade no emprego</label>
    </div>
    <div class="col-md">
      <input type="text" name="relacao_chefe" id="relacao_chefe" class="rounded" onkeyup="bloqueiasat(this); numero(this);" required size="2" style="text-align: center;"><label>Relacionamento com a chefia</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md">
      <input type="text" name="trabalho" id="trabalho" class="rounded" onkeyup="bloqueiasat(this); numero(this);" required size="2" style="text-align: center;"><label>O trabalho que realizo</label>
    </div>
    <div class="col-md">
      <input type="text" name="falta_opcao" id="falta_opcao" class="rounded" onkeyup="bloqueiasat(this); numero(this);" required size="2" style="text-align: center;"><label>A falta de opção de outro emprego</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md">
      <input type="text" name="amb_trabalho" id="amb_trabalho" class="rounded" onkeyup="bloqueiasat(this); numero(this);" required size="2" style="text-align: center;"><label>Ambiente de trabalho</label>
    </div>
    <div class="col-md">
      <input type="text" name="pre_empresa" id="pre_empresa" class="rounded" onkeyup="bloqueiasat(this); numero(this);" required size="2" style="text-align: center;"><label>Prestígio da empresa</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md">
      <input type="text" name="aut_trabalho" id="aut_trabalho" class="rounded" onkeyup="bloqueiasat(this); numero(this);" required size="2" style="text-align: center;"><label>Autonomia no trabalho</label>
    </div>
    <div class="col-md">
      <input type="text" name="pos_treinamento" id="pos_treinamento" class="rounded" onkeyup="bloqueiasat(this); numero(this);" required size="2" style="text-align: center;"><label>Possibilidade de treinamento</label>
    </div>
  </div>
  <div class="row">
    <div class="col-md">
      <input type="text" name="reconhecimento" id="reconhecimento" class="rounded" onkeyup="bloqueiasat(this); numero(this);" required size="2" style="text-align: center;"><label>Reconhecimento</label>
    </div>
    <div class="col-md">
      <input type="text" name="prog_profissional" id="prog_profissional" class="rounded" onkeyup="bloqueiasat(this); numero(this);" required size="2" style="text-align: center;"><label>As chances de progresso profissional</label>
    </div>
  </div>
  <div class="row">
     <div class="col-md-6">
      <input type="text" name="outro_satisfacao" id="outro_satisfacao" class="rounded" onkeyup="bloqueiasat(this); liberaroutro(this); ; numero(this);" size="2" style="text-align: center;"><label>Outro:</label><input type="text" name="qual_satisfacao" class="form-control" readonly id="qual_satisfacao" required>
    </div>
  </div>

  <hr class="my-4">
   <div class="row">
    <div class="col-md">
     <label><i class="fas fa-arrow-alt-circle-right">Que sugestões você daria para tornar a INSTITUIÇÃO um lugar melhor para se trabalhar?</i></label>
     <textarea class="form-control rounded-2" rows="3" name="sug_instituicao"></textarea>
    </div>
  </div>

   <hr class="my-4">
   <div class="row">
  	 <div class="col-md-4">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
     </div>
   </div>
 </div>
</form>