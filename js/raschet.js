$(function(){
    let getLevel = sessionStorage.getItem('level');

    let getPriceFull = sessionStorage.getItem('priceFull');
    let getPriceDay = sessionStorage.getItem('priceDay');
    let getPriceMorning = sessionStorage.getItem('priceMorning');

    let getProfitFull = sessionStorage.getItem('profitFull');
    let getProfitDay = sessionStorage.getItem('profitDay');
    let getProfitMorning = sessionStorage.getItem('profitMorning');

    let getSumFull = +(sessionStorage.getItem('viborMounth'))*+getPriceFull;
    let getSumDay = +(sessionStorage.getItem('viborMounth'))*+getPriceDay;
    let getSumMorning = +(sessionStorage.getItem('viborMounth'))*+getPriceMorning;

    $('.getLevel').text(getLevel);

    $('.getPriceFull').text(getPriceFull);
    $('.getPriceDay').text(getPriceDay);
    $('.getPriceMorning').text(getPriceMorning);
    
    $('.getProfitFull').text(getProfitFull + ' %');
    $('.getProfitDay').text(getProfitDay + ' %');
    $('.getProfitMorning').text(getProfitMorning + ' %');

    $('.getSumFull').text(getSumFull);
    $('.getSumDay').text(getSumDay);
    $('.getSumMorning').text(getSumMorning);

    // передача в php
    $(".phpLevel").val(getLevel);
    $("#phpPriceFull").val(getPriceFull);
    $("#phpProfitFull").val(getProfitFull);
    $("#phpSumFull").val(getSumFull);

    $("#phpPriceDay").val(getPriceDay);
    $("#phpProfitDay").val(getProfitDay);
    $("#phpSumDay").val(getSumDay);

    $("#phpPriceMorning").val(getPriceMorning);
    $("#phpProfitMorning").val(getProfitMorning);
    $("#phpSumMorning").val(getSumMorning);

    $('#btnFull').click(()=>{
        //sessionStorage.setItem('authName', 'Все включено (07:00 - 23:30)');
        sessionStorage.setItem('authLevel', getLevel);
        sessionStorage.setItem('authPrice', getPriceFull);
        sessionStorage.setItem('authProfit', getProfitFull);
        sessionStorage.setItem('authSum', getSumFull);
    })

    $('#btnDay').click(()=>{
        sessionStorage.setItem('authLevel', getLevel);
        sessionStorage.setItem('authPrice', getPriceDay);
        sessionStorage.setItem('authProfit', getProfitDay);
        sessionStorage.setItem('authSum', getSumDay);
    })

    $('#btnMorning').click(()=>{
        sessionStorage.setItem('authLevel', getLevel);
        sessionStorage.setItem('authPrice', getPriceMorning);
        sessionStorage.setItem('authProfit', getProfitMorning);
        sessionStorage.setItem('authSum', getSumMorning);
    })
});