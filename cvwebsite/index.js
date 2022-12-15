
function j() {
    if (document.location.hash) {
        setTimeout(function() {
            window.scrollTo(window.scrollX, window.scrollY - 400);
        }, 10);
    }
};

const navLinks = document.querySelectorAll('.nav-item')
const menuToggle = document.getElementById('navbarSupportedContent')
const bsCollapse = new bootstrap.Collapse(menuToggle)
navLinks.forEach((l) => {
    l.addEventListener('click', () => { bsCollapse.toggle() })
})


/*document.querySelector(".clearButton").addEventListener("click", function c() {
  if (confirm("Are you sure you want to clear!")) {
    for (var i = 0; i < document.querySelectorAll(".clearBlog").length; i++) {
      document.querySelectorAll(".clearBlog")[i].value = ""
      document.querySelectorAll(".clearBlog")[i].style.borderColor = "#393e46"
    }
  } else {

  }

})*/

for (var i = 0; i < document.querySelectorAll(".submitButton").length; i++) {

  document.querySelectorAll(".submitButton")[i].addEventListener("click", function d(event) {

    if (document.querySelectorAll(".clearBlog")[0].value !== "" && document.querySelectorAll(".clearBlog")[1].value !== "") {
      event.returnValue = true;
    }

    if (document.querySelectorAll(".clearBlog")[0].value == "") {
      event.preventDefault();
      document.querySelectorAll(".clearBlog")[0].style.borderColor = "red"
    } else if (document.querySelectorAll(".clearBlog")[0].value !== "") {

      document.querySelectorAll(".clearBlog")[0].style.borderColor = "green"
    }
    if (document.querySelectorAll(".clearBlog")[1].value == "") {
      event.preventDefault();
      document.querySelectorAll(".clearBlog")[1].style.borderColor = "red"
    } else if (document.querySelectorAll(".clearBlog")[1].value !== "") {

      document.querySelectorAll(".clearBlog")[1].style.borderColor = "green"
    }

    if (document.querySelectorAll(".clearBlog")[0].value == "" ^ document.querySelectorAll(".clearBlog")[1].value == "") {
      alert("One of the fields is empty. Please fill out both fields.");
    }
    if (document.querySelectorAll(".clearBlog")[0].value == "" && document.querySelectorAll(".clearBlog")[1].value == "") {
      alert("Both fields are empty. Please fill out both fields.");
    }
  }, false);

};



/*var mediaQuery = window.matchMedia('(max-width: 1028px)');

if (mediaQuery.matches) {
  document.querySelector('.switch1').textContent='<td> <a href="https://www.brunel.ac.uk/"><strong>Brunel University London</strong></a><br> 2019-2020 <br> Mathematics and Computing </td>';
  document.querySelector('.switch2').textContent='<td> <img class="bulpic" src="https://d3d00swyhr67nd.cloudfront.net/_source/BUA_location_image_1.jpg" alt="Brunel University London" width="300px" height="240px"> </td>';
}


const navLinks = document.querySelectorAll('.nav-item')
const menuToggle = document.getElementById('.navbarSupportedContent')
const bsCollapse = new bootstrap.Collapse(menuToggle)
navLinks.forEach((l) => {
    l.addEventListener('click', () => { bsCollapse.toggle() })
})


var divId;

 $('#skills h4').click(function(){
   divId = $(this).attr('href');
    $('html, body').animate({
     scrollTop: $(divId).offset().top - 200
   }, 100);
 });*/
