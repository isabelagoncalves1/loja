<div id="paizao">
    <div id="paiproduto">

        <div id="paicarac">
            <div id="caracte2">
                <table class="table">
                    <h2>Ver detalhes do cliente</h2>
                    <thead>
                        <tr>
                            <th class="prod">ID</th>
                            <th class="prod">Nome</th>
                            <th class="prod">E-mail</th>
                            <th class="prod">Cpf</th>
                            <th class="prod">Data de Nascimento</th>

                        </tr>   

                    </thead>
                    <tr>
                        <td class="descr"><?= $cliente['idCliente'] ?></td>
                        <td class="descr"><?= $cliente['nome'] ?></td>
                        <td class="descr"><?= $cliente['email'] ?></td>
                        <td class="descr"><?= $cliente['cpf'] ?></td>
                    </tr>
                </table>

                <h2>Endereços</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="prod">Logradouro</th>
                            <th class="prod">N°</th>
                            <th class="prod">Complemento</th>
                            <th class="prod">Bairro</th>
                            <th class="prod">Cidade</th>
                            <th class="prod">Cep</th>
                        </tr>   

                    </thead>
                    <?php foreach ($enderecos as $endereco): ?>
                        <tr>
                            <td class="descr"><?= $endereco['logradouro'] ?></td>
                            <td class="descr"><?= $endereco['numero'] ?></td>
                            <td class="descr"><?= $endereco['complemento'] ?></td>
                            <td class="descr"><?= $endereco['bairro'] ?></td>
                            <td class="descr"><?= $endereco['cidade'] ?></td>
                            <td class="descr"><?= $endereco['cep'] ?></td>
                        </tr>
                        <table class="table2">
                            <thead>
                                <tr>
                                    <td class="descr"><a href="./endereco/ver/<?= $endereco['idendereco'] ?>" class="botao02">Ver</a></td>
                                    <td class="descr"><a href="./endereco/deletar/<?= $endereco['idendereco'] ?>" class="botao02">Deletar</a></td>
                                    <td class="descr"><a href="./endereco/editar/<?= $cliente['idCliente'] ?>/<?= $endereco['idendereco'] ?>" class="botao02">Alterar</a></td>

                                </tr>
                            </thead>
                        </table>
                        <?php endforeach; ?>
                    </table>
                    <a href="endereco/cadastrar/<?= $cliente["idCliente"] ?>" class="botao05"> Novo endereço</a>

            </div>

        </div>
    </div>
</div>