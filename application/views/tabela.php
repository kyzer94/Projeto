<div class="container">
    
    <a class="btn btn-dark" href="<?php echo base_url() . 'tabela/index?mes=01' ?>">jan</a>
    <a class="btn btn-dark" href="<?php echo base_url() . 'tabela/index?mes=02' ?>">fev</a>
    <a class="btn btn-dark" href="<?php echo base_url() . 'tabela/index?mes=03' ?>">mar</a>
    <a class="btn btn-dark" href="<?php echo base_url() . 'tabela/index?mes=04' ?>">abr</a>
    <a class="btn btn-dark" href="<?php echo base_url() . 'tabela/index?mes=05' ?>">maio</a>
    <a class="btn btn-dark" href="<?php echo base_url() . 'tabela/index?mes=06' ?>">jun</a>
    <a class="btn btn-dark" href="<?php echo base_url() . 'tabela/index?mes=07' ?>">jul</a>
    <a class="btn btn-dark" href="<?php echo base_url() . 'tabela/index?mes=08' ?>">ago</a>
    <a class="btn btn-dark" href="<?php echo base_url() . 'tabela/index?mes=09' ?>">set</a>
    <a class="btn btn-dark" href="<?php echo base_url() . 'tabela/index?mes=10' ?>">out</a>
    <a class="btn btn-dark" href="<?php echo base_url() . 'tabela/index?mes=11' ?>">nov</a>
    <a class="btn btn-dark" href="<?php echo base_url() . 'tabela/index?mes=12' ?>">dez</a>
    <a class="btn btn-dark" href="<?php echo base_url() . 'tabela/index?mes=00' ?>">Todos</a>
    
    <div>
        <br>
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
                <?php if ($tabela == false): ?>
                    <tr><td>Nenhum contato encontrado</td></tr>
                <?php else: ?>
                    <?php foreach ($tabela as $row): ?>
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
