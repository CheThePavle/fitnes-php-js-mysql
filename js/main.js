$(function(){
    var el;
    let viborMounth;
    $("#rng").change(function() {
    el = $(this);
    $("#ong").text(el.val() + ' мес.');

    viborMounth = el.val();
    sessionStorage.setItem('viborMounth', viborMounth);

    $("#phpMonth").val(viborMounth);

    funViborMounth();

    $('.cLevel').text(sessionStorage.getItem('level'));
    
    $('.cPriceFull').text(sessionStorage.getItem('priceFull'));
    $('.cPriceDay').text(sessionStorage.getItem('priceDay'));
    $('.cPriceMorning').text(sessionStorage.getItem('priceMorning'));

    $('.cProfitFull').text(sessionStorage.getItem('profitFull') + ' %');
    $('.cProfitDay').text(sessionStorage.getItem('profitDay') + ' %');
    $('.cProfitMorning').text(sessionStorage.getItem('profitMorning') + ' %');

    $('.cSumFull').text(+(sessionStorage.getItem('priceFull'))*+viborMounth);
    $('.cSumDay').text(+(sessionStorage.getItem('priceDay'))*+viborMounth);
    $('.cSumMorning').text(+(sessionStorage.getItem('priceMorning'))*+viborMounth);
  
    })
    .trigger('change');

    $('#test').click(()=>{
        funViborMounth();
    })

    function funViborMounth() {
        switch (viborMounth) {
            case '1': 
            case '2': 
                sessionStorage.setItem('level', '1-2 месяца');
                sessionStorage.setItem('priceFull', '2999');
                sessionStorage.setItem('priceDay', '2650');
                sessionStorage.setItem('priceMorning', '2500');
                sessionStorage.setItem('profitFull', '0');
                sessionStorage.setItem('profitDay', '0');
                sessionStorage.setItem('profitMorning', '0');
                break;
            case '3': 
            case '4': 
            case '5':
            case '6':  
                sessionStorage.setItem('level', '3-6 месяцев');
                sessionStorage.setItem('priceFull', '2300');
                sessionStorage.setItem('priceDay', '1700');
                sessionStorage.setItem('priceMorning', '1600');
                sessionStorage.setItem('profitFull', '23');
                sessionStorage.setItem('profitDay', '36');
                sessionStorage.setItem('profitMorning', '36');
                break;
            case '7': 
            case '8': 
            case '9':
            case '10':  
                sessionStorage.setItem('level', '7-10 месяцев');
                sessionStorage.setItem('priceFull', '2000');
                sessionStorage.setItem('priceDay', '1600');
                sessionStorage.setItem('priceMorning', '1500'); 
                sessionStorage.setItem('profitFull', '33');
                sessionStorage.setItem('profitDay', '40');
                sessionStorage.setItem('profitMorning', '40');               
                break;
            case '11':
            case '12':  
            case '13': 
            case '14': 
            case '15': 
                sessionStorage.setItem('level', '11-15 месяцев');
                sessionStorage.setItem('priceFull', '1600');
                sessionStorage.setItem('priceDay', '1100');
                sessionStorage.setItem('priceMorning', '1090'); 
                sessionStorage.setItem('profitFull', '53');
                sessionStorage.setItem('profitDay', '58');
                sessionStorage.setItem('profitMorning', '56');              
                break;
            case '16': 
            case '17': 
            case '18': 
            case '19': 
            case '20': 
                sessionStorage.setItem('level', '16-20 месяцев');
                sessionStorage.setItem('priceFull', '1400');
                sessionStorage.setItem('priceDay', '1000');
                sessionStorage.setItem('priceMorning', '990');
                sessionStorage.setItem('profitFull', '53');
                sessionStorage.setItem('profitDay', '62');
                sessionStorage.setItem('profitMorning', '60');          
                break;
        }
    }
});