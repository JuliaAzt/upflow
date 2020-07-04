<!DOCTYPE html>
<html>
    <head lang="pt">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title>Calculadora</title>
    </head>
    <body> 
        <div class="container">
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-5">
                    <label>Digite a quantidade de campos envolvidos na operação:</label>
  
                        <div class="input-group">
                          <input type="number" class="form-control" min="2" id="numero-campos">
                          <div class="input-group-append">
                            <button class="btn btn-primary" type="button" id="gerar-campos">Gerar campos</button>

                          </div>
                           <span class="aviso"> Não é possível realizar nenhum cálculo com menos de 2 números</span>
                        </div>

                </div>
            </div>

            <div class="container d-flex justify-content-center mt-5" >
                <div class="row">
                    <div class="col-md-12 input-group" id="campos">
                    </div>
                </div>
               
            </div>
             <div class="row d-flex justify-content-center mt-5">
                <button name="soma" type="button" class="btn btn-primary" id="soma" disabled>Realizar soma</button> &nbsp;
                <button name="sub" type="button" class="btn btn-primary" id="subtracao" disabled>Realizar subtração</button>
            </div>

            <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-5">
                    <label>Resultado:</label><br>
                    <div class="input-group">
                      <input type="text" class="form-control" aria-describedby="limpar" id="resultado" disabled>
                      <div class="input-group-append">
                        <button class="btn btn-secondary" type="button" id="limpar">Limpar</button>
                      </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mt-5 link">                
                <a href="https://www.linkedin.com/in/júlia-azevedo-63a82a159/">Linkedin</a>
            </div>

        </div>
            
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>