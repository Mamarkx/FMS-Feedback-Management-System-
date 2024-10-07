/*=============== SHOW SIDEBAR ===============*/
const showSidebar = (toggleId, sidebarId, mainId) =>{
  const toggle = document.getElementById(toggleId),
  sidebar = document.getElementById(sidebarId),
  main = document.getElementById(mainId)

  if(toggle && sidebar && main){
      toggle.addEventListener('click', ()=>{
            
          sidebar.classList.toggle('show-sidebar')
          
          main.classList.toggle('main-pd')
      })
  }
}
showSidebar('header-toggle','sidebar', 'main')


function Dropdown() {
  var dropdown = document.getElementById("myDropdown");
  if (dropdown.style.display === "none") {
    dropdown.style.display = "block";
  } else {
    dropdown.style.display = "none";
  }
}
function toggleNotifi(){
 var dropdown = document.getElementById("box");
  if (dropdown.style.display === "none") {
    
    dropdown.style.display = "block";
  } else {
    dropdown.style.display = "none";
  }
}
