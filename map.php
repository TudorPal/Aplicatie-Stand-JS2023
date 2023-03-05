<?php {
	session_start();
	if (empty($_SESSION['company_id'])) {
		header("Location: index.php");
	}}
    $url = 'basket.png'
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>JobShop | Standuri</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=Noto+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/styles2023.css" type="text/css"/>
    <script src="js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</head>
<body>
<style>
 .arena
{
background-image:url('<?php echo $url ?>');
} 
 </style>   


<div id="header" class="text-center">
    <img style="width: 320px" src="images/logo.png" class="mt-3">

</div>

    
    
 
<div id="tables" class="container mt-5 rounded mappa ">
    <div class="row">
            <div class="col">
                <div class="row mybox3 d-flex align-content-between flex-wrap">
                    <div class="col-12 tLane">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-5 ">
                                <div class="row d-flex align-items-center  justify-content-around">
                                    <div data-table-id="25" class="col-2 rounded-pill table"></div>
                                    <div data-table-id="24" class="col-2 rounded-pill table"></div>
                                    <div data-table-id="23" class="col-2 rounded-pill table"></div>
                                </div>
                            </div>
                            <div class="col-5"></div>
                        </div>
                    </div>
                    <div class="col-12 bLane">
                    <div class="row">
                            <div class="col-2"></div>
                            <div class="col-5 ">
                                <div class="row d-flex  justify-content-around">
                                    <div data-table-id="22" class="col-3 rounded-pill table"></div>
                                    <div data-table-id="21" class="col-3 rounded-pill table"></div>
                                    <div data-table-id="20" class="col-3 rounded-pill table"></div>
                                </div>
                            </div>
                            <div class="col-5"></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="row">
        <!-- <div class="col-1 ">
        <div class="row d-flex justify-content start">
        <div class="col-4 ">
                    <div data-table-id="9" class=" my-3 rounded-pill  turn table"></div>
                    <div data-table-id="10" class="turn rounded-pill  my-5 table"></div>
                    <div data-table-id="11" class="my-5 rounded-pill  turn table"></div>
                    <div data-table-id="12" class="my-5  rounded-pill turn table"></div>
                    <div data-table-id="13" class="table  rounded-pill turn"></div>
                </div> 
        </div>
        </div> -->
        <div class="col-2 mybox">
            <div class="row d-flex justify-content-between">
                <div class="col-4 lLane">
                    <div data-table-id="19" class=" my-3 rounded-pill mytable1 table"></div>
                    <div data-table-id="18" class="rounded-pill mytable2 my-5 table"></div>
                    <div data-table-id="17" class="my-5 rounded-pill mytable3 turn table"></div>
                    <div data-table-id="16" class="my-5  rounded-pill mytable4  table"></div>
                    <div data-table-id="15" class="table  rounded-pill mytable5 "></div>
                    <div data-table-id="14" class="table  rounded-pill mytable6 "></div>
                </div> 
                <div class="col-4 rLane mx-2">
                    <div data-table-id="13" class="mt-3 turn rounded-pill table"></div>
                    <div data-table-id="12" class="mymargin turn rounded-pill table"></div>
                    <div data-table-id="11" class="mymargin turn rounded-pill table"></div>
                    <div data-table-id="10" class="mymargin turn rounded-pill table"></div>
                    <div data-table-id="9" class="mymargin turn rounded-pill table"></div>
                </div>
            </div>
        </div>
        <div class="col-8 arena rounded-pill" ></div>
        <div class="col-2 mybox">
            <div class="row h-100">
                <div class="col-5 lLane">
                    <div >
                        <div class="food d-flex rounded align-items-center"><p class="foodtable">FOOD TABLE</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-9">
                <div class="row mybox3 d-flex align-content-between flex-wrap">
                    <div class="col-12 tLane">
                    <div class="row">
                            <div class="col-4"></div>
                            
                            <div class="col-8 ">
                                <div class="row d-flex  justify-content-around">
                                    <div data-table-id="8" class="col-3 rounded-pill table"></div>
                                    <div  class="col-3 rounded-pill table1 d-flex align-items-center justify-content-center"><p class="bar">DRINKS</p></div>
                                    <div data-table-id="7" class="col-3 rounded-pill  table"></div>
                                    <div data-table-id="6" class="col-3  rounded-pill table"></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-12 bLane">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-9">
                            <div class="row d-flex justify-content-around">
                                    <div data-table-id="5" class="col-2 rounded-pill table"></div>
                                    <div data-table-id="4" class="col-2 rounded-pill table"></div>
                                    <div data-table-id="3" class="col-2 rounded-pill table"></div>
                                    <div data-table-id="2" class="col-2 rounded-pill table"></div>
                                    <div data-table-id="1" class="col-1 rounded-pill table"></div>
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mybox4 d-flex align-items-end text-center">
                    <div class="intrare rounded-top d-flex align-items-center"><p>Entrance <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg></p></div>
            </div>
    </div>
  
</div>
<!-- informatii: data-table-id -->
<div class="container mt-5 instructiuni ">
    <h3>Instructiuni:</h3>
    <ul>
        <li>Atenție! Dacă ați fost logat inainte de 11:00 a.m trebuie sa dați un hard refresh (CTRL+F5).</li>
        <li>Aplicația va fi funcțională începand cu Luni, 06.03.2023, ora 10:00 A.M.</li>
        <li>Veți putea alege dintre standurile marcate cu verde (corespunzătoare numarului de metri pătrați al pachetului
        ales).</li>
        <li>Standul ales nu va putea fi schimbat ulterior!</li>
    </ul>
    <p class="fw-bold">Pentru orice problemă tehnică vă rugăm să ne contactați la: <a href="tel:+40 724 351 967" class="text-white">+40 724 351 967</a> - Pal Tudor.</p>
    
</div>

</body>
</html>