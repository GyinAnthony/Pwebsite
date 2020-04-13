document.addEventListener("DOMContentLoaded",()=>

{
    //Toggle Burger if its a smart phone 
    let burger = document.querySelector(".burger");
    let nav = document.querySelector('#' + burger.dataset.target);

    burger.addEventListener('click', ()=>
    {
        burger.classList.toggle("is-active");
        nav.classList.toggle("is-active");
    });


    //See if I can make an eventlistener on a card 

    let card1 = document.querySelector(".content1")
    
    card1.addEventListener('click', ()=>
    {
        window.open("https://gyinanthony.github.io/Goanthony.github.io/");
    })
    
}
);