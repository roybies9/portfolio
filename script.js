  const afbeelding = document.querySelector(".coding-window");
  const afbeelding2 = document.querySelector(".afbeelding2");
  const afbeelding3 = document.querySelector(".afbeelding3");
  
 document.addEventListener("mousemove", function(event) {
let x = (event.clientX - window.innerWidth / 2) * 0.02;
let y = (event.clientY - window.innerHeight / 2) * 0.02;

    afbeelding.style.transform = `translate(${x}px, ${y}px)`;

     let x2 = (event.clientX - window.innerWidth / 2) * 0.04;
 let y2 = (event.clientY - window.innerHeight / 2) * 0.04;

     afbeelding2.style.transform = `translate(${x2}px, ${y2}px)`;

     let x3 = (event.clientX - window.innerWidth / 2) * 0.12;
let y3 = (event.clientY - window.innerHeight / 2) * 0.12;

    afbeelding3.style.transform = `translate(${x3}px, ${y3}px)`;
});
