@extends ('navbar')

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<style>
    body{ 
        margin-top:40px; 
    }

    .stepwizard-step p {
        margin-top: 10px;
    }

    .stepwizard-row {
        display: table-row;
    }

    .stepwizard {
        display: table;
        width: 100%;
        position: relative;
    }

    .stepwizard-step button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
    }

    .stepwizard-row:before {
        top: 14px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-order: 0;

    }

    .stepwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }

    .btn-circle {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 15px;
    }
</style>

<body>
    <section style="margin-top: 75px; ">
        <div class="middle-cadastra">                
            <div class="middlecenter-cadastra"> 
                <div class="container">
                    <div class="stepwizard">
                        <div class="stepwizard-row setup-panel">
                            <div class="stepwizard-step">
                                <a id="step-1btn" href="#step-1" type="button" class="btn btn-primary btn-circle" onclick="exibirForm1()">1</a>
                                <p>Usuário </p>
                            </div>
                            <div class="stepwizard-step">
                                <a id="step-2btn" href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                <p>Cidade</p>
                            </div>
                            <div class="stepwizard-step">
                                <a id="step-3btn" href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                <p>Metas</p>
                            </div>
                            <div class="stepwizard-step">
                                <a id="step-4btn" href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled" >4</a>
                                <p>Validação</p>
                            </div>

                        </div>
                    </div>
                    <form role="form" action="envio">
                        <div class="row setup-content" id="step-1">

                            <h2>Cadastro de usuário </h2>
                            
                            <div class="col-xs-6">

                                <div class="control-group">
                                    <!-- Nome -->
                                    <label class="control-label" for="username">Nome</label>
                                    <div class="controls">
                                        <input type="text" id="NOME" name="NOME" placeholder="" class="input-xlarge" required>
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <!-- E-mail -->
                                    <label class="control-label" for="email">E-mail</label>
                                    <div class="controls">
                                        <input type="text" id="EMAIL" name="EMAIL" placeholder="" class="input-xlarge">
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <!-- Senha-->
                                    <label class="control-label" for="password">Senha</label>
                                    <div class="controls">
                                        <input type="password" id="SENHA" name="SENHA" placeholder="" class="input-xlarge">
                                        <p class="help-block"></p>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <!-- Confirma Senha -->
                                    <label class="control-label" for="password_confirm">Password (Confirm)</label>
                                    <div class="controls">
                                        <input type="password" id="confirma_senha" name="confirma_senha" placeholder="" class="input-xlarge">
                                        <p class="help-block"></p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-xs-6">
                                <div class="control-group">

                                    <label class="control-label" for="Cidade">Cidade</label>
                                    <div class="controls">
                                        <input type="text" id="ID_CIDADE" class="input-xlarge">
                                        <p class="help-block"></p>
                                    </div>
                                </div>

                                <div class="control-group">

                                    <label class="control-label" for="osa">OSA</label>
                                    <div class="controls">
                                        <input type="text" id="ID_OSA" class=" input-xlarge ">
                                        <p class=" help-block "></p>
                                    </div>

                                </div>

                                <div class="control-group">

                                    <label class="control-label" for="cargo">Cargo</label>
                                    <div class="controls">
                                        <input type="text" id="CARGO" class=" input-xlarge ">
                                        <p class=" help-block "></p>
                                    </div>

                                </div>

                            </div>

                            <button id="next1" class="btn btn-primary nextBtn btn-lg pull-right " type="button" onclick="exibirForm2()">Next</button>

                        </div>
                        <div class="row setup-content" id="step-2" style="display:none;">

                            <h2> Cidade</h2>
                             <div class="col-xs-6">

                                <div class="control-group">
                                    <!-- Estado -->
                                    <label class="control-label" for="username">Estado</label>
                                    <div class="controls">
                                        <input type="text" id="ID_ESTADO" name="ID_ESTADO" placeholder="" class="input-xlarge" required>
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <!-- Nome da Cidade -->
                                    <label class="control-label" for="cidade">Nome</label>
                                    <div class="controls">
                                        <input type="text" id="NOMECIDADE" name="NOMECIDADE" placeholder="" class="input-xlarge">
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <!-- Area-->
                                    <label class="control-label" for="password">Senha</label>
                                    <div class="controls">
                                        <input type="text" id="AREAM2" name="AREAM2" placeholder="" class="input-xlarge">
                                        <p class="help-block"></p>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <!-- População -->
                                    <label class="control-label" for="password_confirm">Nº Habitantes</label>
                                    <div class="controls">
                                        <input type="text" id="POPULACAO" name="POPULACAO" placeholder="" class="input-xlarge">
                                        <p class="help-block"></p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-xs-6">
                                <div class="control-group">

                                    <label class="control-label" for="Portal">Site da Cidade</label>
                                    <div class="controls">
                                        <input type="text" id="END_PORTAL" class="input-xlarge">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                            </div>

                            <button id="next2" class="btn btn-primary nextBtn btn-lg pull-right " type="button" onclick="exibirForm3()">Next</button>
                        </div>


                        <div class="row setup-content" id="step-3" style="display:none;">
                            <div class="col-xs-12">

                                <button id="next3" class="btn btn-primary nextBtn btn-lg pull-right" type="button" onclick="exibirForm4()">Next</button>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-4" style="display:none;">
                            <div class="col-xs-12">

                                <button id="next4" class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">

        function exibirForm1(){            
                document.getElementById('step-1').style.display = "";
                document.getElementById('step-2').style.display = "none";
                document.getElementById('step-3').style.display = "none";
                document.getElementById('step-4').style.display = "none";
                document.getElementById('step-1btn').removeAttribute("disabled");
                document.getElementById("step-1btn").className = "btn-primary btn-circle btn";
                document.getElementById("step-2btn").className = "btn-default btn-circle btn";
                document.getElementById("step-3btn").className = "btn-default btn-circle btn";
                document.getElementById("step-4btn").className = "btn-default btn-circle btn";
                document.getElementById("step-2btn").addEventListener("click", exibirForm2);
        }

        function exibirForm2() {
            if(document.getElementById("SENHA").value == document.getElementById("confirma_senha").value && document.getElementById("SENHA").value!= "" &&
                document.getElementById("EMAIL").value!= "" && document.getElementById("NOME").value!= "" && document.getElementById("CARGO").value!= ""){
                document.getElementById('step-1').style.display = "none";
                document.getElementById('step-2').style.display = "";
                document.getElementById('step-3').style.display = "none";
                document.getElementById('step-4').style.display = "none";
                document.getElementById('step-2btn').removeAttribute("disabled");
                document.getElementById("step-2btn").className = "btn-primary btn-circle btn";
                document.getElementById("step-1btn").className = "btn-default btn-circle btn";
                document.getElementById("step-3btn").className = "btn-default btn-circle btn";
                document.getElementById("step-4btn").className = "btn-default btn-circle btn";
            }
            else{
                document.getElementById("confirma_senha").setCustomValidity("Passwords Don't Match");
            }
            document.getElementById("confirma_senha").onkeyup = exibirForm2;
        }

        function exibirForm3(){            
                document.getElementById('step-1').style.display = "none";
                document.getElementById('step-2').style.display = "none";
                document.getElementById('step-3').style.display = "";
                document.getElementById('step-4').style.display = "none";
                document.getElementById('step-3btn').removeAttribute("disabled");
                document.getElementById("step-3btn").className = "btn-primary btn-circle btn";
                document.getElementById("step-1btn").className = "btn-default btn-circle btn";
                document.getElementById("step-2btn").className = "btn-default btn-circle btn";
                document.getElementById("step-4btn").className = "btn-default btn-circle btn";
                document.getElementById("step-3btn").addEventListener("click", exibirForm3);
                document.getElementById("step-2btn").addEventListener("click", exibirForm2);
        }

        function exibirForm4(){            
                document.getElementById('step-1').style.display = "";
                document.getElementById('step-2').style.display = "";
                document.getElementById('step-3').style.display = "";
                document.getElementById('step-4').style.display = "";
                document.getElementById('next1').style.display = "none";
                document.getElementById('next2').style.display = "none";
                document.getElementById('next3').style.display = "none";
                document.getElementById('next4').style.display = "none";
                document.getElementById('step-4btn').removeAttribute("disabled");
                document.getElementById("step-4btn").className = "btn-primary btn-circle btn";
                document.getElementById("step-1btn").className = "btn-default btn-circle btn";
                document.getElementById("step-2btn").className = "btn-default btn-circle btn";
                document.getElementById("step-3btn").className = "btn-default btn-circle btn";
                document.getElementById("step-4btn").addEventListener("click", exibirForm4);
                document.getElementById("step-3btn").addEventListener("click", exibirForm3);
                document.getElementById("step-2btn").addEventListener("click", exibirForm2);
        }
    </script>
</body>
</html>
