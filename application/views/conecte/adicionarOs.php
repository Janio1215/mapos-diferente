<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>

<link rel="stylesheet" href="<?php echo base_url() ?>assets/trumbowyg/ui/trumbowyg.css">
<script type="text/javascript" src="<?php echo base_url() ?>assets/trumbowyg/trumbowyg.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/trumbowyg/langs/pt_br.js"></script>

<style>
    .ui-datepicker {
        z-index: 9999 !important;
    }

    .trumbowyg-box {
        margin-top: 0;
        margin-bottom: 0;
    }
</style>

<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title" style="margin: -20px 0 0">
                <span class="icon">
                    <i class="fas fa-diagnoses"></i>
                </span>
                <h5>Cadastro de OS</h5>
            </div>
            <div class="widget-content nopadding tab-content">


                <div class="span12" id="divProdutosServicos" style=" margin-left: 0">
                    <ul class="nav nav-tabs">
                        <li class="active" id="tabDetalhes"><a href="#tab1" data-toggle="tab">Detalhes da OS</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">

                            <div class="span12" id="divCadastrarOs">

                                <form action="<?php echo current_url(); ?>" method="post" id="formOs">

                                    <div class="span12" style="padding: 1%;">
                                        <div class="span12 alert alert-info">
                                            <h5 class="text-center">Preencha os campos abaixo detalhando o que você precisa. Campos com asterisco são obrigatórios.</h5>
                                        </div>

                                    </div>


                                    <div class="span12" style="padding: 1%; margin-left: 0">

                                        <div class="span12">
                                            <label for="descricaoProduto">Descrição Produto/Serviço*</label>
                                            <textarea class="span12 editor" name="descricaoProduto" id="descricaoProduto" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>

                                    <div class="span12" style="padding: 1%; margin-left: 0">

                                        <div class="span12">
                                            <label for="defeito">Defeito</label>
                                            <textarea class="span12 editor" name="defeito" id="defeito" cols="30" rows="5"></textarea>
                                        </div>

                                    </div>
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        <div class="span12">
                                            <label for="observacoes">Observações</label>
                                            <textarea class="span12 editor" name="observacoes" id="observacoes" cols="30" rows="5"></textarea>
                                        </div>

                                    </div>
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        <div class="span6 offset3" style="display:flex;justify-content: center">
                                            <button class="button btn btn-success" id="btnContinuar">
                                              <span class="button__icon"><i class='bx bx-plus-circle'></i></span><span class="button__text2">Cadastrar</span></button>
                                            <a href="<?php echo base_url() ?>index.php/mine/os" class="button btn btn-mini btn-warning">
                                              <span class="button__icon"><i class="bx bx-undo"></i></span> <span class="button__text2">Voltar</span></a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>

                </div>


                .

            </div>

        </div>
    </div>
</div>



<script type="text/javascript">
    $(document).ready(function() {


        $("#formOs").validate({
            rules: {
                descricaoProduto: {
                    required: true
                }
            },
            messages: {
                descricaoProduto: {
                    required: 'O campo descrição da OS é obrigatório.'
                }
            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
        });

        $(".datepicker").datepicker({
            dateFormat: 'dd/mm/yy'
        });

        $('.editor').trumbowyg({
            lang: 'pt_br'
        });
    });
</script>














<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Login e Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .tabs {
            display: flex;
        }

        .tab {
            flex: 1;
            padding: 10px;
            text-align: center;
            background-color: #ccc;
            cursor: pointer;
        }

        .tab.active {
            background-color: #f0f0f0;
        }

        .form-container {
            border: 1px solid #ccc;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="tabs">
        <div class="tab" id="loginTab">Login</div>
        <div class="tab" id="cadastroTab">Cadastro</div>
    </div>

    <div class="form-container" id="loginForm">
        <h2>Login</h2>
        <form method="post" action="login.php">
            <label for="username">Usuário:</label>
            <input type="text" name="username" id="username" required><br><br>
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" required><br><br>
            <input type="submit" value="Entrar">
        </form>
    </div>

    <div class="form-container" id="cadastroForm" style="display: none;">
        <h2>Cadastro</h2>
        <form method="post" action="cadastro.php">
            <label for="newUsername">Novo Usuário:</label>
            <input type="text" name="newUsername" id="newUsername" required><br><br>
            <label for="newPassword">Nova Senha:</label>
            <input type="password" name="newPassword" id="newPassword" required><br><br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>

    <script>
        // Função para alternar entre as abas
        function changeTab(tabId) {
            const tabs = document.querySelectorAll(".tab");
            const forms = document.querySelectorAll(".form-container");

            tabs.forEach(tab => tab.classList.remove("active"));
            document.getElementById(tabId).classList.add("active");

            if (tabId === "loginTab") {
                forms[0].style.display = "block";
                forms[1].style.display = "none";
            } else if (tabId === "cadastroTab") {
                forms[0].style.display = "none";
                forms[1].style.display = "block";
            }
        }

        // Adiciona um ouvinte de eventos às abas
        document.getElementById("loginTab").addEventListener("click", () => changeTab("loginTab"));
        document.getElementById("cadastroTab").addEventListener("click", () => changeTab("cadastroTab"));
    </script>
</body>
</html>

