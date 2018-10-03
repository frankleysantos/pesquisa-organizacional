function bloqueia(){
   if (document.getElementById('falta_conhecimento').value < 1 || document.getElementById('falta_conhecimento').value > 3) {
   	document.getElementById('falta_conhecimento').value = null;
   }
   if (document.getElementById('falta_seguranca').value < 1 || document.getElementById('falta_seguranca').value > 3) {
   	document.getElementById('falta_seguranca').value = null;
   }
   if (document.getElementById('imp_profissional').value < 1 || document.getElementById('imp_profissional').value > 3) {
   	document.getElementById('imp_profissional').value = null;
   }
   if (document.getElementById('falta_autonomia').value < 1 || document.getElementById('falta_autonomia').value > 3) {
   	document.getElementById('falta_autonomia').value = null;
   }
   if (document.getElementById('amb_ruim').value < 1 || document.getElementById('amb_ruim').value > 3) {
   	document.getElementById('amb_ruim').value = null;
   }
   if (document.getElementById('trab_realizo').value < 1 || document.getElementById('trab_realizo').value > 3) {
   	document.getElementById('trab_realizo').value = null;
   }
   if (document.getElementById('rel_chefe').value < 1 || document.getElementById('rel_chefe').value > 3) {
   	document.getElementById('rel_chefe').value = null;
   }
   if (document.getElementById('falta_treinamento').value < 1 || document.getElementById('falta_treinamento').value > 3) {
   	document.getElementById('falta_treinamento').value = null;
   }
   if (document.getElementById('sobrecarga').value < 1 || document.getElementById('sobrecarga').value > 3) {
   	document.getElementById('sobrecarga').value = null;
   }
   if (document.getElementById('instalacao').value < 1 || document.getElementById('instalacao').value > 3) {
   	document.getElementById('instalacao').value = null;
   }
   if (document.getElementById('salario').value < 1 || document.getElementById('salario').value > 3) {
   	document.getElementById('salario').value = null;
   }
   if (document.getElementById('outro_fator').value < 1 || document.getElementById('outro_fator').value > 3) {
   	document.getElementById('outro_fator').value = null;
   }
}

function bloqueiasat(){
   if (document.getElementById('salario_satisfacao').value < 1 || document.getElementById('salario_satisfacao').value > 2) {
      document.getElementById('salario_satisfacao').value = null;
   }
   if (document.getElementById('beneficio').value < 1 || document.getElementById('beneficio').value > 2) {
      document.getElementById('beneficio').value = null;
   }
   if (document.getElementById('estabilidade').value < 1 || document.getElementById('estabilidade').value > 2) {
      document.getElementById('estabilidade').value = null;
   }
   if (document.getElementById('relacao_chefe').value < 1 || document.getElementById('relacao_chefe').value > 2) {
      document.getElementById('relacao_chefe').value = null;
   }
   if (document.getElementById('trabalho').value < 1 || document.getElementById('trabalho').value > 2) {
      document.getElementById('trabalho').value = null;
   }
   if (document.getElementById('falta_opcao').value < 1 || document.getElementById('falta_opcao').value > 2) {
      document.getElementById('falta_opcao').value = null;
   }
   if (document.getElementById('amb_trabalho').value < 1 || document.getElementById('amb_trabalho').value > 2) {
      document.getElementById('amb_trabalho').value = null;
   }
   if (document.getElementById('pre_empresa').value < 1 || document.getElementById('pre_empresa').value > 2) {
      document.getElementById('pre_empresa').value = null;
   }
   if (document.getElementById('aut_trabalho').value < 1 || document.getElementById('aut_trabalho').value > 2) {
      document.getElementById('aut_trabalho').value = null;
   }
   if (document.getElementById('pos_treinamento').value < 1 || document.getElementById('pos_treinamento').value > 2) {
      document.getElementById('pos_treinamento').value = null;
   }
   if (document.getElementById('reconhecimento').value < 1 || document.getElementById('reconhecimento').value > 2) {
      document.getElementById('reconhecimento').value = null;
   }
   if (document.getElementById('prog_profissional').value < 1 || document.getElementById('prog_profissional').value > 2) {
      document.getElementById('prog_profissional').value = null;
   }
   if (document.getElementById('outro_satisfacao').value < 1 || document.getElementById('outro_satisfacao').value > 2) {
      document.getElementById('outro_satisfacao').value = null;
   }
}

function liberaroutro(){
   if (document.getElementById('outro_satisfacao').value >= 1) {
       document.getElementById('qual_satisfacao').removeAttribute('readonly');
   }else{
       document.getElementById('qual_satisfacao').setAttribute('readonly', true);
   }

   if (document.getElementById('outro_fator').value >= 1) {
       document.getElementById('qual_fator').removeAttribute('readonly');
   }else{
       document.getElementById('qual_fator').setAttribute('readonly', true);
   }
}