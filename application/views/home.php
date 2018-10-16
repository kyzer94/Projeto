<div class="container">
    <div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">total</th>
                    <th scope="col">contas</th>

                </tr>
            </thead>
            <tbody>
                <?php $abc = 0; ?>
                <?php $cont = 0; ?>
                <?php if ($home == false): ?>
                    <tr><td>Nenhum contato encontrado</td></tr>
                <?php else: ?>
                    <?php foreach ($home as $row): ?>
                        <?php
                        
                        $cont++;
                        $row->valor;
                        $abc = $abc + $row->valor;
                        
                        ?>                                        
                    <?php endforeach; ?>
                    <tr>
                        <td><?php echo $abc; ?></td>
                        <td><?php echo $cont; ?></td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
