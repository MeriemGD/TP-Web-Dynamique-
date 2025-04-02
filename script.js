const div = document.getElementById('maDiv');
const p = document.getElementById('monParagraphe');

p.textContent = 'Le text a été modifié' ;

p.style.backgroundColor = 'lightblue';
p.style.textAlign = 'center';

div.addEventListener('click', function(){
p.textContent ='un clic a été détecté';
});
