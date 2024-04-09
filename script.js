AOS.init();
const heroSec = document.querySelector("#hero-section");
const heroText = document.getElementById('hero-text');

const backgrounds = [
  { image: 'images/slide1.jpg', text: 'We live To create Magic.' },
  { image: 'images/slide2.jpg', text: ' Helping young Nigerians overcome the difficulty of learning a tech skill on their own without guidance and companionship.' },
  { image: 'images/slide3.jpg', text: 'To create for Nigerians an environment that facilitates learning and connectivity among tech inclined youths.' }
];

function setRandomBackground() {
  const randomIndex = Math.floor(Math.random() * backgrounds.length);
  const randomBackground = backgrounds[randomIndex];
  heroSec.style.backgroundImage = `linear-gradient(#00000092, #00000089), url('${randomBackground.image}')`;
  heroText.textContent = randomBackground.text;
}

setInterval(setRandomBackground, 5000);

const sendADm = document.querySelectorAll("#sendADm")

// document.addEventListener("DOMContentLoaded", function() {
  var phoneNumber = "+2347080375677";
  var message = "Hi BuggyBillions, I just read the story online, and I am amazed and would love to also be a TITAN, My name is __.";

  var encodedPhoneNumber = encodeURIComponent(phoneNumber);
  var encodedMessage = encodeURIComponent(message);
  
  var whatsappChatLink = "https://api.whatsapp.com/send?phone=" + encodedPhoneNumber + "&text=" + encodedMessage;

  sendADm.forEach(DM => {
    DM.addEventListener("click", function() {
      window.open(whatsappChatLink, "_blank");
    });
  });
  
// });