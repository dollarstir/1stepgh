<?php 
session_start();
include "db.php";
include 'core.php';



if (!isset($_SESSION['id']))

{


    echo '<script>window.location="index.php"</script>';

}



?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>1step Gh - Members </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
        
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/custom_dt_html5.css">
    <!-- END PAGE LEVEL CUSTOM STYLES -->

     <!--  BEGIN CUSTOM STYLE FILE  -->
     <link href="assets/css/ui-kit/buttons/creative/creative-icon-buttons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/ui-kit/buttons/creative/creative-gradients.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/ui-kit/buttons/creative/creative-fill.css" rel="stylesheet" type="text/css" />
    
    <link href="assets/css/ui-kit/buttons/creative/creative-material.css" rel="stylesheet" type="text/css" />
    <!-- Spinner Buttons -->
    <link href="assets/css/ui-kit/buttons/spinner/spinner.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/ui-kit/buttons/spinner/ladda.min.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
    <script src=""></script>
</head>
<body>
	<div>
        <table id="html5-extension" class="table table-striped table-bordered table-hover" style="width:100% background-image:url('upload/5e4169ce1dc7e.png');"> 
        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th> Nickname</th>
                                                <th>Position</th>
                                                <th>Contact</th>
                                                <th>Club</th>
                                                <th>Ambiton</th>
                                                <th>Picture</th>
                                                
                                                <!-- <th class="invisible"></th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        
                                       
                                        viewallmembers();
                                        // <td><a href="#" class="btn btn-c-gradient-5 btn-rounded  mb-4 mr-3">Danger</a>| <span class="flaticon-delete"></span></td>

                                        
                                        ?>
                                            
                                        </tbody>
        </table>
    </div>

    <p>
        <input type="button" value="Print Table" onclick="myApp.printTable()" />
    </p>

    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    
    
   

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
  <script src="plugins/table/datatable/datatables.js"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="ajax_gen.js"></script>
    <script src="plugins/table/datatable/button-ext/jszip.min.js"></script>    
    <script src="plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
    <script src="plugins/table/datatable/button-ext/buttons.print.min.js"></script>
    <script>
        $('#html5-extension').DataTable( {
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-default btn-rounded btn-sm mb-4' },
                    { extend: 'csv', className: 'btn btn-default btn-rounded btn-sm mb-4' },
                    { extend: 'excel', className: 'btn btn-default btn-rounded btn-sm mb-4' },
                    { extend: 'print', className: 'btn btn-default btn-rounded btn-sm mb-4' }
                ]
            },
            "language": {
                "paginate": {
                  "previous": "<i class='flaticon-arrow-left-1'></i>",
                  "next": "<i class='flaticon-arrow-right'></i>"
                },
                "info": "Showing page _PAGE_ of _PAGES_"
            }
        } );
    </script>
<script>
    var myApp = new function () {
        this.printTable = function () {
            var tab = document.getElementById('html5-extension');
            var win = window.open('', '', 'height=700,width=1000,background:url("upload/5e4169ce1dc7e.png")');
            win.document.write(tab.outerHTML);
            win.document.close();
            win.print();
        }
    }
</script>
</body>


  
</html>