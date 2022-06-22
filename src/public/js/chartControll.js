const allArea = document.getElementsByClassName('area');
const input = document.createElement('textarea');
const isHere = document.getElementsByClassName('isHere');

/* ca初期値の設定 */
const begin = document.getElementById('startEnd');
begin.classList.add('stBE');

/* スタイル整備 */
// Area0のボックス初期値の成形
const area0Arrows = allArea[0].getElementsByClassName('arrow');
const area1Arrows = allArea[1].getElementsByClassName('arrow');
const areaChildren = allArea[1].children;
const area1Elements = allArea[1].children;

for(let i = 0; i < area1Arrows.length; i++){
    area1Arrows[i].style.height = area0Arrows[i].getBoundingClientRect().height + 'px';
}

for(let i=0; i< area0Arrows.length; i++){
    if(i % 2 === 0){
        area0Arrows[i].style.height = areaChildren[i].getBoundingClientRect().height + 6 + 'px';
    }
}

//Area0のElement高さの伸長
input.addEventListener('input',area0CanvasExtender);
function area0CanvasExtender(){
    for(let i = 0; i < area0Arrows.length; i++){
        if(i%2===0){
            area0Arrows[i].style.height = areaChildren[i].getBoundingClientRect().height + 'px';
        }
    }
}

//Area1以降のElement<高さ>の設定
for(let i = 2; i < allArea.length; i++){
    if(i % 2 === 0){
        const thisArrows = allArea[i].getElementsByClassName('arrow');
        const previousDivs = allArea[i-1].children;
        for(let n = 0; n < thisArrows.length; n++){
            thisArrows[n].style.height = previousDivs[n].getBoundingClientRect().height + 'px';
        }
    }
}

//Area1以降のElement<幅の伸長>
input.addEventListener('input',afterCanvasExtender);
function afterCanvasExtender(){
    for(let i = 1; i < allArea.length; i++){
        if(i % 2 === 0){
            input.addEventListener('input',evenArea);
        }
        function evenArea(){
            const areaXAllChildren = allArea[i].children;
            const areaPXAllChildren = allArea[i-1].children;
            for(let n = 0; n < areaXAllChildren.length; n++){
                if(n % 2 === 0){
                    areaXAllChildren[n].style.height = areaPXAllChildren[n].getBoundingClientRect().height + 'px';
                }
            }
        }
    }
}

/* */

//最初のボックス設定
const firstItemBox = allArea[1].querySelectorAll('.empty')[0];
firstItemBox.className = 'itemBox startEnd strongBE isHere';

//最初の矢印の設定
const firstBoxUnderCanvas = allArea[1].querySelectorAll('.arrow')[0];
const firstAllWidth = firstBoxUnderCanvas.getBoundingClientRect().width;
const firstHalfWidth = firstAllWidth/1.35;
const firstContext = firstBoxUnderCanvas.getContext('2d');
createDownArrow(firstContext,firstHalfWidth);

//↓生成
function createDownArrow(xContext,width){
    xContext.beginPath();
    xContext.strokeStyle = '#000';
    xContext.moveTo(width,0);
    xContext.lineTo(width,150);
    xContext.lineTo(width + 10 , 130);
    xContext.moveTo(width,150);
    xContext.lineTo(width - 10 , 130);
    xContext.stroke();
    xContext.closePath();
}
//branchのarrow
function createRightArrow(xContext){
    xContext.beginPath();
    xContext.strokeStyle = 'red';
    xContext.moveTo(0,68);
    xContext.lineTo(300,68);
    xContext.lineTo(300 - 20 , 90);
    xContext.moveTo(300,68);
    xContext.lineTo(300 - 20 , 45);
    xContext.stroke();
    xContext.closePath();
}

// 最初のボックスにinputタグを挿入
const p = document.createElement('p');
firstItemBox.appendChild(p).appendChild(input);
input.focus();

// inputタグ幅の伸縮
const temporaly = document.getElementById('temporaly');
input.addEventListener('input',inputExtender);
function inputExtender(){
    temporaly.textContent = input.value;
    const spanWidth = temporaly.getBoundingClientRect().width;
    const spanHeight = temporaly.getBoundingClientRect().height;
    input.style.width = spanWidth + 'px';
    input.style.height = spanHeight + 'px';
}


let arrowCount = 2;
//keydownアクション
input.addEventListener('keydown',pressEnter);

