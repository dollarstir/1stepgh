    $(document).ready(function () {  0555743526




    $("#printx").click(function(e) {

    
             var divToPrint = document.getElementsByTagName('th');
             var htmlToPrint = '' +
                 '<style type="text/css">' +
                 'table th, table td {' +
                 'border:1px solid #000;' +
                 'padding:0.5em;' +
                 '}' +
                 '</style>';
             htmlToPrint += divToPrint.outerHTML;
             newWin = window.open("");
             newWin.document.write(htmlToPrint);
             newWin.print();
             newWin.close();
    })
     







    $('#btntk').hide();

    $('#calcu').click(function(){
        $('#btntk').show();
        $('#calcu').hide();
    })

    function resp(response) {

        $("#respo").html(response);
        $("#mess").fadeOut(15000);
        
    }



    







    


    // $("#conv").click(function (e) {
    //        e.preventDefault()
    //         var link = "http://localhost/1stepgh/tble.php";
    //        $.ajax({
    //            url:'process.php?dollar=convert',
    //            method:'post',
    //            dataType:'text',
    //            data:{links:link},
    //            beforeSend:function (params) {
    //             $(".dis").html("loading...")                   
    //            },
    //            success:function (response) {
    //                $(".dis").html(response)
    //            }
    //        })

    // })
    
          $("#print").click(function (e) {
              e.preventDefault();

              $("td").css({
                  border:'1px solid white !important'
              })
              $("th").css({
                border:'1px solid white !important'
             })
               window.print();

          })

    $("#logfrm").submit(function (ev){
        ev.preventDefault();
        var logopt = {
            url: "process.php?dollar=login",
            type: 'post',
            data : new FormData(this),
            cache: false,
            processData: false,
            contentType : false,
            success:resp,
        }
        $.ajax(logopt);

    });


    $('#admember').submit(function(ev){
        ev.preventDefault();
        var admopt ={
            url: 'process.php?dollar=addmember',
            type : 'post',
            data : new FormData(this),
            cache : false,
            contentType: false,
            processData : false,
            success: resp
        }
        $.ajax(admopt);
    });

    $('.adadm').submit(function(ev){
        ev.preventDefault();
        var admoption = {
            url: 'process.php?dollar=addadmin',
            type: 'post',
            data : new FormData(this),
            cache : false,
            processData : false,
            contentType : false,
            success : resp
        }
        $.ajax(admoption);
    });



    $('.updadm').submit(function (ev) {

        ev.preventDefault();
        var updaa = {
            url : 'process.php?dollar=updateadmin',
            type: 'post',
            data : new FormData(this),
            cache : false,
            processData : false,
            contentType : false,
            success: resp

        }
        $.ajax(updaa);
        
    });

    $('.adbg').submit(function (ev) {
        ev.preventDefault();
        var bdp = {
            url : 'process.php?dollar=bgpic',
            type : 'post',
            data : new FormData(this),
            cache : false,
            processData : false,
            contentType : false,
            success : resp
        }
        $.ajax(bdp);
        
    });

    $('#upmem').submit(function (ev) {

        ev.preventDefault();
        var  upm = {
            url : 'process.php?dollar=updatemember',
            type : 'post',
            data : new FormData(this),
            cache : false,
            processData : false,
            contentType : false,
            success :resp

        }
        $.ajax(upm);
        
    })
    




});