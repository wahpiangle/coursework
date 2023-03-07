const navCars = document.querySelector('.nav-cars');
const navUpdate = document.querySelector('.nav-update');
const navCancel = document.querySelector('.nav-cancel');
const luxuryTitle = document.querySelector('.luxury-title');
const sportsTitle = document.querySelector('.sports-title');
const classicTitle = document.querySelector('.classic-title');
const luxuryContainer = document.querySelector('.luxury-container');
const sportsContainer = document.querySelector('.sports-container');
const classicContainer = document.querySelector('.classic-container');

function logout(){
    window.location.href = "index.php";
}

navCars.addEventListener('click', function(){
    navCars.classList.add('active');
    navUpdate.classList.remove('active');
    navCancel.classList.remove('active');
});

navUpdate.addEventListener('click', function(){
    navUpdate.classList.add('active');
    navCars.classList.remove('active');
    navCancel.classList.remove('active');
});

navCancel.addEventListener('click', function(){
    navCancel.classList.add('active');
    navCars.classList.remove('active');
    navUpdate.classList.remove('active');
});

luxuryTitle.addEventListener('click', function(){
    luxuryTitle.classList.add('active');
    sportsTitle.classList.remove('active');
    classicTitle.classList.remove('active');
    luxuryContainer.style.display = 'grid';
    sportsContainer.style.display = 'none';
    classicContainer.style.display = 'none';
});

sportsTitle.addEventListener('click', function(){
    sportsTitle.classList.add('active');
    luxuryTitle.classList.remove('active');
    classicTitle.classList.remove('active');
    sportsContainer.style.display = 'grid';
    luxuryContainer.style.display = 'none';
    classicContainer.style.display = 'none';
});

classicTitle.addEventListener('click', function(){
    classicTitle.classList.add('active');
    luxuryTitle.classList.remove('active');
    sportsTitle.classList.remove('active');
    classicContainer.style.display = 'grid';
    luxuryContainer.style.display = 'none';
    sportsContainer.style.display = 'none';
});