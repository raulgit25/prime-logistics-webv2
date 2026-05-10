import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import IncotermsComponent from './components/IncotermsComponent.vue';
import TiposIncotermComponent from './components/tiposIncoterm/TiposIncotermComponent.vue';
import TipoIncotermComponent from './components/tiposIncoterm/TipoIncotermComponent.vue';
import ModalInsertIncotermComponent from './components/tiposIncoterm/ModalInsertIncotermComponent.vue';
import ModalEditarIncotermComponent from './components/tiposIncoterm/ModalEditarIncotermComponent.vue';
import ModalEliminarIncotermComponent from './components/tiposIncoterm/ModalEliminarIncotermComponent.vue';

const app = createApp({});
app.component('incoterms-component', IncotermsComponent);
app.component('tipos-incoterm-component', TiposIncotermComponent);
app.component('tipo-incoterm-component', TipoIncotermComponent);
app.component('modal-insert-incoterm-component', ModalInsertIncotermComponent);
app.component('modal-editar-incoterm-component', ModalEditarIncotermComponent);
app.component('modal-eliminar-incoterm-component', ModalEliminarIncotermComponent);
app.mount('#app');