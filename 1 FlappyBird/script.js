"use strict";

let cvs = document.querySelector("#Canvas");
let ctx = cvs.getContext("2d");

let bird = new Image();
let bg = new Image();
let fg = new Image();
let pipeUp = new Image();
let pipeBottom = new Image();

bird.src = "img/bird.png";
bg.src = "img/bg.png";
fg.src = "img/fg.png";
pipeUp.src = "img/pipeUp.png";
pipeBottom.src = "img/pipeBottom.png";  

let fly = new Audio();
fly.src = "audio/fly.mp3";
let score_audio = new Audio();
score_audio.src = "audio/score.mp3";
let death = new Audio();
death.src = "audio/death.mp3";

let gap = 90;

let xPos = 10;
let yPos = 150;
let grav = 1.5;


let score = 0;
let bestScore = localStorage.getItem('score');
if(bestScore === null){
    bestScore = 0;
} else {
    bestScore = Number(bestScore);
}
document.addEventListener("keydown", function(e){
    if(e.code === "Space"){ 
        yPos -= 30;
        fly.play();
    }
});

let pipe = [];
pipe[0] = {
    x: cvs.width,
    y: 0
};

function draw() {
    ctx.drawImage(bg, 0, 0);
    
    for(let i = 0; i < pipe.length; i++){
        ctx.drawImage(pipeUp, pipe[i].x, pipe[i].y);
        ctx.drawImage(pipeBottom, pipe[i].x, pipe[i].y + pipeUp.height + gap);
        
        pipe[i].x--;
        
        if(pipe[i].x === 125){
            pipe.push({
                x: cvs.width,
                y: Math.floor(Math.random() * pipeUp.height) - pipeUp.height
            });
        }

        if(xPos + bird.width >= pipe[i].x 
            && xPos <= pipe[i].x + pipeUp.width
            && (yPos <= pipe[i].y + pipeUp.height 
                || yPos + bird.height >= pipe[i].y + pipeUp.height + gap)){
            death.play();
                setTimeout(() => {
            location.reload();
            }, 500);
        
        }
    if(score > bestScore){
        localStorage.setItem('score', score);
    }
        if(pipe[i].x === 5){
            score++;
            score_audio.play();
        }
    }

    ctx.drawImage(fg, 0, cvs.height - fg.height);
    ctx.drawImage(bird, xPos, yPos);
    
    ctx.fillStyle = "#000";
    ctx.font = "24px Verdana";
    ctx.fillText("Счет : " + score, 10, cvs.height - 480);
    ctx.fillText("Рекорд : " + bestScore, 160, cvs.height - 480);
    yPos += grav;
    requestAnimationFrame(draw);
}

pipeBottom.onload = draw;