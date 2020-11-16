<?php
//Name Variables
//washing machines
$toshiba1name = "";
$toshiba2name = "";
$toshiba3name = "";
$toshiba4name = "";
$toshiba5name = "";
$lg1name = "";
$lg2name = "";
$lg3name = "";
$lg4name = "";
$bosch1name ="";
$bosch2name ="";
$bosch3name ="";
$panasonic1name ="";
$panasonic2name ="";
$samsungwm1name ="";
$samsungwm2name ="";

//TV
$samsungtv1name ="";
$samsungtv2name ="";
$sonytv1name ="";
$sonytv2name ="";
$lgtv1name ="";
$prismtv1name ="";
$prismtv2name ="";
$xiaomitv1name ="";
$xiaomitv2name ="";
$sharptv1name ="";

//speaker
$samsungsp1name ="";
$samsungsp2name ="";
$samsungsp3name ="";
$sonysp1name ="";
$sonysp2name ="";
$sonysp3name ="";
$jblsp1name ="";
$jblsp2name ="";

//babies and toys
$dinosaurlegoname ="";
$mariolegoname ="";
$bricklegoname ="";
$gameoflifename ="";
$monopolyname ="";
$twistername ="";
$jenganame ="";
$connect4name ="";
$einmilkname ="";
$kendamilname ="";
$nestlename ="";
$wyethname ="";
$frisolacname ="";
$enfamilname ="";
$babyyardname ="";
$babytulaname ="";
$doonalikiname ="";
$babyftgname ="";
$doonas3name ="";
$rockerdenimname ="";
$jaiecarname ="";
$babybjornname ="";

//men
$mentwillname ="";
$franklinspreadname ="";
$franklinstripesname ="";
$milanoroyalname ="";
$madisonforwardname ="";
$madisonbuttonname ="";
$stretchpoplinname ="";
$stretchginghamname ="";
$brookscoolname ="";
$brooksflexmilanoname ="";
$brooksflexregentname ="";
$brooksflexmadisonname ="";

//women
$hannesname ="";
$hilmaname ="";
$lyssaname ="";
$tarrynname = "";
$caitlinname ="";
$annisaname ="";
$rowenaname ="";
$catername ="";
$daronaname ="";
$andreaname ="";
$bioncaname ="";
$adynaname ="";

//watches
$tissot1name ="";
$tissot2name ="";
$tissot3name ="";
$tissot4name ="";
$tissot5name ="";
$tissot6name ="";
$bezelrosename ="";
$midicoralname ="";
$blackrosename ="";
$demimothername ="";
$wonderlandname ="";
$ombrename ="";

//Price Variables
//washing machines
$toshiba1price = "";
$toshiba2price = "";
$toshiba3price = "";
$toshiba5price = "";
$lg1price ="";
$lg2price ="";
$lg3price ="";
$lg4price ="";
$bosch1price ="";
$bosch2price ="";
$bosch3price ="";
$panasonic1price ="";
$panasonic2price ="";
$samsungwm1price ="";
$samsungwm2price ="";

//tv
$samsungtv1price ="";
$samsungtv2price ="";
$sonytv1price ="";
$sonytv2price ="";
$lgtv1price ="";
$prismtv1price ="";
$prismtv2price ="";
$xiaomitv1price ="";
$xiaomitv2price ="";
$sharptv1price ="";

//speakers
$samsungsp1price ="";
$samsungsp2price ="";
$samsungsp3price ="";
$sonysp1price ="";
$sonysp2price ="";
$sonysp3price ="";
$jblsp1price ="";
$jblsp2price ="";

//babies and toys
$dinosaurlegoprice ="";
$mariolegoprice ="";
$bricklegoprice ="";
$gameoflifeprice ="";
$monopolyname ="";
$twisterprice ="";
$jengaprice ="";
$connect4price ="";
$einmilkprice ="";
$kendamilprice ="";
$nestleprice ="";
$wyethprice ="";
$frisolacprice ="";
$enfamilprice ="";
$babyyardprice ="";
$babytulaprice ="";
$doonalikiprice ="";
$babyftgprice ="";
$doonas3price ="";
$rockerdenimprice ="";
$jaiecarprice ="";
$babybjornprice ="";

//mens
$mentwillprice ="";
$franklinspreadprice ="";
$franklinstripesprice ="";
$milanoroyalprice ="";
$madisonforwardprice ="";
$madisonbuttonprice ="";
$stretchpoplinprice ="";
$stretchginghamprice ="";
$brookscoolprice ="";
$brooksflexmilanoprice ="";
$brooksflexregentprice ="";
$brooksflexmadisonprice ="";

//womens
$hannesprice ="";
$hilmaprice ="";
$lyssaprice ="";
$tarrynprice = "";
$caitlinprice ="";
$anissaprice ="";
$rowenaprice ="";
$carterprice ="";
$daronaprice ="";
$andreaprice ="";
$bioncaprice ="";
$adynaprice ="";

//watches
$tissot1price ="";
$tissot2price ="";
$tissot3price ="";
$tissot4price ="";
$tissot5price ="";
$tissot6price ="";
$bezelroseprice ="";
$midicoralprice ="";
$blackroseprice ="";
$demimotherprice ="";
$wonderlandprice ="";
$ombreprice ="";

//Description Variables
//washing machines
$mentwilldesc = "";
$hilmadesc = "";
$toshiba1desc ="";

//Picture Variables
$mentwillpic ="";
$hilmapic ="";

//Database connection [WeiXiong's Database]
$conn = mysqli_connect("localhost", "X34110222", "X34110222", "X34110222");

//Error message for database if connection does not succeed
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Product name SQL Query
//washing machine
$toshiba1NameSql = 'select productName from Products where serialNumber = "1"';
$toshiba2NameSql = 'select productName from Products where serialNumber = "2"';
$toshiba3NameSql = 'select productName from Products where serialNumber = "3"';
$toshiba4NameSql = 'select productName from Products where serialNumber = "4"';
$toshiba5NameSql = 'select productName from Products where serialNumber = "5"';
$lg1NameSql = 'select productName from Products where serialNumber = "6"';
$lg2NameSql = 'select productName from Products where serialNumber = "7"';
$lg3NameSql = 'select productName from Products where serialNumber = "8"';
$lg4NameSql = 'select productName from Products where serialNumber = "9"';
$bosch1NameSql = 'select productName from Products where serialNumber = "10"';
$bosch2NameSql = 'select productName from Products where serialNumber = "11"';
$bosch3NameSql = 'select productName from Products where serialNumber = "91"';
$panasonic1NameSql = 'select productName from Products where serialNumber = "12"';
$panasonic2NameSql = 'select productName from Products where serialNumber = "13"';
$samsungwm1NameSql = 'select productName from Products where serialNumber = "14"';
$samsungwm2NameSql = 'select productName from Products where serialNumber = "15"';

//tv
$samsungtv1NameSql = 'select productName from Products where serialNumber = "16"';
$samsungtv2NameSql = 'select productName from Products where serialNumber = "17"';
$sonytv1NameSql = 'select productName from Products where serialNumber = "18"';
$sonytv2NameSql = 'select productName from Products where serialNumber = "19"';
$lgtv1NameSql = 'select productName from Products where serialNumber = "20"';
$prismtv1NameSql = 'select productName from Products where serialNumber = "21"';
$prismtv2NameSql = 'select productName from Products where serialNumber = "22"';
$xiaomitv1NameSql = 'select productName from Products where serialNumber = "23"';
$xiaomitv2NameSql = 'select productName from Products where serialNumber = "24"';
$sharptv1NameSql = 'select productName from Products where serialNumber = "25"';

//speaker
$samsungsp1NameSql = 'select productName from Products where serialNumber = "26"';
$samsungsp2NameSql = 'select productName from Products where serialNumber = "27"';
$samsungsp3NameSql = 'select productName from Products where serialNumber = "92"';
$sonysp1NameSql = 'select productName from Products where serialNumber = "28"';
$sonysp2NameSql = 'select productName from Products where serialNumber = "29"';
$sonysp3NameSql = 'select productName from Products where serialNumber = "30"';
$jblsp1NameSql = 'select productName from Products where serialNumber = "31"';
$jblsp2NameSql = 'select productName from Products where serialNumber = "32"';

