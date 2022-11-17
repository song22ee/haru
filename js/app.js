function cart_insert() {
	alert('장바구니에 추가되었습니다');
	document.contents_form.submit();
}

function add_img() {
	const add_img = prompt('추가할 이미지를 입력하세요.');
	return add_img;
}

//대분류, 소분류
function Category_Change(e) {
	var outer = ['선택해주세요.', '가디건/조끼', '야상/점퍼', '패딩', '자켓/코트'];
	var top = ['선택해주세요.', '긴팔티셔츠', '맨투맨', '후드', '반팔/민소매'];
	var traning = [''];
	var basic = [''];
	var one_piece = [''];
	var skirt = [''];
	var pants = ['선택해주세요.', '청바지', '롱팬츠', '면바지', '슬랙스', '래깅스', '숏팬츠'];
	var bag = ['선택해주세요.', '백팩/스쿨백', '크로스/도트백'];
	var shoes = ['선택해주세요.', '운동화/단화', '구두/워커', '샌들/슬리퍼/장화'];
	var accessory = ['선택해주세요.', '주얼리', '모자/벨트', '양말/스타킹'];

	var target = document.getElementById('category_small');

	if (e.value == 'outer') var d = outer;
	else if (e.value == 'top') var d = top;
	else if (e.value == 'traning') var d = traning;
	else if (e.value == 'basic') var d = basic;
	else if (e.value == 'one_piece') var d = one_piece;
	else if (e.value == 'skirt') var d = skirt;
	else if (e.value == 'pants') var d = pants;
	else if (e.value == 'bag') var d = bag;
	else if (e.value == 'shoes') var d = shoes;
	else if (e.value == 'accessory') var d = accessory;

	target.options.length = 0;

	for (x in d) {
		var opt = document.createElement('option');
		opt.value = d[x];
		opt.innerHTML = d[x];
		target.appendChild(opt);
	}
}

//이미지 업로드시 화면에 바로 띄우기
function setThumbnail(event) {
	for (var image of event.target.files) {
		var reader = new FileReader();

		reader.onload = function (event) {
			var img = document.createElement('img');
			img.setAttribute('src', event.target.result);
			document.querySelector('div.point_img_contents').appendChild(img);
		};

		console.log(image);
		reader.readAsDataURL(image);
	}
}
