let slideArray = [
    {
      title : 'The Walking Dead',
      background : 'https://acollectivemind.files.wordpress.com/2013/12/season-4-complete-cast-poster-the-walking-dead-the-walking-dead-35777405-2528-670.png',
      link : '#',
    },
    {
      title : 'The Big Bang Theory',
      background : 'https://www.denofgeek.com/wp-content/uploads/2019/02/tbbt_12-15.jpg',
      link : '#',
    },
    {
      title : 'The Last Man on Earth',
      background : 'https://www.wired.com/wp-content/uploads/2015/02/LMOE-AliveInTuscon_scene44_0028_hires2.jpg',
      link : '#',
    },
  ];
class Slider{
    constructor(){
        this.$slideIndex = 0;
        this.$currentSlideIndex = 0;

        this.$container = document.createElement('div');
        this.$mySlider = document.createElement('div');
        this.$mySlider.classList.add('mySlider');

        for(let i = 0; i < slideArray.length; i++){
            
           
            this.$link = document.createElement('a');
            this.$link.src = slideArray[i].link;

            this.$img = document.createElement('img');
            this.$img.src = slideArray[i].background;
            this.$img.classList.add('singleSlide');
            this.$img.alt = slideArray[i].title;

            if(i == 0){
                this.$img.style = 'left:0';
            } else{
                this.style = '';
            }

            this.$link.appendChild(this.$img);
            this.$mySlider.appendChild(this.$link);
        }

        this.$sliderNav = document.createElement('div');
        this.$sliderNav.classList.add('sliderNav');

        this.$sliderPrev = document.createElement('div');
        this.$sliderPrev.classList.add('sliderPrev');
        this.$sliderPrev.addEventListener('click', this.prevSlide)

        this.$sliderNext = document.createElement('div');
        this.$sliderNext.classList.add('sliderNext');
        this.$sliderNext.addEventListener('click', this.nextSlide);

        this.$imgLeft = document.createElement('img');
        this.$imgLeft.src = 'left-arrow.png';

        this.$imgRight = document.createElement('img');
        this.$imgRight.src = 'right-arrow.png';
        console.log(slideArray);
    }

 

    prevSlide = () => {
        this.$nextSlideIndex;
        if(this.$currentSlideIndex === 0){
            this.$nextSlideIndex = slideArray.length -1;
        } else {
            this.$nextSlideIndex = this.$currentSlideIndex -1;
        }
        // Ẩn slide hiện tại, hiện slide "currentSlideIndex"
        this.$mySlider.childNodes[this.$nextSlideIndex].firstChild.style.left = '-100%';
        this.$mySlider.childNodes[this.$currentSlideIndex].firstChild.style.left = 0;
   
        this.$mySlider.childNodes[this.$nextSlideIndex].firstChild.setAttribute("class", "singleSlide slideInLeft");
        this.$mySlider.childNodes[this.$currentSlideIndex].firstChild.setAttribute("class", "singleSlide slideOutRight");

        // Cập nhật giá trị slide hiện tại
        this.$currentSlideIndex = this.$nextSlideIndex;
    }

    nextSlide = () => {
        this.$nextSlideIndex;
        if(this.$currentSlideIndex === slideArray.length - 1){
            this.$nextSlideIndex = 0;
        } else {
            this.$nextSlideIndex = this.$currentSlideIndex + 1;
        }
        // Ẩn slide hiện tại, hiện slide "currentSlideIndex"
        this.$mySlider.childNodes[this.$nextSlideIndex].firstChild.style.left = '100%';
        this.$mySlider.childNodes[this.$currentSlideIndex].firstChild.style.left = 0;
   
        this.$mySlider.childNodes[this.$nextSlideIndex].firstChild.setAttribute("class", "singleSlide slideInRight");
        this.$mySlider.childNodes[this.$currentSlideIndex].firstChild.setAttribute("class", "singleSlide slideOutLeft");

        // Cập nhật giá trị slide hiện tại
        this.$currentSlideIndex = this.$nextSlideIndex;
    }

    render(){
        this.$container.appendChild(this.$mySlider);
        this.$container.appendChild(this.$sliderNav);
        this.$sliderNav.appendChild(this.$sliderPrev);
        this.$sliderNav.appendChild(this.$sliderNext);
        this.$sliderPrev.appendChild(this.$imgLeft);
        this.$sliderNext.appendChild(this.$imgRight);
        return this.$container;
    }
}

const app = document.getElementById('app');
const slider = new Slider();
app.appendChild(slider.render());

