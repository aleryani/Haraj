<!DOCTYPE html>

<?php 
    require_once ($_SERVER['DOCUMENT_ROOT'] . '/tourismguide/class/city.inc.php');
    $city = new City();
    $result = $city->get_cities();    
    if(isset($result['cities'])) {
        $cities = $result['cities'];
        $output = "";
        foreach($cities as $city){
            $output .= "<tr>";
            $output .= "<td>{$city['city_name_en']}</td>";
            $output .= "<td class='ar'>{$city['city_name_ar']}</td>";
            $output .= "<td><a onclick='openCityLocations(this,{$city['city_id']})'><span class='glyphicon glyphicon-list-alt'></span></td></a>";
            $output .= "</tr>";
        }//end foreach    
    }//end if    
?>
<html>
    <head>
        <title>Tourist Guide - C-Panel</title>        
        <link href="../css/bootstrap.css" rel="stylesheet" />
        <link href="../css/main.css" rel="stylesheet" />
    </head>

    <body>
        <div class="jumbotron text-center customheader">
            <h1>Tourism Guide - Cities</h1>
            <p>Application Control Panel</p> 
            <a href="../index.php" class="btn btn-primary"> <i class='glyphicon  glyphicon-log-out'></i> Logout </a>
        </div>
        
        <div class="container">
            <div class="row">     
                <div class="col-md-5 col-md-offset-3">
                    <h4><a data-toggle="modal" data-target="#newCityModal"><span class="glyphicon glyphicon-plus-sign"></span> New City</a></h4>
                    
                    <div id="serverMessage" class="alert" style="display:none">
                    </div>
                    
                    <table id="citiesTable" class="table table-striped">
                    <tr>
                        <th>English Name</th>
                        <th>Arabic Name</th>
                        <th><span class="glyphicon glyphicon-wrench"></span></th>
                    </tr>
                    <?php echo $output; ?>    
                </table>                
                </div>                
            </div>            
        </div>
    </body>

    <!-- Modal -->
    <div id="newCityModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-sm">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">New City</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <label for="text">English Name</label>
                <input type="text" class="form-control" id="cityNameEn">
            </div>
            <div class="form-group">
                <label for="text">Arabic Name</label>
                <input type="text" class="form-control" id="cityNameAr">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-info" onclick="SaveCity()">Save</button>
          </div>
        </div>

      </div>
    </div>
    <script src="../js/jquery-3.2.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
            function SaveCity(){
                if($("#cityNameEn").val().trim() == ""){
                    $("#cityNameEn").parent().addClass("has-error");
                    $("#cityNameEn").focus();
                    return ;
                }//end if
                
                if($("#cityNameAr").val().trim() == ""){
                    $("#cityNameEn").parent().removeClass("has-error");
                    $("#cityNameAr").parent().addClass("has-error");
                    $("#cityNameAr").focus();
                    return ;
                }//end if
                
                $("#cityNameAr").parent().removeClass("has-error");
                var params = "en_name=" + $("#cityNameEn").val().trim();
                params += "&ar_name=" + $("#cityNameAr").val().trim();
                $.ajax({
                    type:'POST' ,
                    url: "../api/php/city.add.inc.php",
                    data: params,
                    success: function(response) {                        
                        var data = JSON.parse(response);                        
                        if(data.error == false) {
                            $("#serverMessage").removeClass("alert-danger");
                            $("#serverMessage").addClass("alert-success");
                            $("#serverMessage").html("New City has been Added Successfully");
                            addCityToTable(data.city);
                        } else {
                            $("#serverMessage").removeClass("alert-success");
                            $("#serverMessage").addClass("alert-danger");
                            $("#serverMessage").html("Failed to add New City");
                        }//end if
                        $("#serverMessage").show();
                        $("#newCityModal").modal('hide');
                    }//end function                    
                });              
            }//end SaveCity functiomn
        
        function addCityToTable(city){            
            var tr = "<tr>";
            tr += "<td>"+city.city_name_en+"</td>";
            tr += "<td class='ar'>"+city.city_name_ar+"</td>";
            tr += "<td><a onclick='openCityLocations(this,"+city.city_id+")'><span class='glyphicon glyphicon-list-alt'></span></td></a>";
            tr += "</tr>";
            $("#citiesTable").append(tr);
        }//end addCityToTable function
        
        function openCityLocations(obj,id){
            var city = $(obj).parent().parent().find("td:eq(0)").text();
            location.href = "locations.php?id=" + id + "&city=" + city;
        }//end openCityLocations function
    </script>
</html>
