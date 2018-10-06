<!DOCTYPE html>
<html>
<head>

<meta http-equiv="cache-control" content="no-store, no-cache, must-revalidate, Post-Check=0, Pre-Check=0">
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Expires" CONTENT="-1">
    <script>

 function criaRequisicao() {
     try{
         request = new XMLHttpRequest();        
     }catch (IEAtual){
         
         try{
             request = new ActiveXObject("Msxml2.XMLHTTP");       
         }catch(IEAntigo){
         
             try{
                 request = new ActiveXObject("Microsoft.XMLHTTP");          
             }catch(falha){
                 request = false;
             }
         }
     }
     
     if (!request) 
         alert("Seu Navegador não suporta Ajax!");
     else
         return request;
 }
 

 function getDados() {

     // Declaração de Variáveis
     
     var nome   = document.getElementById("nome").value;
     var result = document.getElementById("resultado");
     var xmlreq = criaRequisicao();
     
     // Exibi a imagem de progresso
     result.innerHTML = "Pesquisando....";
     
     // Iniciar uma requisição
     xmlreq.open("GET", "/projetoBase/Controle/controladorUsuarioAjax.php?acao=consultar&nome=" + nome, true);
     
     // Atribui uma função para ser executada sempre que houver uma mudança de ado
     xmlreq.onreadystatechange = function(){
         
         // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
         if (xmlreq.readyState == 4) {
             
             // Verifica se o arquivo foi encontrado com sucesso
             if (xmlreq.status == 200) {
                 result.innerHTML = xmlreq.responseText;
             }else{
                 result.innerHTML = "Erro: " + xmlreq.statusText;
             }
         }
     };
     xmlreq.send(null);
 }
 

function remover(id, nome){
  decisao = confirm("Você realmente deseja remover o usuário "+nome+" ?");  

  if(decisao){
      form = document.getElementById("formPesquisaUsuario");


        
     var result = document.getElementById("mensagem");
     var xmlreq = criaRequisicao();
     
     // Exibi a imagem de progresso
     result.innerHTML = "<img src='Progresso1.gif'/>";
     
     // Iniciar uma requisição
     xmlreq.open("GET", "/projetoBase/Controle/controladorUsuarioAjax.php?acao=excluir&id=" + id, true);
     
     // Atribui uma função para ser executada sempre que houver uma mudança de ado
     xmlreq.onreadystatechange = function(){
         
         // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
         if (xmlreq.readyState == 4) {
             
             // Verifica se o arquivo foi encontrado com sucesso
             if (xmlreq.status == 200) {
                 result.innerHTML = xmlreq.responseText;
             }else{
                 result.innerHTML = "Erro: " + xmlreq.statusText;
             }
         }
     };
     xmlreq.send(null);
     getDados();
   }
}
        
</script>
</head>
<body>
    <div id="mensagem"></div>
    <form id="formPesquisaUsuario" name="formPesquisaUsuario" action="" method="POST">
        <table>
            <tr>
                <td><label>Nome</label></td>
                <td><input type="text" name="nome" id="nome" onkeyup="javascript:getDados();"/></td>
            </tr>
        </table>

    </form>
    <br>
    <div id="resultado"><b>Consulta vai ser exibida aqui</b></div>

</body>
</html>