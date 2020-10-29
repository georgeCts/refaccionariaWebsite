<template>
    <div class="products-viewer">
        <div id="init" class="row">
            <div class="col-lg-12 text-right mb-2">
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
                    <div class="product-card">
                        <div class="card-body">
                            <img :src="`${server}storage${item.file}`" :alt="item.name" />
                            <div class="info">
                                <span class="product-name">{{ item.name }}</span>
                                <br />
                                <span class="product-sku">SKU: {{item.part_number}}</span>
                            </div>
                            <div class="actions">
                                <div class="details">
                                    Detalles
                                </div>
                            </div>
                        </div>
                        <div class="card-footer"></div>
                    </div>
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
                products: [],
                pagination: {
                    prev_page: null,
                    next_page: null,
                    per_page: 0,
                    to: 0,
                    total: 0,
                    current_page: 1,
                    last_page: 1,
                    page: null,
                },
                filters: {
                    search: '',
                },
                server: `http://${window.location.host}/`,
            }
        },
        watch: {
            'filters.search': function(newValue, oldValue) {
                if(newValue.trim() != oldValue.trim()) {
                    this.getData(`${this.server}api/products`);
                }
            }
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
                    search  : this.filters.search,
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
            }
        },
        mounted() {
            this.getData(`${this.server}api/products`);
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

    div.product-card {
        max-height: 550px;
        width: 250px;
        max-width: 300px;

        background-color: #FFF;
    }

    .product-card .card-body {
        padding: 15px;
        text-align: center;
    }

    .product-card .card-body img {
        width: 220px;
    }

    .card-body .info {
        text-align: left !important;
    }

    .info .product-name {
        font-family: Arial;
        font-weight: 600;
        font-size: 14px;
        color: #000;
    }

    .info .product-sku {
        font-family: Arial;
        font-size: 14px;
        color: #000;
    }

    .actions .details {
        width: 60px;
        border: 1px solid #000;
        display: inline-block;
        margin-top: 25px;
        cursor: pointer;

        font-family: Arial;
        font-size: 14px;
        color: #000;
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