//babies and toys
$dinosaurlegoNameSql = 'select productName from Products where serialNumber = "33"';
$mariolegoNameSql = 'select productName from Products where serialNumber = "34"';
$bricklegoNameSql = 'select productName from Products where serialNumber = "35"';
$gameoflifeNameSql = 'select productName from Products where serialNumber = "36"';
$monopolyNameSql = 'select productName from Products where serialNumber = "37"';
$twisterNameSql = 'select productName from Products where serialNumber = "38"';
$jengaNameSql = 'select productName from Products where serialNumber = "39"';
$connect4NameSql = 'select productName from Products where serialNumber = "40"';
$einmilkNameSql = 'select productName from Products where serialNumber = "41"';
$kendamilNameSql = 'select productName from Products where serialNumber = "42"';
$nestleNameSql = 'select productName from Products where serialNumber = "43"';
$wyethNameSql = 'select productName from Products where serialNumber = "44"';
$frisolacNameSql = 'select productName from Products where serialNumber = "45"';
$enfamilNameSql = 'select productName from Products where serialNumber = "46"';
$babyyardNameSql = 'select productName from Products where serialNumber = "47"';
$babytulaNameSql = 'select productName from Products where serialNumber = "48"';
$doonalikiNameSql = 'select productName from Products where serialNumber = "49"';
$babyftgNameSql = 'select productName from Products where serialNumber = "50"';
$doonas3NameSql = 'select productName from Products where serialNumber = "51"';
$rockerdenimNameSql = 'select productName from Products where serialNumber = "52"';
$jaiecarNameSql = 'select productName from Products where serialNumber = "53"';
$babybjornNameSql = 'select productName from Products where serialNumber = "54"';

//mens
$mentwillNameSql = 'select productName from Products where serialNumber = "55"';
$franklinspreadNameSql = 'select productName from Products where serialNumber = "56"';
$franklinstripesNameSql = 'select productName from Products where serialNumber = "57"';
$milanoroyalNameSql = 'select productName from Products where serialNumber = "58"';
$madisonforwardNameSql = 'select productName from Products where serialNumber = "59"';
$madisonbuttonNameSql = 'select productName from Products where serialNumber = "93"';
$stretchpoplinNameSql = 'select productName from Products where serialNumber = "60"';
$stretchginghamNameSql = 'select productName from Products where serialNumber = "61"';
$brookscoolNameSql = 'select productName from Products where serialNumber = "62"';
$brooksflexmilanoNameSql = 'select productName from Products where serialNumber = "63"';
$brooksflexregentNameSql = 'select productName from Products where serialNumber = "65"';
$brooksflexmadisonNameSql = 'select productName from Products where serialNumber = "66"';

//womens
$hannesNameSql = 'select productName from Products where serialNumber = "67"';
$hilmaNameSql = 'select productName from Products where serialNumber = "68"';
$lyssaNameSql = 'select productName from Products where serialNumber = "69"';
$tarrynNameSql = 'select productName from Products where serialNumber = "70"';
$caitlinNameSql = 'select productName from Products where serialNumber = "71"';
$annisaNameSql = 'select productName from Products where serialNumber = "72"';
$rowenaNameSql = 'select productName from Products where serialNumber = "73"';
$carterNameSql = 'select productName from Products where serialNumber = "74"';
$daronaNameSql = 'select productName from Products where serialNumber = "75"';
$andreaNameSql = 'select productName from Products where serialNumber = "76"';
$bioncaNameSql = 'select productName from Products where serialNumber = "77"';
$adynaNameSql = 'select productName from Products where serialNumber = "78"';

//watches
$tissot1NameSql = 'select productName from Products where serialNumber = "79"';
$tissot2NameSql = 'select productName from Products where serialNumber = "80"';
$tissot3NameSql = 'select productName from Products where serialNumber = "81"';
$tissot4NameSql = 'select productName from Products where serialNumber = "82"';
$tissot5NameSql = 'select productName from Products where serialNumber = "83"';
$tissot6NameSql = 'select productName from Products where serialNumber = "84"';
$bezelroseNameSql = 'select productName from Products where serialNumber = "85"';
$midicoralNameSql = 'select productName from Products where serialNumber = "86"';
$blackroseNameSql = 'select productName from Products where serialNumber = "87"';
$demimotherNameSql = 'select productName from Products where serialNumber = "88"';
$wonderlandNameSql = 'select productName from Products where serialNumber = "89"';
$ombreNameSql = 'select productName from Products where serialNumber = "90"';

//Product price SQL Queries
//washing machine
$toshiba1PriceSql = 'select price from Products where serialNumber = "1"';
$toshiba2PriceSql = 'select price from Products where serialNumber = "2"';
$toshiba3PriceSql = 'select price from Products where serialNumber = "3"';
$toshiba4PriceSql = 'select price from Products where serialNumber = "4"';
$toshiba5PriceSql = 'select price from Products where serialNumber = "5"';
$lg1PriceSql = 'select price from Products where serialNumber = "6"';
$lg2PriceSql = 'select price from Products where serialNumber = "7"';
$lg3PriceSql = 'select price from Products where serialNumber = "8"';
$lg4PriceSql = 'select price from Products where serialNumber = "9"';
$bosch1PriceSql = 'select price from Products where serialNumber = "10"';
$bosch2PriceSql = 'select price from Products where serialNumber = "11"';
$bosch3PriceSql = 'select price from Products where serialNumber = "91"';
$panasonic1PriceSql = 'select price from Products where serialNumber = "12"';
$panasonic2PriceSql = 'select price from Products where serialNumber = "13"';
$samsungwm1PriceSql = 'select price from Products where serialNumber = "14"';
$samsungwm2PriceSql = 'select price from Products where serialNumber = "15"';

//tv
$samsungtv1PriceSql = 'select price from Products where serialNumber = "16"';
$samsungtv2PriceSql = 'select price from Products where serialNumber = "17"';
$sonytv1PriceSql = 'select price from Products where serialNumber = "18"';
$sonytv2PriceSql = 'select price from Products where serialNumber = "19"';
$lgtv1PriceSql = 'select price from Products where serialNumber = "20"';
$prismtv1PriceSql = 'select price from Products where serialNumber = "21"';
$prismtv2PriceSql = 'select price from Products where serialNumber = "22"';
$xiaomitv1PriceSql = 'select price from Products where serialNumber = "23"';
$xiaomitv2PriceSql = 'select price from Products where serialNumber = "24"';
$sharptv1PriceSql = 'select price from Products where serialNumber = "25"';

//speaker
$samsungsp1PriceSql = 'select price from Products where serialNumber = "26"';
$samsungsp2PriceSql = 'select price from Products where serialNumber = "27"';
$samsungsp3PriceSql = 'select price from Products where serialNumber = "92"';
$sonysp1PriceSql = 'select price from Products where serialNumber = "28"';
$sonysp2PriceSql = 'select price from Products where serialNumber = "29"';
$sonysp3PriceSql = 'select price from Products where serialNumber = "30"';
$jblsp1PriceSql = 'select price from Products where serialNumber = "31"';
$jblsp2PriceSql = 'select price from Products where serialNumber = "32"';

//babies and toys
$dinosaurlegoPriceSql = 'select price from Products where serialNumber = "33"';
$mariolegoPriceSql = 'select price from Products where serialNumber = "34"';
$bricklegoPriceSql = 'select price from Products where serialNumber = "35"';
$gameoflifePriceSql = 'select price from Products where serialNumber = "36"';
$monopolyPriceSql = 'select price from Products where serialNumber = "37"';
$twisterPriceSql = 'select price from Products where serialNumber = "38"';
$jengaPriceSql = 'select price from Products where serialNumber = "39"';
$connect4PriceSql = 'select price from Products where serialNumber = "40"';
$einmilkPriceSql = 'select price from Products where serialNumber = "41"';
$kendamilPriceSql = 'select price from Products where serialNumber = "42"';
$nestlePriceSql = 'select price from Products where serialNumber = "43"';
$wyethPriceSql = 'select price from Products where serialNumber = "44"';
$frisolacPriceSql = 'select price from Products where serialNumber = "45"';
$enfamilPriceSql = 'select price from Products where serialNumber = "46"';
$babyyardPriceSql = 'select price from Products where serialNumber = "47"';
$babytulaPriceSql = 'select price from Products where serialNumber = "48"';
$doonalikiPriceSql = 'select price from Products where serialNumber = "49"';
$babyftgPriceSql = 'select price from Products where serialNumber = "50"';
$doonas3PriceSql = 'select price from Products where serialNumber = "51"';
$rockerdenimPriceSql = 'select price from Products where serialNumber = "52"';
$jaiecarPriceSql = 'select price from Products where serialNumber = "53"';
$babybjornPriceSql = 'select price from Products where serialNumber = "54"';

//mens
$mentwillPriceSql = 'select price from Products where serialNumber = "55"';
$franklinspreadPriceSql = 'select price from Products where serialNumber = "56"';
$franklinstripesPriceSql = 'select price from Products where serialNumber = "57"';
$milanoroyalPriceSql = 'select price from Products where serialNumber = "58"';
$madisonforwardPriceSql = 'select price from Products where serialNumber = "59"';
$madisonbuttonPriceSql = 'select price from Products where serialNumber = "93"';
$stretchpoplinPriceSql = 'select price from Products where serialNumber = "60"';
$stretchginghamPriceSql = 'select price from Products where serialNumber = "61"';
$brookscoolPriceSql = 'select price from Products where serialNumber = "62"';
$brooksflexmilanoPriceSql = 'select price from Products where serialNumber = "63"';
$brooksflexregentPriceSql = 'select price from Products where serialNumber = "65"';
$brooksflexmadisonPriceSql = 'select price from Products where serialNumber = "66"';

