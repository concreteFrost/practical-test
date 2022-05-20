
import router from './routes.js'

window.Vue = require('vue').default;
import App from './components/App/App'


const app = new Vue({
    components: { App },
    router,
}).$mount('#app');
