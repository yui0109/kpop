let qArray = ['q1','q2','q3','q4','q5','q6','q7'];
let yesArray = ['q2','q4','q6','a1','a3','a5','a7'];
let noArray = ['q3','q5','q7','a2','a4','a6','a8'];
let n=0;
function OnYesClick() {
    RewriteSrc(yesArray[n])
}
function OnNoClick() {
    RewriteSrc(noArray[n])
}
function RewriteSrc(nextId) {
    if (nextId.startsWith('q')){
        for (let i=0; i<qArray.length+1; i++) {
            if (qArray[i]==nextId) {
                document.getElementById(qArray[n]).className = "txt_hide";
                n=i;
                document.getElementById(qArray[n]).className = "txt_display";
                break;
            }
        }
    } else {
        document.getElementById(qArray[n]).className = "txt_hide";
        document.getElementById('btn_area').className = "txt_hide";
        document.getElementById('result_area').className = "txt_display";
        document.getElementById(nextId).className = "txt_display";
    }
}
function OnAgainClick() {
    document.getElementById(yesArray[n]).className = "txt_hide";
    document.getElementById(noArray[n]).className = "txt_hide";
    n=0;
    document.getElementById(qArray[n]).className = "txt_display";
    document.getElementById('btn_area').className = "txt_display";
    document.getElementById('result_area').className = "txt_hide";
}