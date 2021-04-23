  
var currentPage;
function openConsultantTab(pageName, elmnt, color){
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("consultantContent");
  for (i = 0; i < tabcontent.length; i++) {
     tabcontent[i].style.display = "none";
     
    
    
  }
  document.getElementById("sidenav").style.display= "block";
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

function openPage(pageName,elmnt,color) {
  var navbar = document.getElementById("navbar");
  navbar.classList.add("sticky");
  currentPage = pageName;
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = " #555";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;
//document.getElementById("Overview").onscroll = function(){myFunction};  
  if (currentPage!= "Services"){
    tabcontent = document.getElementsByClassName("service-option");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tabcontent[0].style.display = "block";
  }
  
  var slideIndex = 0;
  if(currentPage== "Overview"){
    var navbar = document.getElementById("navbar");
    var sticky = 15;
    
    
    navbar.classList.add("sticky")
    window.onscroll = function() {if (window.pageYOffset <= 350) {
      navbar.classList.add("sticky");
      
    } else {
      navbar.classList.remove("sticky");
      
    }
    if(window.pageYOffset >= 700){
      navbar.classList.add("sticky");
    }
      };
    
        //navbar.classList.remove("sticky");

  
  }
  
 



  
    /*swapy();
    function swapy(){
      if(currentPage == "Mission"){
        var slides = document.getElementsByClassName("video");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        slides[slideIndex-1].style.display = "block";  
        setTimeout(swapy, 2000); // Change image every 2 seconds
      }
      
    }*/
    /* swap();
    function swap(){
      setTimeout(changeSource('v2.mp4'), 2000);
    }
    function changeSource(url) {
      var video = document.getElementById('video2');
      video.pause();
      video.src = url;
      video.type = "video/mp4";
      video.play();
      
      setTimeout(changeSource("v1.mp4"), 2000);
   } */
    
 
  
  
}
function openSlide(pageName){
  tabcontent = document.getElementsByClassName("service-option");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  document.getElementById(pageName).style.display = "block";
}


document.getElementById("defaultOpen").click();



document.getElementById("department1").click();

var variable = document.getElementById(currentPage);




/* global axios */

var template = document.querySelector("#recipe-card");
var tcontainer = document.querySelector("#row");


var entries;
function makePeople(url, the){
  var items
  items = document.getElementsByClassName("content");
  for (i = 0; i < items.length; i++) {
    items[i].style.color = "gray";
  }

  document.getElementById(the).style.color = "blue";
  hide();
 
  axios.get('http://'+url).then(function(response) {
  entries = response.data;
  console.log(entries);
  
  entries.forEach(function(entry) {
    
    
    console.log(template);
    var new_record = template.content.cloneNode(true);
    new_record.querySelector(".name").innerText = entry.name;
    
    new_record.querySelector(".email").innerText = entry.email;
    new_record.querySelector(".description").innerText = entry.description;
    new_record.querySelector(".card-image").src = entry.image;
    tcontainer.appendChild(new_record);
    
  });

}); 

}

function hide(){
  
  
     // Get the <ul> element with id="myList"
     //arr = document.getElementsByClassName("row");
    // console.log(arr[0]);
    // arr.remove();
    // console.log(arr[0]);
    
    //const fakeImages = document.querySelectorAll(".row");
    //if(fakeImages[0] != null){
      //fakeImages[2].remove();
    //}
    var row = document.getElementById("row");
    //console.log(fakeImages[0]);
    //fakeImages.removeChild(fakeImages.childNodes[0]);
    while(row.hasChildNodes()){
      row.removeChild(row.firstChild);
    }
    
    
    
    
        // Remove <ul>'s first child node (index 0)

 
}

var coll = document.getElementsByClassName("collapsible");

var i;

for (i = 0; i < coll.length; i++) {
  
  coll[i].addEventListener("click", function() {
  
    this.classList.toggle("active");
    
    
    
  });
}
var slideInde = 1;
showS(slideInde);

function plusDiv(n) {
  showS(slideInde += n);
}



function showS(n) {
console.log(slideInde);
  var i;
  var slide = document.getElementsByClassName("service-circle-button-group");
  var captions=["type 1", "type 2", "type 3"];
  
  if (n > slide.length) {slideInde = 1}    
  if (n < 1) {slideInde = slide.length}
  for (i = 0; i < slide.length; i++) {
      slide[i].style.display = "none";  
  }
 
  
  slide[slideInde-1].style.display = "block";  
  document.getElementById("service-caption").innerHTML = captions[slideInde-1];
  
  
}
function submitForm() {
  var x, text;

  
  x = document.getElementById("fname").value;

  
  if (x == "") {
    document.getElementById("fname").style.backgroundColor = "rgba(223, 112, 112, 0.4)";
  } else {
    
    modalShow();
  }
  
}
  
  var modal = document.getElementById("modal");

  
 
  var span = document.getElementsByClassName("close")[0];
  
  
  function modalShow() {
    modal.style.display = "block";
  }
  
 
  span.onclick = function() {
    modal.style.display = "none";
  }
  
  
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

  var slideIndex = 0;
  showSlides();
  
  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("slides");
    
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
   
    slides[slideIndex-1].style.display = "block";  
    
    setTimeout(showSlides, 2000); 
  }
  var coll = document.getElementsByClassName("collapsible");
  var i;
  var content = coll[0].nextElementSibling;
      
      coll[0].classList.toggle("active");
      
      content.style.maxHeight = "15px";
      coll[0].addEventListener("click", function() {
      
      
      if (content.style.maxHeight){
         content.style.maxHeight = null;
      } else {
       content.style.maxHeight = content.scrollHeight + "px";
        
      } 
    }); 
  
    var coll = document.getElementsByClassName("collapsible");
  var i;
  for (i = 1; i < coll.length; i++) {
    
      coll[i].addEventListener("click", function() {
      
      var c = this.nextElementSibling;
      
      if (c.style.maxHeight){
         c.style.maxHeight = null;
         console.log("hey1");
      } else {
       
       c.style.maxHeight = c.scrollHeight + "px";
       console.log("hey2"); 
      } 
    });
    
    
  }