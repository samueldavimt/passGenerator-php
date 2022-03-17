let controlsArea = document.querySelector('.controls-password');

document.querySelector('.apresentation button').addEventListener('click',function(){
    if(controlsArea.classList.contains("controls-hide")){
        console.log("hide")    
        controlsArea.classList.remove("controls-hide")
        controlsArea.classList.add("controls-show") 
     
    }

});

// Copy clipboard
document.querySelector('.password button').addEventListener('click',clickCopy)

function clickCopy(){
    let text = document.querySelector('.password span');
    navigator.clipboard.writeText(text.innerHTML);

}
