// j'ai fait une alert hello world pour voir si le js était bien lié au début

// je commence par la selection des éléments qui sont ici des class
// je vais récup le bouton nouvelle list crée par mickael, je le récup avec sa class et non id
// document. = dans le document html meme si c'est php ici y'a un doctype html
// queryselector me permet de selectionner (selector en anglais) un élément, ici c'est la class new-list-btn

const buttonNewList = document.querySelector(".new-list-btn");

// je recup la zone ou les lists vont apparaitre
// dans le doctype html va me selectionner la class lists-container
const zonesList = document.querySelector(".lists-container");

// je créer une fonction que j'appelle addNewList
// dans cette fonction je créer une variable newList avec createElement (comme queryselector c'est une fonction native js)
// qui me permet de créer un element Div 
// innerhtml ca me permet d'écrire dans un element (ici c'est la div que j'ai crée)
// appendchild ca me permet d'ajouter un element a l'intérieur d'un autre, ici j'ajoute ma variable zone list
// qui contient la class lists-container dans ma variable newList qui est une div

function addNewList() {
    const newList = document.createElement("div");
    newList.classList.add("listItem");
    newList.innerHTML = `
    <h3>Nouvelle liste</h3>
    <p>Contenu de la liste</p> `;
    // `` j'ai appris ca en cours avec chatgpt quand on voyait js ca s'appelle des backticks
    // c'est une alternative aux cotes et je trouve ca plus simple
    zonesList.appendChild(newList);
}

buttonNewList.addEventListener("click", addNewList);
console.log(buttonNewList);