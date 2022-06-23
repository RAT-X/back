const input = document.querySelector('textarea');
input.focus();

const flowChartArea = document.getElementById('flowChartArea');
const oddWidth = '150px';
const oddheight = '25px';
const evenWidth = '90px';
let allArea = flowChartArea.getElementsByClassName('area');
let baseElement = allArea[1];

// ---------- 初期値の設定 -------------
//基準値:Area1
baseElement.firstElementChild.className = 'startEnd strongBE isHere';
baseElement.firstElementChild.firstElementChild.className = 'itemBox';
//下矢印の追加
const downArrow = document.getElementsByClassName('downArrow');
const dAStart = downArrow[0].getBoundingClientRect().width / 2;
const dAContext = downArrow[0].getContext('2d');
createDownArrow(dAContext,dAStart);

for(let i=0; i<baseElement.children.length; i++){
    i % 2 === 0 ? setBaseBoxHeight() : setBaseCanvasHeight();
    function setBaseBoxHeight(){
        baseElement.children[i].style.height = oddheight;
    }
    function setBaseCanvasHeight(){
        baseElement.children[i].style.height = '70px';
    }
}

//Area0,2の初期値と全体のアイテム幅
for(let i=0; i<3; i++){
    i % 2 === 0 ? evenArea() : oddArea();
    function evenArea(){
        const baseItems = baseElement.children;
        const areaItems = allArea[i].children;
        allArea[i].style.width = evenWidth;
        for(let n=0; n<baseItems.length; n++){
            areaItems[n].style.height = baseItems[n].getBoundingClientRect().height + 'px';
        }
    }
    function oddArea(){
        allArea[i].style.width = oddWidth;
    }
}

//増減テスト
const tester2 = document.getElementsByClassName('fa-question')[0];


input.addEventListener('input',inputExtender);
input.addEventListener('keydown',pressShiftArrow);
input.addEventListener('keydown',pressEnter);
input.addEventListener('keydown',styleAdjaster);

let arrowCount = 2;

function pressEnter(e){
    if(!e.isComposing && e.key === 'Enter'){
        let isHere = document.getElementsByClassName('isHere')[0];

        removeStrong();
        input.replaceWith(input.value);
        isHere.style.height = isHere.firstElementChild.getBoundingClientRect().height + 'px';
        addBox();
        isHere.nextElementSibling.nextElementSibling.className = 'process strongPr isHere';
        isHere.classList.remove('isHere');

        isHere = document.getElementsByClassName('isHere')[0];
        const p = document.createElement('p');
        p.className = 'itemBox';
        p.insertAdjacentElement('beforeend',input);
        isHere.appendChild(p);
        isHere = document.getElementsByClassName('isHere')[0];
        isHere.nextElementSibling.className = "arrow downArrow";
        input.value = '';
        input.focus();

        const nCanvas = document.getElementsByClassName('downArrow');
        for(let i=0; i<nCanvas.length; i++){
            const nextContext = nCanvas[i].getContext('2d');
            createDownArrow(nextContext,dAStart);
        }
        arrowCount = 2;
    }
}

