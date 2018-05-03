<?php
    // Determinar localidade BR
    setlocale(LC_ALL, 'pt_BR');

?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Regras</title>
        <link href="css/produtos.css" rel="stylesheet">
        <script type="text/javascript" src="{asset(‘js/scripts.js’) }"></script>
        
        
    </head>

    <body>
       
        <main>  
            <div > 
                <h1>Crie sua Regra Padrão:</h1>
                
                <form id="form_tipo">
                    <table border="1">
                        <tr>
                            <th>Tabela</th>                           
                        </tr>
                        <tr>
                            <td><button type="button" onclick="mostrar_form('form_filter');" value="FILTER">FILTER</button> <label> * Tabela padrão, usada no tráfego de dados, identificar e tratar os pacotes de dados</label><br><br>
                                <button type="button" onclick="mostrar_form('form_nat');" value="NAT">NAT </button><label> * Tabela usada para alterar o IP e/ou Portas destino</label><br><br>
                                <button type="button" onclick="mostrar_form('form_mangle');" value="MANGLE">MANGLE</button><label> * Tabela para alterar os pacotes</label><br><br>
                            </td>
                            
                     
                    </table>
                </form>                
                
                
                <script>
                    function mostrar_form(id) {
                        document.getElementById(id).style.display=('block');
                    }
                </script>
                
                <script>
                    function mostrar_dados(dados){
                        document.getElementById(dados).style.display=('block');
                    }
                </script>
                
                <script>
                    function mostrar_acao(acao){
                        document.getElementById(acao).style.display=('block');
                    }
                </script>
                
                <form id="form_filter"  style="display:none;">
                    <table border="1">
                        <tr>FILTER</tr>
                        <td>
                            <input type="checkbox" name="-P" value="-P">-P <label>* Define uma regra padrão</label><br>
                            <input type="checkbox" name="-A" value="-A">-A <label>* Acrescenta uma regra</label><br><br>
                            <input type="checkbox" name="vehicle" value="Bike">INPUT <br>
                            <input type="checkbox" name="vehicle" value="Bike">OUTPUT <br>
                            <input type="checkbox" name="vehicle" value="Bike">FORWARD <br>
                            <button type="button" onclick="mostrar_dados('form_dados');" value="NAT">Próximo </button>
                        </td>
                    </table>
                </form>
                
                <form id="form_nat"  style="display:none;">
                    <table border="1">
                        <tr>NAT</tr>
                        <td>
                            <input type="checkbox" name="-P" value="-P">-P <label>* Define uma regra padrão</label><br>
                            <input type="checkbox" name="-A" value="-A">-A <label>* Acrescenta uma regra</label><br>
                            <input type="checkbox" name="vehicle" value="Bike">PREROUTING  <br>
                            <input type="checkbox" name="vehicle" value="Bike">POSTROUTING  <br>
                            <input type="checkbox" name="vehicle" value="Bike">OUTPUT <br>
                            <button type="button" onclick="mostrar_dados('form_dados');" value="NAT">Próximo </button>
                        </td>
                    </table>
                </form>
                
                <form id="form_mangle"  style="display:none;">
                    <table border="1">
                        <tr>MANGLE</tr>
                            <td>
                                <input type="checkbox" name="-P" value="-P">-P <label>* Define uma regra padrão</label><br>
                                <input type="checkbox" name="-A" value="-A">-A <label>* Acrescenta uma regra</label><br>
                                <button type="button" onclick="mostrar_dados('form_dados');" value="NAT">Próximo </button>
                             </td>
                    </table>
                </form>
                
                
                
                <form id="form_dados"  style="display:none;">
                   <table border="1">
                       <tr>Dados</tr>
                            <td>
                                <input type="checkbox" name="vehicle" value="Bike">-s <br>
                                <input type="checkbox" name="vehicle" value="Bike">-d <br>
                                <input type="checkbox" name="vehicle" value="Bike">-i <br>
                                <input type="checkbox" name="vehicle" value="Bike">-o <br>
                                <input type="checkbox" name="vehicle" value="Bike">-p <br>
                                <input type="checkbox" name="vehicle" value="Bike">-sport <br>
                                <input type="checkbox" name="vehicle" value="Bike">-dport <br>

                                <button type="button" onclick="mostrar_acao('form_acao');" value="NAT">Próximo </button>
                            </td>
                    </table>
                </form>
                
                <form id="form_acao"  style="display:none;">
                    <table border="1">
                        <tr>Ação</tr>
                        <td>
                            <input type="checkbox" name="vehicle" value="Bike">ACCEPT <br>
                            <input type="checkbox" name="vehicle" value="Bike">DROP <br>
                            <input type="checkbox" name="vehicle" value="Bike">REJECT <br>
                            <button type="button" onclick="" value="NAT">SALVAR </button>
                        </td>
                    </table>
                </form>

            </div>
        </main>       
    </body>
</html>