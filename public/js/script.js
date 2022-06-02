var dropDown = document.getElementById("navbarDropdown")
var link = document.querySelectorAll(".nav-link");

console.log(link);
link.forEach(element =>{
    element.addEventListener('click',()=>{
        console.log(element.nextElementSibling.classList);
        element.nextElementSibling.classList.toggle("d-flex");
    });
});