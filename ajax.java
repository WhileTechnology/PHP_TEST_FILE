

    function FillData() {
    var param = "<h1>works</h1>";
    $("#tbDetails").append("<img src='Images/loading.gif'/>");
    $.ajax({
        type: "POST",/*method type*/
        contentType: "application/json; charset=utf-8",
        url: "Default.aspx/BindDatatable",/*Target function that will be return result*/
        data: '{"data":"' + param + '"}',/*parameter pass data is parameter name param is value */
        dataType: "json",
        success: function(data) {
               alert("Success");
            }
        },
        error: function(result) {
            alert("Error");
        }
    });   
}