//womens
$hannesPriceSql = 'select price from Products where serialNumber = "67"';
$hilmaPriceSql = 'select price from Products where serialNumber = "68"';
$lyssaPriceSql = 'select price from Products where serialNumber = "69"';
$tarrynPriceSql = 'select price from Products where serialNumber = "70"';
$caitlinPriceSql = 'select price from Products where serialNumber = "71"';
$annisaPriceSql = 'select price from Products where serialNumber = "72"';
$rowenaPriceSql = 'select price from Products where serialNumber = "73"';
$carterPriceSql = 'select price from Products where serialNumber = "74"';
$daronaPriceSql = 'select price from Products where serialNumber = "75"';
$andreaPriceSql = 'select price from Products where serialNumber = "76"';
$bioncaPriceSql = 'select price from Products where serialNumber = "77"';
$adynaPriceSql = 'select price from Products where serialNumber = "78"';

//watches
$tissot1PriceSql = 'select price from Products where serialNumber = "79"';
$tissot2PriceSql = 'select price from Products where serialNumber = "80"';
$tissot3PriceSql = 'select price from Products where serialNumber = "81"';
$tissot4PriceSql = 'select price from Products where serialNumber = "82"';
$tissot5PriceSql = 'select price from Products where serialNumber = "83"';
$tissot6PriceSql = 'select price from Products where serialNumber = "84"';
$bezelrosePriceSql = 'select price from Products where serialNumber = "85"';
$midicoralPriceSql = 'select price from Products where serialNumber = "86"';
$blackrosePriceSql = 'select price from Products where serialNumber = "87"';
$demimotherPriceSql = 'select price from Products where serialNumber = "88"';
$wonderlandPriceSql = 'select price from Products where serialNumber = "89"';
$ombrePriceSql = 'select price from Products where serialNumber = "90"';

//Product Description SQL Queries
$mentwillDescSql = 'select description from Products where serialNumber = "55"';
$hilmaDescSql = 'select description from Products where serialNumber = "68"';
$toshiba1DescSql = 'select description from Products where serialNumber = "1"';

//Product picture SQL Queries
$mentwillPicSql = 'select pictures from Products where serialNumber = "55"';
$hilmaPicSql = 'select pictures from Products where serialNumber = "68"';

