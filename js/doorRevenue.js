// $('.doorRevenueForm').on('input','.prc',function(){
//     var tillSum = 0;
//     $('.doorRevenueForm .prc').each(function(){
//         var inputVal = $(this).val();
//         if($.isNumeric(inputVal)){
//             tillSum += parseFloat(inputVal);
//         }
//     });
//     $('#tillResult').text(tillSum);
// });

$('.doorRevenueForm').on('input','.prc',function(){
    var totalSum = 0;
    $('.doorRevenueForm .prc').each(function(){
        var inputVal = $(this).val();
        if($.isNumeric(inputVal)){
            totalSum += parseFloat(inputVal);
        }
    });
    $('#tillResult').text(totalSum);
});