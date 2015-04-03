
function startBanners() {
var currentBanner = document.getElementById(banners[bannerCounter]);
currentBanner.style.display = "block";

if (firstPass == false) {
previousBanner.style.display = "none";
}
firstpass = false;

previousBanner = currentBanner;
bannerCounter++;

if (bannerCounter > (numberOfBanners - 1))
bannerCounter = 0;

var bannerTimer = setTimeout("startBanners()", delay * 1000);
}

window.onload = function () {
numberOfBanners = banners.length;
startBanners();
firstPass = false;
}



