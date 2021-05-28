<?php require_once('header.php') ?>

<div class="content" onload="funonload();">
    <hr><hr><hr><hr><hr><hr>

    <h2>Выберите количество месяцев и время действия пакета</h2>

    <input id="rng" name="rng" type="range" min="1" max="20" value="1">
    <datalist id="tickmarks">
        <option value="1" label="1">
        <option value="2" label="2">
        <option value="3" label="3">
        <option value="4" label="4">
        <option value="5" label="5">
        <option value="6" label="6">
        <option value="7" label="7">
        <option value="8" label="8">
        <option value="9" label="9">
        <option value="10" label="10">
        <option value="11" label="11">
        <option value="12" label="12">
        <option value="13" label="13">
        <option value="14" label="14">
        <option value="15" label="15">
        <option value="16" label="16">
        <option value="17" label="17">
        <option value="18" label="18">
        <option value="19" label="19">
        <option value="20" label="20">
    </datalist>

    <form action="raschet" method="post">
    <output id="ong" for="rng">1</output>

    <div class="tarifs">
        <div class="tarif">
            <div class="tarif_up">
                <h2>Все включено (07:00 - 23:30)</h2>
                <div class="tarif_info">
                    <h3>Уровень привилегии <br> (Размер пакета)</h3>
                    <h4 class="cLevel">7-10 месяцев</h4>
                </div>
                <div class="tarif_info">
                    <h3>Сумма:</h3>
                    <h4 class="cPriceFull">2000</h4>
                </div>
                <div class="tarif_info">
                    <h3>Процент:</h3>
                    <h4 class="cProfitFull">33%</h4>
                </div>
            </div>    
            <div class="tarif_result">
                <h3>Итог:</h3>
                <h4 class="cSumFull">160000</h4>
            </div>
        </div>
        <div class="tarif">
            <div class="tarif_up">
                <h2>День (07:00 - 17:00)</h2>
                <div class="tarif_info">
                    <h3>Уровень привилегии <br> (Размер пакета)</h3>
                    <h4 class="cLevel">7-10 месяцев</h4>
                </div>
                <div class="tarif_info">
                    <h3>Сумма:</h3>
                    <h4 class="cPriceDay">1600</h4>
                </div>
                <div class="tarif_info">
                    <h3>Процент:</h3>
                    <h4 class="cProfitDay">40%</h4>
                </div>
            </div>    
            <div class="tarif_result">
                <h3>Итог:</h3>
                <h4 class="cSumDay">12800</h4>
            </div>
        </div>
        <div class="tarif">
            <div class="tarif_up">
                <h2>Утро (07:00 - 13:00)</h2>
                <div class="tarif_info">
                    <h3>Уровень привилегии <br> (Размер пакета)</h3>
                    <h4 class="cLevel">7-10 месяцев</h4>
                </div>
                <div class="tarif_info">
                    <h3>Сумма:</h3>
                    <h4 class="cPriceMorning">1500</h4>
                </div>
                <div class="tarif_info">
                    <h3>Процент:</h3>
                    <h4 class="cProfitMorning">40%</h4>
                </div>
            </div>    
            <div class="tarif_result">
                <h3>Итог:</h3>
                <h4 class="cSumMorning">12000</h4>
            </div>
        </div>
    </div>

    <div class="btn btn_calc">
        <input type="hidden" id="phpMonth" name="phpMonth">
        <input id="test" type="submit" value="Сравнить параметры">
    </div>
    </form>

    <hr><hr><hr><hr><hr><hr>
</div>



<?php require_once('footer.php') ?>