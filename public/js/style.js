function myHamburger(x) {
    x.classList.toggle("change");
    document.getElementById("topnav").classList.toggle('topnav-change');
    document.getElementById("side-header").classList.toggle('side-change');
    document.getElementById("side-menu").classList.toggle('side-menu-change');
    document.getElementById("app").classList.toggle('dashboardContent-change');
}
function myHamburgerLanding(x) {
    x.classList.toggle("change");
    document.getElementById("navThird").classList.toggle('navThirdChange');
}
function myHamburgerLandingLeft(x) {
    x.classList.toggle("arrow-rightChange");
    document.getElementById("navSecond").classList.toggle('navSecondChange');
}
function myDropdwonSide(x){
    document.getElementById("list"+x).classList.toggle('dropdown-hiddenSide');
}



