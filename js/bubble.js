//Canvasに表示する泡を管理するクラス
class Bubble{
    constructor(x,y,size,speed){
        this.x = x;
        this.y = y;
        this.size = size;
        this.speed = speed;
        this.kill = false;
    }

    //座標更新
    update() {
        if(this.y <= -1000) {
            this.kill = true;
        }

        this.y -= this.speed;
    }

    //描画処理
    draw() {
        con1.beginPath();
        con1.arc( Math.floor(this.x) , Math.floor(this.y), Math.floor(this.size / 2), 0, 2 * Math.PI);
        con1.fillStyle = "#FFFFFF";
        con1.fill();
    }
}