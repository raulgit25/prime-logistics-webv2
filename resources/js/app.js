import './bootstrap';
import 'flowbite';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import IncotermsComponent from './components/IncotermsComponent.vue';
import TiposIncotermComponent from './components/tiposIncoterm/TiposIncotermComponent.vue';
import TipoIncotermComponent from './components/tiposIncoterm/TipoIncotermComponent.vue';
import ModalInsertIncotermComponent from './components/ModalInsertIncotermComponent.vue';

const app = createApp({});
app.component('incoterms-component', IncotermsComponent);
app.component('tipos-incoterm-component', TiposIncotermComponent);
app.component('tipo-incoterm-component', TipoIncotermComponent);
app.component('modal-insert-incoterm-component', ModalInsertIncotermComponent);
app.mount('#app');