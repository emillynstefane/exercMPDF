<?php

require_once 'vendor/autoload.php';

    $mpdf = new \Mpdf\Mpdf();
    ob_start();
    ?>
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Extrato em Conta</title>
    </head>
    <body>
        <div class="header">
            <div class="imgLogo">
                <img src="logohospital.png" alt="Logo do Hospital">
            </div>
           <div class="dadosPessoais">
                <h3>Extrato em Conta</h3>
                <div class="dados">
                    <fieldset>
                        <p><b>Fornecedor: </b>Movicel</p>
                        <p><b>Morada:</b> Luandra <b>Contacto: </b>222 335 001</p>
                        <p><b>NIF: </b>5410001109</p>
                        <p><b>Banco: </b>BFA <b>Conta: </b>149654581</p>
                        <p><b>Rubrica: </b>Fornecedor - Serviços de Comunicações</p>
                    </fieldset>
                </div>
           </div>
        </div>

        <p><b>Contabilista: </b>Ricardo Chivela</p>
        <p><b>Data: </b>11/03/2017 22:03</p>

        <p>Exmo Senhor,</p>
        <p>Viemos apresentar a V.Exa, o extrato de conta da qual é titular.</p>

        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>Data Mov.</th>
                    <th>N° Doc.</th>
                    <th>Descrição</th>
                    <th>Débito</th>
                    <th>Crédito</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>11/04/2017</td>
                    <td>9876/17</td>
                    <td>Plano Carga Nice +</td>
                    <td>0,00 KZ</td>
                    <td>45.000,00 KZ</td>
                </tr>
                <tr>
                    <td>10/03/2017</td>
                    <td>5868/17</td>
                    <td>Pagamento do Plano Carga</td>
                    <td>40.000,00 KZ</td>
                    <td>0,00 KZ</td>
                </tr>
                <tr>
                    <td>17/02/2017</td>
                    <td>68732/17</td>
                    <td>Plano Karga Nice +</td>
                    <td>0,00 KZ</td>
                    <td>50.000,00 KZ</td>
                </tr>
                <tr>
                    <td>10/03/2017</td>
                    <td>5672/17</td>
                    <td>Pagamento do Saldo</td>
                    <td>25.000,00 KZ</td>
                    <td>0,00 KZ</td>
                </tr>
            </tbody>
        </table>
    </body>
    </html>
    <?php

    $html = ob_get_contents();
    ob_end_clean();

    $mpdf->WriteHTML($html, \Mpdf\HTMLParserMode::HTML_BODY);

    $mpdf->Output();