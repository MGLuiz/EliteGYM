const returnBtn = document.querySelector('.return-page-btn');
returnBtn.onclick = () => {history.go(-1)};

const homeBannerInfo = document.querySelector('.home-banner--infos');
homeBannerInfo.addEventListener('load', () => {homeBannerInfo.style.marginLeft = '50px'})