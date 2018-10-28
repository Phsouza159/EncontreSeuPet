<?php
require_once '../View.php';
include_once './Layout/MenuNav.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Perdidos</title>
        <!--Chamar folha css (LESS) -->
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/Cadastro.less?v=1.0.8" />
        <link rel="stylesheet/less" type="text/css" href="../Contents/css/footer.less?v=1.0.8" />
        <!-- Chamar biblioteca (LESS)-->
        <script src="../Contents/plugins/less/dist/less.js" ></script>
        <!-- include bootstrap --> 
        <link rel="stylesheet" type="text/css" href="../Contents/plugins/bootstrap/css/bootstrap.css">
        <style>
            input[type=text], select {
                width: 80%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type=submit] {
                width: 100%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            .div-cadastro {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }

            .passo2, .passo3{
                display:none;
            }
        </style>


    </head>
    <body>
        <?php
        MenuNav::menu();
        ?>

        <div <!--class="conteiner-center"-->

            <div class='container'>

                <div class="row m-2 controle-etapas justify-content-center">

                    <section class="etapas1 etapas-cards etapas-cards-active">
                        <label class="etapas-icon">1</label>
                        <!-- <label class="etapas-descricao text-center">Cadastro Pessoa</label> -->
                    </section>

                    <section class="etapas-linha"></section>

                    <section class="etapas2 etapas-cards">
                        <label class="etapas-icon">1</label>
                        <!--  <label class="etapas-descricao text-center">Cadastro Pessoa</label> -->
                    </section>

                    <section class="etapas-linha"></section>

                    <section class="etapas3 etapas-cards">
                        <label class="etapas-icon">1</label>
                        <!-- <label class="etapas-descricao text-center">Cadastro Pessoa</label> -->
                    </section>

                </div>

                <form>
                    <div class="passo1" style="background: gray">

                        <p class='h1'>Pessoa</p>
                        <div class="row m-2">
                            <section class="col" style="background: green">  

                                <input id="formCadastroNome"
                                       name='cadastro-nome' 
                                       type='text' 
                                       class='input-principal-cadastro' 
                                       placeholder='Nome...'> 

                                <a class="input-name"></a> 
                            </section>
                            <section class="col" style="background: green">  

                                <input id="formCadastroSobrenome" 
                                       name='cadastro-sobrenome' 
                                       type='text' 
                                       class='input-principal-cadastro' 
                                       placeholder='Sobrenome...'> 

                                <a class="input-sobrenome"></a> 
                            </section>
                            <section class="col" style="background: green">  
                                <input name='cadastro-estado' 
                                       type='text' 
                                       class='input-principal-cadastro' 
                                       value='DF' 
                                       readonly='true'>

                                <a class="input-cadastro"></a> 
                            </section>
                        </div>

                        <div class="row m-2">

                            <section class="col" style="background: green"> 

                                <select id="formCadastroCidade" class='section-cidade-group-principal-cadastro'>
                                    <option class='section-cidade-group-principal-cadastro' value=''>Cidade...</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Ceilândia</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Samambaia</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Taguatinga</option>   
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Plano Piloto</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Planaltina</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Águas Claras</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Recanto das Emas</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Gama</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Guará</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Santa Maria</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Sobradinho II</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>São Sebastião</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Vicente Pires</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Itapoã</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Sobradinho</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Sudoeste/Octogonal</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Brazlândia</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Riacho Fundo II</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Paranoá</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Riacho Fundo</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Estrutural</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Lago Norte</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Cruzeiro</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Lago Sul</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Jardim Botânico</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Núcleo Bandeirante</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Park Way</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Candangolândia</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Varjão</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Fercal</option>
                                    <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>SIA</option>

                                </select>
                                <a class="input-cidade"></a> 
                                
                            </section>

                            <section class="col" style="background: green"> 

                                <input id="formCadastroTelefone"
                                       name='cadastro-telefone' 
                                       type='text' 
                                       class='input-principal-cadastro' 
                                       placeholder='Telefone...'>

                                <a class="input-telefone"></a> 
                            </section>

                            <section class="col" style="background: green"> 
                                <input id="formCadastroEndereco" 
                                       name='cadastro-nome' 
                                       type='text' 
                                       class='input-principal-cadastro' 
                                       placeholder='Endereço...'>

                                <a class="input-endereco"></a> 
                            </section> 
                        </div>
                        
                        <div class="row m-4">
                            
                            <section class="col" style="background: green"> 
                                
                                <label>Data de Nacimento:</label>
                                    <br />
                                <input id="formCadastroDtNascimento"
                                       name='cadastro-dataNescimento' 
                                       type='date' 
                                       class='dtNasc-calendario-group-principal-cadastro'
                                       min='1900-01-01' max='<?php echo (date("Y") - 12) . '-' . date("m-d") ?>' />

                                <a class="input-dtNascimento"></a> 
                            </section>
                            <section class="col" style="background: green"></section> 
                            <section class="col" style="background: green"> 
                                
                                <label>Sexo:</label>
                                    <br />
                                <input type='radio' 
                                       name='cadastro-sexo' 
                                       value='cadastro-masc' 
                                       checked="checked">
                                <span class='text-descricao-group-principal-cadastro' >Masculino</span> 
                                
                                <input type='radio' 
                                       name='cadastro-sexo' 
                                       value='cadastro-femi'>
                                <span class='text-descricao-group-principal-cadastro'>Feminino</span> 
                                
                                <input type='radio' 
                                       name='cadastro-sexo'
                                       value='cadastro-other'>
                                <span class='text-descricao-group-principal-cadastro'>outro</span> 

                            </section>
                        </div>
                        <input type="button"  class="button_passo2" value="seguinte" />
                      </div>
                        


                        <div class="passo2">
                            <p class='h1'>Animal</p>



                            <br>
                            <label></label>
                            <input name='cadastro-Nome do Pet' type='text' class='input-principal-cadastro' placeholder='Nome do Pet...'> 

                            <label></label>
                            <input name='cadastro-Port' type='text' class='input-principal-cadastro' placeholder='Porte...'> 

                            <br>

                            <label></label>
                            <input name='cadastro-cor' type='text' class='input-principal-cadastro' placeholder='cor...'> 

                            <label></label>
                            <input name='cadastro-Raça' type='text' class='input-principal-cadastro' placeholder='Raça...'> 

                            <br>
                            <label></label>
                            <input name='cadastro-peso' type='text' class='input-principal-cadastro' placeholder='Peso...'>

                            <label for="fname"></label>
                            <input name='cadastro-idade' type='text' class='input-principal-cadastro' placeholder='Idade...'>


                            <br>
                            <label></label>
                            <input name='cadastro-estado' type='text' class='input-principal-cadastro' value='DF' readonly='true'>

                            <label></label>
                            <select class='section-cidade-group-principal-cadastro'>

                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Ceilândia</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Samambaia</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Taguatinga</option>   
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Plano Piloto</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Planaltina</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Águas Claras</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Recanto das Emas</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Gama</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Guará</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Santa Maria</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Sobradinho II</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>São Sebastião</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Vicente Pires</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Itapoã</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Sobradinho</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Sudoeste/Octogonal</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Brazlândia</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Riacho Fundo II</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Paranoá</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Riacho Fundo</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Estrutural</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Lago Norte</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Cruzeiro</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Lago Sul</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Jardim Botânico</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Núcleo Bandeirante</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Park Way</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Candangolândia</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Varjão</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>Fercal</option>
                                <option class='section-cidade-group-principal-cadastro' value='cadastro-cidade'>SIA</option>

                            </select>


                            <br>
                            <label>Sexo:</label>
                            <input type='radio' name='cadastro-masc' value='cadastro-masc'><span class='text-descricao-group-principal-cadastro'>Macho</span> 
                            <input type='radio' name='cadastro-femi' value='cadastro-femi'><span class='text-descricao-group-principal-cadastro'>Fêmea</span> 

                            <br>



                            <input type="button" class="button_passo1" value="voltar" />
                            <input type="button" class="button_passo3" value="seguinte" />
                        </div>

                        <div class="passo3">
                            <p class='h1'>Login</p>

                            <br>

                            <label></label>
                            <input name='cadastro-login' type='text' class='input-principal-cadastro' placeholder='...'> 
                            <br>
                            <label></label>
                            <input name='cadastro-senha' type='text' class='input-principal-cadastro' placeholder='Senha...'> 

                            <br>

                            <label></label>
                            <input name='cadastro-senha confirmação' type='text' class='input-principal-cadastro' placeholder='Senha confirmação...'> 

                            <br>

                            <input type="button" class="button_passo2" value="voltar" />
                            <input type="submit" />
                        </div>
                </form>
            </div>


            <?php
//View::getTelaCadastro();
            ?> 
            <div>
                <?php
                MenuNav::footer();
                ?>
            </div>

            <!-- Chamar dependencias javascript -->
            <script src="../Contents/js/jquery3.3.1.js"></script>
            <script src="../Contents/plugins/bootstrap/js/bootstrap.js"></script>
            <script src="../Contents/js/site.js"></script>
    </body>
</html>