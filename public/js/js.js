const button = document.querySelector("button");
const header = document.querySelector("#header");
const wallpaper = document.querySelector(".image");
const container = document.querySelector("#container");

const click = () => {
    if(container.style.display == "none"){
        button.style.transition = "all 0.5s ease";
        button.style.background = "#00CC8F";
        button.style.color = "#fff";
        wallpaper.style.transition = "all 1s ease";
        wallpaper.style.width = 50 + "%";
        header.style.transition = "all 1s ease";
        header.style.width = 50 + "%";
        header.style.float = "left";
        container.style.transition = "all 2s ease";
        container.style.opacity = "1";
        container.style.display = "flex";
}else{
    button.style.background = "none";
    button.style.color = "#00CC8F";
    wallpaper.style.width = 100 + "%";
    header.style.width = 100 + "%";
    header.style.float = "none";
    container.style.opacity = "0";
    container.style.display = "none";
    }
}
            
button.addEventListener("click", click);