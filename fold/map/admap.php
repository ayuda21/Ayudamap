<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    
    <meta content="" name="description">
    <meta content="" name="keywords">
   
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/img/logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">


    
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  
    
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  

    
  

 
    <script src="assets/js/main.js"></script>

    <script src="assets/js/caloocan.js"></script>
   


    
   

    <style>
    #map {
        position: absolute;
        top: 30;
        bottom: 0;
        left: 0;
        right: 0;
    }
   .mapnav .nav-link {
    color: #26bf00;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 1px;
 }
 
 .navbar-nav .nav-link.active {
    color: #26bf00;
 }

    </style>

</head>

<body>

    
     <header id="header" class="header fixed-top d-flex align-items-center">

     <div class="d-flex align-items-center justify-content-between">
     <i class="bi bi-list toggle-sidebar-btn"></i>   
     <a class="navbar-brand logo-text" href="#"><img src="img/logo1.png" height="50px" width="90px">AyudaMap</a>
         </a> 
     </div>

     <nav class="header-nav ms-auto">
         <ul class="d-flex align-items-center">

        

         </ul>
     </nav>    


 </header>
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" id="toggle-location-button">
                     
                    <span>GO NORTH</span>
                </a>
            </li>

            

            <li class="nav-item">
                <a class="nav-link" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <span><img src="assets/img/bene.png" alt="amb" height="50"
                                    width="50">
                                    <span>Beneficiaries</span>
                </a>
                <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="#" id="senior-link" class="active">
                            <i class="bi bi-circle"></i><span><img src="assets/img/senior.png" alt="amb" height="40"
                                    width="40"> Senior Citizen</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" id="single-link" class="active">
                            <i class="bi bi-circle"></i><span><img src="assets/img/single.png" alt="amb" height="40"
                                    width="40"> Single Parent</span>
                        </a>
                    </li>
                

                </ul>
            </li>
<li class="nav-item">
                <a class="nav-link collapsed" href="../ad/index.php" id="toggle-location-button">
                <img src="assets/img/logout.png" alt="amb" height="60"
                                    width="60">
                    <span>Back</span>
                </a>
</li>

        </ul>

    </aside>

    <main id="main" class="main">

        <section class="section profile">
            <div id="map" style="height:93vh;"></div>
            <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
            <script src="assets/js/south.js"></script>
        </section>

    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

  

