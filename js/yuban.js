
/**
 * Created by Vilkaz on 01.11.2014.
 */

function getSite() {
    return $('#page').attr('data-site');
}

function initFlags() {
    $('#gerFlag').click(function(){
        gerFlag();
    })
}

function gerFlag() {
    alert("GER FLAG CKLICED");
    $.post('master.php', {
            action: 'flag',
            lang:'ger',
            site:getSite()
        },
        function (data) {
            data = JSON.parse(data);
            console.log(data);
            $('#pageHead').html(data);
        })
}
