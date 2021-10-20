//disabled inputs
$('#exampleSelectBorder').change(function (e) {
    let selectData = e.target.value;
    $('#partNu')
    if (selectData == 1 || selectData == 2) {
        $('#shift').prop("disabled", false);
        $('#partNu').prop("disabled", false);
        $('#type').prop("disabled", false);
        $('#scrapQu').prop("disabled", false);
        //toggle cursor 
        $('#shift').removeClass("cursor-no");
        $('#partNu').removeClass("cursor-no");
        $('#type').removeClass("cursor-no");
        $('#scrapQu').removeClass("cursor-no");
    } else {
        $('#shift').prop("disabled", true);
        $('#partNu').prop("disabled", true);
        $('#type').prop("disabled", true);
        $('#scrapQu').prop("disabled", true);
        //toggle cursor 
        $('#shift').addClass("cursor-no");
        $('#partNu').addClass("cursor-no");
        $('#type').addClass("cursor-no");
        $('#scrapQu').addClass("cursor-no");
    }
    //  console.log(selectData)
});


//reset form
function resetForm() {
    for (var i = 0; i < $('.reset-form').length; i++) {
        $('.reset-form')[i].value = "";
    }
}

//logOut Form 
$('#logout-link').click(function(e) {
    e.preventDefault();
    $("#logout-form").submit();
});


//loding screen
$(document).ready(function () {
    $('#loading').fadeOut(1950, function () {
        $('body').css('overflow', 'visible')
    });
})