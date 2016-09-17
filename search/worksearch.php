<html><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css\style.css" rel="stylesheet" type="text/css">
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script>
            function tracker() {
                var price1=0;
                var price2=0;
                var price3=0;
                var price4=0;
                var price5=0;
                var price6=0;
                var price7=0;
                var brand1="";
                var brand2="";
                var brand3="";
                var brand4="";
                var brand5="";
                var brand6="";
                var fuel1="";
                var fuel2="";
                var fuel3="";
                var fuel4="";
                var fuel5="";
                
              if(document.getElementById('price1').checked) {
                     price1 = document.getElementById("price1").value;
                }   
                if(document.getElementById('price2').checked) {
                     price2 = document.getElementById("price2").value;
                }
                if(document.getElementById('price3').checked) {
                     price3 = document.getElementById("price3").value;
                }
                if(document.getElementById('price4').checked) {
                     price4 = document.getElementById("price4").value;
                }
                if(document.getElementById('price5').checked) {
                     price5 = document.getElementById("price5").value;
                }
                if(document.getElementById('price6').checked) {
                     price6 = document.getElementById("price6").value;
                }
                if(document.getElementById('price7').checked) {
                     price7 = document.getElementById("price7").value;
                }

                if(document.getElementById('brand1').checked) {
                     brand1 = document.getElementById("brand1").value;
                }   
                if(document.getElementById('brand2').checked) {
                     brand2 = document.getElementById("brand2").value;
                }
                if(document.getElementById('brand3').checked) {
                     brand3 = document.getElementById("brand3").value;
                }
                if(document.getElementById('brand4').checked) {
                     brand4 = document.getElementById("brand4").value;
                }
                if(document.getElementById('brand5').checked) {
                     brand5 = document.getElementById("brand5").value;
                }
                if(document.getElementById('brand6').checked) {
                     brand6 = document.getElementById("brand6").value;
                }
                
                
                if(document.getElementById('fuel1').checked) {
                     fuel1 = document.getElementById("fuel1").value;
                }
                if(document.getElementById('fuel2').checked) {
                     fuel2 = document.getElementById("fuel2").value;
                }
                if(document.getElementById('fuel3').checked) {
                    fuel3 = document.getElementById("fuel3").value;
                }
                if(document.getElementById('fuel4').checked) {
                     fuel4 = document.getElementById("fuel4").value;
                }
                if(document.getElementById('fuel5').checked) {
                     fuel5 = document.getElementById("fuel15").value;
                }
              

              if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
              } else { // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
              }
              xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200) { 
                            document.getElementById("resultbox").innerHTML=xmlhttp.responseText;
                    
                }
              }
              xmlhttp.open("GET","query.php?p1="+price1+"&p2="+price2+"&p3="+price3+"&p4="+price4+"&p5="+price5+"&p6="+price6+"&p7="+price7+"&b1="+brand1+"&b2="+brand2+"&b3="+brand3+"&b4="+brand4+"&b5="+brand5+"&b6="+brand6+"&f1="+fuel1+"&f2="+fuel2+"&f3="+fuel3+"&f4="+fuel4+"&f5="+fuel5,true);
              xmlhttp.send();
              
            }
            </script>
        <style type="text/css">
        
            body{margin:50px;}
            
             #accordion .glyphicon { margin-right:10px; }
            .clickable{
                cursor: pointer;   
            }
            
            .panel-heading span {
                margin-top: -20px;
                font-size: 15px;
            }
            .toggle-header{
                padding:10px 0;
                margin:10px 0;
                background-color:#d9534f    ;
                color:white;
            }
            .txt-green{
                color:green;
            }
            .txt-red{
                color:red;
            }
        </style>
    </head><body>
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"><img height="60" alt="Brand" src="..\logo\logo2.png"></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">Search</a>
                        </li>
                        <li>
                            <a href="#">Compare</a>
                        </li>
                        <li>
                            <a href="#">Custom Build</a>
                        </li>
                        <li>
                            <a href="#">360</a>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h1>page header
                                <small>Swagster</small>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a class="btn btn-danger btn-block btn-compose-email">Filter Results</a>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Price Range</h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="1" id="price1" onclick="tracker()">1 Lakh- 5 Lakh</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="2" id="price2" onclick="tracker()">3 Lakh- 5 Lakh</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="3" id="price3" onclick="tracker()">5 Lakh- 10 Lakh</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="4" id="price4" onclick="tracker()">10 Lakh-20 Lakh</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="5" id="price5" onclick="tracker()">20 Lakh- 50 Lakh</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="6" id="price6" onclick="tracker()">50 Lakh-1 CR</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="7" id="price7" onclick="tracker()">Above 1 Cr</label>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Brand</h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="maruti" id="brand1" onclick="tracker()" >Maruti</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="hyundai" id="brand2" onclick="tracker()">Hyundai</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="honda" id="brand3" onclick="tracker()">Honda</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="tata" id="brand4" onclick="tracker()">Tata</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="toyota" id="brand5" onclick="tracker()">Toyota</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="mahindra" id="brand6" onclick="tracker()">Mahindra</label>
                                </div>
                            </div>

                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Fuel Type</h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="diesel" id="fuel1" onclick="tracker()">Diesel</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="petrol" id="fuel2" onclick="tracker()">Petrol</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="cng" id="fuel3" onclick="tracker()">CNG</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="lpg" id="fuel4" onclick="tracker()">LPG</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="electric" id="fuel5" onclick="tracker()">Electric</label>
                                </div>

                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Mileage</h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="1" id="mileage1" onclick="tracker()">Under 10Kmpl</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="2" id="mileage2" onclick="tracker()">10Kmpl - 15Kmpl</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="3" id="mileage3" onclick="tracker()">15Kmpl and above</label>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Vehicle Type</h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="hatchback" id="type1" onclick="tracker()">Hatch back</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="sedan" id="type2" onclick="tracker()">Sedan</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="suv" id="type3" onclick="tracker()">SUV</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="muv" id="type4" onclick="tracker()">MUV</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="luxury" id="type5" onclick="tracker()">Luxury</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="convertible"  id="type6" onclick="tracker()">Convertible</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="hybrid" id="type7" onclick="tracker()">Hybrid</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="coupe" id="type8" onclick="tracker()">Coupe</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="minivan" id="type9" onclick="tracker()">Mini Vans</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="pickup" id="type10" onclick="tracker()">Pickup Trucks</label>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Transmission</h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="automatic" id="transmission1" onclick="tracker()">Automatic</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="manual" id="transmission2" onclick="tracker()">Manual</label>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Seating Capacity</h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="2" id="seating1" onclick="tracker()">2 Seater</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="4" id="seating2" onclick="tracker()">4 Seater</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="5" id="seating3" onclick="tracker()">5 Seater</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="6" id="seating4" onclick="tracker()">6 Seater</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="7" id="seating5" onclick="tracker()">7 Seater</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="8" id="seating6" onclick="tracker()">8 Seater</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="9" id="seating7" onclick="tracker()">9 Seater</label>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Engine Displacement</h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="1" id="engine1" onclick="tracker()">Under 800cc</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="2" id="engine2" onclick="tracker()">800cc - 1000cc</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="3" id="engine3" onclick="tracker()">1000cc - 2000cc</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="4" id="engine4" onclick="tracker()">2000cc - 3000cc</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="5" id="engine5" onclick="tracker()">3000cc - 4000cc</label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="6" id="engine6" onclick="tracker()">Above 4000cc</label>
                                </div>
                             </div>
                        </div>
                    </div>
                    <div class="col-md-9" id="resultbox">
                     
                     </div>

                  </div>



                </div>
            </div>

        </div>
       
         <script type="text/javascript">
            $(document).on('click', '.panel-heading span.clickable', function(e){
                var $this = $(this);
                if(!$this.hasClass('panel-collapsed')) {
                    $this.parents('.panel').find('.panel-body').slideUp();
                    $this.addClass('panel-collapsed');
                    $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
                } else {
                    $this.parents('.panel').find('.panel-body').slideDown();
                    $this.removeClass('panel-collapsed');
                    $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
                }
            })
        </script>
        

    

</body></html>