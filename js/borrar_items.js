
// contar Ps

let g = document.querySelectorAll('p');
let idP = 0; 
g.forEach(el => {

    g[idP].setAttribute(`id`,`${idP}`)

    if(g[idP].innerText.indexOf('-vacio-') != -1){
        g[idP].remove();
    }

    idP++;
});