//boxチェンジ
function pressShiftArrow(e){
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
            let isHere = document.getElementsByClassName('branch')[0];
            const nextElement = isHere.parentElement.nextElementSibling;
            const wNext = nextElement.nextElementSibling;
            if(!wNext){
                addArea();
                const target = nextElement.lastElementChild.previousElementSibling;
                target.classList.add('rightArrow');
                const rA = document.getElementsByClassName('rightArrow')[0];
                const thisHight = rA.getBoundingClientRect().height + 25;
                const rAcontext = rA.getContext('2d');
                createRightArrow(rAcontext, thisHight);
            }
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

//boxの追加
function addArea(){
    for(let i=0; i<2; i++){
        const nextArea = document.createElement('div');
        nextArea.className = 'area';
        nextArea.style.width = oddWidth;
        flowChartArea.insertAdjacentElement('beforeend',nextArea);

        baseElement = document.getElementsByClassName('area')[1];
        allArea = document.getElementsByClassName('area');

        i % 2 === 0 ? evenArea() : oddArea();

        function oddArea(){
            for(let n=0; n<baseElement.children.length; n++){
                createItems('canvas','arrow','');
            }
        }
        function evenArea(){
            for(let n=0; n<baseElement.children.length; n++){
                n % 2 === 0 ? evenBox() : oddBox();
                function evenBox(){
                    createItems('div','',oddheight);
                }
                function oddBox(){
                    createItems('canvas','arrow','70px');
                }
            }
        }
        function createItems(item,cn,sh){
            const nextItems = document.createElement(item);
            nextItems.className = cn;
            nextItems.style.height = sh;
            nextArea.insertAdjacentElement('beforeend',nextItems);
        }
    }
}

function addBox(){
    baseElement = document.getElementsByClassName('area')[1];
    allArea = document.getElementsByClassName('area');
    for(let i=0; i<allArea.length; i++){
        i % 2 === 0 ? evenArea() : oddArea();
        function evenArea(){
            for(let n=0; n<2; n++){
                createItems('canvas','arrow','');
            }
        }
        function oddArea(){
            for(let n=0; n<2; n++){
                n % 2 === 0 ? evenItems() : oddItems();
                function evenItems(){
                    createItems('div','',oddheight);
                }
                function oddItems(){
                    createItems('canvas','arrow','70px');
                }
            }
        }
        //アイテムの生成
        function createItems(item, cn, sh){
            const nextItems = document.createElement(item);
            nextItems.className = cn;
            nextItems.style.height = sh;
            allArea[i].insertAdjacentElement('beforeend',nextItems);
        }
    }
}

function removeStrong(){
    let isHere = document.getElementsByClassName('isHere')[0];
    const strongs = ['strongBE','strongBE2','strongBr','strongPr','strongIn','strongLs','strongLe','strongDp'];
    strongs.forEach((value)=>{isHere.classList.remove(value);});
}

//変更後の高さ調節
function styleAdjaster(){
    // area0の高さ調整
    const area0 = allArea[0];
    for(let i=0; i<area0.children.length; i++){
        const itemX = area0.children[i];
        baseElement = document.getElementsByClassName('area')[1];
        itemX.style.height = baseElement.children[i].getBoundingClientRect().height + 'px';
    }

    // area2以降の高さ調節
    for(let i=2; i<allArea.length; i++){
        i % 2 === 0 ? evenArea() : oddArea() ;
        function evenArea(){
            const areaX = allArea[i];
            for(let n=0; n<areaX.children.length; n++){
                areaX.children[n].style.height = allArea[i-1].children[n].getBoundingClientRect().height + 'px';
            }
        }
        function oddArea(){
            const areaX = allArea[i];
            for(let n=0; n<areaX.children.length; n++){
                //
            }
        }
    }
}

//----- 矢印の生成 -------
//下矢印
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
//右矢印
function createRightArrow(xContext,height){
    xContext.beginPath();
    xContext.strokeStyle = 'red';
    xContext.moveTo(0,height);
    // xContext.moveTo(0,68);
    xContext.lineTo(300,height);
    // xContext.lineTo(300,68);
    xContext.lineTo(300 - 20 , 90);
    xContext.moveTo(300,height);
    // xContext.moveTo(300,68);
    xContext.lineTo(300 - 20 , 45);
    xContext.stroke();
    xContext.closePath();
}

//----- 文字入力時の高さの伸展 --------
const temporaly = document.getElementById('temporaly');
function inputExtender(){
    temporaly.textContent = input.value;
    const spanWidth = temporaly.getBoundingClientRect().width;
    const spanHeight = temporaly.getBoundingClientRect().height;
    input.style.width = spanWidth + 'px';
    input.style.height = spanHeight + 5 + 'px';
    // this.parentElement.style.height = spanHeight + 20 + 'px';
    this.parentElement.parentElement.style.height = spanHeight + 20 + 'px';
}
