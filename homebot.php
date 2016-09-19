<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Case</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="header.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default" > <!-- CABEÇALHO -->
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
                <span class="icon-bar" ></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" >UNIMONTES</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
            <li class="active"><a href="#">Contratos</a></li>
            <li><a href="#">Estagios</a></li>
            <li><a href="#">Usuarios</a></li>
            <li><a href="#">Unidade</a></li>
            <li><a href="#">Area</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>Perfil</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
            </ul>
        </div>
    </div>
</nav>  <!-- CABEÇALHO -->
    
    
<div class="container" id="divaba" data-spy="affix" data-offset-top="95"> <!-- div das abas-->
    <ul class="nav nav-tabs"> <!-- ABAS -->
    <li class="active"><a data-toggle="tab" href="#Estagio">Estagio</a></li>
    <li><a class="disabledtab" href="#Listadecandidatos">Lista de candidatos</a></li>
    <li><a data-toggle="tab" href="#Antigoscontratos">Antigos contratos</a></li>
    <li><a data-toggle="tab" href="#Estagiarioatual">Estagiario atual</a></li>
    <li><a data-toggle="tab" href="#Contratoatual">Contrato atual</a></li>
    </ul>  <!-- ABAS -->
</div> <!-- div das abas-->
    
    
<div class="container" id="divfore"><!-- Div Mãe dos conteudos--> 
    <div class="tab-content">  <!-- CONTEUDO DAS ABAS-->
        <div id="Estagio" class="tab-pane fade in active" style="height:1000px"> 
            <h1>ID DO ESTAGIO</h1>
            <br>
            <form action="action_page.php">
                <div class="container-fluid row" style="background:pink;" > <!--PRIMEIRA LINHA DE COMBLIST -->
                    <div class="styled-select col-sm-4" >   
                        <select required="required" name="Status" data-toggle="tooltip" title="Status atual do estagio!">  
                        <option value="">Status</option>
                        <option value="Ativo" >Ativo</option> 
                        <option value="Desativo">Desativo</option>
                        <option value="Em chamada">Em chamada</option>
                        <option value="Fase de incrição">Fase de incrição</option>
                        <option value="Requer aprovação">Requer aprovação</option>
                        </select>
                    </div>
                    <div class="styled-select  col-sm-4  ">
                        <select required="required" name="Tipo de vaga"data-toggle="tooltip" title="Tipo da vaga!">
                        <option value="">Tipo de vaga</option>
                        <option value="Restrita">Restrita</option>
                        <option value="Aberta">Aberta</option>
                        </select>
                    </div>
                    <div class="styled-select col-sm-3 col-xs-6" >   
                        <select required="required" name="Area" data-toggle="tooltip" title="Area de atuação do estagio!">  
                        <option value="">Area</option>
                        <option value="Geral" >Geral</option>
                        <option value="Saude" >Saude</option> 
                        <option value="Tecnologia">Tecnologia</option>
                        </select>
                    </div>
                </div> <!--PRIMEIRA LINHA DE COMBLIST -->
                <br><br>
                <div class="form-group row"><!-- divs orientador e supervisor-->
                    <div class="col-xs-6 "style="background:green;"><!--div orientador -->
                        <label >Orientador</label>
                        <input data-toggle="tooltip" title="Orientador!" type="text" class="form-control" name="orientador" value="Icaro george lanzarini pimentel" readonly>
                    </div><!--div orientador -->
                    <div class="col-xs-6 "style="background:red;" ><!--div supervisor -->
                        <label >Supervisor</label>
                        <input data-toggle="tooltip" title="Supervisor!" type="text" class="form-control" name="supervisor" value="Nome do Supervisor" readonly>
                    </div> <!--div supervisor -->
                </div> <!-- divs orientador e supervisor-->
                <br><br>
                <div class="row"> <!-- divs unidade e setor-->
                    <div class="col-xs-3 "style="background:green;"> <!--div unidade -->
                        <label >Unidade</label>
                        <input data-toggle="tooltip" title="Unidade!" type="text" class="form-control" name="orientador" value="Campus Januaria" readonly>
                    </div><!--div unidade -->
                    <div class="col-xs-9 "style="background:red;" ><!--div setor -->
                        <label >Setor</label>
                        <input data-toggle="tooltip" title="Setor!" type="text" class="form-control" name="supervisor" value="Secretaria geral" readonly>
                    </div> <!--div setor -->
                </div> <!-- divs unidade e setor-->
                <br><br>
   
                <div class="form-group row" style="background:pink;" ><!--Segunda LINHA DE COMBLIST -->
                    <div  class="col-sm-3 col-xs-6" > <!-- div horario entrada-->
                        <label >Entrada:</label>
                        <input data-toggle="tooltip" title="Horario de entrada!" type="time" class="form-control" name="bday">
                    </div><!-- div horario entrada-->
                    <div  class="col-sm-3 col-xs-6" ><!-- div horario saida-->
                        <label >Saida:</label>
                        <input data-toggle="tooltip" title="Horario de saida!" type="time" class="form-control" name="bday">
                    </div><!-- div horario saida-->
                    <div class="styled-select col-sm-3 col-xs-6 " id="turndur"> <!-- div turno-->
                        <select data-toggle="tooltip" title="Turno do estagio!" required="required" name="Turno">
                        <option value="">Turno</option>
                        <option value="Matutino">Matutino</option>
                        <option value="Vespertino">Vespertino</option>
                        <option value="Noturno">Noturno</option>
                        <option value="Diurno">Diurno</option>
                        </select>
                    </div><!-- div turno-->
                    <div class="styled-select col-sm-3 col-xs-6 " id="turndur" > <!--div duração do estagio -->
                        <select data-toggle="tooltip" title="Duração!" required="required" name="Duração" disabled><!--desabilitado, n pode alterar -->
                        <option value="">Duração</option>
                        <option value="6meses" selected>6 meses</option><!--selecionado, opçao buscada do bd-->
                        <option value="1ano">1 ano</option>
                        <option value="2ano">2 anos</option>
                        </select>
                    </div><!--div duração do estagio -->
                </div> <!--Segunda LINHA DE COMBLIST -->
                <input type="submit">
            </form>
        </div>
        <div id="Listadecandidatos" class="tab-pane fade">
            <h3>Menu 1</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div id="Antigoscontratos" class="tab-pane fade" style="height:1000px">
            <h3>Menu 2</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        </div>
        <div id="Estagiarioatual" class="tab-pane fade">
            <h3>Menu 3</h3>
            <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
        <div id="Contratoatual" class="tab-pane fade">
            conteudo
        </div>
      
    </div>
</div>
    

</body>
</html>

