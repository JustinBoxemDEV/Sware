/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    function hideFields(){
    $("#service2ID").hide();
    $("#service3ID").hide();
};

    function showFields(){
    $("#service2ID").show();
    $("#service3ID").show();
};

$(document).ready(function () {
    hideFields();
    $("#packageID").on("change", function () {
        switch ($("#packageID").val()) {
            case "2":
               showFields();
                break;
            case "1":
                hideFields();
        }
    });

});
