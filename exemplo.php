<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gerador de Currículo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Gerador de Currículos</a>
    </nav>
    <main class="container" style="margin-top:20px">
        <form action="gerarCurriculo.php" method="post" target="_blank" enctype="multipart/form-data">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Informações gerais</h4>

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="cargo">Cargo pretendido</label>
                                <input type="text" class="form-control" name="cargo" id="cargo">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control" name="foto" id="foto">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco" id="endereco">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" name="telefone" id="telefone">
                            </div>
                        </div> 
                        <div class="col">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="resumo">Resumo</label>
                        <textarea class="form-control" name="resumo" id="resumo"></textarea>
                    </div>
                </div>

                <div class="card-body" id="div-formacoes">
                    <h4 class="card-title">Formação</h4>
                    <div id="lista-formacoes" data-index="0">
                        <div class="d-none">
                            <div class="form-group">
                                <label for="lugar_%i">Instituicao</label>
                                <input type="text" class="form-control" name="lugar_%i" id="lugar_%i">
                            </div>
                            <button class="delete-btn">Apagar</button>
                        </div>
                    </div>
                    <button class="btn btn-sm right" id="btn-adicionar-formacao" title="Adicionar formação">Adicionar formação</button>
                </div>

                <div class="card-body" id="div-experiencais">
                    <h4 class="card-title">Experiência</h4>
                    
                    <button class="btn btn-sm right" id="btn-adicionar-experiencia" title="Adicionar experiência">Adicionar experiência</button>
                </div>

                <div class="card-body">
                    <h4 class="card-title">Modelo de currículo</h4>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">                                  
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Gerar currículo</button>
                    <button class="btn btn-default" type="reset">Limpar campos</button>
                </div>
            </div>
        </form>
    </main>
    <script>
        document.getElementById('btn-adicionar-formacao').addEventListener('click', (e) => {
            e.preventDefault()
            addFormacao()
            // alert('fodasse formacao')
        })
        document.getElementById('btn-adicionar-experiencia').addEventListener('click', (e) => {
            e.preventDefault()
            alert('fodasse experiencia')
        })

        function addFormacao() {
            const formacoes = document.getElementById('lista-formacoes');
            const idx = parseInt(formacoes.dataset.index);
            let template = formacoes.children[0].cloneNode(true)
            template.classList.remove('d-none')
            template.innerHTML = template.innerHTML.replaceAll("%i", `${idx}`)
            template = formacoes.appendChild(template)
            template.querySelector('.delete-btn').addEventListener('click', (e) => {
                e.preventDefault()
                template.remove()
                // formacoes.remove(template)
            })
            formacoes.dataset.index = `${idx + 1}`
            
            console.log(template)
            
            // alert(idx)

        }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>