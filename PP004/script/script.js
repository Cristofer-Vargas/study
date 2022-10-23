// Importando a biblioteca no head do html e chamando para caches, e incrementano no sr

window.sr = ScrollReveal({ reset: true});

sr.reveal('.module.content', { duration: 3000 });

sr.reveal('section.module h1', { 
    rotate: { x: 0, y: 80, z: 0},    
    duration: 3000 
});