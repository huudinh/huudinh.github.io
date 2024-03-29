<style>
.vacancies_sci_1_0_0{padding:40px 0 20px}
.vacancies_sci_1_0_0__title{text-align:center;font-size:26px;color:#007ac1;font-weight:700;text-transform:uppercase}
.vacancies_sci_1_0_0 hr{border:1px solid #2386c7;width:5%;margin:0 auto}
.vacancies_sci_1_0_0__search{margin:20px auto 0;display:flex;gap:10px;width:88%;justify-content:center}
.vacancies_sci_1_0_0__input{width:70%;position:relative}
.vacancies_sci_1_0_0__input input{width:100%;background-color:#d9d9d9;border:none;outline:none;padding:8px;height:100%}
.vacancies_sci_1_0_0__input button{display:none;position:absolute;right:5px;top:50%;transform:translateY(-50%);cursor:pointer;font-weight:600;font-size:18px;background:none;border:none}
.vacancies_sci_1_0_0__button{width:20%;border:none;outline:none;padding:8px;display:flex;align-items:center;gap:10px;background-color:#2386c7;color:#fff}
.vacancies_sci_1_0_0__check{display:flex;width:80%;margin:40px auto 0}
.vacancies_sci_1_0_0__left{width:35%}
.vacancies_sci_1_0_0__right{width:65%}
.vacancies_sci_1_0_0__heading{font-weight:700;margin-top:20px}
.vacancies_sci_1_0_0__watch button{width:80%;color:#fff;background-color:#2386c7;border:none;outline:none;padding:10px 20px}
.vacancies_sci_1_0_0__group{margin-top:7px}
.vacancies_sci_1_0_0__group input[type=radio]{display:none}
.vacancies_sci_1_0_0__group label{padding-left:25px;position:relative;margin:0;line-height:20px}
.vacancies_sci_1_0_0__group label:before{width:20px;height:20px;position:absolute;top:50%;transform:translateY(-50%);left:0;content:"";background:#fff;border:1px solid #ccc}
.vacancies_sci_1_0_0__group input[type=radio]:checked ~ label:after{width:16px;height:16px;position:absolute;top:50%;transform:translateY(-50%);left:2px;content:"";background:url(<?php echo $path ?>images/check.svg) no-repeat}
.vacancies_sci_1_0_0__item{display:flex;align-items:center;justify-content:space-between;padding-bottom:20px;border-bottom:1px solid #ccc;margin-top:10px}
.vacancies_sci_1_0_0__name p{font-weight:500}
.vacancies_sci_1_0_0__name span{color:#838383;display:flex;align-items:center}
.vacancies_sci_1_0_0__name img{margin-right:3px}
.vacancies_sci_1_0_0__more{padding:5px 10px;background-color:#ee4b27;min-width:120px;text-align:center}
.vacancies_sci_1_0_0__more a{color:#fff}
.vacancies_sci_1_0_0__showmore{margin-top:30px;text-align:center}
.vacancies_sci_1_0_0__showmore a{color:#2386c7;padding:5px 10px;border:1px solid #2386c7;border-radius:20px;min-width:130px;display:inline-block;text-align:center;transition:all .2s linear}
.vacancies_sci_1_0_0__showmore:hover a{color:#fff;background-color:#2386c7}
.vacancies_sci_1_0_0__nodata{text-align:center}
@media (max-width: 820px) {
.vacancies_sci_1_0_0__search{width:100%}
.vacancies_sci_1_0_0__input{width:100%}
.vacancies_sci_1_0_0__check{width:100%}
}
@media (max-width: 767px) {
.vacancies_sci_1_0_0{padding:20px 0}
.vacancies_sci_1_0_0__title{font-size:17px}
.vacancies_sci_1_0_0 hr{width:20%}
.vacancies_sci_1_0_0__input{width:60%}
.vacancies_sci_1_0_0__button{width:40%}
.vacancies_sci_1_0_0__check{flex-wrap:wrap;margin-top:20px}
.vacancies_sci_1_0_0__left{width:100%}
.vacancies_sci_1_0_0__right{width:100%;margin-top:20px}
.vacancies_sci_1_0_0__watch button{width:100%}
}
@media (max-width: 320px) {
.vacancies_sci_1_0_0__button{font-size:14px}
.vacancies_sci_1_0_0__more{min-width:100px}
}
@media (max-width: 280px) {
.vacancies_sci_1_0_0__input{width:50%}
.vacancies_sci_1_0_0__button{width:50%}
}
@-webkit-keyframes fadeInLeft {
0%{opacity:0;transform:translateX(-20px)}
100%{opacity:1;transform:translateX(0)}
}
@keyframes fadeInLeft {
0%{opacity:0;transform:translateX(-20px)}
100%{opacity:1;transform:translateX(0)}
}
@-webkit-keyframes fadeInRight {
0%{opacity:0;transform:translateX(20px)}
100%{opacity:1;transform:translateX(0)}
}
@keyframes fadeInRight {
0%{opacity:0;transform:translateX(20px)}
100%{opacity:1;transform:translateX(0)}
}
@-webkit-keyframes fadeInUp {
0%{opacity:0;transform:translateY(20px)}
100%{opacity:1;transform:translateY(0)}
}
@keyframes fadeInUp {
0%{opacity:0;transform:translateY(20px)}
100%{opacity:1;transform:translateY(0)}
}
@-webkit-keyframes fadeInDown {
0%{opacity:0;transform:translateY(-20px)}
100%{opacity:1;transform:translateY(0)}
}
@keyframes fadeInDown {
0%{opacity:0;transform:translateY(-20px)}
100%{opacity:1;transform:translateY(0)}
}
.fadeInUp.loaded{-webkit-animation:fadeInUp 1.5s;animation:fadeInUp 1.5s}
.fadeInLeft.loaded{-webkit-animation:fadeInLeft 1.5s;animation:fadeInLeft 1.5s}
.fadeInRight.loaded{-webkit-animation:fadeInRight 1.5s;animation:fadeInRight 1.5s}
.fadeInDown.loaded{-webkit-animation:fadeInDown 1.5s;animation:fadeInDown 1.5s}
</style>