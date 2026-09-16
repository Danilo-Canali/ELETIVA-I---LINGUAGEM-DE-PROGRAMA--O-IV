<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulário 2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container py-3">
    <form method="post">
      <div class="row g-3">
        <div class="col-md-1"><label for="codigo" class="form-label">Código</label><input type="text" id="codigo" name="codigo" class="form-control" value="32" readonly></div>
        <div class="col-md-5"><label for="nome" class="form-label">Nome</label><input type="text" id="nome" name="nome" class="form-control" placeholder="Nome Completo do Cliente"></div>
        <div class="col-md-4"><label for="email" class="form-label">E-mail</label><input type="email" id="email" name="email" class="form-control" placeholder="cliente@dominio.com"></div>
        <div class="col-md-2"><label for="cpf" class="form-label">CPF</label><input type="text" id="cpf" name="cpf" class="form-control" placeholder="Só números"></div>
        <div class="col-md-2"><label for="celular" class="form-label">Nº Celular</label><input type="text" id="celular" name="celular" class="form-control" placeholder="Nº do celular"></div>
        <div class="col-md-2"><label for="telefone" class="form-label">Nº Telefone fixo</label><input type="text" id="telefone" name="telefone" class="form-control" placeholder="Nº telefone"></div>
        <div class="col-md-2"><label for="cep" class="form-label">CEP</label><input type="text" id="cep" name="cep" class="form-control" placeholder="ex:88308070"></div>
        <div class="col-md-2"><label for="logradouro" class="form-label">Logradouro</label><input type="text" id="logradouro" name="logradouro" class="form-control" placeholder="ex:Rua 1400"></div>
        <div class="col-md-1"><label for="numero" class="form-label">Nº</label><input type="text" id="numero" name="numero" class="form-control" placeholder="Nº"></div>
        <div class="col-md-3"><label for="bairro" class="form-label">Bairro</label><input type="text" id="bairro" name="bairro" class="form-control" placeholder="Bairro"></div>
        <div class="col-md-3"><label for="cidade" class="form-label">Cidade</label><input type="text" id="cidade" name="cidade" class="form-control" placeholder="Cidade"></div>
        <div class="col-md-1"><label for="uf" class="form-label">UF</label><input type="text" id="uf" name="uf" class="form-control" placeholder="UF"></div>
        <div class="col-md-2"><label for="status" class="form-label">Status</label><select id="status" name="status" class="form-select"><option selected>Selecione</option><option>Ativo</option><option>Inativo</option></select></div>
      </div>
      <div class="text-end mt-3"><button type="reset" class="btn btn-danger">Resetar</button><button type="submit" class="btn btn-success">Próximo</button></div>
    </form>
  </div>
</body>
</html>
