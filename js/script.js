/* Container アニメーション */
const headerBtn = document.querySelector(".nav-content").querySelectorAll("li");
window.addEventListener('DOMContentLoaded', function(){
    showDetail();
    animationLoop();
    fitCanvasSize();
});

window.addEventListener('scroll', function(){
    showDetail();
});

window.addEventListener('resize', fitCanvasSize);

/* sp-nav アニメーション */
const spNavOpenBtn = document.querySelector(".sp-nav-content");
const spNav = document.querySelector(".sp-nav");
const spNavBtn = spNav.querySelectorAll("li");

spNavOpenBtn.addEventListener('click', function(){
    if(spNav.classList.contains("show")) {
        spNav.classList.remove("show");
        spNavOpenBtn.querySelector("img").src = "./img/nav-open-img.png";
    } else {
        spNav.classList.add("show");
        spNavOpenBtn.querySelector("img").src = "./img/nav-close-img.png";
    }
});

spNavBtn.forEach(function(btn){
    btn.addEventListener('click', function(){
        spNav.classList.remove("show");
        spNavOpenBtn.querySelector("img").src = "./img/nav-open-img.png";
    });
});

/* Top h2 アニメーション */
const topTitle = document.querySelector("#top").querySelector(".title-content");
topTitle.classList.add("show");

/* Top Canvas アニメーション */
const can1 = document.querySelector("#can1");
const con1 = can1.getContext("2d");
const can2 = document.querySelector("#can2");
const con2 = can2.getContext("2d");

const bubbleDrawArea = document.querySelector("#top");

//canvasのサイズ調整
window.onresize = fitCanvasSize;
function fitCanvasSize() {
    can1.width = bubbleDrawArea.clientWidth;
    can1.height = bubbleDrawArea.clientHeight;
    can2.width = bubbleDrawArea.clientWidth;
    can2.height = bubbleDrawArea.clientHeight;
}

let bubbles = [];
const maxBubblesLength = 20;

/* メール送信管理 */
const sendMailBtn = document.querySelector("#form-submit");

/* 関数 */
function showDetail() {
    let topHeight = document.querySelector("#top").getBoundingClientRect().top;
    let aboutHeight = document.querySelector("#about").getBoundingClientRect().top;
    let skillsHeight = document.querySelector("#skills").getBoundingClientRect().top;
    let worksHeight = document.querySelector("#works").getBoundingClientRect().top;
    let contactHeight = document.querySelector("#contact").getBoundingClientRect().top;

    if(aboutHeight < 200) {
        document.querySelector("#about").querySelector(".container").classList.add('show');
    }
    if(skillsHeight < 200) {
        document.querySelector("#skills").querySelector(".container").classList.add('show');
    }
    if(worksHeight < 200) {
        document.querySelector("#works").querySelector(".container").classList.add('show');
    }
    if(contactHeight < 200) {
        document.querySelector("#contact").querySelector(".container").classList.add('show');
    }

    //headerアニメーション
    let heightList = [topHeight,aboutHeight,skillsHeight,worksHeight,contactHeight];
    let minvalue = Math.abs(heightList[0] - 0);

    heightList.forEach(function(value){
        if (Math.abs(value - 0 ) < minvalue ) {
            minvalue = Math.abs(value - 0);
        }
    });

    if(minvalue == topHeight) {
        headerAnimation("top");
    }
    if(minvalue == aboutHeight) {
        headerAnimation("about");
    }
    if(minvalue == skillsHeight) {
        headerAnimation("skills");
    }
    if(minvalue == worksHeight) {
        headerAnimation("works");
    }
    if(minvalue == contactHeight) {
        headerAnimation("contact");
    }

    function headerAnimation(nav) {
        headerBtn.forEach(function(btn){
            if(btn.classList.contains(nav)) {
                btn.classList.add("open");
            } else {
                btn.classList.remove("open");
            }
        });
    }
}

function animationLoop() {
    if(bubbles.length <= maxBubblesLength) {
        createBubble();
    }

    con1.fillStyle = "#33C6D5";
    con1.fillRect(0,0,can1.width,can1.height);

    bubbles.forEach(function(e, i){
        e.update();
        e.draw();

        if(e.kill == true) {
            bubbles.splice(i, 1);
        }
    });

    let data = con1.getImageData(0,0,can1.width,can1.height);
    con2.putImageData(data, 0,0);

    requestAnimationFrame(animationLoop);
}

function createBubble() {
    let maxSize = 50
    let size = randNumber(10,maxSize);
    let speed = randNumber(2,8);
    let x = randNumber(maxSize,Math.floor(can1.width - maxSize));
    bubble = new Bubble(x,can1.height + size, size, speed);
    bubbles.push(bubble);
}

function randNumber(min,max){
    var num = Math.floor( Math.random() *(max - 1 - min) ) + min;
    return num;
}

function headerNavigation(str) {
    let targetElement = document.querySelector(str);
    let clientRect = targetElement.getBoundingClientRect();
    let isOpenSpNav = window.innerWidth < 600;

    if(isOpenSpNav){
        switch(str) {
            case "#about":
                window.scrollBy({
                    top: clientRect.top - 180,
                    behavior: 'smooth',
                });
                break;
            default:
                window.scrollBy({
                    top: clientRect.top,
                    behavior: 'smooth',
                });
                break;
        }
    } else {
        switch(str) {
            case "#about":
                window.scrollBy({
                    top: clientRect.top - 180,
                    behavior: 'smooth',
                });
                break;
            case "#contact":
                window.scrollBy({
                    top: clientRect.top + 30,
                    behavior: 'smooth',
                });
                break;
            default:
                window.scrollBy({
                    top: clientRect.top - 65,
                    behavior: 'smooth',
                });
                break;
        }
    }
}

function sendEmail() {
    let name = document.querySelector(".input-name");
    let email = document.querySelector(".input-email");
    let text = document.querySelector(".input-text");

    let flag = true;

    if(name.value == "") {
        name.style.borderBottom = "2px solid #b51D38";
        document.querySelector(".name-err").classList.add("open");
        flag = false;
    } else {
        name.style.borderBottom = "2px solid rgba(0,0,0,0)";
        document.querySelector(".name-err").classList.remove("open");
    }

    if(email.value == "") {
        email.style.borderBottom = "2px solid #b51D38";
        document.querySelector(".email-err").classList.add("open");
        flag = false;
    } else {
        email.style.borderBottom = "2px solid rgba(0,0,0,0)";
        document.querySelector(".email-err").classList.remove("open");
    }

    if(text.value == "") {
        text.style.borderBottom = "2px solid #b51D38";
        document.querySelector(".text-err").classList.add("open");
        flag = false;
    } else {
        text.style.borderBottom = "2px solid rgba(0,0,0,0)";
        document.querySelector(".text-err").classList.remove("open");
    }

    if(flag) {
        let result = confirm("お問い合わせメッセージを送信してもよろしいですか？")

        if(result) {
            alert("メッセージを受信しました。お問い合わせありがとうございます。")
            sendMailBtn.click();
        }
    }
}