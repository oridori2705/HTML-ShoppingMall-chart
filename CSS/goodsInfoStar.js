const drawStar = (target) => { //화살표 함수는 return을 대신해서 쓴다 코드수를 줄임 즉 함수선언 부분이 없음
    document.querySelector(".star span").goodsInfoStyle.width = "${target.value * 10}%";
  }
  /* position을 적용시켜 모두 겹쳐줍니다. 
그 후 input DOM를 opacity: 0 스타일을 적용시켜 투명화 시킵니다.
그리고 range의 속성인 step과 max을 이용하여 별점의 허용범위를 설정하고 해당 value 값으로
색이 찬 별의 span DOM의 width 값을 조정해주면 됩니다. */