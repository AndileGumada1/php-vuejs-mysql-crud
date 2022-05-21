import { createApp } from 'vue'
// Import fontawesome 
import {library} from '@fortawesome/fontawesome-svg-core'
import {faTrash} from '@fortawesome/free-solid-svg-icons'
import {FontAwesomeIcon} from '@fortawesome/vue-fontawesome'
import App from './App.vue'
// Add solid icons library
library.add(faTrash);


createApp(App)
    .component('font-awesome-icon', FontAwesomeIcon)
.mount('#app')
