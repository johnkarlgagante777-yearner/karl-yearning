const ModalBtn = document.getElementById('OpenBtn');
const myModal = document.getElementById('OpenModal');
const closeBtn = document.getElementById('X');
const exitbtn = document.getElementById('exit');

ModalBtn.addEventListener('click', () =>{
    myModal.classList.add('active');
});

closeBtn.addEventListener('click', () =>{
    myModal.close();

});

exitbtn.addEventListener('click', () =>{
    myModal.close();
    
});

