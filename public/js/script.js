$(function(){
    const modellek = [];
    //let fileNev = "file.json";
    const modellSzulo = $("#jarmu_lista");
    let sablonElem = $("#sablon_auto");

    function getAdat(apivegpont, modellek, myCallback) {
        modellek.splice(0, tomb.length);
        $.ajax({
            url: apivegpont,
            type: "GET",
            success: function (result) {
                console.log("result");
                result.forEach((element) => {
                    modellek.push(element);
                });

                myCallback(modellek);
            },
        });
    }
    function postAdat(apivegpont, adat) {    
        $.ajax({
            url: apivegpont,
            type: "POST",
            data:adat,
            success: function (result) {
                console.log(result);
              
            },
        });
    }
    function deleteAdat(apivegpont, id) {    
        $.ajax({
            url: apivegpont+"/"+id,
            type: "DELETE",
            
            success: function (result) {
                console.log(result);
              
            },
        });
    }
    function putAdat(apivegpont, adat,  id) {    
        $.ajax({
            url: apivegpont+"/"+id,
            type: "PUT",
            data:adat,
            success: function (result) {
                console.log(result);
              
            },
        });
    }
});