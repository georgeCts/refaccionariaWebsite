<template>
    <div class="product-card">
        <div class="card-body">
            <img :src="`${server}storage${item.file}`" :alt="item.name" />
            <div class="info">
                <span class="product-name">{{ item.name }}</span>
                <br />
                <span class="product-sku">SKU: {{item.part_number}}</span>
            </div>
            <div class="actions">
                <div class="details" @click="viewDetails = !viewDetails">
                    {{ !viewDetails ? 'Detalles' : 'Ocultar' }}
                </div>

                <transition name="fade">
                    <template v-if="viewDetails">
                        <p class="product-details">{{item.description}}</p>
                    </template>
                </transition>
            </div>
        </div>
        <div class="card-footer"></div>
    </div>
</template>

<script>
export default {
    props: ['server', 'item'],
    data() {
        return {
            viewDetails: false
        }
    },
}
</script>

<style scoped>
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

    .product-details {
        font-family: Arial;
        font-size: 12px;
        text-align: justify;
        color: #000;
        padding-top: 10px;
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

    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to {
        opacity: 0;
    }
</style>