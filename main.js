//page_Cosmeto

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}


// Mon compte

var btn_mon_compte = document.querySelector("#btn_mon_compte");
var fenetre = document.querySelector("#fenetre");
var btn_fermer = document.querySelector("#btn_fermer");

btn_mon_compte.addEventListener("click", function () {
  console.log("test")
  fenetre.classList.toggle("open");
});

btn_fermer.addEventListener("click", function () {
  console.log("test")
  fenetre.classList.toggle("open");
});

//Ortho

// $(function () {
//   $('[data-toggle="tooltip"]').tooltip()
// })