//Database Retrieved from queries [Description]
$mentwillDesc = mysqli_query($conn, $mentwillDescSql) or trigger_error("Query Failed! SQL: $mentwillDescSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$hilmaDesc = mysqli_query($conn, $hilmaDescSql ) or trigger_error("Query Failed! SQL: $hilmaDescSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$toshiba1Desc = mysqli_query($conn, $toshiba1DescSql ) or trigger_error("Query Failed! SQL: $toshiba1DescSql - Error: ".mysqli_error($conn), E_USER_ERROR);

//Database Retrieved from queries [Picture]
$mentwillPic = mysqli_query($conn, $mentwillPicSql) or trigger_error("Query Failed! SQL: $mentwillPicSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$hilmaPic = mysqli_query($conn, $hilmaPicSql ) or trigger_error("Query Failed! SQL: $hilmaPicSql - Error: ".mysqli_error($conn), E_USER_ERROR);

//Database Retrieved from queries [Name]
//washing machine
$toshiba1Name = mysqli_query($conn, $toshiba1NameSql) or trigger_error("Query Failed! SQL: $toshiba1NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$toshiba2Name = mysqli_query($conn, $toshiba2NameSql) or trigger_error("Query Failed! SQL: $toshiba2NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$toshiba3Name = mysqli_query($conn, $toshiba3NameSql ) or trigger_error("Query Failed! SQL: $toshiba3NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$toshiba4Name = mysqli_query($conn, $toshiba4NameSql ) or trigger_error("Query Failed! SQL: $toshiba4NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$toshiba5Name = mysqli_query($conn, $toshiba5NameSql ) or trigger_error("Query Failed! SQL: $toshiba5NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$lg1Name = mysqli_query($conn, $lg1NameSql ) or trigger_error("Query Failed! SQL: $lg1NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$lg2Name = mysqli_query($conn, $lg2NameSql ) or trigger_error("Query Failed! SQL: $lg2NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$lg3Name = mysqli_query($conn, $lg3NameSql ) or trigger_error("Query Failed! SQL: $lg3NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$lg4Name = mysqli_query($conn, $lg4NameSql ) or trigger_error("Query Failed! SQL: $lg4NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$bosch1Name = mysqli_query($conn, $bosch1NameSql ) or trigger_error("Query Failed! SQL: $bosch1NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$bosch2Name = mysqli_query($conn, $bosch2NameSql ) or trigger_error("Query Failed! SQL: $bosch2NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$bosch3Name = mysqli_query($conn, $bosch3NameSql ) or trigger_error("Query Failed! SQL: $bosch3NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$panasonic1Name = mysqli_query($conn, $panasonic1NameSql ) or trigger_error("Query Failed! SQL: $panasonic1NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$panasonic2Name = mysqli_query($conn, $panasonic2NameSql ) or trigger_error("Query Failed! SQL: $panasonic2NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$samsungwm1Name = mysqli_query($conn, $samsungwm1NameSql ) or trigger_error("Query Failed! SQL: $samsungwm1NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$samsungwm2Name = mysqli_query($conn, $samsungwm2NameSql ) or trigger_error("Query Failed! SQL: $samsungwm2NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);

//tv
$samsungtv1Name = mysqli_query($conn, $samsungtv1NameSql ) or trigger_error("Query Failed! SQL: $samsungtv1NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$samsungtv2Name = mysqli_query($conn, $samsungtv2NameSql ) or trigger_error("Query Failed! SQL: $samsungtv2NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$sonytv1Name = mysqli_query($conn, $sonytv1NameSql ) or trigger_error("Query Failed! SQL: $sonytv1NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$sonytv2Name = mysqli_query($conn, $sonytv2NameSql ) or trigger_error("Query Failed! SQL: $sonytv2NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$lgtv1Name = mysqli_query($conn, $lgtv1NameSql ) or trigger_error("Query Failed! SQL: $lgtv1NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$prismtv1Name = mysqli_query($conn, $prismtv1NameSql ) or trigger_error("Query Failed! SQL: $prismtv1NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$prismtv2Name = mysqli_query($conn, $prismtv2NameSql ) or trigger_error("Query Failed! SQL: $prismtv2NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$xiaomitv1Name = mysqli_query($conn, $xiaomitv1NameSql ) or trigger_error("Query Failed! SQL: $xiaomitv1NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$xiaomitv2Name = mysqli_query($conn, $xiaomitv2NameSql ) or trigger_error("Query Failed! SQL: $xiaomitv2NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$sharptv1Name = mysqli_query($conn, $sharptv1NameSql ) or trigger_error("Query Failed! SQL: $sharptv1NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);

//speaker
$samsungsp1Name = mysqli_query($conn, $samsungsp1NameSql ) or trigger_error("Query Failed! SQL: $samsungsp1NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$samsungsp2Name = mysqli_query($conn, $samsungsp2NameSql ) or trigger_error("Query Failed! SQL: $samsungsp2NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$samsungsp3Name = mysqli_query($conn, $samsungsp3NameSql ) or trigger_error("Query Failed! SQL: $samsungsp3NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$sonysp1Name = mysqli_query($conn, $sonysp1NameSql ) or trigger_error("Query Failed! SQL: $sonysp1NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$sonysp2Name = mysqli_query($conn, $sonysp2NameSql ) or trigger_error("Query Failed! SQL: $sonysp2NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$sonysp3Name = mysqli_query($conn, $sonysp3NameSql ) or trigger_error("Query Failed! SQL: $sonysp3NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$jblsp1Name = mysqli_query($conn, $jblsp1NameSql ) or trigger_error("Query Failed! SQL: $jblsp1NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$jblsp2Name = mysqli_query($conn, $jblsp2NameSql ) or trigger_error("Query Failed! SQL: $jblsp2NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);

//babies and toys
$dinosaurlegoName = mysqli_query($conn, $dinosaurlegoNameSql ) or trigger_error("Query Failed! SQL: $dinosaurlegoNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$mariolegoName = mysqli_query($conn, $mariolegoNameSql ) or trigger_error("Query Failed! SQL: $mariolegoNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$bricklegoName = mysqli_query($conn, $bricklegoNameSql ) or trigger_error("Query Failed! SQL: $bricklegoNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$gameoflifeName = mysqli_query($conn, $gameoflifeNameSql ) or trigger_error("Query Failed! SQL: $gameoflifeNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$monopolyName = mysqli_query($conn, $monopolyNameSql ) or trigger_error("Query Failed! SQL: $monopolyNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$twisterName = mysqli_query($conn, $twisterNameSql ) or trigger_error("Query Failed! SQL: $twisterNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$jengaName = mysqli_query($conn, $jengaNameSql ) or trigger_error("Query Failed! SQL: $jengaNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$connect4Name = mysqli_query($conn, $connect4NameSql ) or trigger_error("Query Failed! SQL: $connect4NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$einmilkName = mysqli_query($conn, $einmilkNameSql ) or trigger_error("Query Failed! SQL: $einmilkNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$kendamilName = mysqli_query($conn, $kendamilNameSql ) or trigger_error("Query Failed! SQL: $kendamilNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$nestleName = mysqli_query($conn, $nestleNameSql ) or trigger_error("Query Failed! SQL: $nestleNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$wyethName = mysqli_query($conn, $wyethNameSql ) or trigger_error("Query Failed! SQL: $wyethNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$frisolacName = mysqli_query($conn, $frisolacNameSql ) or trigger_error("Query Failed! SQL: $frisolacNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$enfamilName = mysqli_query($conn, $enfamilNameSql ) or trigger_error("Query Failed! SQL: $enfamilNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$babyyardName = mysqli_query($conn, $babyyardNameSql ) or trigger_error("Query Failed! SQL: $babyyardNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$babytulaName = mysqli_query($conn, $babytulaNameSql ) or trigger_error("Query Failed! SQL: $babytulaNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$doonalikiName = mysqli_query($conn, $doonalikiNameSql ) or trigger_error("Query Failed! SQL: $doonalikiNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$babyftgName = mysqli_query($conn, $babyftgNameSql ) or trigger_error("Query Failed! SQL: $babyftgNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$doonas3Name = mysqli_query($conn, $doonas3NameSql ) or trigger_error("Query Failed! SQL: $doonas3NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$rockerdenimName = mysqli_query($conn, $rockerdenimNameSql ) or trigger_error("Query Failed! SQL: $rockerdenimNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$jaiecarName = mysqli_query($conn, $jaiecarNameSql ) or trigger_error("Query Failed! SQL: $jaiecarNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$babybjornName = mysqli_query($conn, $babybjornNameSql ) or trigger_error("Query Failed! SQL: $babybjornNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);

//mens
$mentwillName = mysqli_query($conn, $mentwillNameSql ) or trigger_error("Query Failed! SQL: $mentwillNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$franklinspreadName = mysqli_query($conn, $franklinspreadNameSql ) or trigger_error("Query Failed! SQL: $franklinspreadNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$franklinstripesName = mysqli_query($conn, $franklinstripesNameSql ) or trigger_error("Query Failed! SQL: $franklinstripesNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$milanoroyalName = mysqli_query($conn, $milanoroyalNameSql ) or trigger_error("Query Failed! SQL: $milanoroyalNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$madisonforwardName = mysqli_query($conn, $madisonforwardNameSql ) or trigger_error("Query Failed! SQL: $madisonforwardNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$madisonbuttonName = mysqli_query($conn, $madisonbuttonNameSql ) or trigger_error("Query Failed! SQL: $madisonbuttonNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$stretchpoplinName = mysqli_query($conn, $stretchpoplinNameSql ) or trigger_error("Query Failed! SQL: $stretchpoplinNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$stretchginghamName = mysqli_query($conn, $stretchginghamNameSql ) or trigger_error("Query Failed! SQL: $stretchginghamNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$brookscoolName = mysqli_query($conn, $brookscoolNameSql ) or trigger_error("Query Failed! SQL: $brookscoolNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$brooksflexmilanoName = mysqli_query($conn, $brooksflexmilanoNameSql ) or trigger_error("Query Failed! SQL: $brooksflexmilanoNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$brooksflexregentName = mysqli_query($conn, $brooksflexregentNameSql ) or trigger_error("Query Failed! SQL: $brooksflexregentNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$brooksflexmadisonName = mysqli_query($conn, $brooksflexmadisonNameSql ) or trigger_error("Query Failed! SQL: $brooksflexmadisonNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);

//womens
$hannesName = mysqli_query($conn, $hannesNameSql) or trigger_error("Query Failed! SQL: $hannesNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$hilmaName = mysqli_query($conn, $hilmaNameSql) or trigger_error("Query Failed! SQL: $hilmaNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$lyssaName = mysqli_query($conn, $lyssaNameSql) or trigger_error("Query Failed! SQL: $lyssaNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$tarrynName = mysqli_query($conn, $tarrynNameSql) or trigger_error("Query Failed! SQL: $tarrynNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$caitlinName = mysqli_query($conn, $caitlinNameSql) or trigger_error("Query Failed! SQL: $caitlinNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$annisaName = mysqli_query($conn, $annisaNameSql) or trigger_error("Query Failed! SQL: $annisaNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$rowenaName = mysqli_query($conn, $rowenaNameSql) or trigger_error("Query Failed! SQL: $rowenaNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$carterName = mysqli_query($conn, $carterNameSql) or trigger_error("Query Failed! SQL: $carterNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$daronaName = mysqli_query($conn, $daronaNameSql) or trigger_error("Query Failed! SQL: $daronaNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$andreaName = mysqli_query($conn, $andreaNameSql) or trigger_error("Query Failed! SQL: $andreaNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$bioncaName = mysqli_query($conn, $bioncaNameSql) or trigger_error("Query Failed! SQL: $bioncaNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$adynaName = mysqli_query($conn, $adynaNameSql) or trigger_error("Query Failed! SQL: $adynaNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);

//watches
$tissot1Name = mysqli_query($conn, $tissot1NameSql ) or trigger_error("Query Failed! SQL: $tissot1NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$tissot2Name = mysqli_query($conn, $tissot2NameSql ) or trigger_error("Query Failed! SQL: $tissot2NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$tissot3Name = mysqli_query($conn, $tissot3NameSql ) or trigger_error("Query Failed! SQL: $tissot3NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$tissot4Name = mysqli_query($conn, $tissot4NameSql ) or trigger_error("Query Failed! SQL: $tissot4NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$tissot5Name = mysqli_query($conn, $tissot5NameSql ) or trigger_error("Query Failed! SQL: $tissot5NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$tissot6Name = mysqli_query($conn, $tissot6NameSql ) or trigger_error("Query Failed! SQL: $tissot6NameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$bezelroseName = mysqli_query($conn, $bezelroseNameSql ) or trigger_error("Query Failed! SQL: $bezelroseNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$midicoralName = mysqli_query($conn, $midicoralNameSql ) or trigger_error("Query Failed! SQL: $midicoralNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$blackroseName = mysqli_query($conn, $blackroseNameSql ) or trigger_error("Query Failed! SQL: $blackroseNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$demimotherName = mysqli_query($conn, $demimotherNameSql ) or trigger_error("Query Failed! SQL: $demimotherNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$wonderlandName = mysqli_query($conn, $wonderlandNameSql ) or trigger_error("Query Failed! SQL: $wonderlandNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$ombreName = mysqli_query($conn, $ombreNameSql ) or trigger_error("Query Failed! SQL: $ombreNameSql - Error: ".mysqli_error($conn), E_USER_ERROR);

//Database retrieved from queries [Price]
//washing machines
$toshiba1Price = mysqli_query($conn, $toshiba1PriceSql) or trigger_error("Query Failed! SQL: $toshiba1PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$toshiba2Price = mysqli_query($conn, $toshiba2PriceSql ) or trigger_error("Query Failed! SQL: $toshiba2PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$toshiba3Price = mysqli_query($conn, $toshiba3PriceSql ) or trigger_error("Query Failed! SQL: $toshiba3PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$toshiba4Price = mysqli_query($conn, $toshiba3PriceSql ) or trigger_error("Query Failed! SQL: $toshiba4PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$toshiba5Price = mysqli_query($conn, $toshiba3PriceSql ) or trigger_error("Query Failed! SQL: $toshiba5PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$lg1Price = mysqli_query($conn, $lg1PriceSql) or trigger_error("Query Failed! SQL: $lg1PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$lg2Price = mysqli_query($conn, $lg2PriceSql) or trigger_error("Query Failed! SQL: $lg2PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$lg3Price = mysqli_query($conn, $lg3PriceSql) or trigger_error("Query Failed! SQL: $lg3PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$lg4Price = mysqli_query($conn, $lg4PriceSql) or trigger_error("Query Failed! SQL: $lg4PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$bosch1Price = mysqli_query($conn, $bosch1PriceSql ) or trigger_error("Query Failed! SQL: $bosch1PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$bosch2Price = mysqli_query($conn, $bosch2PriceSql ) or trigger_error("Query Failed! SQL: $bosch2PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$bosch3Price = mysqli_query($conn, $bosch3PriceSql ) or trigger_error("Query Failed! SQL: $bosch3PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$panasonic1Price = mysqli_query($conn, $panasonic1PriceSql ) or trigger_error("Query Failed! SQL: $panasonic1PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$panasonic2Price = mysqli_query($conn, $panasonic1PriceSql ) or trigger_error("Query Failed! SQL: $panasonic2PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$samsungwm1Price = mysqli_query($conn, $samsungwm1PriceSql ) or trigger_error("Query Failed! SQL: $samsungwm1PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$samsungwm2Price = mysqli_query($conn, $samsungwm2PriceSql ) or trigger_error("Query Failed! SQL: $samsungwm2PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);

//TV
$samsungtv1Price = mysqli_query($conn, $samsungtv1PriceSql ) or trigger_error("Query Failed! SQL: $samsungtv1PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$samsungtv2Price = mysqli_query($conn, $samsungtv2PriceSql ) or trigger_error("Query Failed! SQL: $samsungtv2PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$sonytv1Price = mysqli_query($conn, $sonytv1PriceSql ) or trigger_error("Query Failed! SQL: $sonytv1PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$sonytv2Price = mysqli_query($conn, $sonytv2PriceSql ) or trigger_error("Query Failed! SQL: $sonytv2PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$lgtv1Price = mysqli_query($conn, $lgtv1PriceSql ) or trigger_error("Query Failed! SQL: $lgtv1PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$prismtv1Price = mysqli_query($conn, $prismtv1PriceSql ) or trigger_error("Query Failed! SQL: $prismtv1PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$prismtv2Price = mysqli_query($conn, $prismtv2PriceSql ) or trigger_error("Query Failed! SQL: $prismtv2PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$xiaomitv1Price = mysqli_query($conn, $xiaomitv1PriceSql ) or trigger_error("Query Failed! SQL: $xiaomitv1PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$xiaomitv2Price = mysqli_query($conn, $xiaomitv2PriceSql ) or trigger_error("Query Failed! SQL: $xiaomitv2PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$sharptv1Price = mysqli_query($conn, $sharptv1PriceSql ) or trigger_error("Query Failed! SQL: $sharptv1PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$samsungsp1Price = mysqli_query($conn, $samsungsp1PriceSql ) or trigger_error("Query Failed! SQL: $samsungsp1PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$samsungsp2Price = mysqli_query($conn, $samsungsp2PriceSql ) or trigger_error("Query Failed! SQL: $samsungsp2PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$samsungsp3Price = mysqli_query($conn, $samsungsp3PriceSql ) or trigger_error("Query Failed! SQL: $samsungsp3PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$sonysp1Price = mysqli_query($conn, $sonysp1PriceSql ) or trigger_error("Query Failed! SQL: $sonysp1PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$sonysp2Price = mysqli_query($conn, $sonysp2PriceSql ) or trigger_error("Query Failed! SQL: $sonysp2PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$sonysp3Price = mysqli_query($conn, $sonysp3PriceSql ) or trigger_error("Query Failed! SQL: $sonysp3PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$jblsp1Price = mysqli_query($conn, $jblsp1PriceSql ) or trigger_error("Query Failed! SQL: $jblsp1PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$jblsp2Price = mysqli_query($conn, $jblsp2PriceSql ) or trigger_error("Query Failed! SQL: $jblsp2PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);

//babies and toys
$dinosaurlegoPrice = mysqli_query($conn, $dinosaurlegoPriceSql ) or trigger_error("Query Failed! SQL: $dinosaurlegoPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$mariolegoPrice = mysqli_query($conn, $mariolegoPriceSql ) or trigger_error("Query Failed! SQL: $mariolegoPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$bricklegoPrice = mysqli_query($conn, $bricklegoPriceSql ) or trigger_error("Query Failed! SQL: $bricklegoPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$gameoflifePrice = mysqli_query($conn, $gameoflifePriceSql ) or trigger_error("Query Failed! SQL: $gameoflifePriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$monopolyPrice = mysqli_query($conn, $monopolyPriceSql ) or trigger_error("Query Failed! SQL: $monopolyPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$twisterPrice = mysqli_query($conn, $twisterPriceSql ) or trigger_error("Query Failed! SQL: $twisterPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$jengaPrice = mysqli_query($conn, $jengaPriceSql ) or trigger_error("Query Failed! SQL: $jengaPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$connect4Price = mysqli_query($conn, $connect4PriceSql ) or trigger_error("Query Failed! SQL: $connect4PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$einmilkPrice = mysqli_query($conn, $einmilkPriceSql ) or trigger_error("Query Failed! SQL: $einmilkPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$kendamilPrice = mysqli_query($conn, $kendamilPriceSql ) or trigger_error("Query Failed! SQL: $kendamilPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$nestlePrice = mysqli_query($conn, $nestlePriceSql ) or trigger_error("Query Failed! SQL: $nestlePriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$wyethPrice = mysqli_query($conn, $wyethPriceSql ) or trigger_error("Query Failed! SQL: $wyethPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$frisolacPrice = mysqli_query($conn, $frisolacPriceSql ) or trigger_error("Query Failed! SQL: $frisolacPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$enfamilPrice = mysqli_query($conn, $enfamilPriceSql ) or trigger_error("Query Failed! SQL: $enfamilPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$babyyardPrice = mysqli_query($conn, $babyyardPriceSql ) or trigger_error("Query Failed! SQL: $babyyardPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$babytulaPrice = mysqli_query($conn, $babytulaPriceSql ) or trigger_error("Query Failed! SQL: $babytulaPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$doonalikiPrice = mysqli_query($conn, $doonalikiPriceSql ) or trigger_error("Query Failed! SQL: $doonalikiPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$babyftgPrice = mysqli_query($conn, $babyftgPriceSql ) or trigger_error("Query Failed! SQL: $babyftgPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$doonas3Price = mysqli_query($conn, $doonas3PriceSql ) or trigger_error("Query Failed! SQL: $doonas3PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$rockerdenimPrice = mysqli_query($conn, $rockerdenimPriceSql ) or trigger_error("Query Failed! SQL: $rockerdenimPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$jaiecarPrice = mysqli_query($conn, $jaiecarPriceSql ) or trigger_error("Query Failed! SQL: $jaiecarPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$babybjornPrice = mysqli_query($conn, $babybjornPriceSql ) or trigger_error("Query Failed! SQL: $babybjornPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);

//mens
$mentwillPrice = mysqli_query($conn, $mentwillPriceSql ) or trigger_error("Query Failed! SQL: $mentwillPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$franklinspreadPrice = mysqli_query($conn, $franklinspreadPriceSql ) or trigger_error("Query Failed! SQL: $franklinspreadPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$franklinstripesPrice = mysqli_query($conn, $franklinstripesPriceSql ) or trigger_error("Query Failed! SQL: $franklinstripesPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$milanoroyalPrice = mysqli_query($conn, $milanoroyalPriceSql ) or trigger_error("Query Failed! SQL: $milanoroyalPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$madisonforwardPrice = mysqli_query($conn, $madisonforwardPriceSql ) or trigger_error("Query Failed! SQL: $madisonforwardPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$madisonbuttonPrice = mysqli_query($conn, $madisonbuttonPriceSql ) or trigger_error("Query Failed! SQL: $madisonbuttonPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$stretchpoplinPrice = mysqli_query($conn, $stretchpoplinPriceSql ) or trigger_error("Query Failed! SQL: $stretchpoplinPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$stretchginghamPrice = mysqli_query($conn, $stretchginghamPriceSql ) or trigger_error("Query Failed! SQL: $stretchginghamPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$brookscoolPrice = mysqli_query($conn, $brookscoolPriceSql ) or trigger_error("Query Failed! SQL: $brookscoolPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$brooksflexmilanoPrice = mysqli_query($conn, $brooksflexmilanoPriceSql ) or trigger_error("Query Failed! SQL: $brooksflexmilanoPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$brooksflexregentPrice = mysqli_query($conn, $brooksflexregentPriceSql ) or trigger_error("Query Failed! SQL: $brooksflexregentPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$brooksflexmadisonPrice = mysqli_query($conn, $brooksflexmadisonPriceSql ) or trigger_error("Query Failed! SQL: $brooksflexmadisonPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);

//womens
$hannesPrice = mysqli_query($conn, $hannesPriceSql) or trigger_error("Query Failed! SQL: $hannesPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$hilmaPrice = mysqli_query($conn, $hilmaPriceSql) or trigger_error("Query Failed! SQL: $hilmaPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$lyssaPrice = mysqli_query($conn, $lyssaPriceSql) or trigger_error("Query Failed! SQL: $lyssaPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$tarrynPrice = mysqli_query($conn, $tarrynPriceSql) or trigger_error("Query Failed! SQL: $tarrynPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$caitlinPrice = mysqli_query($conn, $caitlinPriceSql) or trigger_error("Query Failed! SQL: $caitlinPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$annisaPrice = mysqli_query($conn, $annisaPriceSql) or trigger_error("Query Failed! SQL: $annisaPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$rowenaPrice = mysqli_query($conn, $rowenaPriceSql) or trigger_error("Query Failed! SQL: $rowenaPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$carterPrice = mysqli_query($conn, $carterPriceSql) or trigger_error("Query Failed! SQL: $carterPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$daronaPrice = mysqli_query($conn, $daronaPriceSql) or trigger_error("Query Failed! SQL: $daronaPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$andreaPrice = mysqli_query($conn, $andreaPriceSql) or trigger_error("Query Failed! SQL: $andreaPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$bioncaPrice = mysqli_query($conn, $bioncaPriceSql) or trigger_error("Query Failed! SQL: $bioncaPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$adynaPrice = mysqli_query($conn, $adynaPriceSql) or trigger_error("Query Failed! SQL: $adynaPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);

//watches
$tissot1Price = mysqli_query($conn, $tissot1PriceSql ) or trigger_error("Query Failed! SQL: $tissot1PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$tissot2Price = mysqli_query($conn, $tissot2PriceSql ) or trigger_error("Query Failed! SQL: $tissot2PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$tissot3Price = mysqli_query($conn, $tissot3PriceSql ) or trigger_error("Query Failed! SQL: $tissot3PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$tissot4Price = mysqli_query($conn, $tissot4PriceSql ) or trigger_error("Query Failed! SQL: $tissot4PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$tissot5Price = mysqli_query($conn, $tissot5PriceSql ) or trigger_error("Query Failed! SQL: $tissot5PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$tissot6Price = mysqli_query($conn, $tissot6PriceSql ) or trigger_error("Query Failed! SQL: $tissot6PriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$bezelrosePrice = mysqli_query($conn, $bezelrosePriceSql ) or trigger_error("Query Failed! SQL: $bezelrosePriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$midicoralPrice = mysqli_query($conn, $midicoralPriceSql ) or trigger_error("Query Failed! SQL: $midicoralPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$blackrosePrice = mysqli_query($conn, $blackrosePriceSql ) or trigger_error("Query Failed! SQL: $blackrosePriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$demimotherPrice = mysqli_query($conn, $demimotherPriceSql ) or trigger_error("Query Failed! SQL: $demimotherPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$wonderlandPrice = mysqli_query($conn, $wonderlandPriceSql ) or trigger_error("Query Failed! SQL: $wonderlandPriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);
$ombrePrice = mysqli_query($conn, $ombrePriceSql ) or trigger_error("Query Failed! SQL: $ombrePriceSql - Error: ".mysqli_error($conn), E_USER_ERROR);

//Database connection close
mysqli_close($conn);

//Variables defined and $[variable] fetch specific row from 'X34110222' Database [Name]
//washing machine
$toshiba1name = $toshiba1Name ->fetch_array()['productName'];
$toshiba2name = $toshiba2Name ->fetch_array()['productName'];
$toshiba3name = $toshiba3Name ->fetch_array()['productName'];
$toshiba4name = $toshiba4Name ->fetch_array()['productName'];
$toshiba5name = $toshiba5Name ->fetch_array()['productName'];
$lg1name = $lg1Name ->fetch_array()['productName'];
$lg2name = $lg2Name ->fetch_array()['productName'];
$lg3name = $lg3Name ->fetch_array()['productName'];
$lg4name = $lg4Name ->fetch_array()['productName'];
$bosch1name = $bosch1Name ->fetch_array()['productName'];
$bosch2name = $bosch2Name ->fetch_array()['productName'];
$bosch3name = $bosch3Name ->fetch_array()['productName'];
$panasonic1name = $panasonic1Name ->fetch_array()['productName'];
$panasonic2name = $panasonic2Name ->fetch_array()['productName'];
$samsungwm1name = $samsungwm1Name ->fetch_array()['productName'];
$samsungwm2name = $samsungwm2Name ->fetch_array()['productName'];

//TV
$samsungtv1name = $samsungtv1Name ->fetch_array()['productName'];
$samsungtv2name = $samsungtv2Name ->fetch_array()['productName'];
$sonytv1name = $sonytv1Name ->fetch_array()['productName'];
$sonytv2name = $sonytv2Name ->fetch_array()['productName'];
$lgtv1name = $lgtv1Name ->fetch_array()['productName'];
$prismtv1name = $prismtv1Name ->fetch_array()['productName'];
$prismtv2name = $prismtv2Name ->fetch_array()['productName'];
$xiaomitv1name = $xiaomitv1Name ->fetch_array()['productName'];
$xiaomitv2name = $xiaomitv2Name ->fetch_array()['productName'];
$sharptv1name = $sharptv1Name ->fetch_array()['productName'];

//Speaker
$samsungsp1name = $samsungsp1Name ->fetch_array()['productName'];
$samsungsp2name = $samsungsp2Name ->fetch_array()['productName'];
$samsungsp3name = $samsungsp3Name ->fetch_array()['productName'];
$sonysp1name = $sonysp1Name ->fetch_array()['productName'];
$sonysp2name = $sonysp2Name ->fetch_array()['productName'];
$sonysp3name = $sonysp3Name ->fetch_array()['productName'];
$jblsp1name = $jblsp1Name ->fetch_array()['productName'];
$jblsp2name = $jblsp2Name ->fetch_array()['productName'];

//babies and toys
$dinosaurlegoname = $dinosaurlegoName ->fetch_array()['productName'];
$mariolegoname = $mariolegoName ->fetch_array()['productName'];
$bricklegoname = $bricklegoName ->fetch_array()['productName'];
$gameoflifename = $gameoflifeName ->fetch_array()['productName'];
$monopolyname = $monopolyName ->fetch_array()['productName'];
$twistername = $twisterName ->fetch_array()['productName'];
$jenganame = $jengaName ->fetch_array()['productName'];
$connect4name = $connect4Name ->fetch_array()['productName'];
$einmilkname = $einmilkName ->fetch_array()['productName'];
$kendamilname = $kendamilName ->fetch_array()['productName'];
$nestlename = $nestleName ->fetch_array()['productName'];
$wyethname = $wyethName ->fetch_array()['productName'];
$frisolacname = $frisolacName ->fetch_array()['productName'];
$enfamilname = $enfamilName ->fetch_array()['productName'];
$babyyardname = $babyyardName ->fetch_array()['productName'];
$babytulaname = $babytulaName ->fetch_array()['productName'];
$doonalikiname = $doonalikiName ->fetch_array()['productName'];
$babyftgname = $babyftgName ->fetch_array()['productName'];
$doonas3name = $doonas3Name ->fetch_array()['productName'];
$rockerdenimname = $rockerdenimName ->fetch_array()['productName'];
$jaiecarname = $jaiecarName ->fetch_array()['productName'];
$babybjornname = $babybjornName ->fetch_array()['productName'];

//mens
$mentwillname = $mentwillName ->fetch_array()['productName'];
$franklinspreadname = $franklinspreadName ->fetch_array()['productName'];
$franklinstripesname = $franklinstripesName ->fetch_array()['productName'];
$milanoroyalname = $milanoroyalName ->fetch_array()['productName'];
$madisonforwardname = $madisonforwardName ->fetch_array()['productName'];
$madisonbuttonname = $madisonbuttonName ->fetch_array()['productName'];
$stretchpoplinname = $stretchpoplinName ->fetch_array()['productName'];
$stretchginghamname = $stretchginghamName ->fetch_array()['productName'];
$brookscoolname = $brookscoolName ->fetch_array()['productName'];
$brooksflexmilanoname = $brooksflexmilanoName ->fetch_array()['productName'];
$brooksflexregentname = $brooksflexregentName ->fetch_array()['productName'];
$brooksflexmadisonname = $brooksflexmadisonName ->fetch_array()['productName'];

//womens
$hannesname = $hannesName ->fetch_array()['productName'];
$hilmaname = $hilmaName ->fetch_array()['productName'];
$lyssaname = $lyssaName ->fetch_array()['productName'];
$tarrynname = $tarrynName ->fetch_array()['productName'];
$caitlinname = $caitlinName ->fetch_array()['productName'];
$annisaname = $annisaName ->fetch_array()['productName'];
$rowenaname = $rowenaName ->fetch_array()['productName'];
$cartername = $carterName ->fetch_array()['productName'];
$daronaname = $daronaName ->fetch_array()['productName'];
$andreaname = $andreaName ->fetch_array()['productName'];
$bioncaname = $bioncaName ->fetch_array()['productName'];
$adynaname = $adynaName ->fetch_array()['productName'];

//watches
$tissot1name = $tissot1Name ->fetch_array()['productName'];
$tissot2name = $tissot2Name ->fetch_array()['productName'];
$tissot3name = $tissot3Name ->fetch_array()['productName'];
$tissot4name = $tissot4Name ->fetch_array()['productName'];
$tissot5name = $tissot5Name ->fetch_array()['productName'];
$tissot6name = $tissot6Name ->fetch_array()['productName'];
$bezelrosename = $bezelroseName ->fetch_array()['productName'];
$midicoralname = $midicoralName ->fetch_array()['productName'];
$blackrosename = $blackroseName ->fetch_array()['productName'];
$demimothername = $demimotherName ->fetch_array()['productName'];
$wonderlandname = $wonderlandName ->fetch_array()['productName'];
$ombrename = $ombreName ->fetch_array()['productName'];

//Variables defined and $[variable] fetch specific row from 'X34110222' Database [Price]
//washingmachines
$toshiba1price = $toshiba1Price ->fetch_array()['price'];
$toshiba2price = $toshiba2Price ->fetch_array()['price'];
$toshiba3price = $toshiba3Price ->fetch_array()['price'];
$toshiba4price = $toshiba4Price ->fetch_array()['price'];
$toshiba5price = $toshiba5Price ->fetch_array()['price'];
$lg1price = $lg1Price ->fetch_array()['price'];
$lg2price = $lg2Price ->fetch_array()['price'];
$lg3price = $lg3Price ->fetch_array()['price'];
$lg4price = $lg4Price ->fetch_array()['price'];
$bosch1price = $bosch1Price ->fetch_array()['price'];
$bosch2price = $bosch2Price ->fetch_array()['price'];
$bosch3price = $bosch3Price ->fetch_array()['price'];
$panasonic1price = $panasonic1Price ->fetch_array()['price'];
$panasonic2price = $panasonic2Price ->fetch_array()['price'];
$samsungwm1price = $samsungwm1Price ->fetch_array()['price'];
$samsungwm2price = $samsungwm2Price ->fetch_array()['price'];

//TV
$samsungtv1price = $samsungtv1Price ->fetch_array()['price'];
$samsungtv2price = $samsungtv2Price ->fetch_array()['price'];
$sonytv1price = $sonytv1Price ->fetch_array()['price'];
$sonytv2price = $sonytv2Price ->fetch_array()['price'];
$lgtv1price = $lgtv1Price ->fetch_array()['price'];
$prismtv1price = $prismtv1Price ->fetch_array()['price'];
$prismtv2price = $prismtv2Price ->fetch_array()['price'];
$xiaomitv1price = $xiaomitv1Price ->fetch_array()['price'];
$xiaomitv2price = $xiaomitv2Price ->fetch_array()['price'];
$sharptv1price = $sharptv1Price ->fetch_array()['price'];

//speaker
$samsungsp1price = $samsungsp1Price ->fetch_array()['price'];
$samsungsp2price = $samsungsp2Price ->fetch_array()['price'];
$samsungsp3price = $samsungsp3Price ->fetch_array()['price'];
$sonysp1price = $sonysp1Price ->fetch_array()['price'];
$sonysp2price = $sonysp2Price ->fetch_array()['price'];
$sonysp3price = $sonysp3Price ->fetch_array()['price'];
$jblsp1price = $jblsp1Price ->fetch_array()['price'];
$jblsp2price = $jblsp2Price ->fetch_array()['price'];

//babies and toys
$dinosaurlegoprice = $dinosaurlegoPrice ->fetch_array()['price'];
$mariolegoprice = $mariolegoPrice ->fetch_array()['price'];
$bricklegoprice = $bricklegoPrice ->fetch_array()['price'];
$gameoflifeprice = $gameoflifePrice ->fetch_array()['price'];
$monopolyprice = $monopolyPrice ->fetch_array()['price'];
$twisterprice = $twisterPrice ->fetch_array()['price'];
$jengaprice = $jengaPrice ->fetch_array()['price'];
$connect4price = $connect4Price ->fetch_array()['price'];
$einmilkprice = $einmilkPrice ->fetch_array()['price'];
$kendamilprice = $kendamilPrice ->fetch_array()['price'];
$nestleprice = $nestlePrice ->fetch_array()['price'];
$wyethprice = $wyethPrice ->fetch_array()['price'];
$frisolacprice = $frisolacPrice ->fetch_array()['price'];
$enfamilprice = $enfamilPrice ->fetch_array()['price'];
$babyyardprice = $babyyardPrice ->fetch_array()['price'];
$babytulaprice = $babytulaPrice ->fetch_array()['price'];
$doonalikiprice = $doonalikiPrice ->fetch_array()['price'];
$babyftgprice = $babyftgPrice ->fetch_array()['price'];
$doonas3price = $doonas3Price ->fetch_array()['price'];
$rockerdenimprice = $rockerdenimPrice ->fetch_array()['price'];
$jaiecarprice = $jaiecarPrice ->fetch_array()['price'];
$babybjornprice = $babybjornPrice ->fetch_array()['price'];

//mens
$mentwillprice = $mentwillPrice ->fetch_array()['price'];
$franklinspreadprice = $franklinspreadPrice ->fetch_array()['price'];
$franklinstripesprice = $franklinstripesPrice ->fetch_array()['price'];
$milanoroyalprice = $milanoroyalPrice ->fetch_array()['price'];
$madisonforwardprice = $madisonforwardPrice ->fetch_array()['price'];
$madisonbuttonprice = $madisonbuttonPrice ->fetch_array()['price'];
$stretchpoplinprice = $stretchpoplinPrice ->fetch_array()['price'];
$stretchginghamprice = $stretchginghamPrice ->fetch_array()['price'];
$brookscoolprice = $brookscoolPrice ->fetch_array()['price'];
$brooksflexmilanoprice = $brooksflexmilanoPrice ->fetch_array()['price'];
$brooksflexregentprice = $brooksflexregentPrice ->fetch_array()['price'];
$brooksflexmadisonprice = $brooksflexmadisonPrice ->fetch_array()['price'];

//womens
$hannesprice = $hannesPrice ->fetch_array()['price'];
$hilmaprice = $hilmaPrice ->fetch_array()['price'];
$lyssaprice = $lyssaPrice ->fetch_array()['price'];
$tarrynprice = $tarrynPrice ->fetch_array()['price'];
$caitlinprice = $caitlinPrice ->fetch_array()['price'];
$annisaprice = $annisaPrice ->fetch_array()['price'];
$rowenaprice = $rowenaPrice ->fetch_array()['price'];
$carterprice = $carterPrice ->fetch_array()['price'];
$daronaprice = $daronaPrice ->fetch_array()['price'];
$andreaprice = $andreaPrice ->fetch_array()['price'];
$bioncaprice = $bioncaPrice ->fetch_array()['price'];
$adynaprice = $adynaPrice ->fetch_array()['price'];

//watches
$tissot1price = $tissot1Price ->fetch_array()['price'];
$tissot2price = $tissot2Price ->fetch_array()['price'];
$tissot3price = $tissot3Price ->fetch_array()['price'];
$tissot4price = $tissot4Price ->fetch_array()['price'];
$tissot5price = $tissot5Price ->fetch_array()['price'];
$tissot6price = $tissot6Price ->fetch_array()['price'];
$bezelroseprice = $bezelrosePrice ->fetch_array()['price'];
$midicoralprice = $midicoralPrice ->fetch_array()['price'];
$blackroseprice = $blackrosePrice ->fetch_array()['price'];
$demimotherprice = $demimotherPrice ->fetch_array()['price'];
$wonderlandprice = $wonderlandPrice ->fetch_array()['price'];
$ombreprice = $ombrePrice ->fetch_array()['price'];

//Variables defined and $[variable] fetch specific row from 'X34110222' Database [Description]
$mentwilldesc = $mentwillDesc ->fetch_array()['description'];
$hilmadesc = $hilmaDesc ->fetch_array()['description'];
$toshiba1desc = $toshiba1Desc ->fetch_array()['description'];

//Variables defined and $[variable] fetch specific row from 'X34110222' Database [Pictures]
$mentwillpic = $mentwillPic ->fetch_array()['pictures'];
$hilmapic = $hilmaPic ->fetch_array()['pictures'];

//After fetching, reply it to the specific element. [Description]
$reply->mentwillDesc = $mentwilldesc;
$reply->hilmaDesc = $hilmadesc;
$reply->toshiba1Desc = $toshiba1desc;

//After fetching, reply it to the specific element. [Picture]
$reply->mentwillPic = $mentwillpic;
$reply->hilmaPic = $hilmapic ;


//After fetching, reply it to the specific element. [Name]
//washing machines
$reply->toshiba1Name = $toshiba1name;
$reply->toshiba2Name = $toshiba2name;
$reply->toshiba3Name = $toshiba3name;
$reply->toshiba4Name = $toshiba4name;
$reply->toshiba5Name = $toshiba5name;
$reply->lg1Name = $lg1name;
$reply->lg2Name = $lg2name;
$reply->lg3Name = $lg3name;
$reply->lg4Name = $lg4name;
$reply->bosch1Name = $bosch1name;
$reply->bosch2Name = $bosch2name;
$reply->bosch3Name = $bosch3name;
$reply->panasonic1Name = $panasonic1name;
$reply->panasonic2Name = $panasonic2name;
$reply->samsungwm1Name = $samsungwm1name;
$reply->samsungwm2Name = $samsungwm2name;

//tv
$reply->samsungtv1Name = $samsungtv1name;
$reply->samsungtv2Name = $samsungtv2name;
$reply->sonytv1Name = $sonytv1name;
$reply->sonytv2Name = $sonytv2name;
$reply->lgtv1Name = $lgtv1name;
$reply->prismtv1Name = $prismtv1name;
$reply->prismtv2Name = $prismtv2name;
$reply->xiaomitv1Name = $xiaomitv1name;
$reply->xiaomitv2Name = $xiaomitv2name;
$reply->sharptv1Name = $sharptv1name;

//speakers
$reply->samsungsp1Name = $samsungsp1name;
$reply->samsungsp2Name = $samsungsp2name;
$reply->samsungsp3Name = $samsungsp3name;
$reply->sonysp1Name = $sonysp1name;
$reply->sonysp2Name = $sonysp2name;
$reply->sonysp3Name = $sonysp3name;
$reply->jblsp1Name = $jblsp1name;
$reply->jblsp2Name = $jblsp2name;

//babies and toys
$reply->dinosaurlegoName = $dinosaurlegoname;
$reply->mariolegoName = $mariolegoname;
$reply->bricklegoName = $bricklegoname;
$reply->gameoflifeName = $gameoflifename;
$reply->monopolyName = $monopolyname;
$reply->twisterName = $twistername;
$reply->jengaName = $jenganame;
$reply->connect4Name = $connect4name;
$reply->einmilkName = $einmilkname;
$reply->kendamilName = $kendamilname;
$reply->nestleName = $nestlename;
$reply->wyethName = $wyethname;
$reply->frisolacName = $frisolacname;
$reply->enfamilName = $enfamilname;
$reply->babyyardName = $babyyardname;
$reply->babytulaName = $babytulaname;
$reply->doonalikiName = $doonalikiname;
$reply->babyftgName = $babyftgname;
$reply->doonas3Name = $doonas3name;
$reply->rockerdenimName = $rockerdenimname;
$reply->jaiecarName = $jaiecarname;
$reply->babybjornName = $babybjornname;

//mens
$reply->mentwillName = $mentwillname;
$reply->franklinspreadName = $franklinspreadname;
$reply->franklinstripesName = $franklinstripesname;
$reply->milanoroyalName = $milanoroyalname;
$reply->madisonforwardName = $madisonforwardname;
$reply->madisonbuttonName = $madisonbuttonname;
$reply->stretchpoplinName = $stretchpoplinname;
$reply->stretchginghamName = $stretchginghamname;
$reply->brookscoolName = $brookscoolname;
$reply->brooksflexmilanoName = $brooksflexmilanoname;
$reply->brooksflexregentName = $brooksflexregentname;
$reply->brooksflexmadisonName = $brooksflexmadisonname;

///women
$reply->hannesName = $hannesname;
$reply->hilmaName = $hilmaname;
$reply->lyssaName = $lyssaname;
$reply->tarrynName = $tarrynname;
$reply->caitlinName = $caitlinname;
$reply->annisaName = $annisaname;
$reply->carterName = $cartername;
$reply->daronaName = $daronaname;
$reply->andreaName = $andreaname;
$reply->rowenaName = $rowenaname;
$reply->bioncaName = $bioncaname;
$reply->adynaName = $adynaname;

//watches
$reply->tissot1Name = $tissot1name;
$reply->tissot2Name = $tissot2name;
$reply->tissot3Name = $tissot3name;
$reply->tissot4Name = $tissot4name;
$reply->tissot5Name = $tissot5name;
$reply->tissot6Name = $tissot6name;
$reply->bezelroseName = $bezelrosename;
$reply->midicoralName = $midicoralname;
$reply->blackroseName = $blackrosename;
$reply->demimotherName = $demimothername;
$reply->wonderlandName = $wonderlandname;
$reply->ombreName = $ombrename;

//After fetching, reply it to the specific element. [Price]
//washing machines
$reply->toshiba1Price = $toshiba1price;
$reply->toshiba2Price = $toshiba2price;
$reply->toshiba3Price = $toshiba3price;
$reply->toshiba4Price = $toshiba4price;
$reply->toshiba5Price = $toshiba5price;
$reply->lg1Price = $lg1price;
$reply->lg2Price = $lg2price;
$reply->lg3Price = $lg3price;
$reply->lg4Price = $lg4price;
$reply->bosch1Price = $bosch1price;
$reply->bosch2Price = $bosch2price;
$reply->bosch3Price = $bosch3price;
$reply->panasonic1Price = $panasonic1price;
$reply->panasonic2Price = $panasonic2price;
$reply->samsungwm1Price = $samsungwm1price;
$reply->samsungwm2Price = $samsungwm2price;

//tv
$reply->samsungtv1Price = $samsungtv1price;
$reply->samsungtv2Price = $samsungtv2price;
$reply->sonytv1Price = $sonytv1price;
$reply->sonytv2Price = $sonytv2price;
$reply->lgtv1Price = $lgtv1price;
$reply->prismtv1Price = $prismtv1price;
$reply->prismtv2Price = $prismtv2price;
$reply->xiaomitv1Price = $xiaomitv1price;
$reply->xiaomitv2Price = $xiaomitv2price;
$reply->sharptv1Price = $sharptv1price;

//speakers
$reply->samsungsp1Price = $samsungsp1price;
$reply->samsungsp2Price = $samsungsp2price;
$reply->samsungsp3Price = $samsungsp3price;
$reply->sonysp1Price = $sonysp1price;
$reply->sonysp2Price = $sonysp2price;
$reply->sonysp3Price = $sonysp3price;
$reply->jblsp1Price = $jblsp1price;
$reply->jblsp2Price = $jblsp2price;

//babies and toys
$reply->dinosaurlegoPrice = $dinosaurlegoprice;
$reply->mariolegoPrice = $mariolegoprice;
$reply->bricklegoPrice = $bricklegoprice;
$reply->gameoflifePrice = $gameoflifeprice;
$reply->monopolyPrice = $monopolyprice;
$reply->twisterPrice = $twisterprice;
$reply->jengaPrice = $jengaprice;
$reply->connect4Price = $connect4price;
$reply->einmilkPrice = $einmilkprice;
$reply->kendamilPrice = $kendamilprice;
$reply->nestlePrice = $nestleprice;
$reply->wyethPrice = $wyethprice;
$reply->frisolacPrice = $frisolacprice;
$reply->enfamilPrice = $enfamilprice;
$reply->babyyardPrice = $babyyardprice;
$reply->babytulaPrice = $babytulaprice;
$reply->doonalikiPrice = $doonalikiprice;
$reply->babyftgPrice = $babyftgprice;
$reply->doonas3Price = $doonas3price;
$reply->rockerdenimPrice = $rockerdenimprice;
$reply->jaiecarPrice = $jaiecarprice;
$reply->babybjornPrice = $babybjornprice;

//mens
$reply->mentwillPrice = $mentwillprice;
$reply->franklinspreadPrice = $franklinspreadprice;
$reply->franklinstripesPrice = $franklinstripesprice;
$reply->milanoroyalPrice = $milanoroyalprice;
$reply->madisonforwardPrice = $madisonforwardprice;
$reply->madisonbuttonPrice = $madisonbuttonprice;
$reply->stretchpoplinPrice = $stretchpoplinprice;
$reply->stretchginghamPrice = $stretchginghamprice;
$reply->brookscoolPrice = $brookscoolprice;
$reply->brooksflexmilanoPrice = $brooksflexmilanoprice;
$reply->brooksflexregentPrice = $brooksflexregentprice;
$reply->brooksflexmadisonPrice = $brooksflexmadisonprice;

//women
$reply->hannesPrice = $hannesprice;
$reply->hilmaPrice = $hilmaprice;
$reply->lyssaPrice = $lyssaprice;
$reply->tarrynPrice = $tarrynprice;
$reply->caitlinPrice = $caitlinprice;
$reply->annisaPrice = $annisaprice;
$reply->rowenaPrice = $rowenaprice;
$reply->carterPrice = $carterprice;
$reply->daronaPrice = $daronaprice;
$reply->andreaPrice = $andreaprice;
$reply->bioncaPrice = $bioncaprice;
$reply->adynaPrice = $adynaprice;

//watches
$reply->tissot1Price = $tissot1price;
$reply->tissot2Price = $tissot2price;
$reply->tissot3Price = $tissot3price;
$reply->tissot4Price = $tissot4price;
$reply->tissot5Price = $tissot5price;
$reply->tissot6Price = $tissot6price;
$reply->bezelrosePrice = $bezelroseprice;
$reply->midicoralPrice = $midicoralprice;
$reply->blackrosePrice = $blackroseprice;
$reply->demimotherPrice = $demimotherprice;
$reply->wonderlandPrice = $wonderlandprice;
$reply->ombrePrice = $ombreprice;

//Converting into Json from php
$jsonReply = json_encode($reply);


header('Content-Type: application/json');
echo $jsonReply;

?>