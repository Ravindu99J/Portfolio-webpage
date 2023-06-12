function toggleContent(showMoreInfo) {
  var contentDiv = document.getElementById("content");
  var moreInfoBtn = document.getElementById("more-info-btn");
  var lessInfoBtn = document.getElementById("less-info-btn");
  
  if (showMoreInfo) {
    contentDiv.style.display = "block";
    moreInfoBtn.style.display = "none";
    lessInfoBtn.style.display = "inline-block";
  } else {
    contentDiv.style.display = "none";
    moreInfoBtn.style.display = "inline-block";
    lessInfoBtn.style.display = "none";
  }
}

const imageSlider = document.getElementById('imageSlider');
const images = imageSlider.getElementsByTagName('img');
let currentIndex = 0;

function showImage(index) {
  for (let i = 0; i < images.length; i++) {
    images[i].style.transform = 'translateX(-100%)';
  }
  images[index].style.transform = 'translateX(0)';
}

function slideToNextImage() {
  currentIndex = (currentIndex + 1) % images.length;
  showImage(currentIndex);
}

function slideToPreviousImage() {
  currentIndex = (currentIndex - 1 + images.length) % images.length;
  showImage(currentIndex);
}
setInterval(slideToNextImage, 3000);

document.getElementById('prevButton').addEventListener('click', slideToPreviousImage);
document.getElementById('nextButton').addEventListener('click', slideToNextImage);

let popup = document.getElementById('popup');
function openPopup() {
  popup.classList.add('open-popup');
}
function closePopup() {
 popup.classList.remove('open-popup');
}

var nameError = document.getElementById('name-error');
var emailError = document.getElementById('email-error');
var messageError = document.getElementById('message-error');
var submitError = document.getElementById('submit-error');


  function validateName() {
    var name = document.getElementById('contact-name').value;
    if(name.length == 0){
      nameError.innerHTML= ' Name is required ! ';
      return false;
    }
    if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
      nameError.innerHTML= ' Write full name ! ';
      return false;
    }
    nameError.innerHTML= '<i class="fa-sharp fa-solid fa-circle-check"></i>';
    return true;
  }

function validateEmail() {
  var email = document.getElementById('contact-email').value;

  if(email.length == 0){
    emailError.innerHTML= ' Email is required ! ';
    return false;
  }
  if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
    emailError.innerHTML= ' Email is invalid ! ';
    return false;
  }
  emailError.innerHTML= '<i class="fa-sharp fa-solid fa-circle-check"></i>';
  return true;
}
function validateMessage(){
    var message = document.getElementById('contact-message').value;
    var required = 30;
    var left = required - message.length;
    if(left > 0){
        messageError.innerHTML = left + ' more characters required ! ';
        return false;
    }
    messageError.innerHTML = '<i class="fa-sharp fa-solid fa-circle-check"></i>';
    return true;
}
function validateForm(event) {
  event.preventDefault();
  
  if (!validateName() || !validateEmail() || !validateMessage()) {
    submitError.style.display = 'block';
    submitError.innerHTML = 'Please fix errors to submit!';
    setTimeout(function() { submitError.style.display = 'none'; }, 3000);
    return false;
  } else {
    openPopup();
    fetch('your-server-url', {
      method: 'POST',
      body: new FormData(event.target)
    })
    .then(response => {
    })
    .catch(error => {
    });
    return true;
  }
}


const navLinks = document.querySelectorAll('.navbar a');

navLinks.forEach(link => {
  link.addEventListener('click', smoothScroll);
});

function smoothScroll(event) {
  event.preventDefault();

  const targetId = this.getAttribute('href');
  const targetElement = document.querySelector(targetId);
  const targetOffset = targetElement.offsetTop;

  const navbarHeight = document.querySelector('.navbar').offsetHeight;
  const scrollToPosition = targetOffset - navbarHeight;

  window.scrollTo({
    top: scrollToPosition,
    behavior: 'smooth'
  });

  targetElement.classList.add('scroll-animation');

  setTimeout(() => {
    targetElement.classList.remove('scroll-animation');
  }, 1000);
}

tippy('[data-tippy-content]', {
    placement: 'top',
    arrow: true
  });















