
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
const Swal = require('sweetalert2')
const baseUrl     = `https://${window.location.host}`;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('products-component', require('./components/ProductsViewer.vue'));
Vue.component('product-item', require('./components/ProductItem.vue'));

// const files = require.context('./', true, /\.vue$/i)

// files.keys().map(key => {
//     return Vue.component(_.last(key.split('/')).split('.')[0], files(key))
// })

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

if(document.getElementById('product-app')) {
    const app = new Vue({
        el: '#product-app'
    });
}

if(document.getElementById('panel-modal-product-app')) {
    new Vue({
        el: '#panel-modal-product-app',
        data: {
            file: null,
            loading: false,
        },
        methods: {
            onFilePicked(e) {
                const files = e.target.files;
                if(files[0] !== undefined) {
                    if (files[0].name.lastIndexOf(".") <= 0)
                        return;

                    const fr = new FileReader();
                    fr.readAsDataURL(files[0]);
                    fr.addEventListener("load", () => {
                        this.file = files[0];
                    });
                }
            },
            saveImport() {
                let formData = new FormData();
                formData.append("file", this.file);

                if(this.file != null) {
                    var baseUrl     = `http://${window.location.host}`;
                    this.loading    = true;

                    axios({
                        method: "POST",
                        url: `${baseUrl}/panel/productos/importar`,
                        data: formData,
                        config: { headers: { "Content-Type": "multipart/form-data", 'X-CSRF-TOKEN': window.CSRF_TOKEN } }
                    }).then(response => {
                        this.file       = null;
                        this.loading    = false;
                        $('#panel-modal-product-app').modal('hide');
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                        $("#import-product").val(null);
                        Swal.fire('Importación', response.data.message, response.data.type);
                    }).catch(error => {
                        this.loading = false;
                        $("#fileInputId").val(null);
                        Swal.fire('Importación', 'Ocurrió un error al importar los datos.', 'error');
                        console.error(error)
                    });
                } else {
                    Swal.fire('Upps!', 'Necesitas cargar el excel de productos.', 'warning');
                }
            }
        }
    });
}

if(document.getElementById('panel-product-app')) {
    new Vue({
        el: '#panel-product-app',
        data: {
            brands: [],
            models: [],
            years: [],
            engines: [],
            brand_id: 0,
            brand_model_id: 0,
            product_year: 0,
            product_engine: 0,

            url: `${baseUrl}/api/products`,
            token: window.CSRF_TOKEN
        },
        watch: {
            brand_id: function(value) {
                if(value != null || value != 0) {
                    this.getModels();
                } else {
                    this.brand_model_id = 0;
                    this.models = [];
                }
            }
        },
        methods: {
            getCollection() {
                axios.get(`${this.url}/loadCollections`)
                    .then(response => {
                        let data        = response.data;
                        this.brands     = data.lstBrands;
                        this.years      = data.lstYears;
                        this.engines    = data.lstEngines;
                        
                    })
                    .catch(error => console.error(error));
            },
            getModels() {
                let params = {
                    id : this.brand_id
                };

                axios.get(`${this.url}/loadModels`, {params: params})
                    .then(response => {
                        this.models = response.data;
                    })
                    .catch(err => {
                        console.error(err);
                        this.brand_model_id = 0;
                        this.models = [];
                    });
            },
            getProduct(id) {
                let params = {
                    id: id
                };

                axios.get(`${this.url}/loadProduct`, {params: params})
                    .then(response => {
                        let data                = response.data;
                        this.brand_id           = data.brand_id != null ? data.brand_id : 0;
                        this.brand_model_id     = data.brand_model_id != null ? data.brand_model_id : 0;
                        this.product_year       = data.product_year_id != null ? data.product_year_id : 0;
                        this.product_engine     = data.product_engine_id != null ? data.product_engine_id : 0;
                    })
                    .catch(err => console.error(err));
            }
        },
        async mounted() {
            var inputVal = $('#hddIdProduct') ? $('#hddIdProduct').val() : null;
            await this.getCollection();

            if(inputVal != null) {
                this.getProduct(inputVal);
            }

        }
    });
}

if(document.getElementById('contact-app')) {
    new Vue({
        el: '#contact-app',
        data: {
            name: '',
            email: '',
            subject: '',
            message: '',

            loading: false,
            error: false,
            errorMessage: '',
            success: false,
        },
        methods: {
            sendMessage() {
                this.error          = false;
                this.errorMessage   = '';
                this.success        = false;
                var baseUrl     = `https://${window.location.host}`;

                if(this.name.trim() != '' && this.email.trim() != '' && this.subject.trim() != '' && this.message.trim() != '') {
                    if(!this.loading) {
                        this.loading = true;
                        let params = {
                            nombre : this.name,
                            email : this.email,
                            asunto : this.subject,
                            mensaje : this.message,
                            _token : window.CSRF_TOKEN
                        };
    
                        axios.post(baseUrl + '/contacto-mail', params)
                            .then(response => {
                                this.name       = '';
                                this.email      = '';
                                this.subject    = '';
                                this.message    = '';
                                this.loading    = false;
                                this.success    = true;
                            })
                            .catch(error => {
                                this.loading = false;
                                this.error = true;
                                this.errorMessage = "Ocurrió un error al intentar mandar tu mensaje."
                                console.error(error);
                            })
                    }
                } else {
                    this.error          = true;
                    this.errorMessage   = 'Faltan campos por rellenar en el formulario.'
                }
            }
        }
    });
}

if(document.getElementById('subscribe-app')) {
    new Vue({
        el: '#subscribe-app',
        data: {
            email: '',
            success: false,
        },
        methods: {
            subscribe() {
                var baseUrl     = `http://${window.location.host}`;

                if(this.email.trim() != '' && !this.success) {
                    this.success    = true
                    this.email      = "";
                    Swal.fire("Suscripción", "Te has suscrito exitosamente!", "success");
                    /* let params = {
                        nombre : this.name,
                        email : this.email,
                        asunto : this.subject,
                        mensaje : this.message,
                        _token : window.CSRF_TOKEN
                    };

                    axios.post(baseUrl + '/contacto-mail', params)
                        .then(response => {
                            this.name       = '';
                            this.email      = '';
                            this.subject    = '';
                            this.message    = '';
                            this.loading    = false;
                            this.success    = true;
                        })
                        .catch(error => {
                            this.loading = false;
                            this.error = true;
                            this.errorMessage = "Ocurrió un error al intentar mandar tu mensaje."
                            console.error(error);
                        }) */
                } else {
                    this.errorMessage   = 'Faltan campos por rellenar en el formulario.'
                }
            }
        }
    });
}
