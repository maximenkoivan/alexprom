<?php

use classes\Models\Alpinism\Projects\Settings;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var $arResult
 * @global CMain $APPLICATION
 */
include '_promo.php';
$sectionsJson = json_encode($arResult['SECTIONS']);
?>
<div class="section-flip section-flip--light">
    <?php if (!empty($arResult['SECTIONS'])): ?>
        <div class="section projects">
            <div class="container" id="app" :class="{ 'is-loading': isloading }">
                <div class="section__head projects__head">
                    <form class="projects__filter">
                        <fieldset class="projects__filter-togglers">
                            <div class="chips-select form-control" @click="getItems()">
                                <label class="chips-select__label">
                                    <input type="radio" class="chips-select__input" name="projects__filter" checked>
                                    <span class="chips-select__box">
                                    <span class="chips-select__caption">Все проекты</span>
                                </span>
                                </label>
                            </div>
                            <div class="chips-select form-control" v-for="category in categories"
                                 @click="getItems(category.CODE)">
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
                    <div class="swiper-gallery__slide" v-for="item in computedObj">
                        <picture class="swiper-gallery__thumb">
                            <img class="swiper-gallery__img " :src="item.PICTURE" :data-src="item.PICTURE" alt="">
                        </picture>
                        <a :href="item.URL" class="swiper-gallery__link">{{item.NAME}}</a>
                        <span class="swiper-gallery__title">{{item.TEXT}}</span>
                        <span class="swiper-gallery__info swiper-gallery__arg">{{item.SQUARE}}</span>
                        <span class="swiper-gallery__info swiper-gallery__loc">{{item.ADDRESS}}</span>
                    </div>
                </div>
                <button class="projects__button-more btn-accent" type="button" @click="showMoreButton"
                        v-show="allCount > limit">
                    Показать больше
                </button>
            </div>
        </div>
    <?php endif; ?>
    <?php
    $settings = Settings::getInstance()->getPropertiesByCode('BLOCKS_LIST_PAGE');
    foreach ($settings as $code) {
        $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/_includes/' . $code . '.php');
    }
    ?>
</div>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            categories: <?= $sectionsJson ?>,
            items: '',
            query: {
                iid: ''
            },
            isloading: false,
            allCount: '',
            limit: '6',
        },
        methods: {
            getItems: function (e) {
                this.isloading = true;
                this.query.iid = e ?? '';
                axios({
                    method: 'POST',
                    url: "/request/main/project_sections_filter.php",
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    data: 'section_code=' + this.query.iid
                })
                    .then(response => {
                        this.items = response.data;
                        this.allCount = this.items.length;
                        this.limit = '6';
                        this.isloading = false;
                    })
                    .catch(function (e) {
                        this.error = e;
                    });
            },
            showMoreButton: function () {
                this.limit = parseFloat(this.limit) + parseFloat('6');
            },
        },
        computed: {
            computedObj() {
                return this.limit ? this.items.slice(0, this.limit) : this.items;
            }
        },
        mounted() {
            this.getItems();
        },
    })
</script>
