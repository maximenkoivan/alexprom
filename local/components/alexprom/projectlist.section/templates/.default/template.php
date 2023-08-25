<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
$sectionsJson = json_encode($arResult['SECTIONS']);
?>

<div class="container" id="app" :class="{ 'is-loading': isloading }">
  <div class="section__head projects__head">
      <form class="projects__filter">
          <fieldset class="projects__filter-togglers">
            <div class="chips-select form-control" @click="getItems('')">
              <label class="chips-select__label">
              <input type="radio" class="chips-select__input" name="projects__filter" checked>
              <span class="chips-select__box">
              <span class="chips-select__caption">Все проекты</span>
              </span>
              </label>
            </div>
            <div class="chips-select form-control" v-for="category in categories" @click="getItems(category.CODE)">
              <label class="chips-select__label">
              <input type="radio" class="chips-select__input" name="projects__filter">
              <span class="chips-select__box">
              <span class="chips-select__caption">{{category.NAME}}</span>
              </span>
              </label>
            </div>
          </fieldset>
      </form>
  </div>
  
  <div class="projects__gallery">
      <div class="swiper-gallery__slide" v-for="item in computedObj" >
          <picture class="swiper-gallery__thumb">
              <img class="swiper-gallery__img " :src="item.PICTURE" :data-src="item.PICTURE" alt="">
          </picture>
          <a :href="item.URL" class="swiper-gallery__link">{{item.NAME}}</a>
          <span class="swiper-gallery__title">{{item.TEXT}}</span>
          <span class="swiper-gallery__info swiper-gallery__arg">{{item.S1}}</span>
          <span class="swiper-gallery__info swiper-gallery__loc">{{item.S2}}</span>
      </div>
  </div>
  <button class="projects__button-more btn-accent" type="button" @click="showMoreButton" v-show="allCount > limit">Показать больше</button>
</div>

<script>
var app = new Vue({
  el: '#app',
  data: {
    categories: <?php echo $sectionsJson?>,
    items: '',
    query: {
      iid: ''
    },
    isloading: false,
    allCount: '',
    limit: '6',
  },
  methods: {
    getItems: function(e) {
      this.isloading = true;
      this.query.iid = e;
      axios({method: 'post',url: "/include/api.php",data: JSON.stringify(this.query)})
        .then(response => {
          this.items = response.data;
          this.allCount = this.items.length;
          this.limit = '6';
          this.isloading = false;
        })
        .catch(function(e){
          this.error = e;
      });
    },
    showMoreButton: function (){
        this.limit = parseFloat(this.limit) + parseFloat('6');
    },
  },
  computed:{
    computedObj(){
      return this.limit ? this.items.slice(0,this.limit) : this.items;
    }
  },
  mounted() {
    this.getItems();
  },
})
</script>
