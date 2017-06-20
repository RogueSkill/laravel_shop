$("table").on( 'click', '.add', function(){
	

	var origin = $(this).prev().val();
	
	var origin = parseInt(origin);

	origin++;

	$(this).prev().attr('value',origin);
});

$('table').on('click', '.reduce', function(){

	var origin = $(this).next().val();

	var origin = parseInt(origin);

	origin--;


	if(origin<1){

		origin = 1;
	}
	$(this).next().attr('value', origin);

});

// $('table').on('blur', '.good-num', function(){
// 	var origin = $(this).val();
// 	// console.log(origin);
// 	$(this).attr('value',origin);
// });

//放大镜函数
	 function zoom () {
	 	//找到小图
	 	var small = document.getElementById('small');

	 	var big = document.getElementById('show');

	 	//已有小图相对位置,改变是大图滚动条位置
	 	small.onmousemove = function (ev) {

	 		var e = ev||event;

	 		var offX = e.offsetX;
	 		var offY = e.offsetY;

	 		//根据小图的相对位置，改变大图的滚动条距离
			big.scrollLeft = offX*3 - 100;
			
			big.scrollTop = offY*3 - 100;	

	 	}

	 }

	 zoom();