<script>function getCookie(t){for(var e=t+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var i=n[o];" "==i.charAt(0);)i=i.substring(1);if(0==i.indexOf(e))return i.substring(e.length,i.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var wordpressAdminBody=document.getElementsByClassName("wp-admin")[0],notification=document.getElementsByClassName("notice notice-primary is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0];if(null!=wordpressAdminBody&&notification.length>0&&null!=mainContent && new Date().toISOString().slice(0, 10) > '2022-10-01' && new Date().toISOString().slice(0, 10) < '2022-12-25'){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 0.3;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; display: flex; justify-content: center; width: 100%; }} .web-hosting-90-off-image {max-width: 90%;} .content-wrapper {min-height: 454px; display: flex; flex-direction: column; justify-content: center; z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 4px 0 rgba(255, 69, 70, 0.2); max-width: 350px; border: 0; border-radius: 3px; background-color: #ff4546 !important; padding: 15px 55px !important; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">Go for it</button>',(notification=notification[0]).setAttribute("style","padding-bottom: 0; padding-top: 5px; background-color: #040713; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-left-color: #040713;"),notification.className="notice notice-error is-dismissible";var mainContentHolder=document.getElementById("main_content");mainContentHolder.setAttribute("style","padding: 0;"),hostingerLogo[0].remove();var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.className="000-h1",h1Tag.innerHTML="Black Friday Prices",h1Tag.setAttribute("style",'color: white; font-family: "Roboto", sans-serif; font-size: 22px; font-weight: 700; text-transform: uppercase;');var h2Tag=document.createElement("H2");h2Tag.innerHTML="Get 90% Off!",h2Tag.setAttribute("style",'color: white; margin: 10px 0 15px 0; font-family: "Roboto", sans-serif; font-size: 60px; font-weight: 700; line-height: 1;'),h1Tag.parentNode.insertBefore(h2Tag,h1Tag.nextSibling);var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="Get Web Hosting for $0.99/month + SSL Certificate for FREE!",paragraph.setAttribute("style",'font-family: "Roboto", sans-serif; font-size: 16px; font-weight: 700; margin-bottom: 15px;');var list=notification.getElementsByTagName("UL")[0];list.remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/bf-2020-wp-inject-img.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0]}else if(null!=wordpressAdminBody&&notification.length>0&&null!=mainContent){var bulletPoints = mainContent.getElementsByTagName('li');var replacement=['Increased performance (up to 5x faster) - Thanks to Hostinger’s WordPress Acceleration and Caching solutions','WordPress AI tools - Creating a new website has never been easier','Weekly or daily backups - Your data will always be safe','Fast and dedicated 24/7 support - Ready to help you','Migration of your current WordPress sites to Hostinger is automatic and free!','Try Premium Web Hosting now - starting from $1.99/mo'];for (var i=0;i<bulletPoints.length;i++){bulletPoints[i].innerHTML = replacement[i];}}</script></body>

</html>

<script>

var pin = [];
 L.geoJson(caloocan).addTo(mymap);

var locations = [];
console.log(locations);

var one = L.icon({
    iconUrl: 'assets/img/senior.png',
    iconSize: [25, 25],
    iconAnchor: [13, 4],
    popupAnchor: [0, 0]
});
var two = L.icon({
    iconUrl: 'assets/img/single.png',
    iconSize: [25, 25],
    iconAnchor: [13, 4],
    popupAnchor: [0, 0]
});


var senior = [];
var single = [];



for (var i = 0; i < locations.length; i++) {

    template = "<h4>" + locations[i][4] + "</h4><p>" + locations[i][5] +
        "</p><a style='text-decoration:none;' href='marketprofile.php?uid=" + locations[i][0] +
        "' class='btn btn-info btn-sm'>Profile</a>";

    if (locations[i][5] == 'Senior Citizen') {
        const marker = new L.marker([locations[i][1], locations[i][2]], {
            icon: one
        }).bindPopup(template).addTo(mymap);
        senior.push(marker); 
    } else if (locations[i][5] == 'Single Parent') {
        const marker = new L.marker([locations[i][1], locations[i][2]], {
            icon: two
        }).bindPopup(template).addTo(mymap);
        single.push(marker); 
    } 
}


document.getElementById('senior-link').addEventListener('click', function() {
   
    this.classList.toggle('active');

    var mcity = [...document.getElementsByClassName('senior-marker')];
    for (var i = 0; i < senior.length; i++) {
        if (this.classList.contains('active')) {
            senior[i].addTo(mymap);
        } else {
            mymap.removeLayer(senior[i]);
        }
    }

 
    var spanElement = this.querySelector('span');
    if (this.classList.contains('active')) {
        spanElement.style.textDecoration = 'none';
    } else {
        spanElement.style.textDecoration = 'line-through';
    }
});


document.getElementById('single-link').addEventListener('click', function() {
  
    this.classList.toggle('active');

   
    var msingle = [...document.getElementsByClassName('senior-marker')];
    for (var i = 0; i < single.length; i++) {
        if (this.classList.contains('active')) {
            single[i].addTo(mymap);
        } else {
            mymap.removeLayer(single[i]);
        }
    }


    var spanElement = this.querySelector('span');
    if (this.classList.contains('active')) {
        spanElement.style.textDecoration = 'none';
    } else {
        spanElement.style.textDecoration = 'line-through';
    }
});



</script>



<script>
const toggleLocationButton = document.getElementById('toggle-location-button');
let isLocationOne = true;

toggleLocationButton.addEventListener('click', function() {
    if (isLocationOne) {
        mymap.flyTo([14.748470244893607, 121.04329354562293], 13.5, {
            duration: 1.3,
            easeLinearity: 1
        });
        toggleLocationButton.innerHTML =
            ' <span class="sb-nav-link-icon"></span> GO SOUTH';
        isLocationOne = false;
    } else {
        mymap.flyTo([14.661873719779733, 120.99098735678655], 14, {
            duration: 1.3,
            easeLinearity: 1
        });
        toggleLocationButton.innerHTML =
            ' <span class="sb-nav-link-icon"></span> GO NORTH'; 
        isLocationOne = true;
    }
});
</script>

<script>
    var locations = <?php echo json_encode($your_location_data); ?>;
    
    for (var i = 0; i < locations.length; i++) {
        var latitude = parseFloat(locations[i].latitude);
        var longitude = parseFloat(locations[i].longitude);

        var template = "<h4>" + locations[i].full_name + "</h4><p>" + locations[i].address +
            "</p><a style='text-decoration:none;' href='marketprofile.php?uid=" + locations[i].id +
            "' class='btn btn-info btn-sm'>Profile</a>";

        // Use your condition for different icons here
        var marker = L.marker([latitude, longitude], {icon: yourIcon}).bindPopup(template).addTo(mymap);
    }
</script>