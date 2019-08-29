function show() {
    // 把id=div1的div显示出来
    document.getElementById('div1').style.display='block';
    document.getElementById('div1').style.width='300px';
    document.getElementById("btn").value='隐藏';
}

function hide() {
    document.getElementById('div1').style.display='none';
    document.getElementById("btn").value='显示';
}