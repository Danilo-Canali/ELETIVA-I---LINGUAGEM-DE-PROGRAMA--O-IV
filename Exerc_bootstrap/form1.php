<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1></h1>
<form method="post">
<div class="row inline-row mb-3"><div class="col-md-6">
              <label for="prim_nome" class="form-label">Primeiro Nome</label>
              <input type="text" id="prim_nome" name="prim_nome" class="form-control" required="">
            </div><div class="col-md-3">
              <label for="ult_nome" class="form-label">Ultimo Nome</label>
              <input type="text" id="ult_nome" name="ult_nome" class="form-control" required="">
            </div><div class="col-md-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" id="username" name="username" class="form-control" required="">
            </div></div><div class="col-mb-3">
              <label for="cidade" class="form-label">Cidade</label>
              <input type="text" id="cidade" name="cidade" class="form-control" required="">
            </div><div class="row inline-row mb-3"><div class="col-md-6">
              <label for="estado" class="form-label">Estado</label>
              <input type="text" id="estado" name="estado" class="form-control" required="">
            </div><div class="col-md-6">
              <label for="cod_postal" class="form-label">Código Postal</label>
              <input type="text" id="cod_postal" name="cod_postal" class="form-control" required="">
            </div></div><div class="mb-3">
              <div class="form-check ">
                <input type="checkbox" id="t&amp;c" name="t&amp;c" class="form-check-input">
                <label for="t&amp;c" class="form-check-label">Termos e condições</label>
              </div>
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>