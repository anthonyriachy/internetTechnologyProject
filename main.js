function displaySideBar(){
    document.getElementsByClassName('side-bar').style.display= block
    document.getElementById('button').style.color=red
}

function openSideBar() {
    document.getElementById("side-bar").style.display= "flex";
  }

  function closeSideBar() {
    document.getElementById("side-bar").style.display= "none";
  }