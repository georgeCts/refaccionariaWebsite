<template>
    <div class="products-viewer">
        <div id="init" class="row">
            <div class="col-lg-6">
                <div class="form-row">
                    <div class="form-group col">
                        <select class="form-control" v-model="filters.brand">
                            <option value="" selected>Marca</option>
                            <option v-for="(item, index) in brandsComp" :key="index" :value="item.brand">{{item.brand}}</option>
                        </select>
                    </div>

                    <div class="form-group col">
                        <select class="form-control" v-model="filters.model">
                            <option value="" selected>Modelo</option>
                            <option v-for="(item, index) in modelsComp" :key="index" :value="item.model">{{item.model}}</option>
                        </select>
                    </div>

                    <div class="form-group col">
                        <select class="form-control" v-model="filters.year">
                            <option value="" selected>Año</option>
                            <option v-for="(item, index) in yearsComp" :key="index" :value="item.year">{{item.year}}</option>
                        </select>
                    </div>

                    <div class="form-group col">
                        <select class="form-control" v-model="filters.engine">
                            <option value="" selected>Motor</option>
                            <option v-for="(item, index) in engineComp" :key="index" :value="item.engine">{{item.engine}}</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-right mb-2">
                <input type="text" v-model.lazy="filters.search" placeholder=" Descripción, Modelo o Nº de Parte" />
            </div>

            <div class="col-lg-12">
                <div class="viewer-info">
                    <span class="total">
                        <span>{{totalFormat}}</span> 
                        items
                    </span>
                    <span class="pages">
                        Página: {{`${pagination.current_page} de `}}
                        <span>{{pagination.last_page}}</span>
                    </span>
                </div>
            </div>
        </div>

        <div class="row">
            <template v-for="(item, index) in products">
                <div class="col-lg-3 col-md-4 col-sm-6 product-item" :key="index">
                    <product-item :server="server" :item="item" />
                </div>
            </template>
        </div>

        <div class="row">
            <div class="col-lg-12 text-right">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <li class="page-item" :class="{'disabled' : pagination.current_page == 1}">
                            <a class="page-link" href="#products" @click="goPrev">Anterior</a>
                        </li>
                        <li
                            v-for="page in items"
                            :key="page.label"
                            :class="`page-item ${page.active ? 'active' : ''}`"
                        >
                            <a v-if="page.disable" class="page-link" href="javascript:void(0)" @click="goto(page)">...</a>
                            <a v-else class="page-link" href="javascript:void(0)" @click="goto(page)">{{page.label}}</a>
                        </li>
                        <li class="page-item" :class="{'disabled' : pagination.next_page == null}">
                            <a class="page-link" href="#products" @click="goNext">Siguiente</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        props: ['token'],
        data() {
            return {
                products    : [],
                pagination  : {
                    prev_page   : null,
                    next_page   : null,
                    per_page    : 0,
                    to          : 0,
                    total       : 0,
                    current_page: 1,
                    last_page   : 1,
                    page        : null,
                },
                brands  : [],
                models  : [],
                years   : [],
                engine  : [],
                filters : {
                    search  : '',
                    brand   : '',
                    model   : '',
                    engine  : '',
                    year    : '',
                },
                server  : `http://${window.location.host}/`,
            }
        },
        watch: {
            'filters.search': function(newValue, oldValue) {
                if(newValue.trim() != oldValue.trim()) {
                    this.getData(`${this.server}api/products`);
                }
            },
            'filters.brand': function(newValue, oldValue) {
                if(newValue.trim() != oldValue.trim()) {
                    this.getData(`${this.server}api/products`);
                }
            },
            'filters.model': function(newValue, oldValue) {
                if(newValue.trim() != oldValue.trim()) {
                    this.getData(`${this.server}api/products`);
                }
            },
            'filters.year': function(newValue, oldValue) {
                if(newValue.trim() != oldValue.trim()) {
                    this.getData(`${this.server}api/products`);
                }
            },
            'filters.engine': function(newValue, oldValue) {
                if(newValue.trim() != oldValue.trim()) {
                    this.getData(`${this.server}api/products`);
                }
            },
        },
        computed: {
            totalFormat() {
                return String(this.pagination.total).replace(/(.)(?=(\d{3})+$)/g,'$1,')
            },
            items() {
                let valPrev = this.pagination.current_page > 1 ? (this.pagination.current_page - 1) : 1 // for easier navigation - gives one previous page
                let valNext = this.pagination.current_page < this.pagination.last_page ? (this.pagination.current_page + 1) : this.pagination.last_page // one next page
                let extraPrev = valPrev === 3 ? 2 : null
                let extraNext = valNext === (this.pagination.last_page - 2) ? (this.pagination.last_page - 1) : null
                let dotsBefore = valPrev > 3 ? 2 : null
                let dotsAfter = valNext < (this.pagination.last_page - 2) ? (this.pagination.last_page - 1) : null

                let output = []

                for (let i = 1; i <= this.pagination.last_page; i += 1) {
                    if ([1, this.pagination.last_page, this.pagination.current_page, valPrev, valNext, extraPrev, extraNext, dotsBefore, dotsAfter].includes(i)) {
                            output.push({
                            label: i,
                            active: this.pagination.current_page === i,
                            disable: [dotsBefore, dotsAfter].includes(i)
                        })
                    }
                }

                return output
            },
            brandsComp() {
                return this.brands.filter(item => item.brand != '');
            },
            modelsComp() {
                return this.models.filter(item => item.model != '');
            },
            yearsComp() {
                return this.years.filter(item => item.year != '');
            },
            engineComp() {
                return this.engine.filter(item => item.engine != '');
            },
        },
        methods: {
            goNext() {
                if(this.pagination.next_page != null)
                    this.getData(this.pagination.next_page);
            },
            goPrev() {
                if(this.pagination.prev_page != null)
                    this.getData(this.pagination.prev_page);
            },
            goto(page) {
                if(!page.disable) {
                    this.pagination.page = page.label;
                    this.getData(`${this.server}api/products?page=${page.label}`)
                }
            },
            getData(url) {
                let params = {
                    search  : this.filters.search.trim() != '' ? this.filters.search.trim() : null,
                    brand   : this.filters.brand.trim() != '' ? this.filters.brand : null,
                    model   : this.filters.model.trim() != '' ? this.filters.model : null,
                    year    : this.filters.year.trim() != '' ? this.filters.year : null,
                    engine  : this.filters.engine.trim() != '' ? this.filters.engine : null,
                    _token  : this.token
                };

                axios.get(url, {params})
                    .then(result => {
                        let response = result.data
                        this.products                   = response.data;
                        this.pagination.prev_page       = response.prev_page_url;
                        this.pagination.next_page       = response.next_page_url;
                        this.pagination.per_page        = response.per_page;
                        this.pagination.to              = response.to;
                        this.pagination.total           = response.total;
                        this.pagination.current_page    = response.current_page;
                        this.pagination.last_page       = response.last_page;
                        this.pagination.page            = null;
                    })
                    .catch(error => console.error(error));
            },
            getFilters() {
                axios.get(`${this.server}api/products/filters`)
                    .then(result => {
                        this.brands = result.data.brands;
                        this.models = result.data.models;
                        this.years  = result.data.years;
                        this.engine = result.data.engine;
                    })
                    .catch(error => console.error(error));
            }
        },
        async mounted() {
            await this.getFilters();
            await this.getData(`${this.server}api/products`);
        }
    }
</script>

<style scoped>
    .products-viewer input {
        height: 44px;
        width: 300px;
        border-color: #18FD00;
        background-color: #000;

        font-family: Arial;
        font-size: 14px;
        color: grey;
    }

    div.viewer-info {
        text-align: right;
        margin-bottom: 25px;
    }
    div.viewer-info span {
        font-family: Arial;
        font-size: 18px;
        color: #FFF;
    }
    div.viewer-info span.total > span,
    div.viewer-info span.pages > span {
        color: #18FD00 !important;
    }
    div.viewer-info span.total,
    div.viewer-info span.pages {
        margin-left: 15px;
    }

    div.product-item {
        margin-bottom: 30px;
    }

    .page-link {
        color: #000 !important;
    }
    .page-item.disabled .page-link {
        color: #6c757d !important;
    }

    .page-item.active .page-link {
        background-color: #18FD00;
        border-color: #18FD00;
    }
</style>