function pressEnter(e){
    if(!e.isComposing && e.key === 'Enter'){
        arrowCount = 2;
        const isHere = document.getElementsByClassName('isHere')[0];
        const strongs = ['strongBE','strongBE2','strongBr','strongPr','strongIn','strongLs','strongLe','strongDp'];
        strongs.forEach((value)=>{isHere.classList.remove(value);});
        isHere.classList.remove('isHere');

        const div = document.createElement('div');
        div.className = 'itemBox process strongPr isHere';

        const canvas = document.createElement('canvas');
        canvas.className = 'arrow';
        canvas.style.height = '50px';


        const baseParent = this.parentElement.parentElement.parentElement;
        baseParent.appendChild(div);
        baseParent.appendChild(canvas);

        const thisElement = document.getElementsByClassName('isHere')[0];
        const thisCanvas = thisElement.nextElementSibling;
        const thisContext = thisCanvas.getContext('2d');
        createDownArrow(thisContext,firstHalfWidth);

        input.replaceWith(input.value);
        input.value = '';
        temporaly.textContent = input.value;

        const newP = document.createElement('p');
        thisElement.appendChild(newP);
        newP.appendChild(input);
        input.focus();

        //０行目のcanvasの生成
        if(baseParent.classList.contains('area1')){
            for(let i = 1; i < 3; i++){
                allArea[0].insertAdjacentHTML('beforeend','<canvas class="arrow">');
            }
        };

        const elementX = document.getElementsByClassName('area');
        for(let i=2; i<elementX.length; i++){
            i % 2 === 0 ? evenArea() : oddArea();
            function evenArea(){

            }
            function oddArea(){

            }
        }
        //2行目以降右側のcanvasの生成
        for(let i = 1; i < 3; i++){
            baseParent.nextElementSibling.insertAdjacentHTML('beforeend','<canvas class="arrow">');
        }//三項演算子だとバグが出る
    }
}

//boxチェンジ
input.addEventListener('keydown',addArrowCount);

function addArrowCount(e){
    const wantClasses = this.parentElement.parentElement;
    const rejectClass = wantClasses.classList.contains('startEnd');
    if(!rejectClass && e.shiftKey && e.key === 'ArrowUp'){
        arrowCount += 1;
        if(arrowCount === 8){
            arrowCount = 0;
        }
    }
    if(!rejectClass && e.shiftKey && e.key === 'ArrowDown'){
        arrowCount -= 1;
        if(arrowCount === -1){
            arrowCount = 7;
        }
    }
    if(!rejectClass){
        changeBox();
    }
}

function changeBox(e){
    switch(arrowCount){
        case 0:
            changeStyle('itemBox startEnd2 strongBE2 isHere');
            break;
        case 1:
            changeStyle('itemBox branch strongBr isHere');
            addAreas();
            break;
        case 2:
            changeStyle('itemBox process strongPr isHere');
            break;
        case 3:
            changeStyle('itemBox input strongIn isHere');
            break;
        case 4:
            changeStyle('itemBox loopStart strongLs isHere');
            break;
        case 5:
            changeStyle('itemBox loopEnd strongLe isHere');
            break;
        case 6:
            changeStyle('itemBox connectOut isHere');
            break;
        case 7:
            changeStyle('itemBox connectIn isHere');
            break;
    }
}

function changeStyle(classname){
    const currentL = document.getElementsByClassName('isHere')[0];
    currentL.className = classname;
}

function addAreas(){
    const currentL = document.getElementsByClassName('isHere')[0];
    const thisArea = currentL.parentElement;
    const thisAreaItemsCount = thisArea.childElementCount;
    const rootElement = thisArea.parentElement;
    if(!thisArea.nextElementSibling.nextElementSibling){
        const nextArea = document.createElement('div');
        const wNextArea = document.createElement('div');
        nextArea.className = 'area';
        wNextArea.className = 'area';
        const areaCount = document.getElementsByClassName('area').length;
        nextArea.classList.add('oddArea');
        nextArea.classList.add('area' + areaCount);
        wNextArea.classList.add('evenArea');
        wNextArea.classList.add('area' + (areaCount+1));
        rootElement.insertAdjacentElement('beforeend',nextArea);
        rootElement.insertAdjacentElement('beforeend',wNextArea);
        for(let i = 0; i<thisAreaItemsCount; i++){
            i%2 === 0 ? addEvenBox() : addOddBox() ;
            function addEvenBox(){
                const innerItem = document.createElement('div');
                innerItem.className = 'itemBox';
                nextArea.insertAdjacentElement('beforeend',innerItem);
            }
            function addOddBox(){
                const innerItem = document.createElement('canvas');
                innerItem.className = 'arrow';
                innerItem.style.height = '50px';
                nextArea.insertAdjacentElement('beforeend',innerItem);
            }

            const wNCanvases = document.createElement('canvas');
            wNCanvases.className = 'arrow';
            thisArea.children[i].getBoundingClientRect().height;
            wNCanvases.style.height = thisArea.children[i].getBoundingClientRect().height + 'px';
            wNextArea.insertAdjacentElement('beforeend',wNCanvases);

            if(thisArea.children[i].classList.contains('branch')){
                const rightArrowClass = thisArea.nextElementSibling.getElementsByClassName('arrow')[i];
                const rAContext = rightArrowClass.getContext('2d');
                createRightArrow(rAContext);
            };
        }
    }
}

// 右矢印の自動設定


//JSON処理
let values;
const btn = document.getElementsByClassName('fa-cloud-arrow-up')[0];

btn.addEventListener('click',insertValue);
function insertValue(){
    const userChartItem = {};
    const s = Symbol("usersChartData");
    const imHTMLs = document.getElementById('flowChartArea').innerHTML;
    const imJSONText = JSON.stringify(imHTMLs);
    userChartItem[s] = imJSONText;
    const jsonPerseText = imJSONText;
    const values = jsonPerseText;
    console.log(values);
}
