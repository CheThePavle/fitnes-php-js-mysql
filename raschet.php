<?php
session_start();
$_SESSION['phpMonth'] = $_POST['phpMonth'];
require_once('header.php');
//echo $_POST['phpMonth'];
//добавить проверку на выбор количества месяца
?>

<div class="content">
    <hr><hr><hr><hr><hr><hr>

    <table>
        <tr>
            <th>Наименование</th>
            <th>Размер пакета</th>
            <th>Цена месяца</th>
            <th>Ваша выгода</th>
            <th>Сумма</th>
            <th></th>
        </tr>

        <form action="vendor/getCard" method="post">
        <tr>
            <td>Все включено <br> (07:00 - 23:30)</td> <input type="hidden" value="Полный" name="phpType">
            <td class="getLevel">?</td> <input type="hidden" name="phpLevel" value="" class="phpLevel">
            <td class="getPriceFull">?</td> <input type="hidden" name="phpPrice" value="" id="phpPriceFull">
            <td class="getProfitFull">?</td> <input type="hidden" name="phpProfit" value="" id="phpProfitFull">
            <td class="getSumFull">?</td> <input type="hidden" name="phpSum" value="" id="phpSumFull">
            <td>
                <div class="btn btn_calc">
                    <input type="submit" value="Оформить карту">
                </div>
            </td>
        </tr>
        </form>

        <form action="vendor/getCard" method="post">
        <tr>
            <td>День <br> (07:00 - 17:00)</td> <input type="hidden" value="День" name="phpType">
            <td class="getLevel">?</td> <input type="hidden" name="phpLevel" value="" class="phpLevel">
            <td class="getPriceDay">?</td> <input type="hidden" name="phpPrice" value="" id="phpPriceDay"">
            <td class="getProfitDay">?</td> <input type="hidden" name="phpProfit" value="" id="phpProfitDay"">
            <td class="getSumDay">?</td> <input type="hidden" name="phpSum" value="" id="phpSumDay">
            <td>
                <div class="btn btn_calc">
                    <input type="submit" value="Оформить карту">
                </div>
            </td>
        </tr>
        </form>

        <form action="vendor/getCard" method="post">
        <tr>
            <td>Утро <br> (07:00 - 13:00)</td> <input type="hidden" value="Утро" name="phpType">
            <td class="getLevel">?</td> <input type="hidden" name="phpLevel" value="" class="phpLevel">
            <td class="getPriceMorning">?</td> <input type="hidden" name="phpPrice" value="" id="phpPriceMorning">
            <td class="getProfitMorning">?</td> <input type="hidden" name="phpProfit" value="" id="phpProfitMorning">
            <td class="getSumMorning">?</td> <input type="hidden" name="phpSum" value="" id="phpSumMorning">
            <td>
                <div class="btn btn_calc">
                    <input type="submit" value="Оформить карту">
                </div>
            </td>
        </tr>
        </form>
    </table>

    <div class="btn btn_calc">
        <a onclick="alert('Экспорт в ворд!');"><input type="submit" value="Сформировать выписку"></a>
    </div>

    <hr><hr><hr><hr><hr><hr>
</div>

<?php require_once('footer.php') ?>
<script src="js/raschet.js"></script>