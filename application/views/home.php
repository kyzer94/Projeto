<div class="container">
    <?php echo form_open('home/index'); ?>
    <select class="form-control" type="number" name="mes" value="">
        <option value="1">01</option><option value="2">02</option><option value="3">03</option>
        <option value="4">04</option><option value="5">05</option><option value="6">06</option>
        <option value="7">07</option><option value="8">08</option><option value="9">09</option>
        <option value="10">10</option><option value="11">11</option><option value="12">12</option>
    </select>
    <input class="btn btn-dark" type="submit" value="Selecionar"/>
    <?php form_close(); ?>
    <div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Parcela Atual</th>
                    <th scope="col">Parcela</th>
                    <th scope="col">Valor Total</th>
                    <th scope="col">Mes</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($home == false): ?>
                    <tr><td>Nenhum contato encontrado</td></tr>
                <?php else: ?>
                    <?php foreach ($home as $row): ?>
                        <tr>
                            <td><?php echo $row->nome; ?></td>
                            <td><?php echo $row->valor; ?></td>
                            <td><?php echo $row->parcAtual; ?></td>
                            <td><?php echo $row->parcela; ?></td>
                            <td><?php echo $row->valorTotal; ?></td>
                            <td><?php echo $row->mes; ?></td>
                            <td><?php echo $row->ano; ?></td>
                            <td>
                                <a href="<?php echo base_url() . 'cadastro/excluir/' . $row->idCadastro; ?>">Excluir</a>
                            </td>
                        </tr>                  
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
