<?php

include 'db.php';

while ($linha = mysqli_fetch_array($consultaFaixas)) {
    if ($linha['id'] == 1) {
?>

<br>
<div class="caixa">
    <h4>Custo Tratamento</h4>
    <br>
    <form method="post" action="processaFaixas.php" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label"></label>
            <input value="<?php echo $linha['faixa1'] ?>" type="number" step="any" class="form-control" id="faixa1" name="faixa1">
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Diabetes</label>
            <input value="<?php echo $linha['faixa2'] ?>" type="number" step="any" class="form-control" id="faixa2" name="faixa2">
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Hipertensão</label>
            <input value="<?php echo $linha['faixa3'] ?>" type="number" step="any" class="form-control" id="faixa3" name="faixa3">
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label"> Asma</label>
            <input value="<?php echo $linha['faixa4'] ?>" type="number" step="any" class="form-control" id="faixa4" name="faixa4">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>   

</div>
<br><br>

<?php
    }
}